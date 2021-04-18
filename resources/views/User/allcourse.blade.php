@extends('User.header3')
@section('content2')
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>ALL COURSE</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 2 Area Start Here -->
        <div class="courses-page-area2">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="current">All</a>
                            {{--  @foreach($category as $ca)
                                <a href="#" data-filter=".diploma">{{ $ca->namecategory }}</a>
                            @endforeach  --}}

                            <a href="#" data-filter=".diploma">Vocaburaly</a>
                            <a href="#" data-filter=".cse">Grammar</a>
                            <a href="#" data-filter=".mathematics">Listening</a>
                            <a href="#" data-filter=".english">Speaking</a>
                            <a href="#" data-filter=".medical">Writing</a>


                        </div>
                    </div>
                </div>
                {{-- <div class="row featuredContainer">
                    @foreach($course as $kh)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse english">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $kh->hinh }}" alt="courses">
                                    <a href="user/course/{{ $kh->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $kh->idkh }}">{{substr($kh->namekh, 0, 20)}}...</a></h3>
                                    <p class="item-content">{{substr($kh->namekh, 3, 23)}}...</p>
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





                </div> --}}
                <div class="row featuredContainer">
                    @foreach($vocaburaly1 as $vo)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $vo->hinh }}" alt="courses">
                                    <a href="user/course/{{ $vo->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $vo->idkh }}">{{substr($vo->namekh, 0, 15)}}...</a></h3>
                                    <p class="item-content">{{substr($vo->namekh, 3, 23)}}...</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $vo->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $vo->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($vocaburaly2 as $vo2)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 cse">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $vo2->hinh }}" alt="courses">
                                    <a href="user/course/{{ $vo2->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $vo2->idkh }}">{{substr($vo2->namekh, 0, 20)}}...</a></h3>
                                    <p class="item-content">{{substr($vo2->namekh, 0, 20)}}...</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $vo2->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $vo2->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($vocaburaly3 as $vo3)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mathematics">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $vo3->hinh }}" alt="courses">
                                    <a href="user/course/{{ $vo3->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $vo3->idkh }}">{{substr($vo3->namekh, 0, 20)}}...</a></h3>
                                    <p class="item-content">{{substr($vo3->namekh, 3, 23)}}...</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $vo3->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $vo3->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($vocaburaly4 as $vo4)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 english">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $vo4->hinh }}" alt="courses">
                                    <a href="user/course/{{ $vo4->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $vo4->idkh }}">{{substr($vo4->namekh, 0, 20)}}...</a></h3>
                                    <p class="item-content">{{substr($vo4->namekh, 3, 23)}}...</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $vo4->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $vo4->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($vocaburaly5 as $vo5)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 medical">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img style="width:250px;height: 200px" class="img-responsive" src="Admin/update/{{ $vo5->hinh }}" alt="courses">
                                    <a href="user/course/{{ $vo5->idkh }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="user/course/{{ $vo5->idkh }}">{{substr($vo5->namekh, 0, 20)}}...</a></h3>
                                    <p class="item-content">{{substr($vo5->namekh, 3, 23)}}...</p>
                                    <ul class="courses-info">
                                        <li>Ngày đăng bài
                                            <br><span> {{ $vo5->created_at }}</span></li>
                                        <li>Số lượt xem
                                            <br><span> {{ $vo5->soluotxem }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Courses Page 2 Area End Here -->
@stop()
