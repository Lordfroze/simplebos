<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SimpleBOS</title>
    <link rel="stylesheet" href="{{asset('simplebos/style.css') }}" />

    <!-- Linking Google Fonts for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<!-- header -->
@include('layouts.app.header')

<!-- content -->
@yield('content')

<!-- footer -->
@include('layouts.app.footer')