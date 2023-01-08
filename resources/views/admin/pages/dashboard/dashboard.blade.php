<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PKH Kalisat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicons -->
    <link href="public/assets/img/favicon.png" rel="icon">
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- load laravel mix -->
    <link rel="stylesheet" href="public/css/app.css">
    <style>
        .class-progres-view,
        .alert-message {
            display: none;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="public/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PKH</span>
            </a>
            <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
            <img class="toggle-sidebar-btn" src="public/assets/img/menu_FILL0_wght400_GRAD0_opsz48.png" alt="" srcset="">
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                @include('admin.template.topnav_notification')
                @include('admin.template.topnav_message')
                @include('admin.template.profile')


            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.template.sidebar')
    <main id="main" class="main class-progres-view z-3 position-relative">
        <div class="d-flex justify-content-center spiner-class-load">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </main>
    <main id="main" class="main content-load">

    </main><!-- End #main -->
    @include('admin.template.modal')
    @include('admin.template.footer')
    <script src="public/js/app.js"></script>

</body>

</html>