<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
{!! app('html')->style('css/app.css') !!}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
@include('inc/_navbar')
<div class="container">
    <div class="flash-message">
    @include('inc/_flash_message')
    </div>
    @yield('content')
</div>
{!! app('html')->script('js/app.js') !!}
</body>
</html>
