<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = Medico::where('user_id', Auth::user()->id)->first();
        if(isset($medico)) {
            return view('home');
        }
        else {
            return view('adminhome');
        }


    }
}

