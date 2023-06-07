<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beautifs</title>
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap"> --}}
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>
    <body>
        @include('layout.navbar')
        
        @yield('main')
        
        @include('layout.footer')
    </body>
</html>

{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
<script type="module">
    $(document).ready(function() {
        $("#menu-toggle").click(function() {
            $("#mobile-menu").toggleClass("hidden");
        });
    });
</script>