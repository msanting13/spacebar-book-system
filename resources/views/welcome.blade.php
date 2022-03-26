<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/theme/royal/image/xfavicon.png.pagespeed.ic.zt2CzDLXlD.png') }}" type="image/png">
    <title>Welcome to {{  config('app.name') }}</title>
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
        integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="{{ asset('/theme/royal/A.css%2c%2c_bootstrap.css%2bvendors%2c%2c_linericon%2c%2c_style.css%2bcss%2c%2c_font-awesome.min.css%2bvendors%2c%2c_owl-carousel%2c%2c_owl.carousel.min.css%2bvendors%2c%2c_bootstrap-datepicker%2c%2c_bootst') }}" />

    <link rel="stylesheet"
        href="{{ asset('/theme/royal/css/A.style.css%2bresponsive.css%2cMcc.FaCKucbutY.css.pagespeed.cf.U3vKnfIhMT.css') }}" />

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <style>
        .card {
            margin: 0 auto;
            border: none;
        }

        .card .carousel-item {
            min-height: 190px;
        }

        .card .carousel-caption {
            right: 15px;
            left: 15px;
            top: 15px;
            color: #3d3d3d;
            border: 1px solid #ccc;
            min-height: 175px;
            padding: 15px;
        }

        .card .carousel-caption .col-sm-3 {
            display: flex;
            align-items: center;
        }

        .card .carousel-caption .col-sm-9 {
            text-align: left;
        }

        .card .carousel-control-prev,
        .card .carousel-control-next {
            color: white !important;
            opacity: 1 !important;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-image: none;
            color: #fff;
            font-size: 14px;
            background-color: #cd3a54;
            height: 32px;
            line-height: 32px;
            width: 32px;
        }

        .carousel-control-prev {
            left: 40%;
            top: 110%;
        }

        .carousel-control-next {
            right: 40%;
            top: 110%;
        }


        .carousel-caption h2 {
            font-size: 14px;
        }

        .carousel-caption h2 span {
            color: #cd3a54;
        }

        @media (min-width: 320px) and (max-width: 575px) {
            .carousel-caption {
                position: relative;
            }

            .card .carousel-caption {
                left: 0;
                top: 0;
                margin-bottom: 15px;
            }

            .card .carousel-caption img {
                margin: 0 auto;
            }

            .carousel-control-prev {
                left: 35%;
                top: 105%;
            }

            .carousel-control-next {
                right: 35%;
                top: 105%;
            }

            .card .carousel-caption h3 {
                margin-top: 0;
                font-size: 16px;
                font-weight: 700;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .carousel-caption {
                position: relative;
            }

            .card .carousel-caption {
                left: 0;
                top: 0;
                margin-bottom: 15px;
            }

            .card .carousel-caption img {
                margin: 0 auto;
            }

            .card .carousel-caption h3,
            .card .carousel-caption small {
                text-align: center;
            }

            .carousel-control-prev {
                left: 35%;
                top: 105%;
            }

            .carousel-control-next {
                right: 35%;
                top: 105%;
            }
        }

        @media (min-width: 767px) and (max-width: 991px) {
            .card .carousel-caption h3 {
                margin-top: 0;
                font-size: 16px;
                font-weight: 700;
            }
        }

    </style>

</head>

<body>

    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo_h" href="index-2.html"><img
                        src="{{ asset('/theme/royal/image/xLogo.png.pagespeed.ic.bptWT17dNg.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#accomodation">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="#facilities">Facilities</a></li>
                        @auth
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">My Account</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign in / Sign Up</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h4>Away from monotonous life</>
                    <h2>{{ config('app.name') }}</h2>
                    <h4>
                        Find the place where you can just go, chill and relax.
                    </h4>
                    <a href="{{ route('user.booking.index') }}" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
        {{-- <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="CHECK IN" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="CHECK OUT" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button class='btn theme_btn button_hover'>BOOK YOUR ROOM</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>


    <section class="accomodation_area section_gap" id='accomodation'>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color text-uppercase">Rooms & Function Halls</h2>
                <p class='text-black fs-3'>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                @foreach($rooms->take(6) as $room)
                <div class="col-lg-3 mb-5 col-sm-6 shadow-sm mx-5">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img ">
                            @if($room->image->count() != 0)
                            <img src="{{ asset('/storage/uploads/' . $room->image->first()->photo) }}" height="275px"
                                alt="">
                            @else
                            <img src="{{ asset('/theme/royal/image/xroom1.jpg.pagespeed.ic.GE_Jw5sZi4.jpg') }}" alt="">
                            @endif
                            <a href="{{ route('user.booking.bookform', $room->id) }}"
                                class="btn theme_btn button_hover">Book Now</a>
                        </div>
                            <h4 class="sec_h4">{{ $room->name }}</h4>
                            <p class='fs-4 text-black'>
                                <span class='text-capitalize'>{{ $room->type }}</span>
                                <div class="separator separator-dashed border-dark my-3"></div>
                                <span class='text-capitalize  fs-4 text-black'>&#8369;{{ $room->price }}</span>
                                <div class="separator separator-dashed border-dark my-3"></div>
                                <span class='text-capitalize  fs-4 text-black'>{{ $room->roomType->type_name }}</span>
                            </p>
                    </div>
                </div>
                @endforeach
                @if($rooms->count() >= 6)
                    <a href="{{ route('user.rooms.index', $room->id) }}"
                                class="btn theme_btn button_hover">SEE MORE</a>
                @endif
            </div>
        </div>
    </section>

    <div class='footer-area section_gap'>
         <div class="container">
            <div class="section_title text-center" id='facilities'>
                <h2 class="title_w text-uppercase">Facilities</h2>
                <p class='text-white fs-3'>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                @foreach($facilities as $facility)
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h1 class="sec_h1">{{ $facility->title }}</>
                        {!! $facility->content !!}
                        <a href="{{ asset('storage/uploads/' . $facility->image) }}"
                            data-lightbox="{{ $facility->title }}">
                            <img src="{{ asset('storage/uploads/' . $facility->image) }}"
                                class='img-fluid img-thumbnail mt-3' alt="">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center text-dark text-uppercase">What other say for us</h2>
            <div class="card col-md-12 mt-2">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                    <div class="w-100 carousel-inner mb-5" role="listbox">
                        <div class="row">
                            @foreach($feedbacks as $feedback)
                            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                <div class="bg"></div>
                                <div class="col-md-12">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="">
                                                    <h2 class='text-uppercase '>{{ $feedback->user->first_name ?? 'Satisfied Customer' }}
                                                        {{ $feedback->user->last_name ?? '' }}</h2>
                                                    <div
                                                        class="rating d-flex align-items-center justify-content-center">
                                                        @foreach(range(1, $feedback->rating) as $rate)
                                                        <label class="rating-label" for="kt_rating_2_input_1">
                                                            <span class="svg-icon svg-icon-1"><svg><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                                    </svg></svg></span>
                                                        </label>
                                                        <input class="rating-input" id="kt_rating_2_input_1" />
                                                        @endforeach

                                                    </div>
                                                </div>

                                                <p class='fs-3 text-black mt-3'>
                                                    {{ $feedback->content }}
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fas fa-chevron-left text-white"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fas fa-chevron-right text-white"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                @foreach($pages as $page)
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content">
                        <h2 class="title title_color">{{ $page->title ?? 'No title' }}</h2>
                        <p class='text-black fs-4'>{!! $page->content ?? 'No Content' !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid"
                        src="{{ asset('/theme/royal/image/xabout_bg.jpg.pagespeed.ic.2Y8QqB4mwP.jpg') }}" alt="img">
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has come to a point </p>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy; {{ date('Y') }} {{ config('app.name') }}
                </p>
                {{-- <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div> --}}
            </div>
        </div>
    </footer>



    <script src="{{ asset('/theme/royal/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/theme/royal/js/popper.js%2bbootstrap.min.js.pagespeed.jc.aCxZ2lnAlx.js') }}"></script>
    <script
        src="{{ asset('/theme/royal/vendors%2c_owl-carousel%2c_owl.carousel.min.js%2bjs%2c_jquery.ajaxchimp.min.js%2bjs%2c_mail-script.js%2bvendors%2c_bootstrap-datepicker%2c_bootstrap-datetimepicker.min.js.pagespeed.jc') }}">
    </script>
    <script
        src="{{ asset('/theme/royal/vendors%2c_nice-select%2c_js%2c_jquery.nice-select.js%2bjs%2c_mail-script.js%2bjs%2c_stellar.js%2bvendors%2c_lightbox%2c_simpleLightbox.min.js%2bjs%2c_custom.js.pagespeed.jc.AAP_0Kq5Mn.21.de') }}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
