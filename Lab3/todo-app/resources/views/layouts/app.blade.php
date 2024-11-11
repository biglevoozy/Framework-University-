<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logo.svg') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>@yield('title') - To-Do App</title>
</head>

<body class="w-full bg-gradient-to-b from-slate-50 to-slate-400">
    <div class="w-screen h-screen grid grid-rows-layout font-main">

        <!-- header -->

        <!-- //! Сделать так, чтобы благодаря props'ам в меню было видно активная вкладка -->

        <x-header />

        <!-- Main -->

        <main>
            @yield('content')
        </main>

        <!-- footer -->

        <x-footer />
    </div>
</body>

</html>