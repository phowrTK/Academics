<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academics | Account</title>
    <meta name="description" content="">
    <base href="{{ asset('') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('User/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/animate.min.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('User/css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ asset('User/vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/meanmenu.min.css') }}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('User/vendor/slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('User/vendor/slider/css/preview.css') }}" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/jquery.datetimepicker.css') }}">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('User/css/select2.min.css') }}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/hover-min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('User/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('User/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    @include('User.layoutlogin')
                </div>

            @include('User.menu1')

            </div>







@yield('content2')







        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="index.html"><img class="img-responsive" src="{{ asset('User/img/logo-footer.png') }}" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.</p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Featured Links</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                            <li><a href="#">Graduation</a></li>
                                            <li><a href="#">Admissions</a></li>
                                            <li><a href="https://www.theidioms.com">Idioms</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Book store</a></li>
                                            <li><a href="#">Alumni</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Information</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:(01)800433633"> (01) 800 433 633 </a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@bostonea.com</li>
                                </ul>
                                <div class="newsletter-area">
                                    <h3>Newsletter</h3>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                        <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Flickr Photos</h3>
                                <ul class="flickr-photos">
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/1.jpg') }}" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/2.jpg') }}" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/3.jpg') }}" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/4.jpg') }}" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/5.jpg') }}" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="{{ asset('User/img/footer/6.jpg') }}" alt="flickr""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <p>&copy; 2020 Academics All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="payment-method">
                                <li>
                                    <a href="#"><img alt="payment-method" src="{{ asset('User/img/payment-method1.jpg') }}"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="{{ asset('User/img/payment-method2.jpg') }}"></a>
                                </li>
                                <li>
                                    <a href="https://theidioms.com"><img alt="Idioms" src="{{ asset('User/img/payment-method3.jpg') }}"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="{{ asset('User/img/payment-method4.jpg') }}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Preloaded Start Here -->
    <div id="preloader"></div>
    <!-- Preloaded End Here -->
    <!-- jquery-->
    <script src="{{ asset('User/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{ asset('User/js/plugins.js')}}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('User/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{ asset('User/js/wow.min.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('User/vendor/slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('User/vendor/slider/home.js') }}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('User/vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('User/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{ asset('User/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('User/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('User/js/waypoints.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ asset('User/js/jquery.countdown.min.js') }}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{ asset('User/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="{{ asset('User/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="{{ asset('User/js/select2.min.js') }}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{ asset('User/js/main.js') }}" type="text/javascript"></script>
</body>

</html>
