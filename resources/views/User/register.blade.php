@extends('User.header2')
@section('content2')
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>ĐĂNG KÝ</h1>
                    <ul>
                        <li><a href="user/index2">Home</a> -</li>
                        <li>Đăng ký</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Registration Page Area Start Here -->
        <div class="registration-page-area bg-secondary">
            <div class="container">
                <h2 class="sidebar-title">ĐĂNG KÝ TÀI KHOẢN</h2>
                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{ $err }} <br />
                                    @endforeach
                                </div>

                            @endif

                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                <div class="registration-details-area inner-page-padding">
                    <form id="checkout-form" action="user/register" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Họ và tên *</label>
                                    <input type="text" id="user-name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Mật khẩu *</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="last-name">Nhập lại mật khẩu *</label>
                                    <input type="password" id="againpassword" name="againpassword" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="address">Địa chỉ *</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Số điện thoại *</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pLace-order mt-30">
                                    <button class="view-all-accent-btn disabled" type="submit" name="register" value="Login">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Registration Page Area End Here -->
@stop()
