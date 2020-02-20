<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INK-IT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href={{asset("/css/style.css")}}>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Tasks</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="jumbotron">
                    <h1 class="display-3">LIST</h1>
                    <p class="lead">What are you planning to do?</p>
                    <hr class="my-2">
                    <p>Ink it!</p>
                    <p class="lead">
                        @if (Route::has('login'))
                        @auth
                        <a class="btn btn-primary btn-lg" href="home" role="button">Go to Tasks</a>
                        @else
                        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                        @endauth

                        @endif
                    </p>
                </div>

                <div class="links">
                   
                   
                </div>
            </div>
        </div>
    </body>
</html>
