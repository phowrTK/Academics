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
            <h2 class="sidebar-title">ĐĂNG KHÓA HỌC CỦA GIẢNG VIÊN</h2>
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
            <form id="checkout-form" action="user/dangkhoahoc" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="registration-details-area inner-page-padding">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Tên khóa học *</label>
                                <input type="text" id="namekh" name="namekh" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <span class="input-group-text">Hình ảnh *</span></div>
                            <input type="file" name="hinh" class="form-control">

                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Tóm tắc *</label>
                                <textarea name="tomtac" id="demo" class="form-control ckeditor"
                                rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Nội dung *</label>
                                <textarea name="noidung" id="demo" class="form-control ckeditor"
                                rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Category *</label>
                                <select name="Category" id="Category" class="form-control">
                                    @foreach ($category as $ca)

                                        <option value="{{ $ca->idcategory }}">{{ $ca->namecategory }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Level *</label>
                                <select name="Level" id="Level" class="form-control">
                                    @foreach ($level as $lv)

                                        <option value="{{ $lv->idlevel }}">{{ $lv->namelevel }}</option>

                                    @endforeach
                                </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Media *</label>
                                <input type="file" name="media" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <span class="input-group-text">Link youtube *</span></div>
                                <input placeholder="Link Youtube" name="linkyoutube" type="text"
                                class="form-control">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pLace-order mt-30">
                                <button class="view-all-accent-btn disabled" type="submit" name="register">Đăng Khóa học</button>
                            </div>
                        </div>
                    </div>
                    <br>

        </div>
    </form>
    </div>
    </div>
    <!-- Registration Page Area End Here -->
@stop()

@section('script1')
    <script>
        $(document).ready(function() {
            $("#Category").change(function() {
                var idcategory = $(this).val();
                $.get("user/ajax/level/"+idcategory, function(data) {
                    $("#Level").html(data);
                });
            });
        });

    </script>

@endsection
