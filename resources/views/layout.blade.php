<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

    </head>
    <body>

        
        <ul>
            <li><a href="/"> Home </a></li>
            <li><a href="/about"> About Us </a></li>
            <li><a href="/contact"> Contact </a></li>
        </ul>
        @yield('content')
    </body>
</html>
