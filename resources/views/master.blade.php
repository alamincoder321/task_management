<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{$company->name}} - @yield('title')</title>
    <link href="{{asset('backend')}}/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="{{'backend'}}/css/material_icon.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
</head>

<body class="nav-fixed bg-light">
    <!-- Top app bar navigation menu-->
    <nav class="top-app-bar navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <!-- Drawer toggle button-->
            <button class="btn btn-lg btn-icon order-1 order-lg-0" id="drawerToggle" href="javascript:void(0);"><i class="material-icons">menu</i></button>
            <!-- Navbar brand-->
            <a class="navbar-brand me-auto" href="{{route('dashboard')}}">
                <div class="text-uppercase font-monospace">{{$company->name}} </div>
            </a>
            <!-- Navbar items-->
            <div class="d-flex align-items-center mx-3 me-lg-0">
                <div class="d-flex">
                    <!-- Notifications and alerts dropdown-->
                    <div class="dropdown dropdown-notifications d-none d-sm-block">
                        <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuNotifications" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">language</i></button>
                        <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuNotifications">
                            <li>
                                <a class="dropdown-item unread" href="{{url('/language/en')}}">
                                    <i class="material-icons leading-icon">language</i>
                                    {{__('navbar.english')}}
                                </a>
                                <a class="dropdown-item unread" href="{{url('/language/bn')}}">
                                    <i class="material-icons leading-icon">language</i>
                                    {{__('navbar.bangla')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- User profile dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-lg btn-icon dropdown-toggle" id="dropdownMenuProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">person</i></button>
                        <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuProfile">
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">person</i>
                                    <div class="me-3">{{__('navbar.profile')}}</div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('user.logout')}}">
                                    <i class="material-icons leading-icon">logout</i>
                                    <div class="me-3">{{__('navbar.logout')}}</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Layout wrapper-->
    <div id="layoutDrawer">
        <div id="layoutDrawer_nav">
            @include('layouts.sidebar')
        </div>

        <!-- Layout content-->
        <div id="layoutDrawer_content">
            <main>
                <div class="container-fluid p-5">
                    @yield('content')
                </div>
            </main>
            <!-- Footer-->
            <footer class="py-4 mt-auto border-top" style="min-height: 74px">
                <div class="container-xl px-5">
                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small">
                        <div class="me-sm-2">Copyright © Your Website {{date('Y')}}</div>
                        <div class="d-flex ms-sm-2"></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Load Bootstrap JS bundle-->
    <script src="{{asset('backend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/js/material.js"></script>
    <script src="{{asset('backend')}}/js/scripts.js"></script>
    <script src="{{asset('backend')}}/js/sb-customizer.js"></script>
</body>

</html>