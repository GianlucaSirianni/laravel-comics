<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    {{-- HEADER --}}

        @include('partial.header')


    {{-- JUMBOTRON --}}

        @include('partial.jumbotron')



        @yield('main-content')



        @include('partial.footer')



        @include('partial.social')




    <style>

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

    </style>

</body>
</html>