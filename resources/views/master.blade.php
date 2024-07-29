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
    <link rel="stylesheet" href="{{asset('backend')}}/css/toastr.min.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/css/styles.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/css/vue-select.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/css/vue-good-table.css" />

    @stack("style")
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
                        <div class="me-sm-2">{{__('navbar.copyright')}}</div>
                        <div class="d-flex ms-sm-2"></div>
                    </div>
                </div>
            </footer>
        </div>


        <!-- Modal-->
        <div class="modal fade" id="exampleModalStatic" tabindex="-1" aria-labelledby="exampleModalStaticLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalStaticLabel">Get this party started?</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-text-danger me-2" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-text-primary" type="button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Load Bootstrap JS bundle-->
    <script src="{{asset('backend')}}/js/jquery.min.js"></script>
    <script src="{{asset('backend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/js/material.js"></script>
    <script src="{{asset('backend')}}/js/scripts.js"></script>
    <script src="{{asset('backend')}}/js/toastr.min.js"></script>

    <script src="{{asset('backend')}}/js/vue/vue.min.js"></script>
    <script src="{{asset('backend')}}/js/vue/lodash.min.js"></script>
    <script src="{{asset('backend')}}/js/vue/vue-select.js"></script>
    <script src="{{asset('backend')}}/js/vue/moment.js"></script>
    <script src="{{asset('backend')}}/js/vue/axios.min.js"></script>
    <script src="{{asset('backend')}}/js/vue/vue-good-table.min.js"></script>

    <script>
        Vue.component('v-select', VueSelect.VueSelect);

        function showModal() {
            $("#exampleModalStatic").modal("show");
        }
    </script>

    @stack("js")
</body>

</html>