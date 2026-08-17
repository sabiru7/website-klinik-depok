<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '' }}</title>

    <link rel="shortcut icon" type="image/png"
        href="/modern/src/assets/images/logos/favicon.png" />

    <link rel="stylesheet"
        href="/modern/src/assets/css/styles.min.css" />
</head>

<body>

    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper"
        data-layout="vertical"
        data-navbarbg="skin6"
        data-sidebartype="full"
        data-sidebar-position="fixed"
        data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">

            <div>

                <!-- Logo -->
                <div class="brand-logo d-flex align-items-center justify-content-between">

                    <a href="/home" class="text-nowrap logo-img">
                        <img src="/modern/src/assets/images/logos/webpro.png"
                            width="180"
                            alt="Logo">
                    </a>

                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
                        id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>

                </div>
                <!-- End Logo -->


                <!-- Sidebar Navigation -->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">

                    <ul id="sidebarnav">

                        <!-- Menu -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Menu</span>
                        </li>


                        <!-- Dashboard -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('home') ? 'active' : '' }}"
                                href="/home"
                                aria-expanded="false">

                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>

                                <span class="hide-menu">
                                    Dashboard
                                </span>

                            </a>
                        </li>


                        <!-- Pendaftaran -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('daftar*') ? 'active' : '' }}"
                                href="/daftar"
                                aria-expanded="false">

                                <span>
                                    <i class="ti ti-clipboard"></i>
                                </span>

                                <span class="hide-menu">
                                    Pendaftaran
                                </span>

                            </a>
                        </li>


                        <!-- Pasien -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('pasien*') ? 'active' : '' }}"
                                href="/pasien"
                                aria-expanded="false">

                                <span>
                                    <i class="ti ti-user-exclamation"></i>
                                </span>

                                <span class="hide-menu">
                                    Pasien
                                </span>

                            </a>
                        </li>


                        <!-- Poli -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('poli*') ? 'active' : '' }}"
                                href="/poli"
                                aria-expanded="false">

                                <span>
                                    <i class="ti ti-building"></i>
                                </span>

                                <span class="hide-menu">
                                    Poli
                                </span>

                            </a>
                        </li>


                        <!-- PENGGUNA -->
                        <!-- Hanya ADMIN -->
                        @if (auth()->check() && auth()->user()->role == 'admin')

                            <li class="sidebar-item">

                                <a class="sidebar-link {{ request()->is('users*') ? 'active' : '' }}"
                                    href="/users"
                                    aria-expanded="false">

                                    <span>
                                        <i class="ti ti-user"></i>
                                    </span>

                                    <span class="hide-menu">
                                        Pengguna
                                    </span>

                                </a>

                            </li>

                        @endif

                    </ul>

                </nav>
                <!-- End Sidebar Navigation -->

            </div>

        </aside>
        <!-- Sidebar End -->


        <!-- Main Wrapper -->
        <div class="body-wrapper">


            <!-- Header Start -->
            <header class="app-header">

                <nav class="navbar navbar-expand-lg navbar-light">

                    <ul class="navbar-nav">

                        <!-- Mobile Sidebar -->
                        <li class="nav-item d-block d-xl-none">

                            <a class="nav-link sidebartoggler nav-icon-hover"
                                id="headerCollapse"
                                href="javascript:void(0)">

                                <i class="ti ti-menu-2"></i>

                            </a>

                        </li>


                        <!-- Notification -->
                        <li class="nav-item">

                            <a class="nav-link nav-icon-hover"
                                href="javascript:void(0)">

                                <i class="ti ti-bell-ringing"></i>

                                <div class="notification bg-primary rounded-circle"></div>

                            </a>

                        </li>

                    </ul>


                    <!-- Profile -->
                    <div class="navbar-collapse justify-content-end px-0"
                        id="navbarNav">

                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">

                                <a class="nav-link nav-icon-hover"
                                    href="javascript:void(0)"
                                    id="drop2"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">

                                    <img src="/modern/src/assets/images/profile/user-1.jpg"
                                        alt="Profile"
                                        width="35"
                                        height="35"
                                        class="rounded-circle">

                                </a>


                                <!-- Dropdown -->
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">

                                    <div class="message-body">


                                        <!-- Nama User -->
                                        <div class="px-3 py-2">

                                            <h6 class="mb-0">
                                                {{ auth()->user()->name ?? 'User' }}
                                            </h6>

                                            <small class="text-muted">
                                                {{ auth()->user()->role ?? 'user' }}
                                            </small>

                                        </div>


                                        <hr class="my-1">


                                        <!-- Profile -->
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">

                                            <i class="ti ti-user fs-6"></i>

                                            <p class="mb-0 fs-3">
                                                My Profile
                                            </p>

                                        </a>


                                        <!-- Account -->
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">

                                            <i class="ti ti-mail fs-6"></i>

                                            <p class="mb-0 fs-3">
                                                My Account
                                            </p>

                                        </a>


                                        <!-- Task -->
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">

                                            <i class="ti ti-list-check fs-6"></i>

                                            <p class="mb-0 fs-3">
                                                My Task
                                            </p>

                                        </a>


                                        <!-- Logout -->
                                        <a href="{{ route('logout') }}"
                                            onclick="if(confirm('Anda yakin keluar?')) {
                                                event.preventDefault();
                                                document.getElementById('logout-form').submit();
                                            } else {
                                                return false;
                                            }"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">

                                            <i class="ti ti-logout me-2"></i>

                                            Logout

                                        </a>


                                        <!-- Logout Form -->
                                        <form id="logout-form"
                                            action="{{ route('logout') }}"
                                            method="POST"
                                            style="display: none;">

                                            {{ csrf_field() }}

                                        </form>

                                    </div>

                                </div>
                                <!-- End Dropdown -->

                            </li>

                        </ul>

                    </div>

                </nav>

            </header>
            <!-- Header End -->


            <!-- Content -->
            <div class="container-fluid">

                <!-- Pesan -->
                @if (session()->has('pesan'))

                    <div class="alert alert-info"
                        role="alert">

                        {{ session('pesan') }}

                    </div>

                @endif


                <!-- Halaman -->
                @yield('content')

            </div>
            <!-- End Content -->

        </div>
        <!-- End Main Wrapper -->

    </div>
    <!-- End Body Wrapper -->


    <!-- JavaScript -->
    <script src="/modern/src/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="/modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/modern/src/assets/js/sidebarmenu.js"></script>

    <script src="/modern/src/assets/js/app.min.js"></script>

    <script src="/modern/src/assets/libs/simplebar/dist/simplebar.js"></script>

</body>

</html>
