<?php

namespace App\Http\Controllers\Auth;

use App\Medico;
use App\Administrador;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        if(isset($data['especialidad'])) {
            return Validator::make($data, [
                'name' => 'required|max:255',
                'apellido' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'dni' => 'required|min:9|max:9', // ver validacion
                'password' => 'required|min:6|confirmed',
                'especialidad' => 'required|max:255',
                'codigo' => 'required|numeric',
            ]);
        }elseif(isset($data['salario']))
        {
            return Validator::make($data, [
                'name' => 'required|max:255',
                'apellido' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'dni' => 'required|min:9|max:9', // ver validacion
                'password' => 'required|min:6|confirmed',
                'salario' => 'required|numeric',
            ]);
        }else
        { flash('Error');}
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   //evaluar data de entrada para determinar tipo de usuario
            $user = User::create([
                'name' => $data['name'],
                'apellido' => $data['apellido'],
                'email' => $data['email'],
                'dni' => $data['dni'],
                'password' => bcrypt($data['password']),
            ]);

        if (isset($data['especialidad'])) {
            $medico = new Medico();
            $medico->nombre=$data['name'];
            $medico->apellido = $data['apellido'];
            $medico->dni = $data['dni'];
            $medico->email = $data['email'];
            $medico->especialidad=$data['especialidad'];
            $medico->codigo=$data['codigo'];
            $medico->user_id = $user->id; // User user = new User(); user.setUserId(1);
            $medico->save();
        }
        else{
            $administrador = new Administrador();
            $administrador ->salario = $data['salario'];
            $administrador->user_id = $user->id;
            $administrador->save();


        }

        return $user;
    }

}
