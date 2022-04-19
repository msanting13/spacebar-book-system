<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config("app.name") }} | @yield('page-title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            content="Premium Multipurpose Admin & Dashboard Template"
            name="description"
        />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin-assets/images/favicon.ico" />

        <!-- Bootstrap Css -->
        <link
            href="/admin-assets/css/bootstrap.min.css"
            id="bootstrap-style"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Icons Css -->
        <link
            href="/admin-assets/css/icons.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <!-- App Css-->
        <link
            href="/admin-assets/css/app.min.css"
            id="app-style"
            rel="stylesheet"
            type="text/css"
        />
        @stack('page-css')
    </head>

    <body data-layout="detached" data-topbar="colored">
        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <div class="container-fluid">
            <!-- Begin page -->
            <div id="layout-wrapper">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <div class="float-end">
                                <div
                                    class="dropdown d-inline-block d-lg-none ms-2"
                                >
                                    
                                    <div
                                        class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                        aria-labelledby="page-header-search-dropdown"
                                    >
                                        <form class="p-3">
                                            <div class="m-0">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Search ..."
                                                        aria-label="Recipient's username"
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <button
                                                            class="btn btn-primary"
                                                            type="submit"
                                                        >
                                                            <i
                                                                class="mdi mdi-magnify"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div
                                    class="dropdown d-none d-lg-inline-block ms-1"
                                >
                                    <button
                                        type="button"
                                        class="btn header-item noti-icon waves-effect"
                                        data-toggle="fullscreen"
                                    >
                                        <i class="mdi mdi-fullscreen"></i>
                                    </button>
                                </div>

                                <div class="dropdown d-inline-block">
                                    <button
                                        type="button"
                                        class="btn header-item noti-icon waves-effect"
                                        id="page-header-notifications-dropdown"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span
                                            class="badge rounded-pill bg-danger"
                                            >3</span
                                        >
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                        aria-labelledby="page-header-notifications-dropdown"
                                    >
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0">
                                                        Notifications
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#!" class="small">
                                                        View All</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            data-simplebar
                                            style="max-height: 230px"
                                        >
                                            <a
                                                href="#"
                                                class="text-reset notification-item"
                                            >
                                                <div
                                                    class="d-flex align-items-start"
                                                >
                                                    <div class="avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-primary rounded-circle font-size-16"
                                                        >
                                                            <i
                                                                class="bx bx-cart"
                                                            ></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1">
                                                            Your order is placed
                                                        </h6>
                                                        <div
                                                            class="font-size-12 text-muted"
                                                        >
                                                            <p class="mb-1">
                                                                If several
                                                                languages
                                                                coalesce the
                                                                grammar
                                                            </p>
                                                            <p class="mb-0">
                                                                <i
                                                                    class="mdi mdi-clock-outline"
                                                                ></i>
                                                                3 min ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a
                                                href="#"
                                                class="text-reset notification-item"
                                            >
                                                <div
                                                    class="d-flex align-items-start"
                                                >
                                                    <img
                                                        src="/admin-assets/images/users/image_placeholder.png"
                                                        class="me-3 rounded-circle avatar-xs"
                                                        alt="user-pic"
                                                    />
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1">
                                                            James Lemire
                                                        </h6>
                                                        <div
                                                            class="font-size-12 text-muted"
                                                        >
                                                            <p class="mb-1">
                                                                It will seem
                                                                like simplified
                                                                English.
                                                            </p>
                                                            <p class="mb-0">
                                                                <i
                                                                    class="mdi mdi-clock-outline"
                                                                ></i>
                                                                1 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a
                                                href="#"
                                                class="text-reset notification-item"
                                            >
                                                <div
                                                    class="d-flex align-items-start"
                                                >
                                                    <div class="avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-success rounded-circle font-size-16"
                                                        >
                                                            <i
                                                                class="bx bx-badge-check"
                                                            ></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1">
                                                            Your item is shipped
                                                        </h6>
                                                        <div
                                                            class="font-size-12 text-muted"
                                                        >
                                                            <p class="mb-1">
                                                                If several
                                                                languages
                                                                coalesce the
                                                                grammar
                                                            </p>
                                                            <p class="mb-0">
                                                                <i
                                                                    class="mdi mdi-clock-outline"
                                                                ></i>
                                                                3 min ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a
                                                href="#"
                                                class="text-reset notification-item"
                                            >
                                                <div
                                                    class="d-flex align-items-start"
                                                >
                                                    <img
                                                        src="/admin-assets/images/users/avatar-4.jpg"
                                                        class="me-3 rounded-circle avatar-xs"
                                                        alt="user-pic"
                                                    />
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1">
                                                            Salena Layfield
                                                        </h6>
                                                        <div
                                                            class="font-size-12 text-muted"
                                                        >
                                                            <p class="mb-1">
                                                                As a skeptical
                                                                Cambridge friend
                                                                of mine
                                                                occidental.
                                                            </p>
                                                            <p class="mb-0">
                                                                <i
                                                                    class="mdi mdi-clock-outline"
                                                                ></i>
                                                                1 hours ago
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-2 border-top d-grid">
                                            <a
                                                class="btn btn-sm btn-link font-size-14"
                                                href="javascript:void(0)"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right-circle me-1"
                                                ></i>
                                                View More..
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown d-inline-block">
                                    <button
                                        type="button"
                                        class="btn header-item waves-effect"
                                        id="page-header-user-dropdown"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <img
                                            class="rounded-circle header-profile-user"
                                            src="/admin-assets/images/users/image_placeholder.png"
                                            alt="Header Avatar"
                                        />
                                        <span
                                            class="d-none d-xl-inline-block ms-1 text-uppercase"
                                            >{{ Auth::user()->name }}</span
                                        >
                                        <i
                                            class="mdi mdi-chevron-down d-none d-xl-inline-block"
                                        ></i>
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-end"
                                    >
                                        <!-- item-->
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('admin.profile') }}"
                                            ><i
                                                class="bx bx-user font-size-16 align-middle me-1"
                                            ></i>
                                            Profile</a
                                        >
                                        <div class="dropdown-divider"></div>

                                        <a
                                            class="dropdown-item text-danger"
                                            href="{{
                                                route('logout')
                                            }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            ><i
                                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"
                                            ></i>
                                            Logout</a
                                        >
                                        <form
                                            id="logout-form"
                                            action="{{
                                                route('logout')
                                            }}"
                                            method="POST"
                                            class="d-none"
                                        >
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- LOGO -->
                                <div class="navbar-brand-box">
                                    <a
                                        href="{{ route('admin.auth.login') }}"
                                        class="logo logo-light"
                                    >
                                        <span
                                            class="logo-sm fs-2 text-white fw-bold"
                                        >
                                            <i class="fas fa-building"></i>
                                            SPACE BAR
                                        </span>
                                        <span
                                            class="logo-lg fs-2 text-white fw-bold"
                                        >
                                            <i class="fas fa-building"></i>
                                            SPACE BAR
                                        </span>
                                    </a>
                                </div>

                                <button
                                    type="button"
                                    class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                                    id="vertical-menu-btn"
                                >
                                    <i class="fa fa-fw fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ========== Left Sidebar Start ========== -->
                <div class="vertical-menu">
                    <div class="h-100">
                        <div class="user-wid text-center py-4">
                            <div class="user-img">
                                <img
                                    src="/admin-assets/images/users/image_placeholder.png"
                                    alt=""
                                    class="avatar-md mx-auto rounded-circle"
                                />
                            </div>

                            <div class="mt-3">
                                <a
                                    href="{{ route('user.profile') }}"
                                    class="text-dark fw-medium font-size-16 text-uppercase"
                                    >{{ Auth::user()->name }}</a
                                >
                                <p class="text-body mt-1 mb-0 font-size-13">
                                    Administrator
                                </p>
                            </div>
                        </div>

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title">Menu</li>

                                <li>
                                    <a
                                        href="{{ route('admin.dashboard') }}"
                                        class="waves-effect"
                                    >
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="menu-title">Transactions</li>
                                <li>
                                    <a
                                        href="{{ route('admin.check-ins.index') }}"
                                        class="waves-effect"
                                    >
                                        <i class="mdi mdi-warehouse"></i>
                                        <span>Check-Ins</span> - <span class='badge bg-primary shadow h6 text-white'>{{ $no_of_check_ins }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{ route('admin.check-out.index') }}"
                                        class="waves-effect"
                                    >
                                        <i class="mdi mdi-warehouse"></i>
                                        <span>Check-Outs</span> - <span class='badge bg-danger shadow h6 text-white'>{{ $no_of_check_outs }}</span>
                                    </a>
                                </li>

                                <li class="menu-title">Maintenance</li>
                                <li>
                                    <a
                                        href="{{ route('admin.room.index') }}"
                                        class="waves-effect"
                                    >
                                        <i class="mdi mdi-warehouse"></i>
                                        <span>Rooms</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="{{ route('admin.facility.index') }}"
                                        class="waves-effect"
                                    >
                                        <i class="mdi mdi-office-building"></i>
                                        <span>Facilities</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="{{ route('extras.index') }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-table-column-plus-before"
                                        ></i>
                                        <span>Extras</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="{{ route('admin.room-types.index') }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-home-lightbulb-outline"
                                        ></i>
                                        <span>Room types</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="{{ route('admin.user.index') }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-human-child"
                                        ></i>
                                        <span>Users</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="{{ route('admin.list') }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-human-child"
                                        ></i>
                                        <span>Admins</span>
                                    </a>
                                </li>
                                <li class="menu-title">Content Management</li>
                                <li>
                                    <a
                                        href="{{ route('admin.page.index') }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-page-layout-header-footer"
                                        ></i>
                                        <span>Landing Page</span>
                                    </a>
                                </li>

                                <li class="menu-title">Improvements</li>
                                <li>
                                    <a
                                        href="{{
                                            route('admin.feedbacks.index')
                                        }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-message-processing-outline"
                                        ></i>
                                        <span>Feedbacks</span>
                                    </a>
                                </li>
                                <li class="menu-title">Reports</li>
                                <li>
                                    <a
                                        href="{{
                                            route('reports.create')
                                        }}"
                                        class="waves-effect"
                                    >
                                        <i
                                            class="mdi mdi-chart-tree"
                                        ></i>
                                        <span>Sales</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
                <!-- Left Sidebar End -->

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
                    <div class="page-content">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="page-title-box d-flex align-items-center justify-content-between"
                                >
                                    <h4 class="page-title mb-0 font-size-18">
                                        @yield('page-title')
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @yield('content')
                    </div>
                    <!-- End Page-content -->

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>
                                        document.write(
                                            new Date().getFullYear()
                                        );
                                    </script>
                                    © {{ config("app.name") }}.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end d-none d-sm-block">
                                        Design & Develop by
                                        {{ config("app.name") }} Team
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- end main content-->
            </div>
            <!-- END layout-wrapper -->
        </div>
        <!-- end container-fluid -->

        <!-- JAVASCRIPT -->
        <script src="/admin-assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin-assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin-assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin-assets/libs/node-waves/waves.min.js"></script>
        <script src="/admin-assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- Bootstrap rating js -->
        <script src="/admin-assets/libs/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="/admin-assets/js/pages/rating-init.js"></script>

        <!-- App js -->
        <script src="/admin-assets/js/app.js"></script>
        @stack('page-scripts')
    </body>
</html>
