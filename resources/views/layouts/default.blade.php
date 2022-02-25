<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <link
        rel="stylesheet"
        href="{{ mix('css/app.css') }}"
    >
    @stack('styles')
    <title>@yield('title', 'Meu título')</title>
</head>
<body>
    <h1>Meu layout</h1>

    @section('sidebar')
        <div>
            <nav>
                sidebar
            </nav>
        </div>
    @show

    <div>
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
