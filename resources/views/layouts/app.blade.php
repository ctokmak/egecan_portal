<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield("css")
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        @include('layouts.sidebar')
        <main>
            @yield("content")
        </main>
        <footer class="main-footer d-print-none">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
        </footer>



        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    @yield("scripts")
</body>

</html>