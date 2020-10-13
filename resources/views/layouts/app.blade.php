<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titolo')</title>
</head>

<body>
    <div class="wrapper">
        <div class="container container-lg container-md container-sm container-xl">
            <header>
                @include('partials.header')
            </header>
            <main>
                @yield('content')
            </main>
        </div>
        <footer>
            @include('partials.footer')
        </footer>
    </div>
</body>

</html>
