<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

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

                    <table>
                        <tr>
                            <td>
                                <p>
                                    <hr><strong> <?php echo "Ana Pérez Albarrán" ?> </strong><hr/>
                                    <br><?php echo "¿Qué saben las tripas de puños cerrados?" ?><br/>
                                    <br><?php echo "Saben que las riegan los amargos tragos." ?> <br/>
                                    <br><?php echo "Saben todo y más, de tenerse en pie "?> <br/>
                                    <br><?php echo "en la soledad. "?> <br/>
                                    <br><?php echo "Saben por qué está, siempre duro el pan."?> <br/>
                                <p/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>
                                    <hr><strong> <?php echo "Déborah Birro González" ?> </strong> <hr/>
                                    <br><?php echo "Ponte el moño apretao' sirena y que se " ?><br/>
                                    <br><?php echo "joda el viento, rompe las horquillas de" ?> <br/>
                                    <br><?php echo "espuma, y dejame que te remache sonrisas de"?> <br/>
                                    <br><?php echo "de hierro, de esas que disipan las brumas "?> <br/>
                                    <br><?php echo "Sé que entre los mares, nos lloveran cristales" ?> <br/>
                                <p/>
                            </td>
                        </tr>

                    </table>

                <div class="content">


                <div class="title m-b-md">
                    <strong> DAMI-PD</strong>
                    <br><img src = "imgs/icono_v1.png"><br/>
                </div>



                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                    <div>
                        <br><br/>
                        <br> ¿Quiénes somos?</br>
                        <br><img src = "imgs/wwa.png"><br/>
                    </div>
            </div>
        </div>
    </body>
</html>
