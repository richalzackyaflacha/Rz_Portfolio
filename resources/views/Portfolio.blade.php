<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Web Identity --}}
        <title>Rz Portfolio</title>
        <link rel="icon" href="{{ asset('img/icon/logo.png') }}">

        {{-- CSS Link --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/project.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/skill.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/contact.css') }}">

        {{-- Bootstrap 5 Link --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        {{-- Font Awesome 6 Link --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

        {{-- Goggle Font Link --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;600;800;900&display=swap" rel="stylesheet">

        {{-- AOS Link --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{-- Email JS Link --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

        {{-- Sweetalert Link --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" id="body-port">
        {{-- Portfolio --}}
        <div class="myPortfolio">

            @include('Components/navbar')
            @include('Components/home')
            @include('Components/about')
            @include('Components/project')
            @include('Components/skill')
            @include('Components/contact')
            @include('Components/buttonTop')
            @include('Components/navbarB')

        </div>

        {{-- JS Link --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>

        {{-- AOS JS Link --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>