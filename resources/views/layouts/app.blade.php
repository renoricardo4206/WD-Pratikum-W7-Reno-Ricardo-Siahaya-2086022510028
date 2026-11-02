<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css')
    @yield('head')
</head>

<body class="bg-white dark:bg-neutral-900 text-slate-900 dark:text-slate-50">
    @include('partials.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    </body>

</html>
