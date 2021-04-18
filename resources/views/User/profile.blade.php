@extends('User.header2')
@section('content2')
    </header>
    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('User/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>THÔNG TIN TÀI KHOẢN</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Thông tin tài khoản</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Account Page Start Here -->
    <div class="section-space accent-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <ul class="profile-title">
                        <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Thông tin</a></li>
                        <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Courses</a></li>
                        <li><a href="#Badges" data-toggle="tab" aria-expanded="false">Orders</a></li>
                        <li><a href="#E-mail" data-toggle="tab" aria-expanded="false">Wishlist</a></li>
                    </ul>
                </div>




                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <form action="user/profile" method="POST" class="form-horizontal" id="checkout-form" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                        <div class="profile-details tab-content">
                            <div class="tab-pane fade active in" id="Personal">
                                <h3 class="title-section title-bar-high mb-40">Thông tin tài khoản</h3>
                                <div class="personal-info">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="first-name"
                                                value="{{ Auth::user()->name }}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="email" id="first-name"
                                                value="{{ Auth::user()->email }}" name="email" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="phone" id="last-name"
                                                value="{{ Auth::user()->phone }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="address" id="nick-name"
                                                value="{{ Auth::user()->address }}" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ảnh đại diện</label>
                                        <div class="col-sm-9 public-profile-content">

                                                <img class="img-responsive" src="storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar">

                                            <div class="file-title">Upload a new avatar:</div>
                                            <div class="file-upload-area"><input type="file" name="hinh" class="form-control"></div>

                                        </div>
                                    </div>
                                    <input type="checkbox" id="changepassword" name="changepassword"><label
                                        for="changepassword">Đổi mật khẩu</label>
                                    <div style="margin-left:185px" class="form-group">

                                        <div class="col-sm-9">
                                            <input placeholder="Mật khẩu" name="password" type="password"
                                                class="form-control changepassword1" disabled>
                                        </div>
                                    </div>
                                    <div style="margin-left:185px" class="form-group">

                                        <div class="col-sm-9">
                                            <input placeholder="nhập lại mật khẩu" name="againpassword" type="password"
                                                class="form-control changepassword1" disabled>
                                        </div>
                                    </div>


                                    <div class="form-group mb-none">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button class="view-all-accent-btn disabled col-sm-9" type="submit"
                                                value="Login">Save</button>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="Profile">
                                <h3 class="title-section title-bar-high mb-40">Courses</h3>
                                <div class="course-info">
                                    <img src="User/img/course/20.jpg" alt="course">
                                    <h3>This is a Paid course</h3>
                                    <div class="skill-area">
                                        <div class="progress">
                                            <div class="lead">90% Complete</div>
                                            <div data-wow-delay="1.2s" data-wow-duration="1.5s"
                                                style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                                data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Badges">
                                <h3 class="title-section title-bar-high mb-40">Orders</h3>
                                <div class="orders-info">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>#00024564875</th>
                                                    <td>August 22, 2017</td>
                                                    <td>Completed</td>
                                                    <td>$70.00</td>
                                                    <td>
                                                        <a href="#" title="view" class="btn-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>#00024562451</th>
                                                    <td>March 01, 2017</td>
                                                    <td>Completed</td>
                                                    <td>$90.00</td>
                                                    <td>
                                                        <a href="#" title="view" class="btn-view">View</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="E-mail">
                                <h3 class="title-section title-bar-high mb-40">Wishlist</h3>
                                <div class="wishlist-info">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Thumb</th>
                                                    <th>Name</th>
                                                    <th>Duration</th>
                                                    <th>Classes</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><img src="User/img/course/24.jpg" alt="course"
                                                            class="img-responsive"></th>
                                                    <td>Mathematics</td>
                                                    <td>7 Months</td>
                                                    <td>60</td>
                                                    <td>10 pm - 11 pm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Account Page End Here -->
@stop()
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('script')
    <script>
        $(document).ready(function() {

            $("#changepassword").change(function() {
                if (this.checked) {
                    $("input.changepassword1").removeAttr("disabled");
                } else {
                    $("input.changepassword1").attr("disabled", true);
                }
            });
        });

    </script>

@endsection
