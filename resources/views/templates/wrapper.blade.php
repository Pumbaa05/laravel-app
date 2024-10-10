<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'Jake') }}</title>

        @section('meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex">
            <meta name="theme-color" content="#0e4688">

            <link rel="icon" type="image/png" href="/favicons/favicon-48x48.png" sizes="48x48" />
            <link rel="icon" type="image/svg+xml" href="/favicons/favicon.svg" />
            <link rel="shortcut icon" href="/favicons/favicon.ico" />
            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png" />
            <meta name="apple-mobile-web-app-title" content="Laravel" />
            <link rel="manifest" href="/favicons/site.webmanifest" />
        @show

        @yield('assets')

        @include('layouts.scripts')

        @viteReactRefresh
        @vite(['resources/scripts/index.jsx', 'resources/css/app.css'])
    </head>
    <body class="{{ $css['body'] ?? 'bg-slate-800' }}">
        @section('content')
            @yield('above-container')
            @yield('container')
            @yield('below-container')
        @show
    </body>
</html>