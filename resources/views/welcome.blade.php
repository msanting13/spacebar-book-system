<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/theme/royal/image/xfavicon.png.pagespeed.ic.zt2CzDLXlD.png') }}" type="image/png">
    <title>Welcome to {{  config('app.name') }}</title>

    <link rel="stylesheet"
        href="{{ asset('/theme/royal/A.css%2c%2c_bootstrap.css%2bvendors%2c%2c_linericon%2c%2c_style.css%2bcss%2c%2c_font-awesome.min.css%2bvendors%2c%2c_owl-carousel%2c%2c_owl.carousel.min.css%2bvendors%2c%2c_bootstrap-datepicker%2c%2c_bootst') }}" />

    <link rel="stylesheet"
        href="{{ asset('/theme/royal/css/A.style.css%2bresponsive.css%2cMcc.FaCKucbutY.css.pagespeed.cf.U3vKnfIhMT.css') }}" />
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
                    <h6>Away from monotonous life</h6>
                    <h2>Chill And Relax</h2>
                    <p>
                        Find the place where you can just go, chill and relax.
                    </p>
                    <a href="{{ route('user.booking.index') }}" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
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
        </div>
    </section>


    <section class="accomodation_area section_gap" id='accomodation'>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Rooms</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                @foreach($rooms as $room)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                            @if($room->image->count() != 0)
                                <img src="{{ asset('/storage/uploads/' . $room->image->first()->photo) }}" height="275px" alt="">
                            @else
                                <img src="{{ asset('/theme/royal/image/xroom1.jpg.pagespeed.ic.GE_Jw5sZi4.jpg') }}" alt="">
                            @endif
                                <a href="{{ route('user.booking.index') }}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">{{ $room->name }}</h4>
                                <h4 class="sec_h4">PHP {{ $room->price }}</h4>
                                <h4 class="sec_h4">{{ $room->capacity }} CAPACITY</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
                
                
                
            </div>
        </div>
    </section>


    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center" id='facilities'>
                <h2 class="title_w">Chill and Relax Facilities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
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
                        <p>{{ $page->content ?? 'No Content' }}</p>
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
                <div class="col-lg-6  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has come to a point </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy; {{ date('Y') }} All rights reserved
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
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
</body>

</html>
