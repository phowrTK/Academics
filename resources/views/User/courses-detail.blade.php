@extends('User.header4')
@section('content2')
<style>
    h2 {
        display: block;
        font-size: 1.5em;
        margin-top: 0.83em;
        margin-bottom: 0.83em;
        margin-left: 0;
        margin-right: 0;
        font-weight: bold;
        text-align:center;
        color: rgb(253, 164, 0);
      }
      h4 {
        display: block;
        font-size: 1.5em;
        margin-top: 1.33em;
        margin-bottom: 1.33em;
        margin-left: 0;
        margin-right: 0;
        font-weight: bold;
      }
</style>
    </header>

    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1> {{$course->namekh}} </h1>
                <ul>
                    <li><a href="#">{{ $course->level->namelevel }} -</a>
                    <li> {{ $course->namekh }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Courses Page 3 Area Start Here -->
    <div class="courses-page-area3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <form action="" method="post" accept-charset="utf-8">
                            @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img name="hinh" id="hinh" style="width:900px;height: 500px" src="Admin/update/{{ $course->hinh }}"
                                class="img-responsive" alt="course">
                            <div class="course-details-inner">
                                <div class="video-content">
                                <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="{{ $course->linkyoutube }}"><i class="fa fa-play" aria-hidden="true">Video</i></a>
                                </div>
                                @if ( $course->media != "")
                                <audio controls>
                                    <source src="Admin/update/{{ $course->media }}">
                                </audio>
                                @endif
                                <h3 name="tomtac" id="tomtac" class="title-default-left title-bar-high"> {!! $course->tomtac !!}</h3>
                                <p name="noidung" id="noidung" >{!! $course->noidung !!}</p>
                                <h4 class="sidebar-title">Chi tiết tin</h4>
                                <ul class="course-feature">
                                    <li>Thời gian đăng: {{ $course->created_at }}</li>

                                    <li>Người đăng khóa học: {{ $course->User->name }}</li>

                                    <li>Số lượt xem: {{ $course->soluotxem }}</li>


                                </ul>
                            </div>
                            <a href="get_download/{{$course->idkh}}" id="pdf"  class="download-btn">Download PDF</a>
                            </form>
                            <div class="section-divider"></div>




                            <div class="course-details-inner" >
                                <div>

                                    <form name="myform">
                                        @foreach ($tracnghiem as $tn)




                                            <h2>Bài Test Nhanh : {{ $tn->nametn }}</h2>
                                            @if(isset($cau1))
                                            <ul class="course-feature">
                                                <li style="margin-left:30px; text-size:10px" > <p style="color:rgb(255, 196, 0);font-size:18px;">Câu 1:{{ $cau1->noidung }}</p> </li>
                                            </ul>
                                            @if ($cau1->idda == 1)
                                                <input type="radio" name="question_01" value="a">{{ $cau1->a }}<br>
                                            @else
                                                <input type="radio" name="question_01" value="b"> {{ $cau1->a }}<br>
                                            @endif
                                            @if ($cau1->idda == 2)
                                                <input type="radio" name="question_01" value="a"> {{ $cau1->b }}<br>
                                            @else
                                                <input type="radio" name="question_01" value="b"> {{ $cau1->b }}<br>
                                            @endif
                                            @if ($cau1->idda == 3)
                                                <input type="radio" name="question_01" value="a"> {{ $cau1->c }}<br>
                                            @else
                                                <input type="radio" name="question_01" value="b"> {{ $cau1->c }}<br>
                                            @endif
                                            @if ($cau1->idda == 4)
                                                <input type="radio" name="question_01" value="a"> {{ $cau1->d }}<br>
                                            @else
                                                <input type="radio" name="question_01" value="b"> {{ $cau1->d }}<br>
                                            @endif
                                            <br>
                                            <div class="section-divider"></div>
                                            <br>
                                            @endif

                                            @if(isset($cau2))
                                            <ul class="course-feature">
                                                <li style="margin-left:30px; text-size:10px" > <p style="color:rgb(255, 196, 0);font-size:18px;">Câu 2 : {{ $cau2->noidung }}</p> </li>
                                            </ul>

                                            @if ($cau2->idda == 1)
                                                <input type="radio" name="question_02" value="a"> {{ $cau2->a }}<br>
                                            @else
                                                <input type="radio" name="question_02" value="b"> {{ $cau2->a }}<br>
                                            @endif
                                            @if ($cau2->idda == 2)
                                                <input type="radio" name="question_02" value="a"> {{ $cau2->b }}<br>
                                            @else
                                                <input type="radio" name="question_02" value="b"> {{ $cau2->b }}<br>
                                            @endif
                                            @if ($cau2->idda == 3)
                                                <input type="radio" name="question_02" value="a"> {{ $cau2->c }}<br>
                                            @else
                                                <input type="radio" name="question_02" value="b"> {{ $cau2->c }}<br>
                                            @endif
                                            @if ($cau2->idda == 4)
                                                <input type="radio" name="question_02" value="a"> {{ $cau2->d }}<br>
                                            @else
                                                <input type="radio" name="question_02" value="b"> {{ $cau2->d }}<br>
                                            @endif
                                            <br>
                                            <div class="section-divider"></div>
                                            <br>
                                            @endif

                                            @if(isset($cau3))
                                            <ul class="course-feature">
                                                <li style="margin-left:30px; text-size:10px" > <p style="color:rgb(255, 196, 0);font-size:18px;">Câu 3 : {{ $cau3->noidung }}</p> </li>
                                            </ul>

                                            @if ($cau3->idda == 1)
                                                <input type="radio" name="question_03" value="a"> {{ $cau3->a }}<br>
                                            @else
                                                <input type="radio" name="question_03" value="b"> {{ $cau3->a }}<br>
                                            @endif
                                            @if ($cau3->idda == 2)
                                                <input type="radio" name="question_03" value="a"> {{ $cau3->b }}<br>
                                            @else
                                                <input type="radio" name="question_03" value="b"> {{ $cau3->b }}<br>
                                            @endif
                                            @if ($cau3->idda == 3)
                                                <input type="radio" name="question_03" value="a"> {{ $cau3->c }}<br>
                                            @else
                                                <input type="radio" name="question_03" value="b"> {{ $cau3->c }}<br>
                                            @endif
                                            @if ($cau3->idda == 4)
                                                <input type="radio" name="question_03" value="a"> {{ $cau3->d }}<br>
                                            @else
                                                <input type="radio" name="question_03" value="b"> {{ $cau3->d }}<br>
                                            @endif

                                            <br>
                                            <div class="section-divider"></div>
                                            <br>
                                            @endif

                                            @if(isset($cau4))
                                            <ul class="course-feature">
                                                <li style="margin-left:30px; text-size:10px" > <p style="color:rgb(255, 196, 0);font-size:18px;">Câu 4 : {{ $cau4->noidung }}</p> </li>
                                            </ul>

                                            @if ($cau4->idda == 1)
                                                <input type="radio" name="question_04" value="a"> {{ $cau4->a }}<br>
                                            @else
                                                <input type="radio" name="question_04" value="b"> {{ $cau4->a }}<br>
                                            @endif
                                            @if ($cau4->idda == 2)
                                                <input type="radio" name="question_04" value="a"> {{ $cau4->b }}<br>
                                            @else
                                                <input type="radio" name="question_04" value="b"> {{ $cau4->b }}<br>
                                            @endif
                                            @if ($cau4->idda == 3)
                                                <input type="radio" name="question_04" value="a"> {{ $cau4->c }}<br>
                                            @else
                                                <input type="radio" name="question_04" value="b"> {{ $cau4->c }}<br>
                                            @endif
                                            @if ($cau4->idda == 4)
                                                <input type="radio" name="question_04" value="a"> {{ $cau4->d }}<br>
                                            @else
                                                <input type="radio" name="question_04" value="b"> {{ $cau4->d }}<br>
                                            @endif
                                            <br>
                                            <div class="section-divider"></div>
                                            <br>
                                            @endif


                                            @if(isset($cau5))
                                            <ul class="course-feature">
                                                <li style="margin-left:30px; text-size:10px" > <p style="color:rgb(255, 196, 0);font-size:18px;">Câu 5 : {{ $cau5->noidung }}</p> </li>
                                            </ul>

                                            @if ($cau5->idda == 1)
                                                <input type="radio" name="question_05" value="a"> {{ $cau5->a }}<br>
                                            @else
                                                <input type="radio" name="question_05" value="b"> {{ $cau5->a }}<br>
                                            @endif
                                            @if ($cau5->idda == 2)
                                                <input type="radio" name="question_05" value="a"> {{ $cau5->b }}<br>
                                            @else
                                                <input type="radio" name="question_05" value="b"> {{ $cau5->b }}<br>
                                            @endif
                                            @if ($cau5->idda == 3)
                                                <input type="radio" name="question_05" value="a"> {{ $cau5->c }}<br>
                                            @else
                                                <input type="radio" name="question_05" value="b"> {{ $cau5->c }}<br>
                                            @endif
                                            @if ($cau5->idda == 4)
                                                <input type="radio" name="question_05" value="a"> {{ $cau5->d }}<br>
                                            @else
                                                <input type="radio" name="question_05" value="b"> {{ $cau5->d }}<br>
                                            @endif
                                            @endif



                                        @endforeach
                                        @if(isset($cau1))
                                        <button style="margin-left:350px" type="button" class="btn btn-primary" value="submit" onclick="check()" > Kết Quả </button>
                                        @endif
                                    </form>


                                </div>

                            </div>

                            <div class="section-divider"></div>




                            {{-- <form name="myform">
                                Q1.What is the capital of Vietnam ?<br>
                                <input type="radio" name="question_01" value="a"> Da Nang<br>
                                <input type="radio" name="question_01" value="b"> Ho Chi Minh<br>
                                <input type="radio" name="question_01" value="c"> Ha Noi<br>
                                <input type="radio" name="question_01" value="d"> Hai Phong<br><br>

                                Q2. HTML stands for...?<br>
                                <input type="radio" name="question_02" value="a"> hypertext markup language<br>
                                <input type="radio" name="question_02" value="b"> hypertension markup language<br><br>

                                Q3. Which country is the largest in the world?<br>
                                <input type="radio" name="question_03" value="a"> Russia<br>
                                <input type="radio" name="question_03" value="b"> China<br>
                                <input type="radio" name="question_03" value="c"> America<br>
                                <input type="radio" name="question_03" value="d"> India<br><br>

                                <input type="button" value="submit" onclick="check()">
                            </form> --}}





                            <div class="course-details-inner">
                                <div class="course-details-comments">
                                    <h3 class="sidebar-title">Bình luận</h3>
                                    @foreach ($course->comment as $cm)


                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="Comments" src="User/img/course/18.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h3>{{ $cm->User->name }}</h3>
                                                <h4>{{ $cm->created_at }}</h4>
                                                <p>{{ $cm->content }}</p>
                                                <div class="replay-area">
                                                    <ul>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>


                                @if (Auth::check())
                                    <div class="leave-comments">
                                        <h3 class="sidebar-title">Bình luận bài viết</h3>
                                        <div class="row">
                                            <div class="contact-form" id="review-form">
                                                @if (session('thongbao'))
                                                    {{ session('thongbao') }}
                                                @endif
                                                <form action="user/comment/{{ $course->idkh }}" role="form" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <fieldset>


                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea placeholder="Comment" name="content"
                                                                    class="textarea form-control" id="form-message" rows="8"
                                                                    cols="20"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button type="submit" name="comment"
                                                                    class="view-all-accent-btn">Gửi</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Course Price</h3>
                                <div class="sidebar-course-price">
                                    <span>FREE</span>
                                    <a href="#" class="enroll-btn">Enroll THis Course</a>

                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Từ điển Anh-Việt</h3>
                                <div class="sidebar-question-form">
                                    <form method="POST" action="{{ route('dich') }}" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <fieldset>
                                            <div class="form-group">
                                                <textarea placeholder="Tiếng Anh" class="textarea form-control"
                                                    name="english" id="sidebar-form-message" rows="3" cols="20"
                                                    data-error="Message field is required" ></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            @if(session('dich'))
                                            <div class="form-group">
                                                <input type="text" value="{{ session('dich') }}" disabled class="form-control"/>
                                            </div>
                                            @endif
                                            <div class="form-group">
                                                <button name="btndich" id="btndich" class="default-full-width-btn">Dịch</button>
                                            </div>
                                            <div class='form-response'></div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Bài viết liên quan</h3>
                                <div class="sidebar-skilled-area">
                                    <ul>
                                        @foreach ($courselienquan as $lq)
                                            <li>
                                                <div class="skilled-img">
                                                    <a href="user/course/{{ $lq->idkh }}"><img
                                                            style="max-width:120px;height: 50px"
                                                            src="Admin/update/{{ $lq->hinh }}" class="img-responsive"
                                                            alt="skilled"></a>
                                                </div>
                                                <div class="skilled-content">
                                                    <h4><a href="user/course/{{ $lq->idkh }}">{{substr($lq->namekh, 0, 13)}}... </a></h4>
                                                    <p>{!!substr($lq->tomtac, 3, 19)!!}...</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Related Courses</h3>
                                <div class="sidebar-related-area">
                                    <ul>
                                        <li>
                                            <div class="related-img">
                                                <a href="#"><img src="User/img/sidebar/4.jpg" class="img-responsive"
                                                        alt="related"></a>
                                            </div>
                                            <div class="related-content">
                                                <h4><a href="#">GMAT Class</a></h4>
                                                <p>$159</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="related-img">
                                                <a href="#"><img src="User/img/sidebar/5.jpg" class="img-responsive"
                                                        alt="related"></a>
                                            </div>
                                            <div class="related-content">
                                                <h4><a href="#">IELTS Class</a></h4>
                                                <p>$200</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="related-img">
                                                <a href="#"><img src="User/img/sidebar/6.jpg" class="img-responsive"
                                                        alt="related"></a>
                                            </div>
                                            <div class="related-content">
                                                <h4><a href="#">Joomla Class</a></h4>
                                                <p>$120</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="related-img">
                                                <a href="#"><img src="User/img/sidebar/7.jpg" class="img-responsive"
                                                        alt="related"></a>
                                            </div>
                                            <div class="related-content">
                                                <h4><a href="#">Graphic Desing</a></h4>
                                                <p>$300</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Course Reviews</h3>
                                <div class="sidebar-course-reviews">
                                    <h4>Average Rating<span>4.8</span></h4>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <div class="skill-area">
                                        <div class="progress">
                                            <div class="lead">5 Stars </div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 100%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="100%" class="progress-bar wow fadeInLeft  animated"></div>
                                            <span>10</span>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">4 Stars</div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div>
                                            <span>6</span>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">3 Stars</div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 60%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="60%" class="progress-bar wow fadeInLeft  animated"></div>
                                            <span>3</span>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">2 Stars</div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div>
                                            <span>0</span>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">1 Stars</div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Page 3 Area End Here -->
@stop()
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('script')


    <script type="text/javascript">
        function check() {
            var count = 0;
            var kq1 = "";
            var kq2 = "";
            var kq3 = "";
            var kq4 = "";
            var kq5 = "";
            if(document.myform.question_01 !== undefined)
            {
                var cau1 = document.myform.question_01.value;
                if (cau1 == "a") {
                    count++;
                    kq1 = "đúng"
                }else{
                    kq1 = "sai"
                }
            }

            if(document.myform.question_02 !== undefined)
            {
                var cau2 = document.myform.question_02.value;
                if (cau2 == "a") {
                    count++;
                    kq2 = "đúng"
                }else{
                    kq2 = "sai"
                }
            }

            if(document.myform.question_03 !== undefined)
            {
                var cau3 = document.myform.question_03.value;
                if (cau3 == "a") {
                    count++;
                    kq3 = "đúng"
                }else{
                    kq3 = "sai"
                }
            }

            if(document.myform.question_04 !== undefined)
            {
                var cau4 = document.myform.question_04.value;
                if (cau4 == "a") {
                    count++;
                    kq4 = "đúng"
                }else{
                    kq4 = "sai"
                }
            }

            if(document.myform.question_05 !== undefined)
            {
                var cau5 = document.myform.question_05.value;
                if (cau5 == "a") {
                    count++;
                    kq5 = "đúng"
                }else{
                    kq5 = "sai"
                }
            }

            alert("Bạn đã làm đúng " + count + " câu.\nCâu 1 " + kq1 + ".\nCâu 2 " + kq2 + ".\nCâu 3 " + kq3 + ".\nCâu 4 " + kq4 + ".\nCâu 5 " + kq5 + ".");

        }

    </script>





@endsection


{{-- <script>
    $(document).ready(function(){

        // Get value on button click and show alert
        $( "#pdf" ).click(function() {


                var url="{{ route('dowloadpdf') }}";
                var fulllink   = window.location.href;
                var item_link=fulllink.split("/");
                var id = item_link[item_link.length-1];
                $.get({
                    type:'GET',
                    url:url,
                    data:{
                        id:id
                    },
                    success:function(result){

alert(result);

                    }
                });




        });
    });
    </script> --}}
