@extends('admin.layouts.app')
@section('page-title', 'Dashboard')
@section('content')
@include('templates.success')
<!--begin::Post-->
{{-- <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
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
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-boldest text-dark fs-2">Visitors</span>
                                </h3>
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

            <h3 class="card-title align-items-start flex-column">
                <span class="fw-boldest text-dark fs-2">Users</span>
            </h3>
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
            <h3 class="card-title align-items-start flex-column">
                <span class="fw-boldest text-dark fs-2">Feedbacks</span>
            </h3>
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
    <div class="col-xxl-12">
        <!--begin::Table widget 1-->
        <div class="card card-xxl-stretch mb-xl-3">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5 pb-3">
                <!--begin::Heading-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-boldest text-gray-800 fs-2">Bookings</span>
                </h3>
                <!--end::Heading-->
                <!--begin::Toolbar-->
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                        <tbody>
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
</div>
<!--end::Row-->
</div>
<!--end::Container-->
</div> --}}

<!--begin::Container-->
<div class="container-fluid">
    <!--begin::Row-->
    <div class="row g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Stats Widget 5-->
            <div class="card bg-gray-100 card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0 pb-9">
                    <!--begin::Info-->
                    <div class="px-9 pt-6 rounded h-250px w-100 bgi-no-repeat bgi-size-cover bgi-position-y-top"
                        style="background-image:url('../assets/media/misc/bg-blue.png');">
                        <!--begin::Balance-->
                        <div class="d-flex align-items-center align-self-center flex-wrap pt-8">
                            <div class="fw-bolder fs-3 text-uppercase text-white flex-grow-1 pe-2">Total Income
                                <span class="fw-boldest fs-2hx d-block mt-n1">{{ $income }}</span></div>
                        </div>
                        <!--begin::Balance-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Items-->
                    <div class="mx-9 mt-n20">
                        <!--begin::Row-->
                        <div class="row g-8 row-cols-1 row-cols-sm-2">
                            <!--begin::Col-->
                            <div class="col mt-n2">
                                <div class="text-center bg-body shadow-xs rounded p-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px mt-1 fs-1  fw-boldest">
                                        {{ $rooms }}
                                    </div>
                                    <!--end::Symbol-->
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fw-boldest fs-5 mt-4 d-block">Rooms</a>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mt-sm-n2">
                                <div class="bg-body shadow-xs rounded text-center p-7">
                                    <div class="symbol symbol-50px mt-1 fs-1 fw-boldest">
                                        {{ $extras }}
                                    </div>
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fw-boldest fs-5 mt-4 d-block">Extras</a>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="bg-body shadow-xs rounded text-center p-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px fs-1 fw-boldest mt-1">
                                        {{ $users }}
                                    </div>
                                    <!--end::Symbol-->
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fw-boldest fs-5 mt-4 d-block">Users</a>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="bg-body shadow-xs rounded text-center p-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px fs-1 fw-boldest mt-1">
                                        {{ $visitors }}
                                    </div>
                                    <!--end::Symbol-->
                                    <a href="#" class="text-gray-800 fw-boldest fs-5 mt-4 d-block">Visitors</a>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Slider Widget 1-->
            <div class="card card-stretch-50 mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <div id="kt_stats_widget_8_carousel" class="carousel carousel-custom carousel-stretch slide"
                        data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack flex-wrap">
                            <span class="fs-4 text-gray-400 fw-boldest pe-2">Latest Feedback</span>
                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_stats_widget_8_carousel" data-bs-slide-to="0" class="ms-1"></li>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Carousel-->
                        <div class="carousel-inner pt-6">
                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <div class="carousel-wrapper">
                                    @if($feedbacks->count() != 0)
                                    <div class="d-flex flex-column justify-content-between flex-grow-1">
                                        <a href="#"
                                            class="fs-2 text-gray-800 text-hover-primary fw-boldest">{{ $feedbacks->first()->user->first_name }}
                                            {{ $feedbacks->first()->user->last_name }}</a>
                                        <p class="text-gray-600 fs-6 fw-bold pt-4 mb-0">
                                            {{ $feedbacks->first()->content }}</p>
                                    </div>
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span
                                            class="badge badge-light-primary fs-7 fw-boldest me-2">{{ $feedbacks->first()->created_at->format('F d, Y h:i A') }}</span>
                                    </div>
                                    @endif
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Carousel-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Slider Widget 1-->
            <!--begin::Slider widget 2-->
            <div class="card card-stretch-50 mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_stats_widget_9_carousel" class="carousel carousel-custom carousel-stretch slide"
                        data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Nav-->
                        <div class="d-flex flex-stack flex-wrap">
                            <span class="text-gray-400 fw-boldest fs-4 pe-2">Hey!</span>
                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_stats_widget_9_carousel" data-bs-slide-to="0" class="ml-1"></li>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Items-->
                        <div class="carousel-inner pt-8">
                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <div class="carousel-wrapper">
                                    <!--begin::Title-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-boldest">No. of
                                            books for today</a>
                                        <p class="text-primary fs-1 fw-boldest pt-5 mb-0">{{ $bookings->count() }}</p>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-stack pt-7">
                                        <span class="text-gray-400 fs-6 fw-bold pe-2">All bookings listed below</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Slider widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart Widget 4-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-boldest text-dark fs-2">Sales</span>
                        <span class="text-gray-400 mt-2 fw-bold fs-6">100k+ sales templates sales</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-0">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center position-relative">
                        <div id="kt_chart_widget_4_chart" style="height: 250px; min-height: 197.55px;">
                            <div id="apexchartsdga544c9j"
                                class="apexcharts-canvas apexchartsdga544c9j apexcharts-theme-light"
                                style="width: 218px; height: 197.55px;"><svg id="SvgjsSvg1034" width="218"
                                    height="197.5500030517578" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1036" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(-3, 0)">
                                        <defs id="SvgjsDefs1035">
                                            <clipPath id="gridRectMaskdga544c9j">
                                                <rect id="SvgjsRect1038" width="232" height="250" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskdga544c9j"></clipPath>
                                            <clipPath id="nonForecastMaskdga544c9j"></clipPath>
                                            <clipPath id="gridRectMarkerMaskdga544c9j">
                                                <rect id="SvgjsRect1039" width="230" height="252" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1040" class="apexcharts-radialbar">
                                            <g id="SvgjsG1041">
                                                <g id="SvgjsG1042" class="apexcharts-tracks">
                                                    <g id="SvgjsG1043"
                                                        class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 196.28902439024392 113"
                                                            fill="none" fill-opacity="1" stroke="rgba(241,250,255,0.85)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="10.636585365853659" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 29.71097560975609 112.99999999999999 A 83.28902439024391 83.28902439024391 0 0 1 196.28902439024392 113">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1045">
                                                    <g id="SvgjsG1050"
                                                        class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="MyxAchievements" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1051"
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
                                                    <circle id="SvgjsCircle1046" r="77.97073170731709" cx="113" cy="113"
                                                        class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG1047" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1048" font-family="inherit" x="113" y="108"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="700" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: inherit;">My Achievements</text><text
                                                            id="SvgjsText1049" font-family="inherit" x="113" y="89"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="30px" font-weight="700" fill="#5e6278"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: inherit;">74%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1052" x1="0" y1="0" x2="226" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1053" x1="0" y1="0" x2="226" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1037" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 219px; height: 251px;"></div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
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
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">High Tower</a>
                                    <div class="fs-7 text-gray-400 fw-bold mt-1">34 Hours, 15 Commits</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-4 svg-icon-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
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
        <!--begin::Col-->
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
                        <span class="card-label fw-boldest text-gray-800 fs-2">Applied Bookings</span>
                    </h3>
                    <!--end::Heading-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-bordered table-row-dashed gy-5 table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th class='px-2 fw-bold text-uppercase'>
                                        CUSTOMER NAME
                                    </th>
                                    <th class='px-2 fw-bold text-uppercase'>
                                        ROOM
                                    </th>
                                    <th class='px-2 fw-bold text-uppercase text-center'>
                                        STATUS
                                    </th>
                                    
                                    <th class='px-2 fw-bold text-uppercase text-center'>
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($appliedBookings as $book)
									<tr>
										<td class='text-uppercase px-2 fw-boldest'>{{ $book->user->first_name }} {{ $book->user->last_name }}</td>
										<td class='text-uppercase px-2 fw-boldest'>{{ $book->room->name }}</td>
										<td class='text-uppercase px-2 fw-boldest text-center'>{{ $book->extras->count() }}</td>
										<td class='text-uppercase px-2 fw-boldest'>
											<span class='badge badge-success'>
												{{ $book->status }}
											</span>
										</td>
										<td class='text-uppercase px-2 fw-boldest text-center'>
											<button class='btn btn-primary btn-sm text-uppercase'>Approve</button>
										</td>
									</tr>
								@endforeach
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
            <!--begin::List Widget 1-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header align-items-center border-0 mt-5">
                    <!--begin::Card title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-boldest text-dark fs-2">Folders</span>
                        <span class="text-gray-400 mt-2 fw-bold fs-6">32 Active Folders</span>
                    </h3>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button"
                            class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                        </rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                        </rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                        </rect>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Specify a target name for future usage and reference"
                                        aria-label="Specify a target name for future usage and reference"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                    checked="checked" name="notifications">
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-1">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-gray-600">
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
                            <div class="ps-1 mb-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Piper Aerostar</a>
                                <div class="text-gray-400 fw-bold">piper-aircraft-class.jsp</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="label bg-light w-25px h-25px fs-7 fw-boldest">6</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-gray-600">
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
                            <div class="ps-1 mb-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Cirrus SR22</a>
                                <div class="text-gray-400 fw-bold">cirrus-aircraft.jsp</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="label bg-light w-25px h-25px fs-7 fw-boldest">3</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-gray-600">
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
                            <div class="ps-1 mb-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Beachcraft
                                    Baron</a>
                                <div class="text-gray-400 fw-bold">baron-class.pyt</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="label bg-light w-25px h-25px fs-7 fw-boldest">2</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-6">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-gray-600">
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
                            <div class="ps-1 mb-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Cessna SF150</a>
                                <div class="text-gray-400 fw-bold">cessna-aircraft-class.jsp</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="label bg-light w-25px h-25px fs-7 fw-boldest">1</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-6">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-gray-600">
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
                            <div class="ps-1 mb-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Cessna SF150</a>
                                <div class="text-gray-400 fw-bold">cessna-aircraft-class.jsp</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <span class="label bg-light w-25px h-25px fs-7 fw-boldest">1</span>
                        <!--end::Label-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::List Widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Container-->

<!--end::Post-->
@endsection
