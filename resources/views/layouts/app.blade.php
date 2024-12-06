<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon/Favicon.svg') }}">


    <title> @yield('title', '')</title>
    <meta name="theme-color" content="#ffffff">

    <meta name="google-site-verification" content="w--CcEC0V--Llid42pL16emRabzV3o7VQfUEoUTNoOg" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GX7RZDZD0L"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-GX7RZDZD0L');
    </script>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Dashboard | Comment Jet">
    <meta name="twitter:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="twitter:image" content="">

    <!-- Facebook -->

    <meta property="og:url" content="">
    <meta property="og:title" content="Tailwind CSS Admin Dashboard - Flowbite">
    <meta property="og:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:image:type" content="image/png">


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        li::marker {
            color: black !important;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script>
        const sidebar = document.getElementById('sidebar');

        if (sidebar) {
            const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                toggleSidebarMobileClose) => {
                sidebar.classList.toggle('hidden');
                sidebarBackdrop.classList.toggle('hidden');
                toggleSidebarMobileHamburger.classList.toggle('hidden');
                toggleSidebarMobileClose.classList.toggle('hidden');
            }

            const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
            const sidebarBackdrop = document.getElementById('sidebarBackdrop');
            const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
            const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
            const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');

            toggleSidebarMobileSearch.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });

            toggleSidebarMobileEl.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });

            sidebarBackdrop.addEventListener('click', () => {
                toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger,
                    toggleSidebarMobileClose);
            });
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>

    @stack('scripts')
</body>

</html>
