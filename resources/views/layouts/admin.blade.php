<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
            crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
    <script src="{{ asset('ckeditor/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--    <link rel="stylesheet"  href="{{asset('packages/barryvdh/elfinder/css/elfinder.min.css')}}">--}}
{{--    <link rel="stylesheet"  href="{{asset('packages/barryvdh/elfinder/css/theme.css')}}">--}}
{{--    <script src="{{asset('packages/barryvdh/elfinder/js/elfinder.min.js')}}"></script>--}}
<!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/barryvdh/elfinder/css/elfinder.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/barryvdh/elfinder/css/theme.css')}}">

    <!-- elFinder JS (REQUIRED) -->
    <script src="{{asset('/packages/barryvdh/elfinder/js/elfinder.full.js')}}"></script>
    <style>
        .bg-gradient-green {
            background: linear-gradient(-45deg, #105181, #965F05, #105181, #965F05);
            background-size: 300% 300%;
            animation: gradient 6s ease infinite;
            height: 100vh;
        }
        .nav-item {
            overflow: hidden;
        }
        .active{
            background-color: rgba(173, 216, 230, 0.5);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    </style>
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-green sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('homepage.index')}}">
            <div class="sidebar-brand-icon rotate-n-15">

            </div>
            <div class="sidebar-brand-text mx-3">THÀNH NAM <sup><i class="fas fa-laugh-wink"></i></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Trang Tổng Quan') }}</span></a>
        </li>

        @php

            $images = [
               ['name' => 'Ảnh mới', 'route' => route('images.create')],
               ['name' => 'Danh sách ảnh', 'route' => route('images.index')],
           ];

           $categories = [
               ['name' => 'Bài viết mới', 'route' => 'articles.create'],
               ['name' => 'Danh sách bài viết', 'route' => 'articles.index{index}'],
           ];

           $libraries = [
               ['name' => 'Quản lý file', 'route' => route('admin.media.index')],
           ];

           $trash = [
               ['name' => 'Danh sách bài viết', 'route' => route('articles.index',['conditionView' => 'trash'])],
           ];
        @endphp

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles" role="button" aria-expanded="false"
               aria-controls="articles">
                <i class="fas fa-newspaper"></i>
                <span>Tin Tức</span>
            </a>
            <div class="collapse" id="articles">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('articles.create') }}">
                        <a class="nav-link" href="{{ route('articles.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{  Nav::hasSegment('index',3) }}">
                        <a class="nav-link" href="{{ route('articles.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles1" role="button" aria-expanded="false"
               aria-controls="articles1">
                <i class="fas fa-newspaper"></i>
                <span>FPT Smart Home</span>
            </a>
            <div class="collapse" id="articles1">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_pools.create') }}">
                        <a class="nav-link" href="{{ route('article_pools.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_pools.index') }}">
                        <a class="nav-link" href="{{ route('article_pools.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles5" role="button" aria-expanded="false"
               aria-controls="articles5">
                <i class="fas fa-newspaper"></i>
                <span>Vimar</span>
            </a>
            <div class="collapse" id="articles5">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_vimar.create') }}">
                        <a class="nav-link" href="{{ route('article_vimar.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_vimar.index') }}">
                        <a class="nav-link" href="{{ route('article_vimar.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles2" role="button" aria-expanded="false"
               aria-controls="articles2">
                <i class="fas fa-newspaper"></i>
                <span>Thiết kế kiến trúc</span>
            </a>
            <div class="collapse" id="articles2">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_kien_truc.create') }}">
                        <a class="nav-link" href="{{ route('article_kien_truc.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_kien_truc.index') }}">
                        <a class="nav-link" href="{{ route('article_kien_truc.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles3" role="button" aria-expanded="false"
               aria-controls="articles3">
                <i class="fas fa-newspaper"></i>
                <span>Rèm Cửa</span>
            </a>
            <div class="collapse" id="articles3">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_cong_trinh.create') }}">
                        <a class="nav-link" href="{{ route('article_cong_trinh.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_cong_trinh.index') }}">
                        <a class="nav-link" href="{{ route('article_cong_trinh.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles4" role="button" aria-expanded="false"
               aria-controls="articles4">
                <i class="fas fa-newspaper"></i>
                <span>Thi công nội thất</span>
            </a>
            <div class="collapse" id="articles4">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_noi_that.create') }}">
                        <a class="nav-link" href="{{ route('article_noi_that.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_noi_that.index') }}">
                        <a class="nav-link" href="{{ route('article_noi_that.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles6" role="button" aria-expanded="false"
               aria-controls="articles6">
                <i class="fas fa-newspaper"></i>
                <span>Xây Nhà Trọn Gói</span>
            </a>
            <div class="collapse" id="articles6">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_xay_nha_tron_goi.create') }}">
                        <a class="nav-link" href="{{ route('article_xay_nha_tron_goi.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_xay_nha_tron_goi.index') }}">
                        <a class="nav-link" href="{{ route('article_xay_nha_tron_goi.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#articles7" role="button" aria-expanded="false"
               aria-controls="articles7">
                <i class="fas fa-newspaper"></i>
                <span>Sửa Chữa Nhà Trọn Gói</span>
            </a>
            <div class="collapse" id="articles7">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('article_sua_chua_nha_tron_goi.create') }}">
                        <a class="nav-link" href="{{ route('article_sua_chua_nha_tron_goi.create') }}">
                            <span>Bài viết mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('article_sua_chua_nha_tron_goi.index') }}">
                        <a class="nav-link" href="{{ route('article_sua_chua_nha_tron_goi.index',['conditionView' => 'index'])}}">
                            <span>Danh sách bài viết</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#products" role="button" aria-expanded="false"--}}
{{--               aria-controls="products">--}}
{{--                <i class="fa fa-shopping-bag"></i>--}}
{{--                <span>Khóa học</span>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="products">--}}
{{--                <ul class="nav flex-column">--}}
{{--                    <li class="nav-item {{ Nav::isRoute('products.create') }}">--}}
{{--                        <a class="nav-link" href="{{ route('products.create') }}">--}}
{{--                            <span>Khóa học mới</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item {{ Nav::isRoute('products.index') }}">--}}
{{--                        <a class="nav-link" href="{{ route('products.index') }}">--}}
{{--                            <span>Danh sách khóa học</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#images" role="button" aria-expanded="false"
               aria-controls="images">
                <i class="fa fa-image"></i>
                <span>Ảnh</span>
            </a>
            <div class="collapse" id="images">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('images.create') }}">
                        <a class="nav-link" href="{{ route('images.create') }}">
                            <span>Thêm ảnh mới</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('images.index') }}">
                        <a class="nav-link" href="{{ route('images.index') }}">
                            <span>Danh sách ảnh</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#libraries" role="button" aria-expanded="false"
               aria-controls="libraries">
                <i class="fa fa-folder"></i>
                <span> Quản lý file </span>
            </a>
            <div class="collapse" id="libraries">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Nav::isRoute('admin.media.index') }}">
                        <a class="nav-link" href="{{ route('admin.media.index') }}">
                            <span>Quản lý file</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-toggle="collapse" href="#trash" role="button" aria-expanded="false"--}}
{{--               aria-controls="trash">--}}
{{--                <i class="fas fa-trash"></i>--}}
{{--                <span> Thùng rác </span>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="trash">--}}
{{--                <ul class="nav flex-column">--}}
{{--                    <li class="nav-item {{ Nav::hasSegment('trash',3) }}">--}}
{{--                        <a class="nav-link" href="{{ route('articles.index',['conditionView' => 'trash'])}}">--}}
{{--                            <span>Bài viết </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Settings') }}
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>

        <!-- Nav Item - About -->
        <li class="nav-item {{ Nav::isRoute('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('About') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
            {{--                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
            {{--                    <div class="input-group">--}}
            {{--                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."--}}
            {{--                               aria-label="Search" aria-describedby="basic-addon2">--}}
            {{--                        <div class="input-group-append">--}}
            {{--                            <button class="btn btn-primary" type="button">--}}
            {{--                                <i class="fas fa-search fa-sm"></i>--}}
            {{--                            </button>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </form>--}}

            <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    {{--                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->--}}
                    {{--                    <li class="nav-item dropdown no-arrow d-sm-none">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"--}}
                    {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            <i class="fas fa-search fa-fw"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <!-- Dropdown - Messages -->--}}
                    {{--                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"--}}
                    {{--                             aria-labelledby="searchDropdown">--}}
                    {{--                            <form class="form-inline mr-auto w-100 navbar-search">--}}
                    {{--                                <div class="input-group">--}}
                    {{--                                    <input type="text" class="form-control bg-light border-0 small"--}}
                    {{--                                           placeholder="Search for..." aria-label="Search"--}}
                    {{--                                           aria-describedby="basic-addon2">--}}
                    {{--                                    <div class="input-group-append">--}}
                    {{--                                        <button class="btn btn-primary" type="button">--}}
                    {{--                                            <i class="fas fa-search fa-sm"></i>--}}
                    {{--                                        </button>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </form>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    {{--                    <!-- Nav Item - Alerts -->--}}
                    {{--                    <li class="nav-item dropdown no-arrow mx-1">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"--}}
                    {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            <i class="fas fa-bell fa-fw"></i>--}}
                    {{--                            <!-- Counter - Alerts -->--}}
                    {{--                            <span class="badge badge-danger badge-counter">3+</span>--}}
                    {{--                        </a>--}}
                    {{--                        <!-- Dropdown - Alerts -->--}}
                    {{--                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"--}}
                    {{--                             aria-labelledby="alertsDropdown">--}}
                    {{--                            <h6 class="dropdown-header">--}}
                    {{--                                Alerts Center--}}
                    {{--                            </h6>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="mr-3">--}}
                    {{--                                    <div class="icon-circle bg-primary">--}}
                    {{--                                        <i class="fas fa-file-alt text-white"></i>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="small text-gray-500">December 12, 2019</div>--}}
                    {{--                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="mr-3">--}}
                    {{--                                    <div class="icon-circle bg-success">--}}
                    {{--                                        <i class="fas fa-donate text-white"></i>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="small text-gray-500">December 7, 2019</div>--}}
                    {{--                                    $290.29 has been deposited into your account!--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="mr-3">--}}
                    {{--                                    <div class="icon-circle bg-warning">--}}
                    {{--                                        <i class="fas fa-exclamation-triangle text-white"></i>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="small text-gray-500">December 2, 2019</div>--}}
                    {{--                                    Spending Alert: We've noticed unusually high spending for your account.--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    {{--                    <!-- Nav Item - Messages -->--}}
                    {{--                    <li class="nav-item dropdown no-arrow mx-1">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"--}}
                    {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            <i class="fas fa-envelope fa-fw"></i>--}}
                    {{--                            <!-- Counter - Messages -->--}}
                    {{--                            <span class="badge badge-danger badge-counter">7</span>--}}
                    {{--                        </a>--}}
                    {{--                        <!-- Dropdown - Messages -->--}}
                    {{--                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"--}}
                    {{--                             aria-labelledby="messagesDropdown">--}}
                    {{--                            <h6 class="dropdown-header">--}}
                    {{--                                Message Center--}}
                    {{--                            </h6>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="dropdown-list-image mr-3">--}}
                    {{--                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"--}}
                    {{--                                         alt="">--}}
                    {{--                                    <div class="status-indicator bg-success"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="font-weight-bold">--}}
                    {{--                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a--}}
                    {{--                                        problem I've been having.--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="small text-gray-500">Emily Fowler · 58m</div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="dropdown-list-image mr-3">--}}
                    {{--                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"--}}
                    {{--                                         alt="">--}}
                    {{--                                    <div class="status-indicator"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="text-truncate">I have the photos that you ordered last month, how would--}}
                    {{--                                        you like them sent to you?--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="small text-gray-500">Jae Chun · 1d</div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="dropdown-list-image mr-3">--}}
                    {{--                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"--}}
                    {{--                                         alt="">--}}
                    {{--                                    <div class="status-indicator bg-warning"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="text-truncate">Last month's report looks great, I am very happy with the--}}
                    {{--                                        progress so far, keep up the good work!--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--                                <div class="dropdown-list-image mr-3">--}}
                    {{--                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"--}}
                    {{--                                         alt="">--}}
                    {{--                                    <div class="status-indicator bg-success"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told--}}
                    {{--                                        me that people say this to all dogs, even if they aren't good...--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow" style="overflow: unset !important">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold"
                                    data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Thông tin cá nhân') }}
                            </a>
                            {{--                            <a class="dropdown-item" href="javascript:void(0)">--}}
                            {{--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                                {{ __('Cài đặt') }}--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="javascript:void(0)">--}}
                            {{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                                {{ __('Nhật kí hoạt động') }}--}}
                            {{--                            </a>--}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Thoát') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; LIME COMPANY {{ now()->year }}--</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script>
    $('.nav-item').each(function () {
        let $articles = $(this).find('#articles');
        let $articles1 = $(this).find('#articles1');
        let $articles2 = $(this).find('#articles2');
        let $articles3 = $(this).find('#articles3');
        let $articles4 = $(this).find('#articles4');
        let $articles5 = $(this).find('#articles5');
        let $articles6 = $(this).find('#articles6');
        let $articles7 = $(this).find('#articles7');

        let $products = $(this).find('#products');
        let $images = $(this).find('#images');
        let $libraries = $(this).find('#libraries');
        let $trash = $(this).find('#trash');
        if ($articles.find('.active').length > 0) {
            $articles.addClass('show');
        }
        if ($articles1.find('.active').length > 0) {
            $articles1.addClass('show');
        }
        if ($articles2.find('.active').length > 0) {
            $articles2.addClass('show');
        }
        if ($articles3.find('.active').length > 0) {
            $articles3.addClass('show');
        }
        if ($articles4.find('.active').length > 0) {
            $articles4.addClass('show');
        }
        if ($articles5.find('.active').length > 0) {
            $articles5.addClass('show');
        }
        if ($articles6.find('.active').length > 0) {
            $articles6.addClass('show');
        }
        if ($articles7.find('.active').length > 0) {
            $articles7.addClass('show');
        }

        if ($products.find('.active').length > 0) {
            $products.addClass('show');
        }
        if ($images.find('.active').length > 0) {
            $images.addClass('show');
        }
        if ($libraries.find('.active').length > 0) {
            $libraries.addClass('show');
        }
        if ($trash.find('.active').length > 0) {
            $trash.addClass('show');
        }
    });

</script>
</body>
</html>
