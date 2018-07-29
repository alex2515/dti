<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
                color: #636b6f;
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h3>Ooops... Error 404</h3>
                </div>
                <p>Lo sentimos, pero la página que buscas no esta disponible</p>

                <div class="links">
                    <a href="{{route('dti')}}">Regresar a la Pagina principal</a>
                </div>
        <ul>
          @if (Route::has('login'))
              @auth
                  <li><a class="btn btn-sm" href="{{ url('/home') }}">IR AL HOME</a></li>
              @else <ion-icon name="person"></ion-icon>
                <li><a class="btn btn-sm" href="{{ route('register') }}"> IR REGISTER</a></li>
                <li><a class="btn btn-sm" href="{{ route('login') }}"> IR A LOGIN</a></li>
                
              @endauth
          @endif  
        </ul>
            </div>
        </div>
    </body>
</html>