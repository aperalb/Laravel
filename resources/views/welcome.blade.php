<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DAMI-PD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #0e1010;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 50px;
            top: 18px;
        }
        .top-center{
            position: absolute;
            top: 0;
            left: 60%;
        }
        .bottom-center{
            position: absolute;
            bottom: 10px;
            left: 55%;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
            position: inherit;
        }
        .small-title{
            font-size: 35px;
            top: 0;
        };
        .links > a {
            color: #0e1010;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif


    <div class="content" >


        <div class=title>
            <strong> DAMI-PD</strong>
            <br><img src = "imgs/icono_v1.png"><br>
        </div>



        <table class="top-center">


            <tr>
                <td class="small-title">
                    <br><b> ¿Quiénes somos?</b><br>
                </td>

            </tr>
        </table>

        <table class="top-right">
            <tr>

                <td >
                    <br><br><br><br><br>
                    <p style="text-align: justify">
                    <hr><strong> <?php echo "Ana Pérez Albarrán" ?> </strong><hr>
                    <br><?php echo "Estudiante de tercer curso de Ingeniería  " ?><br>
                    <br><?php echo "de la salud en la Universidad de Sevilla." ?> <br/>
                    <br><?php echo "Creativa, emprendedora y amante del Rock español."?> <br>
                    <br><?php echo "E-mail de contacto: "?><a href="mailto:aperalb@gmail.com"><?php echo "aperalb@gmail.com"?></a> <br>
                    </p>
                </td>



                <td>
                    <br><br><br><br><br>
                    <p style="text-align: justify">
                    <hr><strong> <?php echo "Déborah Birro González" ?> </strong> <hr>
                    <br><?php echo "Estudiante de tercer curso de Ingeniería  " ?><br>
                    <br><?php echo "de la salud en la Universidad de Sevilla." ?> <br/>
                    <br><?php echo "Enérgica, alegre y una geek de la cultura japonesa."?> <br>
                    <br><?php echo "E-mail de contacto: "?><a href="mailto:deborah_birro@hotmail.com"><?php echo "deborah_birro@hotmail.com"?></a> <br>
                    </p>
                </td>
            </tr>

            <div class="bottom-center">
                <img src="imgs/another.png">
                <div>


        </table>


        <div class="links">
            {{--<a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>--}}
            <a href="https://www.google.es/?gws_rd=ssl">Objetivos</a>
        </div>


    </div>
</div>
</body>
</html>