<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="generator" content="Sili-kit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SILI - KIT chuyên cung cấp và phân phối các sản phẩm về đồ gia dụng, đồ dùng trẻ em ... Với nhiều năm hoạt động trong lĩnh vực này, SILI - KIT luôn mang đến cho khách hàng những sản phẩm chất lượng nhất">
    <meta name="keywords" content="Silikit Việt Nam, silicone">
    <link rel="canonical" href="https://silikit.vn/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="SILI - KIT">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('img/logo.png') }}">
    <meta property="og:description" content="SILI - KIT chuyên cung cấp và phân phối các sản phẩm về đồ gia dụng, đồ dùng trẻ em ... Với nhiều năm hoạt động trong lĩnh vực này, SILI - KIT luôn mang đến cho khách hàng những sản phẩm chất lượng nhất">
    <meta property="og:url" content="https://silikit.vn/">
    <meta property="og:site_name" content="SILI - KIT">

    <title>@yield('title')</title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" id="wp-notification-bars-css" href="{{ asset('css/lib/wp-notification-bars-public.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="home-page-style-css" href="{{ asset('css/page/homepage.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="header-footer-style-css" href="{{ asset('css/page/header-footer.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="all-pages-style-css" href="{{ asset('css/page/all-pages.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="media-style-css" href="{{ asset('css/page/media.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="organic-farm-pro-font-css" href="//fonts.googleapis.com/css?family=Source+Sans+Pro%3Aital%2Cwght%400%2C200%3B0%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C900%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C600%3B1%2C700%3B1%2C900%7CPT+Sans%3A300%2C400%2C600%2C700%2C800%2C900%7CRoboto%3A400%2C700%7CRoboto+Condensed%3A400%2C700%7COpen+Sans%7COverpass%7CMontserrat%3A300%2C400%2C600%2C700%2C800%2C900%7CPlayball%3A300%2C400%2C600%2C700%2C800%2C900%7CAlegreya%3A300%2C400%2C600%2C700%2C800%2C900%7CJulius+Sans+One%7CArsenal%7CSlabo%7CLato%7COverpass+Mono%7CSource+Sans+Pro%7CRaleway%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CMerriweather%7CRubik%7CLora%7CUbuntu%7CCabin%7CArimo%7CPlayfair+Display%7CQuicksand%7CPadauk%7CMuli%7CInconsolata%7CBitter%7CPacifico%7CIndie+Flower%7CVT323%7CDosis%7CFrank+Ruhl+Libre%7CFjalla+One%7COxygen%7CArvo%7CNoto+Serif%7CLobster%7CCrimson+Text%7CYanone+Kaffeesatz%7CAnton%7CLibre+Baskerville%7CBree+Serif%7CGloria+Hallelujah%7CJosefin+Sans%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%26amp%3Bsubset%3Dlatin-ext%2Cvietnamese%7CAbril+Fatface%7CVarela+Round%7CVampiro+One%7CShadows+Into+Light%7CCuprum%7CRokkitt%7CVollkorn%7CFrancois+One%7COrbitron%7CPatua+One%7CAcme%7CSatisfy%7CJosefin+Slab%7CQuattrocento+Sans%7CArchitects+Daughter%7CRusso+One%7CMonda%7CRighteous%7CLobster+Two%7CHammersmith+One%7CCourgette%7CPermanent+Marker%7CCherry+Swash%7CCormorant+Garamond%7CPoiret+One%7CBenchNine%7CEconomica%7CHandlee%7CCardo%7CAlfa+Slab+One%7CAveria+Serif+Libre%7CCookie%7CChewy%7CGreat+Vibes%7CComing+Soon%7CPhilosopher%7CDays+One%7CKanit%7CShrikhand%7CTangerine%7CIM+Fell+English+SC%7CBoogaloo%7CBangers%7CFredoka+One%7CBad+Script%7CVolkhov%7CShadows+Into+Light+Two%7CMarck+Script%7CSacramento%7CPoppins%3A100%2C200%2C300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%26amp%3Bsubset%3Ddevanagari%2Clatin-ext%7CPT+Serif&amp;ver=5.9.5" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-style-css" href="{{ asset('css/lib/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="organic-farm-pro-basic-style-inline-css" href="{{ asset('css/lib/basic-style-inline.css') }}" type="text/css">
    <link rel="stylesheet" id="font-awesome-css" href="{{ asset('css/lib/fontawesome-all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-style-css" href="{{ asset('css/lib/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="google-font-css" href="{{ asset('css/lib/google-font.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-custom-css" href="{{ asset('css/page/wp-custom.css') }}" type="text/css" media="all">
    <link rel="canonical" href="{{ route('homepage') }}">
    <link rel="shortlink" href="{{ route('homepage') }}">

    @yield('style')
</head>

<body class="home page-template page-template-page-template page-template-home-page page-template-page-templatehome-page-php page page-id-9 wp-custom-logo theme-organic-farm-pro woocommerce-js has-mtsnb" style="padding-top: 41px;">
    <div id="app">
        <main id="wa-body">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{ asset('js/lib/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-migrate.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.blockUI.min.js') }}" id="jquery-blockui-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/owl.carousel.js') }}" id="owl-carousel-js"></script>
    <script src="https://kit.fontawesome.com/b676d2be1a.js" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>