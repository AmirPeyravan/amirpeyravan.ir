<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه شخصی امیرحسین معتضدی</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('partials.components.preloader')

@include('partials.components.mouseCursor')

@include('partials.components.scrollToTop')

@include('partials.components.changeTheme')

@include('partials.components.navigation')

@include('partials.header')

@include('partials.components.about')

@yield('content')

@include('partials.components.contact')

@include('partials.footer')

<script src="/js/app.js"></script>
</body>
</html>
