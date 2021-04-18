@extends('User.header2')
@section('content2')
    </header>
    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>ĐĂNG KÝ GIẢNG VIÊN</h1>
                <ul>
                    <li><a href="user/index2">Home</a> -</li>
                    <li>Đăng ký giảng viên</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Registration Page Area Start Here -->
    <div class="registration-page-area bg-secondary">
        <div class="container">
            <h2 class="sidebar-title">ĐĂNG KÝ GIẢNG VIÊN</h2>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        {{ $err }} <br />
                    @endforeach
                </div>

            @endif

            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
            <form id="checkout-form" action="user/quyen" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="registration-details-area inner-page-padding">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Nghề Nghiệp *</label>
                                <input type="text" id="nghenghiep" name="nghenghiep" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Trình độ *</label>
                                <input type="text" id="trinhdo" name="trinhdo" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div style="margin-left:5px" class="row">


                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Hình ảnh minh chứng</span></div>
                            <input type="file" name="hinh" class="form-control">
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pLace-order mt-30">
                                <button class="view-all-accent-btn disabled" type="submit" name="register">Đăng ký</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Registration Page Area End Here -->
@stop()
