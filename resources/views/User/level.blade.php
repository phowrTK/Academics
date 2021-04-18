@extends('User.header3')
@section('content2')
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>{{ $level->namelevel }}</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>

                        <li>{{ $level->namelevel }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="courses-page-top-area">
                                    <div class="courses-page-top-left">
                                        <p>Showing 13-24 of 50 results</p>
                                    </div>
                                    <div class="courses-page-top-right">
                                        <ul>
                                            <li><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                            <li class="active"><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="gried-view">
                                    @foreach($course as $kh)
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="courses-box1">
                                            <div class="single-item-wrapper">
                                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                                    <img style="max-width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $kh->hinh }}" alt="courses">
                                                    <a href="user/course/{{ $kh->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title"><a href="user/course/{{ $kh->idkh }}">{{substr($kh->namekh, 0, 20)}}...</a></h3>
                                                    <p class="item-content">{!! substr($kh->tomtac,0,50)!!}...</p>
                                                    <ul class="courses-info">
                                                        <li>Ngày đăng bài
                                                            <br><span> {{ $kh->created_at }}</span></li>
                                                        <li>Số lượt xem
                                                            <br><span> {{ $kh->soluotxem }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <!-- Listed product show -->
                                <div role="tabpanel" class="tab-pane active" id="list-view">

                                    @foreach($course as $kh)


                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="courses-box3">
                                            <div class="single-item-wrapper">
                                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                                    <img class="img-responsive" style="max-width:280px;height: 180px" src="Admin/update/{{ $kh->hinh }}" alt="courses">
                                                    <a href="user/course/{{ $kh->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title"><a href="user/course/{{ $kh->idkh }}">{{substr($kh->namekh, 0, 40)}}...</a></h3>
                                                    <p class="item-content">{!! substr($kh->tomtac,0,50)!!}...</p>
                                                    <ul class="courses-info">

                                                        <li>Ngày đăng bài
                                                            <br><span> {{ $kh->created_at }}</span></li>
                                                        <li>Số lượt xem
                                                            <br><span> {{ $kh->soluotxem }}</span></li>
                                                    </ul>
                                                    <div class="courses-fee">FREE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach




                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="pagination-left" style="text-align:center">
                                    {{ $course->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Find your Course</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Course Name" class="form-control" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-select">
                                                    <select id="district" class='select2'>
                                                        <option value="0">Categories</option>
                                                        <option value="1">Categories 1</option>
                                                        <option value="2">Categories 2</option>
                                                        <option value="4">Categories 3</option>
                                                        <option value="5">Categories 4</option>
                                                        <option value="6">Categories 5</option>
                                                        <option value="7">Categories 6</option>
                                                        <option value="8">Categories 7</option>
                                                        <option value="9">Categories 8</option>
                                                        <option value="10">Categories 9</option>
                                                        <option value="11">Categories 10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group remember-style">
                                                <span><input name="remember" type="checkbox">FREE</span>
                                                <span><input name="remember" type="checkbox">PAID</span>
                                            </div>
                                            <div class="form-group">
                                                <button class="sidebar-search-btn disabled" type="submit" value="Login">Search Course</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Class Categories</h3>
                                    <ul class="sidebar-categories">
                                        <li><a href="#">GMAT</a></li>
                                        <li><a href="#">IELTS</a></li>
                                        <li><a href="#">Regular MBA</a></li>
                                        <li><a href="#">BBA</a></li>
                                        <li><a href="#">CSE</a></li>
                                        <li><a href="#">Diploma</a></li>
                                        <li><a href="#">UI Design</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Search By Price</h3>
                                    <div id="price-range-wrapper" class="price-range-wrapper">
                                        <div id="price-range-filter"></div>
                                        <div class="price-range-select">
                                            <div class="price-range" id="price-range-min"></div>
                                            <div class="price-range" id="price-range-max"></div>
                                        </div>
                                        <button class="ghost-full-width-btn disabled" type="submit" value="Login">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-add-area overlay-primaryColor">
                                    <img src="{{ asset('User/img/banner/7.jpg') }}" class="img-responsive" alt="banner">
                                    <a href="#" class="sidebar-ghost-btn">Apply Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 1 Area End Here -->
@stop()
