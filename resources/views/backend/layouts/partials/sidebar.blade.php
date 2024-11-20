<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-fill"></i><span data-key="t-dashboards">Tổng quan</span>
                    </a>
                </li>

                <!-- end Dashboard Menu -->

                <!-- start Configuration -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.') }}" aria-expanded="false"
                        aria-controls="sidebarApps">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Chung</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 1) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 2) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 5) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 6) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 6</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 7) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 7</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 8) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 8</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.configuration.session', 9) }}">
                        <i class="ri-settings-line"></i><span data-key="t-apps">Cấu Hình Session 9</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.contact') }}">
                        
                        <i class=" ri-chat-3-line"></i><span data-key="t-apps">Yêu Cầu Liên Hệ</span>
                    </a>
                </li>


                <!-- end Configuration -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
