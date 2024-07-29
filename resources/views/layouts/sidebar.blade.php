<nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
    <div class="drawer-menu">
        <div class="nav">
            <div class="drawer-menu-heading">{{__('sidebar.interface')}}</div>
            <a class="nav-link {{Request::is('dashboard') ? 'active bg-light' : ''}}" href="{{route('dashboard')}}">
                <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                {{__('sidebar.dashboard')}}
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