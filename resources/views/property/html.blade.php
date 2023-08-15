<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page }}</title>
    {{--  --}}
    <style>
        body{
            padding: 0;
            margin: 0;
        }
    </style>
    @include('property.css')
</head>
<body>
    
    @yield('conten')
    


    @include("property.js")
</body>
</html>