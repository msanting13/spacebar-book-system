@extends('admin.layouts.app')
@section('page-title', 'Dashboard')
@section('content')
@include('templates.success')
<!--begin::Post-->
<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Row-->
        <div class="row g-xl-12">
            <!--begin::Col-->
            <div class="col-xxl-12">
                <!--begin::Row-->
                <div class="row g-xl-12">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Slider Widget 1-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <div class="card-title">
                                    <h3>Visitors</h3>
                                </div>
                                <h2 class='text-center align-middle fs-1'>{{ $visitors }}</h2>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Slider Widget 1-->
                    </div>

                    <div class="col-xl-4">
                        <!--begin::Slider Widget 1-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pt-5">

                                <div class="card-title">
                                    <h3>Users</h3>
                                </div>
                                <h2 class='text-center align-middle fs-1'>{{ $users }}</h2>

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Slider Widget 1-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Slider Widget 1-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pt-5">


                                <div class="card-title">
                                    <h3>Feedbacks</h3>
                                </div>
                                <h2 class='text-center align-middle fs-1'>{{ $feedbacks }}</h2>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Slider Widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 gx-xxl-8 mb-xxl-3">
            <!--begin::Col-->
            <div class="col-xxl-8">
                <!--begin::Table widget 1-->
                <div class="card card-xxl-stretch mb-xl-3">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5 pb-3">
                        <!--begin::Heading-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-boldest text-gray-800 fs-2">Teams Progress</span>
                            <span class="text-gray-400 fw-bold mt-2 fs-6">890,344 Sales</span>
                        </h3>
                        <!--end::Heading-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Select-->
                            <div class="pe-6 my-1">
                                <select
                                    class="form-select form-select-sm form-select-solid w-125px select2-hidden-accessible"
                                    data-control="select2" data-placeholder="All Users" data-hide-search="true"
                                    data-select2-id="select2-data-1-fs5c" tabindex="-1" aria-hidden="true">
                                    <option value="1" selected="selected" data-select2-id="select2-data-3-5qa0">All
                                        Users</option>
                                    <option value="2">Active users</option>
                                    <option value="3">Pending users</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                    data-select2-id="select2-data-2-qlqb" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-sm form-select-solid w-125px"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-ek08-container"
                                            aria-controls="select2-ek08-container"><span
                                                class="select2-selection__rendered" id="select2-ek08-container"
                                                role="textbox" aria-readonly="true" title="All Users">All
                                                Users</span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Search-->
                            <div class="w-125px position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span
                                    class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                            transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-sm form-control-solid ps-10"
                                    name="search" value="" placeholder="Search">
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table align-middle table-row-bordered table-row-dashed gy-5"
                                id="kt_table_widget_1">
                                <tbody>
                                    <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                        <th class="w-20px ps-0">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_table_widget_1 .form-check-input"
                                                    value="1">
                                            </div>
                                        </th>
                                        <th class="min-w-200px px-0">Authors</th>
                                        <th class="min-w-125px">Company</th>
                                        <th class="min-w-125px">Progress</th>
                                        <th class="text-end pe-2 min-w-70px">Action</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img alt="" class="w-25px"
                                                            src="assets/media/svg/brand-logos/aven.svg">
                                                    </span>
                                                </div>
                                                <div class="ps-3">
                                                    <a href="#"
                                                        class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Brad
                                                        Simmons</a>
                                                    <span class="text-gray-400 fw-bold d-block">HTML, JS, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-boldest fs-5 d-block">Intertico</span>
                                            <span class="text-gray-400 fw-bold">Web, UI/UX Design</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-100 me-2 mt-2">
                                                <span class="text-gray-400 me-2 fw-boldest mb-2">65%</span>
                                                <div class="progress bg-light-danger w-100 h-5px">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 65%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <a href="pages/projects/project.html"
                                                class="btn btn-light text-muted fw-boldest btn-sm px-5">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img alt="" class="w-25px"
                                                            src="assets/media/svg/brand-logos/leaf.svg">
                                                    </span>
                                                </div>
                                                <div class="ps-3">
                                                    <a href="#"
                                                        class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Jessie
                                                        Clarcson</a>
                                                    <span class="text-gray-400 fw-bold d-block">C#, ASP.NET, MS
                                                        SQL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-boldest fs-5 d-block">Agoda</span>
                                            <span class="text-gray-400 fw-bold">Houses &amp; Hotels</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span class="text-gray-400 me-2 fw-boldest mb-2">85%</span>
                                                <div class="progress bg-light-primary w-100 h-5px">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 85%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <a href="pages/projects/project.html"
                                                class="btn btn-light text-muted fw-boldest btn-sm px-5">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="d-flex align-items-center text-start">
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img class="w-25px" alt=""
                                                            src="assets/media/svg/brand-logos/atica.svg">
                                                    </span>
                                                </div>
                                                <div class="ps-3">
                                                    <a href="#"
                                                        class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Lebron
                                                        Wayde</a>
                                                    <span class="text-gray-400 fw-bold d-block">PHP, Laravel,
                                                        VueJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-boldest fs-5 d-block">RoadGee</span>
                                            <span class="text-gray-400 fw-bold">Transportation</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span class="text-gray-400 me-2 fw-boldest mb-2">4%</span>
                                                <div class="progress bg-light-success w-100 h-5px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 47%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <a href="pages/projects/project.html"
                                                class="btn btn-light text-muted fw-boldest btn-sm px-5">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="d-flex align-items-center text-start">
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img class="w-25px" alt=""
                                                            src="assets/media/svg/brand-logos/volicity-9.svg">
                                                    </span>
                                                </div>
                                                <div class="ps-3">
                                                    <a href="#"
                                                        class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Natali
                                                        Trump</a>
                                                    <span class="text-gray-400 fw-bold d-block">Python, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-boldest fs-5 d-block">The Hill</span>
                                            <span class="text-gray-400 fw-bold">Insurance</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-100 me-2">
                                                <span class="text-gray-400 me-2 fw-boldest mb-2">71%</span>
                                                <div class="progress bg-light-info w-100 h-5px">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 71%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <a href="pages/projects/project.html"
                                                class="btn btn-light text-muted fw-boldest btn-sm px-5">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Table widget 1-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::Chart Widget 4-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Beader-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-boldest text-dark fs-2">Achievements</span>
                            <span class="text-gray-400 mt-2 fw-bold fs-6">100k+ sales templates sales</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-0">
                        <!--begin::Chart-->
                        <div class="d-flex flex-center position-relative">
                            <div id="kt_chart_widget_4_chart" style="height: 250px; min-height: 176.26px;">
                                <div id="apexchartsmpiteswfh"
                                    class="apexcharts-canvas apexchartsmpiteswfh apexcharts-theme-light"
                                    style="width: 300px; height: 176.26px;"><svg id="SvgjsSvg1310" width="300"
                                        height="176.259765625" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1312" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(38, 0)">
                                            <defs id="SvgjsDefs1311">
                                                <clipPath id="gridRectMaskmpiteswfh">
                                                    <rect id="SvgjsRect1314" width="232" height="250" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskmpiteswfh"></clipPath>
                                                <clipPath id="nonForecastMaskmpiteswfh"></clipPath>
                                                <clipPath id="gridRectMarkerMaskmpiteswfh">
                                                    <rect id="SvgjsRect1315" width="230" height="252" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1316" class="apexcharts-radialbar">
                                                <g id="SvgjsG1317">
                                                    <g id="SvgjsG1318" class="apexcharts-tracks">
                                                        <g id="SvgjsG1319"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 196.28902439024392 113"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(241,250,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="10.636585365853659"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 196.28902439024392 113">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1321">
                                                        <g id="SvgjsG1326"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="MyxAchievements" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1327"
                                                                d="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 169.80297804535178 52.08626370794575"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(0,163,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="10.636585365853659"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="133" data:value="74" index="0" j="0"
                                                                data:pathOrig="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 169.80297804535178 52.08626370794575">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1322" r="77.97073170731709" cx="113"
                                                            cy="113" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG1323" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText1324" font-family="inherit" x="113"
                                                                y="108" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="700" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: inherit;">My
                                                                Achievements</text><text id="SvgjsText1325"
                                                                font-family="inherit" x="113" y="89"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="30px" font-weight="700" fill="#5e6278"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: inherit;">74%</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1328" x1="0" y1="0" x2="226" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1329" x1="0" y1="0" x2="226" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1313" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 641px; height: 251px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Items-->
                        <div class="mt-n20 pb-5 position-relative zindex-1">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-5">
                                        <span class="symbol-label bg-light-success">
                                            <!--begin::Svg Icon | path: /icons/duotune/maps/map004.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Global
                                            Stars</a>
                                        <div class="fs-7 text-gray-400 fw-bold mt-1">12 Hours, 4 Commits</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 svg-icon-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="black"></rect>
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-5">
                                        <span class="symbol-label bg-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                        fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                        fill="black"></rect>
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                        fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Focus
                                            Keeper</a>
                                        <div class="fs-7 text-gray-400 fw-bold mt-1">6 Hours, 3 Commits</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 svg-icon-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="black"></rect>
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-5">
                                        <span class="symbol-label bg-light-info">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs019.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M18.0002 22H6.00019C5.20019 22 4.8002 21.1 5.2002 20.4L12.0002 12L18.8002 20.4C19.3002 21.1 18.8002 22 18.0002 22Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M18.8002 3.6L12.0002 12L5.20019 3.6C4.70019 3 5.20018 2 6.00018 2H18.0002C18.8002 2 19.3002 2.9 18.8002 3.6Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">High
                                            Tower</a>
                                        <div class="fs-7 text-gray-400 fw-bold mt-1">34 Hours, 15 Commits</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 svg-icon-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="black"></rect>
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::List Widget 2-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-boldest text-dark fs-2">My Competitors</span>
                            <span class="text-gray-400 mt-2 fw-bold fs-6">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="assets/media/stock/600x400/img-17.jpg" class="mw-100" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Cup &amp;
                                        Green</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
                                    <span class="text-gray-400 fw-bold fs-7">By:
                                        <a href="#" class="text-primary fw-bold">CoreAd</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="text-end py-lg-0 py-2">
                                    <span class="text-gray-800 fw-boldest fs-3">24,900</span>
                                    <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="assets/media/stock/600x400/img-10.jpg" class="mw-100" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Yellow
                                        Hearts</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
                                    <span class="text-gray-400 fw-bold fs-7">By:
                                        <a href="#" class="text-primary fw-bold">KeenThemes</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="text-end py-lg-0 py-2">
                                    <span class="text-gray-800 fw-boldest fs-3">70,380</span>
                                    <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="assets/media/stock/600x400/img-1.jpg" class="mw-100" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Nike &amp;
                                        Blue</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
                                    <span class="text-gray-400 fw-bold fs-7">By:
                                        <a href="#" class="text-primary fw-bold">Invision Inc.</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="text-end py-lg-0 py-2">
                                    <span class="text-gray-800 fw-boldest fs-3">7,200</span>
                                    <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex mb-">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="assets/media/stock/600x400/img-9.jpg" class="mw-100" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Red Boots</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
                                    <span class="text-gray-400 fw-bold fs-7">By:
                                        <a href="#" class="text-primary fw-bold">Figma Studio</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="text-end py-lg-0 py-2">
                                    <span class="text-gray-800 fw-boldest fs-3">36,450</span>
                                    <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-boldest text-dark fs-2">My Agents</span>
                            <span class="text-gray-400 mt-2 fw-bold fs-6">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-active-light-primary btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_61d63f9d946b8">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_61d63f9d946b8" data-allow-clear="true"
                                                data-select2-id="select2-data-4-qpey" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-6-okix"></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select><span
                                                class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-5-7efg"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-j7ut-container"
                                                        aria-controls="select2-j7ut-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-j7ut-container" role="textbox"
                                                            aria-readonly="true" title="Select option"><span
                                                                class="select2-selection__placeholder">Select
                                                                option</span></span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1">
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked">
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked="checked">
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                    <img src="assets/media/avatars/150-3.jpg" alt="">
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="ps-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-boldest">Anne Clarc</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">HTML, CSS, Laravel</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Details-->
                            <a href="pages/profile/overview.html"
                                class="btn btn-light btn-color-muted fw-boldest btn-sm px-5">Details</a>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                    <img src="assets/media/avatars/150-2.jpg" alt="">
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="ps-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-boldest">Brad
                                        Simmons</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">HTML, JS, ReactJS</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Details-->
                            <a href="pages/profile/overview.html"
                                class="btn btn-light btn-color-muted fw-boldest btn-sm px-5">Details</a>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                    <img src="assets/media/avatars/150-4.jpg" alt="">
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="ps-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-boldest">Randy Trent</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">C#, ASP.NET, MS SQL</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Details-->
                            <a href="pages/profile/overview.html"
                                class="btn btn-light btn-color-muted fw-boldest btn-sm px-5">Details</a>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                    <img src="assets/media/avatars/150-5.jpg" alt="">
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="ps-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-boldest">Ricky Hunt</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">PHP, Laravel, VueJS</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Details-->
                            <a href="pages/profile/overview.html"
                                class="btn btn-light btn-color-muted fw-boldest btn-sm px-5">Details</a>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-4">
                                    <img src="assets/media/avatars/150-6.jpg" alt="">
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="ps-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-boldest">Jessie
                                        Clarcson</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">ReactJS</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Details-->
                            <a href="pages/profile/overview.html"
                                class="btn btn-light btn-color-muted fw-boldest btn-sm px-5">Details</a>
                            <!--end::Details-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::List Widget 4-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-boldest text-dark fs-2">Timeline</span>
                            <span class="text-gray-400 mt-2 fw-bold fs-6">890,344 Sales</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                            </rect>
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <div class="position-relative">
                            <!--begin::Border-->
                            <div class="w-35px d-flex justify-content-center">
                                <div
                                    class="border-start border-dashed border-gray-300 top-0 bottom-0 mb-5 mt-5 position-absolute">
                                </div>
                            </div>
                            <!--end::Border-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5 mt-2">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Developer
                                            Library Added</a>
                                        <div class="text-gray-400 fw-bold mt-1">New
                                            <a href="#" class="link-primary p-1">Author Account</a>with Affiliate</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="fw-boldest fs-7 text-gray-400">2HR</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5 mt-2">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M22 7H2V11H22V7Z" fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Payments
                                            Methods Added</a>
                                        <div class="text-gray-400 fw-bold mt-1">Added
                                            <span class="text-gray-700 pe-1">Payoneer</span>&amp;
                                            <span class="text-gray-700">Transferwise</span></div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="fw-boldest fs-7 text-gray-400">6HR</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5 mt-2">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">New Order
                                            Placed</a>
                                        <div class="text-gray-400 fw-bold mt-1">
                                            <a href="#" class="link-primary pe-1">#XDT-034</a>order received</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="fw-boldest fs-7 text-gray-400">4DY</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5 mt-2">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="pr-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">New User
                                            Library Added</a>
                                        <div class="fs-7 text-gray-400 fw-bold mt-2">New
                                            <a href="#" class="link-primary pe-1">Author Account</a>created</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="fw-boldest fs-7 text-gray-400">27DY</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5 mt-2">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                        fill="black"></path>
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">New Story
                                            Created</a>
                                        <div class="text-gray-400 fw-bold mt-1">
                                            <a href="#" class="link-primary pe-1">#XDT-034</a>order received</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="fw-boldest fs-7 text-gray-400">2MO</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Modals-->
        <!--begin::Modal - Create App-->
        <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal header-->
                        <h1 class="fw-boldest">Create App</h1>
                        <!--end::Modal header-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                            id="kt_modal_create_app_stepper" data-kt-stepper="true">
                            <!--begin::Aside-->
                            <div
                                class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                <!--begin::Nav-->
                                <div class="stepper-nav ps-lg-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item current" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Details</h3>
                                            <div class="stepper-desc">Name your App</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Frameworks</h3>
                                            <div class="stepper-desc">Define your app framework</div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Database</h3>
                                            <div class="stepper-desc">Select the app database type</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Billing</h3>
                                            <div class="stepper-desc">Provide payment details</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Completed</h3>
                                            <div class="stepper-desc">Review and Submit</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 5-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--begin::Aside-->
                            <!--begin::Content-->
                            <div class="flex-row-fluid py-lg-5 px-lg-15">
                                <!--begin::Form-->
                                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                                    id="kt_modal_create_app_form">
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required">App Name</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify your unique app name"
                                                        aria-label="Specify your unique app name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid" name="name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Category</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Select your app category"
                                                        aria-label="Select your app category"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Options-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: /icons/duotune/maps/map004.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Quick Online Courses</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one SEO</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="category"
                                                                value="1">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <rect x="2" y="2" width="9" height="9"
                                                                                rx="2" fill="black"></rect>
                                                                            <rect opacity="0.3" x="13" y="2" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                            <rect opacity="0.3" x="13" y="13" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                            <rect opacity="0.3" x="2" y="13" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Face to Face
                                                                    Discussions</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one aspect</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="category"
                                                                value="2">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Full Intro Training</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure copywriting</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="category"
                                                                value="3">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end:Options-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Select Framework</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify your apps framework"
                                                        aria-label="Specify your apps framework"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="fab fa-html5 text-warning fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">HTML5</span>
                                                            <span class="fs-7 text-muted">Base Web Projec</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" checked="checked"
                                                            name="framework" value="1">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="fab fa-react text-success fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">ReactJS</span>
                                                            <span class="fs-7 text-muted">Robust and flexible app
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="framework"
                                                            value="2">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="fab fa-angular text-danger fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Angular</span>
                                                            <span class="fs-7 text-muted">Powerful data mangement</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="framework"
                                                            value="3">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="fab fa-vuejs text-primary fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Vue</span>
                                                            <span class="fs-7 text-muted">Lightweight and responsive
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="framework"
                                                            value="4">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fs-5 fw-bold mb-2">Database Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="dbname" placeholder="" value="master_db">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Select Database Engine</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Select your app database engine"
                                                        aria-label="Select your app database engine"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="fas fa-database text-success fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">MySQL</span>
                                                            <span class="fs-7 text-muted">Basic MySQL database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            checked="checked" value="1">
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="fab fa-google text-danger fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Firebase</span>
                                                            <span class="fs-7 text-muted">Google based app data
                                                                management</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            value="2">
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="fab fa-amazon text-warning fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">DynamoDB</span>
                                                            <span class="fs-7 text-muted">Amazon Fast NoSQL
                                                                Database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            value="3">
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">Name On Card</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify a card holder's name"
                                                        aria-label="Specify a card holder's name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="" name="card_name" value="Max Doe">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Enter card number" name="card_number"
                                                        value="4111 1111 1111 1111">
                                                    <!--end::Input-->
                                                    <!--begin::Card logos-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                        <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                                            class="h-25px">
                                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                            class="h-25px">
                                                        <img src="assets/media/svg/card-logos/american-express.svg"
                                                            alt="" class="h-25px">
                                                    </div>
                                                    <!--end::Card logos-->
                                                </div>
                                                <!--end::Input wrapper-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-10">
                                                <!--begin::Col-->
                                                <div class="col-md-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-bold form-label mb-2">Expiration
                                                        Date</label>
                                                    <!--end::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row fv-row fv-plugins-icon-container">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_month"
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Month"
                                                                data-select2-id="select2-data-7-ftt3" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="select2-data-9-c5sf"></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-8-bmyu"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-card_expiry_month-73-container"
                                                                        aria-controls="select2-card_expiry_month-73-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-card_expiry_month-73-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Month"><span
                                                                                class="select2-selection__placeholder">Month</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                            </div>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_year"
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Year"
                                                                data-select2-id="select2-data-10-2fvc" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="select2-data-12-oi8d"></option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-11-7lw8"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-card_expiry_year-8v-container"
                                                                        aria-controls="select2-card_expiry_year-8v-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-card_expiry_year-8v-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Year"><span
                                                                                class="select2-selection__placeholder">Year</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                            </div>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span class="required">CVV</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Enter a card CVV code"
                                                            aria-label="Enter a card CVV code"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            minlength="3" maxlength="4" placeholder="CVV"
                                                            name="card_cvv">
                                                        <!--end::Input-->
                                                        <!--begin::CVV icon-->
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                            <span class="svg-icon svg-icon-2hx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 7H2V11H22V7Z" fill="black"></path>
                                                                    <path opacity="0.3"
                                                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::CVV icon-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-bold form-label">Save Card for further
                                                        billing?</label>
                                                    <div class="fs-7 fw-bold text-gray-400">If you need more info,
                                                        please check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked">
                                                    <span class="form-check-label fw-bold text-gray-400">Save
                                                        Card</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100 text-center">
                                            <!--begin::Heading-->
                                            <div class="pb-10 text-center">
                                                <!--begin::Title-->
                                                <h1 class="fw-boldest text-dark">App Completed!</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-bold fs-4">If you need more info, please
                                                    check how to create apps</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-center pb-5">
                                                <button type="button" class="btn btn-lg btn-light me-3"
                                                    data-kt-element="complete-start">Create New App</button>
                                                <a href="pages/profile/documents.html"
                                                    class="btn btn-lg btn-primary">View App</a>
                                            </div>
                                            <!--end::Actions-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4 mb-5">
                                                <img src="assets/media/illustrations/sigma-1/17.png" alt=""
                                                    class="mw-100 mh-200px">
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                    </div>
                                    <!--end::Step 5-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-between pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="me-2">
                                            <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                data-kt-stepper-action="previous">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                <span class="svg-icon svg-icon-3 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                            fill="black"></rect>
                                                        <path
                                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Back</button>
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-stepper-action="submit">
                                                <span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                rx="1" transform="rotate(-180 18 13)" fill="black">
                                                            </rect>
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-stepper-action="next">Continue
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                            transform="rotate(-180 18 13)" fill="black"></rect>
                                                        <path
                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></button>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Actions-->
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create App-->
        <!--begin::Modal - Select Location-->
        <div class="modal fade" id="kt_modal_select_location" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-1000px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Title-->
                        <h1 class="fw-boldest m-0">Select Location</h1>
                        <!--end::Title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body">
                        <div id="kt_modal_select_location_map" class="w-100 rounded" style="height:450px"></div>
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer d-flex justify-content-end">
                        <a href="#" class="btn btn-active-light me-5" data-bs-dismiss="modal">Cancel</a>
                        <button type="button" id="kt_modal_select_location_button" class="btn btn-primary"
                            data-bs-dismiss="modal">Apply</button>
                    </div>
                    <!--end::Modal footer-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Select Location-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
@endsection
