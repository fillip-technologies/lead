<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=JetBrains+Mono&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=JetBrains+Mono&display=swap"
        rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PLLBQ2B299"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-PLLBQ2B299');
    </script>

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        a,
        li,
        button,
        input,
        textarea {
            font-family: 'Poppins', sans-serif !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="m-0 p-0 overflow-x-hidden">

    <main>
        @yield('content')
    </main>
    
    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/917257930444"
   target="_blank"
   class="fixed bottom-6 right-6 z-50 bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300">
    <i class="fab fa-whatsapp text-3xl"></i>
</a>

</body>

</html>