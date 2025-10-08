<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Admins | @yield('title')</title>
    <style>
        :root{
            --text:black;
        }
        body{
            background-color: var(--bg);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 1000'%3E%3Cg%3E%3Ccircle fill='%235A0028' cx='50' cy='0' r='50'/%3E%3Cg fill='%2366002B'%3E%3Ccircle cx='0' cy='50' r='50'/%3E%3Ccircle cx='100' cy='50' r='50'/%3E%3C/g%3E%3Ccircle fill='%2373002F' cx='50' cy='100' r='50'/%3E%3Cg fill='%23800033'%3E%3Ccircle cx='0' cy='150' r='50'/%3E%3Ccircle cx='100' cy='150' r='50'/%3E%3C/g%3E%3Ccircle fill='%238D0037' cx='50' cy='200' r='50'/%3E%3Cg fill='%239A003B'%3E%3Ccircle cx='0' cy='250' r='50'/%3E%3Ccircle cx='100' cy='250' r='50'/%3E%3C/g%3E%3Ccircle fill='%23A7003F' cx='50' cy='300' r='50'/%3E%3Cg fill='%23B30043'%3E%3Ccircle cx='0' cy='350' r='50'/%3E%3Ccircle cx='100' cy='350' r='50'/%3E%3C/g%3E%3Ccircle fill='%23C00047' cx='50' cy='400' r='50'/%3E%3Cg fill='%23CC004B'%3E%3Ccircle cx='0' cy='450' r='50'/%3E%3Ccircle cx='100' cy='450' r='50'/%3E%3C/g%3E%3Ccircle fill='%23D9004F' cx='50' cy='500' r='50'/%3E%3Cg fill='%23E50053'%3E%3Ccircle cx='0' cy='550' r='50'/%3E%3Ccircle cx='100' cy='550' r='50'/%3E%3C/g%3E%3Ccircle fill='%23F20057' cx='50' cy='600' r='50'/%3E%3Cg fill='%23FF005B'%3E%3Ccircle cx='0' cy='650' r='50'/%3E%3Ccircle cx='100' cy='650' r='50'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    
</head>

<body>
    <header>

    </header>
    <main>
        @yield('main')

    </main>
    <footer>

    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    @yield('js')
</body>
</html>