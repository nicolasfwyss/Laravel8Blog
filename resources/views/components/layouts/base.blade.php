<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Kurs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
@if(!Route::is(['admin*', 'login', 'register', 'logout', 'password*']))
    <x-layouts.header/>
@else
    <x-layouts.header-backend/>
@endif
<x-flash-messages/>

{{$slot}}

<x-layouts.footer/>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts
</body>
</html>
