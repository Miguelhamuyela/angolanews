<!DOCTYPE html>
<html lang="pt-BR" class="nxl-theme-light nxl-theme-default nxl-theme-rtl">


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/leads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->

    {{-- Alerts Link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/dataTables.bs5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify-data.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css') }}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css') }}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
   <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .img-fluid {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    <!--! BEGIN: Sweet Alert JS !-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="{{ url('assets/js/sweetalert-init.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--! END: Sweet Alert JS !-->

    {{-- editor de texto --}}
    
	<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/46.0.2/ckeditor5.css" crossorigin>
	<link rel="stylesheet"
		href="https://cdn.ckeditor.com/ckeditor5-premium-features/46.0.2/ckeditor5-premium-features.css" crossorigin>

</head>

<body>
    @include('_admin.layout.header')
    @include('_admin.layout.menu')

    <main class="nxl-container">
        {{-- #------ Alerts ------# --}}
        @include('_admin.layout.alerts')

        {{-- #------ Menu Authors ------# --}}
        {{-- Content Authors --}}
        @yield('content-authors')
        {{-- Content Create --}}
        @yield('content-authorCreate')
        {{-- Content Edit --}}
        @yield('content-authorEdit')
        {{-- Content Show --}}
        @yield('content-authorView')

        {{-- #------ Menu Category ------# --}}
        {{-- Content  Category --}}
        @yield('content-categories')
        {{-- Content Create Category --}}
        @yield('content-categoryCreate')
        {{-- Content Edit Category --}}
        @yield('content-categoryEdit')
        {{-- Content Show Category --}}
        @yield('content-categoryView')

        {{-- #------ Menu comments ------# --}}
        {{-- Content comment --}}
        @yield('content-comments')
        {{-- Content Create comment --}}
        @yield('content-commentCreate')
        {{-- Content Edit comment --}}
        @yield('content-commentEdit')
        {{-- Content Show comment --}}
        @yield('content-commentView')

        {{-- #------ Menu dashboard ------# --}}
        {{-- Content Analystics --}}
        @yield('content-Analytics')
        {{-- Content crm --}}
        @yield('content-crm')

        {{-- #------ Menu events ------# --}}
        {{-- Content event --}}
        @yield('content-events')
        {{-- Content Create event --}}
        @yield('content-eventCreate')
        {{-- Content Edit event --}}
        @yield('content-eventEdit')
        {{-- Content Show event --}}
        @yield('content-eventView')

        {{-- #------ Menu News ------# --}}
        {{-- Content news --}}
        @yield('content-news')
        {{-- Content Create news --}}
        @yield('content-newsCreate')
        {{-- Content Edit news --}}
        @yield('content-newsEdit')
        {{-- Content Show news --}}
        @yield('content-newsView')

        {{-- #------ Menu Tags ------# --}}
        {{-- Content tag --}}
        @yield('content-tags')
        {{-- Content Create tag --}}
        @yield('content-tagCreate')
        {{-- Content Edit tag --}}
        @yield('content-tagEdit')
        {{-- Content Show tag --}}
        @yield('content-tagView')

        {{-- #------ Menu Type Categories ------# --}}
        {{-- Content typeCategories --}}
        @yield('content-typeCategories')
        {{-- Content Create typeCategory --}}
        @yield('content-typeCategoryCreate')
        {{-- Content Edit typeCategory --}}
        @yield('content-typeCategoryEdit')
        {{-- Content Show typeCategory --}}
        @yield('content-typeCategoryView')

        {{-- #------ Menu Publications ------# --}}
        {{-- Content Publications --}}
        @yield('content-publication')
        {{-- Content Create Publications --}}
        @yield('content-publicationCreate')
        {{-- Content Edit Publications --}}
        @yield('content-publicationEdit')
        {{-- Content Show Publications --}}
        @yield('content-publicationView')

        {{-- #------ Menu Videos ------# --}}
        {{-- Content Videos --}}
        @yield('content-video')
        {{-- Content Create Videos --}}
        @yield('content-videoCreate')
        {{-- Content Edit Videos --}}
        @yield('content-videoEdit')
        {{-- Content Show Videos --}}
        @yield('content-videoView')

        {{-- Content Galeria --}}
        @yield('content-galery')
        {{-- Content Create Galeria --}}
        @yield('content-galeryCreate')
        {{-- Content Edit Galeria --}}
        @yield('content-galeryEdit')
        {{-- Content Show Galeria --}}
        @yield('content-galeryView')

        {{-- Footer --}}
        @include('_admin.layout.footer')
    </main>
    @include('_admin.layout.theme')

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.bs5.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tagify.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tagify-data.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/quill.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js') }}"></script>

    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js') }}"></script>
    <script src="{{ url('assets/js/leads-init.min.js') }}"></script>
    <script src="{{ url('assets/js/proposal-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->

</body>


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/leads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:42 GMT -->

</html>
