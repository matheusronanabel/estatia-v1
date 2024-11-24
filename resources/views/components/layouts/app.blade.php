<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resource/app/js'])
    @livewireScripts
</head>
<body>
    <x-partials.navbar/>
    {{$slot}}
    <x-partials.footer/>
    @livewireStyles
</body>
</html>