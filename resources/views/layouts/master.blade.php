<?php $name = config('app.name') ?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="row">
                    <ul class="nav">
                        <li>Home</li>
                        <li>About</li>
                        <li>Contact</li>
                    </ul> 
                    <h1>{{ $name }}</h1>   
                    <ul class="nav">
                        <li>Home</li>
                        <li>About</li>
                        <li>Contact</li>
                    </ul>        
                </div>
            </header>

            <div class="padding"></div>

            <div class="content">
                @yield('content')
            </div>
        </div>
       
    </body>
</html>
