<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravue - Blog</title>
    </head>
    <body>
        <h4>Welcome file</h4>
        <div id="app">
            <mainapp></mainapp> 
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
