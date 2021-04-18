<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-top-left">
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> 0976503054 </a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">17DTHA2@gmail.com</a></li>
                </ul>
            </div>
        </div>
        @if(Auth::check())




        <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-top-left">
            <div class="header-top-right">
                <ul>
                    <li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a href="user/profile">{{Auth::user()->name}}</a>  </li>
                    <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="user/logout">Logout</a></li>
                </ul>
            </div>
        </div>
        </div>



        @else


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-top-right">
                <ul>
                    <li>




                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                        <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                        <div class="login-form" id="login-form" style="display: none;">
                            <div class="title-default-left-bold">Đăng nhập</div>
                            <form class="login100-form validate-form" role="form" action="{{asset('admin/login')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                @csrf
                                <label> Email *</label>
                                <input type="text" name="email" placeholder="E-mail" />
                                <label>Mật Khẩu *</label>
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
