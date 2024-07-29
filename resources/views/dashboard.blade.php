<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from material-admin-pro.startbootstrap.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2024 06:18:44 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Task Management System</title>
    <link href="{{asset('backend')}}/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="{{'backend'}}/css/material_icon.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
    <!-- Load main stylesheet-->
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
                <div class="text-uppercase font-monospace">Task Management System</div>
            </a>
            <!-- Navbar items-->
            <div class="d-flex align-items-center mx-3 me-lg-0">
                <div class="d-flex">
                    <!-- Notifications and alerts dropdown-->
                    <div class="dropdown dropdown-notifications d-none d-sm-block">
                        <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuNotifications" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">notifications</i></button>
                        <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuNotifications">
                            <li>
                                <h6 class="dropdown-header bg-primary text-white fw-500 py-3">Alerts</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item unread" href="#!">
                                    <i class="material-icons leading-icon">assessment</i>
                                    <div class="dropdown-item-content me-2">
                                        <div class="dropdown-item-content-text">Your March performance report is ready to view.</div>
                                        <div class="dropdown-item-content-subtext">Mar 12, 2023 · Performance</div>
                                    </div>
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
                                    <div class="me-3">Profile</div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">logout</i>
                                    <div class="me-3">Logout</div>
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
            <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
                <div class="drawer-menu">
                    <div class="nav">
                        <div class="drawer-menu-heading">Interface</div>
                        <a class="nav-link {{Request::is('dashboard') ? 'active bg-light' : ''}}" href="{{route('dashboard')}}">
                            <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                            Dashboard
                        </a>

                        <!-- dropdown menu -->
                        <!-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i class="material-icons">build</i></div>
                            Dashboards
                            <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                            <nav class="drawer-menu-nested nav">
                                <a class="nav-link" href="app-dashboard-default.html">Default</a>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <!-- Drawer footer        -->
                <div class="drawer-footer border-top">
                    <div class="d-flex align-items-center">
                        <i class="material-icons text-muted">account_circle</i>
                        <div class="ms-3">
                            <div class="caption">Logged in as:</div>
                            <div class="small fw-500">{{Auth::user()->name}}</div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Layout content-->
        <div id="layoutDrawer_content">
            <main>
                <div class="container-xl p-5">
                    <div class="row gx-5">
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-default.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/default.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Default Dashboard</div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-minimal.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/minimal.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Minimal Dashboard</div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-analytics.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/analytics.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Analytics Dashboard</div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-accounting.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/accounting.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Accounting Dashboard</div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-orders.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/orders.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Orders Dashboard</div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-projects.html"><img class="img-fluid" src="../assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/projects.png" alt="..." /></a>
                            <div class="small font-monospace text-center">Projects Dashboard</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="form-label" for="exampleFormControlInputDisabled">Email address</label>
                            <input class="form-control" id="exampleFormControlInputDisabled" type="email" placeholder="name@example.com">

                            <label class="form-label" for="exampleFormControlTextareaDisabled">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextareaDisabled" rows="3"></textarea>
                        </div>
                    </div>
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