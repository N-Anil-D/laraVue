<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laraVue</title>
    <link rel="icon" href="{{ url('img/vkIcon.png') }}" />
    <link rel="shortcut icon" href="{{ url('img/vkIcon.png') }}" type="image/x-icon" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div id="app"></div>
</body>

</html>