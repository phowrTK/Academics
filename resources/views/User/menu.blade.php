<div class="main-menu-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3">
                <div class="logo-area">
                    <a href="index.html"><img class="img-responsive" src="{{ asset('User/img/logo-primary.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <nav id="desktop-nav">
                    <ul>

                        <li><a href="user/index2">Home</a>
                            <ul>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index2.html">Home 2</a></li>
                                <li><a href="index3.html">Home 3</a></li>
                                <li><a href="index4.html">Home 4</a></li>
                            </ul>
                        </li>



                        <li><a href="user/allcourse">COURSE</a>

                            <ul>
                                @foreach($category as $ca)
                                <li class="has-child-menu"><a href="#">{{ $ca->namecategory }}</a>
                                    <ul class="thired-level">
                                        @foreach($ca->level as $lv)
                                        <li><a href="user/level/{{ $lv->idlevel }}">{{ $lv->namelevel }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

                        </li>



                        <li class="active"><a href="#">Pages</a>
                            <ul class="mega-menu-area">
                                <li>
                                    <a href="about1.html">About 1</a>
                                    <a href="about2.html">About 2</a>
                                    <a href="about3.html">About 3</a>
                                    <a href="about4.html">About 4</a>
                                </li>
                                <li>
                                    <a href="lecturers1.html">lecturers 1</a>
                                    <a href="lecturers2.html">lecturers 2</a>
                                    <a href="single-lecturers.html">lecturers Details</a>
                                    <a href="pricing1.html">Pricing Plan 1</a>
                                </li>
                                <li>
                                    <a href="pricing2.html">Pricing Plan 2</a>
                                    <a href="shop1.html">Shop 1</a>
                                    <a href="shop2.html">Shop 2</a>
                                    <a href="single-shop.html">Shop Details</a>
                                </li>
                                <li>
                                    <a class="active" href="account.html">Account</a>
                                    <a href="registration.html">Registration</a>
                                    <a href="faq.html">Faq</a>
                                    <a href="404.html">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Category</a>
                            <ul>
                                <li><a href="courses1.html">Courses 1</a></li>
                                <li><a href="courses2.html">Courses 2</a></li>
                                <li><a href="courses3.html">Courses 3</a></li>
                                <li><a href="single-courses1.html">Course Details 1</a></li>
                                <li><a href="single-courses2.html">Course Details 2</a></li>
                                <li><a href="single-courses3.html">Course Details 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Research</a>
                            <ul>
                                <li><a href="research1.html">Research 1</a></li>
                                <li><a href="research2.html">Research 2</a></li>
                                <li><a href="research3.html">Research 3</a></li>
                                <li><a href="single-research.html">Research Details</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Gallery</a>
                            <ul>
                                <li><a href="gallery1.html">Gallery 1</a></li>
                                <li><a href="gallery2.html">Gallery 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ACCOUNT</a>
                            <ul>
                                @if(Auth::check())
                                <li><a href="{{ asset('user/profile') }}">PROFILE</a></li>
                                <li><a href="chatify">CHAT</a></li>
                                    @if(Auth::user()->level == 0)
                                    <li><a href="user/quyen">QUYỀN</a></li>
                                    @endif
                                    @if(Auth::user()->level == 1)
                                        <li><a href="../public/admin/index">ADMIN</a></li>
                                    @endif
                                    @if(Auth::user()->level == 2)
                                        <li><a href="user/dangkhoahoc">GIẢNG VIÊN</a></li>
                                    @endif
                                @endif
                                <li><a href="{{ asset('user/register') }}">REGISTER</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm">
                <div class="header-search">
                    <form>
                        <input type="text" class="search-form" placeholder="Search...." required="">
                        <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


