<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/app.js') }}" defer="defer"></script>

    </head>
    <body>
    <div id="app">
        <list-operation></list-operation>
    </div>
    </body>
</html>