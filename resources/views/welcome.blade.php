<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dami-PD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url("imgs/fondo.jpeg");
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
            margin-left: 35%;
        }
        .small-title{
            font-size: 45px;
            margin-top: 0;
            margin-left: 21%;

        }
        .links > a {
            color: #636b6f;
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

<div class="title">
    <table>
        <tr>
            <br>
            <strong> DAMI-PD</strong>
            <img src = "imgs/icono_v1.png">
        </tr>
    </table>
</div>

<div class="position-ref">
    <div class="content links">
        <br><br>
        <hr width="700">
        <a href={{url('/home')}}><big><strong>Iniciar Sesión</strong></big></a>
        <a href={{url('/objectives')}}><big><strong>Objetivos de Dami-PD</strong></big></a>
        <a href={{url('/about')}}><big><strong>Sobre nosotras</strong></big></a>
        <hr width="700">
    </div>
</div>

<div class="small-title">
    <br>
    <i><b><font color="#80AFE5" >Unified Parkinson's Disease Rating Scale</font></b></i>
</div>

</body>
</html>