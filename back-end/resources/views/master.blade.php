<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Codvid-19</title>

        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        <script src="{{mix('/js/app.js')}}" defer></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @livewireScripts
    </body>
</html>
