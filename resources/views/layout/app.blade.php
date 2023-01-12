<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
</head>
<body>

    {{-- HEADER --}}
    <header>
        @include('partial.header')
    </header>

    {{-- JUMBOTRON --}}
    <section>
        @include('partial.jumbotron')
    </section>

    <main>
        @yield('main-content')
        @include('partial.main')
    </main>



    <style>

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

    </style>

</body>
</html>