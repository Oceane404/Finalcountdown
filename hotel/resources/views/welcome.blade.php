<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spirit Hostel</title>
       <!-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}">-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #05284b;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 60px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
                font-size: 50px;
            }
            
            .myButton {
                box-shadow:inset 0px 1px 0px 0px #796504;
                background:linear-gradient(to bottom, #796504 5%, #796504 100%);
                background-color:#796504;
                border-radius:17px;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:28px;
                padding:120px 128px;
                text-decoration:none;
                text-shadow:0px 1px 0px #796504;
            }
           
            .myButton:hover {
                background:linear-gradient(to bottom, #796504 5%, #796504 100%);
                background-color:#796504;
            }
            .myButton:active {
                position:relative;
                top:2px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="content">
                
                <div class="title m-b-md">
                    Bienvenue
                </div>
                    <img src="{{ asset('/css/CrownLogo.png') }}" alt="logo">
                <br>
                <br>
                <div class="links">
                
                    <a href="{{ route('customer') }}" class="myButton">Visiteur</a>
                    <a href="{{ route('login') }}" class="myButton">Staff</a>
                    
                
                    
                </div>
            </div>
        </div>
    </body>
</html>
