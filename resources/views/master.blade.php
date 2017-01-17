<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Standard blog')</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
</head>
<body class="{{ Request::segment(1) ?: 'home' }}">

    <header class="container">

    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="container">

    </footer>
{{--<script src="{{ asset('js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('js/app.js) }}"></script>--}}

</body>
</html>