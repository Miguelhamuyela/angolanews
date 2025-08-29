<!DOCTYPE html>
<html lang="zxx" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="description" content="News5 a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
        <link rel="canonical" href="https://unistudio.co/html/News5">
        <meta name="theme-color" content="#2757fd">

        <!-- Open Graph Tags -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="News5">
        <meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta property="og:url" content="https://unistudio.co/html/news5/">
        <meta property="og:site_name" content="News5">
        <meta property="og:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">
        <meta property="og:image:width" content="1180">
        <meta property="og:image:height" content="600">
        <meta property="og:image:type" content="image/png">

        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="News5">
        <meta name="twitter:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta name="twitter:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">

        <link rel="canonical" href="https://unistudio.co/html/news5/">

        <!-- preload head styles -->
        <link rel="preload" href="{{ url('site/assets/css/unicons.min.css')}}" as="style">
        <link rel="preload" href="{{ url('site/assets/css/swiper-bundle.min.css')}}" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="{{ url('site/assets/js/libs/jquery.min.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/libs/scrollmagic.min.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/libs/swiper-bundle.min.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/libs/anime.min.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/helpers/data-attr-helper.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/helpers/swiper-helper.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/helpers/anime-helper.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/helpers/anime-helper-defined-timelines.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/uikit-components-bs.js')}}" as="script">
        <link rel="preload" href="{{ url('site/assets/js/app.js')}}" as="script">

        <!-- app head for bootstrap core -->
        <script src="{{ url('site/assets/js/app-head-bs.js')}}"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="{{ url('site/assets/js/uni-core/css/uni-core.min.css')}}">

        <!-- include styles -->
        <link rel="stylesheet" href="{{ url('site/assets/css/unicons.min.css')}}">
        <link rel="stylesheet" href="{{ url('site/assets/css/prettify.min.css')}}">
        <link rel="stylesheet" href="{{ url('site/assets/css/swiper-bundle.min.css')}}">

        <!-- include main style -->
        <link rel="stylesheet" href="{{ url('site/assets/css/theme/demo-eight.min.css')}}">

        <!-- include scripts -->
        <script src="{{ url('site/assets/js/uni-core/js/uni-core-bundle.min.js')}}"></script>
    </head>
    <body class="uni-body panel bg-slate-50 text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">

        {{-- todos o componentes --}}
         @include('site.layout.searchModal')
         @include('site.layout.menuPanel')
         @include('site.layout.cartPanel')
         @include('site.layout.favoritesModal')
         @include('site.layout.newsletterModal')
         @include('site.layout.accountModal')
         @include('site.layout.gdprModal')
         @include('site.layout.bottomActions')
         @include('site.layout.header')
        {{-- conteudo --}}

        {{-- menu home --}}
        @yield('content-home')

         @include('site.layout.footer')


        <!-- include jquery & bootstrap js -->
        <script defer src="{{ url('site/assets/js/libs/jquery.min.js')}}"></script>
        <script defer src="{{ url('site/assets/js/libs/bootstrap.min.js')}}"></script>

        <!-- include scripts -->
        <script defer src="{{ url('site/assets/js/libs/anime.min.js')}}"></script>
        <script defer src="{{ url('site/assets/js/libs/swiper-bundle.min.js')}}"></script>
        <script defer src="{{ url('site/assets/js/libs/scrollmagic.min.js')}}"></script>
        <script defer src="{{ url('site/assets/js/helpers/data-attr-helper.js')}}"></script>
        <script defer src="{{ url('site/assets/js/helpers/swiper-helper.js')}}"></script>
        <script defer src="{{ url('site/assets/js/helpers/anime-helper.js')}}"></script>
        <script defer src="{{ url('site/assets/js/helpers/anime-helper-defined-timelines.js')}}"></script>
        <script defer src="{{ url('site/assets/js/uikit-components-bs.js')}}"></script>

        <!-- include app script -->
        <script defer src="{{ url('site/assets/js/app.js')}}"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    </body>
</html>
