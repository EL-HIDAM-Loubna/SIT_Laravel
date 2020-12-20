<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>@yield('title')</title>
         <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    </head>
    <body>

       <div class="container">
           @yield('content')
       </div>
        
    </body>
</html>
