<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academics | Home 2</title>
    <meta name="description" content="">
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
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/hover-min.css') }}">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{{ asset('User/css/reImageGrid.css') }}">
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
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href=""> 0976503054 </a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">17DTHA2@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>

                            @if(Auth::check())




                            <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                <div class="header-top-right">
                                    <ul>
                                        <li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a href="profile">{{Auth::user()->name}}</a>  </li>
                                        <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>



                            @else


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-right">
                                    <ul>
                                        <li>

                                    <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                                    <div class="login-form" id="login-form" style="display: none;">
                                        <div class="title-default-left-bold">Login</div>
                                        <form class="login100-form validate-form" role="form" action="{{asset('admin/login')}}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            @if (session('thongbao'))
                                            <div class="alert alert-success">
                                                {{ session('thongbao') }}
                                            </div>
                                        @endif
                                            @csrf
                                            <label>Username or email address *</label>
                                            <input type="text" name="email" placeholder="Name or E-mail" />
                                            <label>Password *</label>
                                            <input type="password" name="password" placeholder="Password" />
                                            <div class="row">


                                                <a  href="{{ route('loginfacebook') }}"><button type="button" style="background:white; color:4285f4; border:none; width:110px; height:40px; border-radius:3%;"><img src="https://assets.stickpng.com/images/584ac2d03ac3a570f94a666d.png" style="width:30px; background:white; border-radius:50%;" alt=""><b style="top: -10px; left: 5px; position: relative">Facebook</b></button></a>
                                                <a  href="{{ route('logingoogle') }}"><button type="button" style="background:white; color:4285f4; border:none; width:110px; height:40px; border-radius:3%;"><img src="https://www.iconfinder.com/data/icons/social-media-2210/24/Google-512.png" style="width:30px; background:white; border-radius:50%;" alt=""><b style="top: -10px; left: 5px; position: relative">Google</b></button></a>

                                            </div>
                                            <label class="check">Nếu bạn chưa có tài khoản?<a>Đăng ký</a> </label>
                                            <span><a href="{{ route('forgetpassword') }}">Quên mật khẩu</a></span>
                                            <button class="default-big-btn" type="submit" value="Login">Login</button>
                                            <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                                        </form>
                                    </div>

                                        </li>
                                        <li>
                                            <div class="apply-btn-area">
                                                <a href="#" class="apply-now-btn">Apply Now</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>


                @include('User.menu3')



        </header>
        <!-- Header Area End Here -->
        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="img/slider/2-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="img/slider/2-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="img/slider/1-2.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">ACADEMICS Website hỗ trợ học tiếng Anh</div>
                            <p> Nhiều khóa học theo thể loại và cấp độ khác nhau hoàn toàn miễn phí <br> Hãy trải nghiệm những khóa học chúng tôi dành cho bạn </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Bắt đầu khóa học</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            <div class="title1">ACADEMICS Website hỗ trợ học tiếng Anh</div>
                            <p>Nhiều khóa học theo thể loại và cấp độ khác nhau hoàn toàn miễn phí <br> Hãy trải nghiệm những khóa học chúng tôi dành cho bạn</p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Bắt đầu khóa học</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            <div class="title1">ACADEMICS Website hỗ trợ học tiếng Anh</div>
                            <p>Nhiều khóa học theo thể loại và cấp độ khác nhau hoàn toàn miễn phí <br> Hãy trải nghiệm những khóa học chúng tôi dành cho bạn </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Bắt đầu khóa học</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
        <!-- About 2 Area Start Here -->
        <div class="about2-area">
            <div class="container">
                <h1 class="about-title">Welcome To ACADEMICS</h1>
                <p class="about-sub-title">Nơi học tập, cải thiện và nâng cao tiếng Anh cho bản thân bạn một cách nhanh chóng <br> rất nhiều khóa học phong phú đang chờ đợi bạn.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Tài Liệu Tiếng Anh</a></h3>
                            <p>Đầy đủ các tài liệu liên quan đến kiến thức tiếng Anh. Từ cơ bản đến nâng cao.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Kỹ Năng Tiếng Anh</a></h3>
                            <p>Rất nhiều khóa học liên quan đến kỹ năng đọc, viết, nghe, nói</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Hệ thống trắc nghiệm</a></h3>
                            <p>Trong mỗi khóa học đều có nhưng bài trắc nghiệm liên quan đến khóa học giúp bạn đánh giá nhanh được kiến thức.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About 2 Area End Here -->
        <!-- Featured Area Start Here -->
        <div class="featured-area bg-common-style" style="background-image: url('img/featured/back.jpg');">
            <div class="container">
                <h2 class="title-default-textPrimary-left">THỂ LOẠI KHÓA HỌC</h2>
            </div>
            <div class="container">
                <div class="row featured-wrapper" id="gallery-wrapper">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/1.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/1.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Basic Philosopphy</a></h3>
                                <p>Rimply dummy text of the printing and typesetting industry when an unknown printer took a galley scrambled.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/2.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/2.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">GMET</a></h3>
                                <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/3.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/3.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">CSE Science</a></h3>
                                <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/4.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/4.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Regular MBA</a></h3>
                                <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/5.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/5.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Graphic Design</a></h3>
                                <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-btn-area">
                    <a href="allcourse" class="ghost-btn-big">Tất cả khóa học</a>
                </div>
            </div>
        </div>
        <!-- Featured Area End Here -->
        <!-- Lecturers Area Start Here -->
        <div class="lecturers-area">
            <div class="container">
                <h2 class="title-default-left">Các khóa học nổi bật</h2>
            </div>
            <div class="container">





                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    @foreach($category as $ca)
                    <div class="single-item">

                        <div class="lecturers1-item-wrapper">


                            <?php

                            $data = $ca->course->where('idkh')->take(5);
                            $course1 = $data->shift();

                            ?>
                            @if(isset($course1))
                            <div  class="lecturers-img-wrapper">

                                <img style="max-width:200px;height: 150px;margin-left: 30px"  class="img-responsive" src="../Admin/update/{{ $course1['hinh']}}" >

                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="course/{{ $course1['idkh'] }}">{{substr($course1['namekh'], 0, 20)}}...</a></h3>
                                <h3 class="item-title"><a href="course/{{ $course1['idkh'] }}">{!!substr($course1['tomtac'], 0, 29)!!}...</a></h3>



                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Lecturers Area End Here -->
        <!-- Video Area Start Here -->
        <div class="video-area overlay-video bg-common-style" style="background-image: url('img/banner/1.jpg');">
            <div class="container">
                <div class="video-content">
                    <h2 class="video-title">Watch Campus Life Video Tour</h2>
                    <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem
                        <br>Ipsum industry's standard dum an unknowramble.</p>
                    <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="https://www.youtube.com/watch?v=tosYNLutaLw"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Video Area End Here -->
        <!-- News and Event Area Start Here -->
        <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Latest News</h2>
                        <ul class="news-wrapper">
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="img/news/1.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Summer Course Start From 1st June</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="img/news/2.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Guest Interview will Occur Soon</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="img/news/3.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Easy English Learning Way</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Upcoming Events</h2>
                        <ul class="event-wrapper">
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Jan</p>
                                        <span>2017</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Html MeetUp Conference 2017</a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>04:00 PM - 06:00 PM</li>
                                        <li>Australia , Melborn</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Jan</p>
                                        <span>2017</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Workshop On UI Design</a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>03:00 PM - 05:00 PM</li>
                                        <li>Australia , Melborn</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="event-btn-holder">
                            <a href="#" class="view-all-primary-btn">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->
        <!-- Counter Area Start Here -->
        <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="80">80</h2>
                        <p>PROFESSIONAL TEACHER</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="20">20</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                        <p>REGISTERED STUDENTS</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Publications Area Start Here -->
        <div class="publications-area">
            <div class="container">
                <h2 class="title-default-left">Our Publications</h2>
            </div>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/1.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Robert - Philosophy</a></h3>
                                <span class="item-price">$350</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/2.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">GMAT</a></h3>
                                <span class="item-price">$250</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/3.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                <span class="item-price">$430</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/4.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                <span class="item-price">$190</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/1.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                <span class="item-price">$430</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="img/product/3.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                <span class="item-price">$190</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Publications Area End Here -->
        <!-- Students Join 2 Area Start Here -->
        <div class="students-join2-area">
            <div class="container">
                <div class="students-join2-wrapper">
                    <div class="students-join2-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="students-join2-right">
                        <div>
                            <h2>Join<span> 29,12,093</span> Students.</h2>
                            <a href="#" class="join-now-primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 2 Area End Here -->
        <!-- Brand Area Start Here -->
        <div class="brand-area">
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="img/brand/4.jpg" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="index.html"><img class="img-responsive" src="img/logo-footer.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Wedsite hỗ trợ học tiếng Anh hoàn toàn miễn phí. Bạn có thể liên hệ chúng tôi với nhiều hình thức dưới đây</p>
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
                                            <li><a href="#">Khóa học</a></li>
                                            <li><a href="#">Thể loại</a></li>
                                            <li><a href="https://www.theidioms.com">Cấp độ</a></li>
                                            <li><a href="#">Đăng nhập</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Thông tin thêm</a></li>
                                            <li><a href="#">Tài khoản</a></li>
                                            <li><a href="#">Góp ý</a></li>
                                            <li><a href="#">Đăng ký</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Liên hệ</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:0976503054"> 0976503054 </a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>17DTHA2@gmail.com</li>
                                </ul>
                                <div class="newsletter-area">
                                    <h3>Email</h3>
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
                                <h3>Hình Ảnh</h3>
                                <ul class="flickr-photos">
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/1.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/2.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/3.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/4.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/5.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/6.jpg" alt="flickr"></a>
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
                            <p>&copy; 2021 Wedsite ACADEMICS</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="payment-method">
                                <li>
                                    <a href="#"><img alt="payment-method" src="img/payment-method1.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="img/payment-method2.jpg"></a>
                                </li>
                                <li>
                                    <a href="https://theidioms.com"><img alt="Idioms" src="img/payment-method3.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="img/payment-method4.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
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
    <script src="{{ asset('User/js/jquery.gridrotator.js') }}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{ asset('User/js/main.js') }}" type="text/javascript"></script>
</body>

</html>
