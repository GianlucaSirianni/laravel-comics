<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

    {{-- HEADER --}}

        @include('partial.header')


    {{-- JUMBOTRON --}}

        @include('partial.jumbotron')


        @yield('main-content')


        @include('partial.blueBar')


        @include('partial.footer')


        @include('partial.social')




    <style>



    </style>

</body>
</html>