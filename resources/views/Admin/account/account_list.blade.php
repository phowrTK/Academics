@extends('Admin.header1')
@section('content1')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                            </i>
                        </div>
                        <div>Form Controls
                            <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code
                                base, but built with React.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                            class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                        <span>List account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                        <span>List Phiếu Đăng Ký Giảng Viên</span>
                    </a>
                </li>

            </ul>






            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">

                    <div class="container-xl">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                @if (session('thongbao'))
                                    <div class="alert alert-success">
                                        {{ session('thongbao') }}
                                    </div>
                                @endif
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Quyền</th>
                                            <th>Địa chỉ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($User as $ac)
                                            @if ($ac->level != 1)

                                                <tr>
                                                    <td>{{ $ac->id }}</td>
                                                    <td>{{ $ac->name }}</td>
                                                    <td>{{ $ac->email }}</td>
                                                    <td>{{ $ac->phone }}</td>
                                                    <td>
                                                        @if($ac->level == 0)
                                                            {{ "Học viên"}}
                                                        @else
                                                            {{ "Giảng viên" }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $ac->address }}</td>
                                                    <td>
                                                        <a href="admin/account/update/{{ $ac->id }}" class="settings"
                                                            title="Update" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE8B8;</i></a>
                                                        <a href="admin/account/delete/{{ $ac->id }}" class="delete"
                                                            title="Delete" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE5C9;</i></a>
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">

                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên User</th>
                                <th>Nghề nghiệp</th>
                                <th>Trình độ</th>
                                <th>Hình ảnh minh chứng</th>
                                <th>Tình trạng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Userright as $ur)


                                    <tr>
                                        <td>{{ $ur->idur }}</td>
                                        <td>{{ $ur->User->name}}</td>
                                        <td>{{ $ur->nghenghiep }}</td>
                                        <td>{{ $ur->trinhdo }}</td>
                                        <td><img width="100px" src="Admin/update/{{ $ur->hinh }}" alt=""></td>
                                        <td>
                                            @if($ur->tinhtrang == 1)
                                                <span class="label label-success">Đã kiểm duyệt</span>
                                            @elseif($ur->tinhtrang == 0)
                                                <span class="label label-danger">Chờ Phê Duyệt</span>
                                            @endif
                                        </td>
                                        <td>


                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="material-icons">&#xE8B8;</i>

                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        @if($ur->tinhtrang == 1)
                                                            <li><a href="admin/account/unapprove/{{ $ur->idur }}"><i class="icon-file-pdf"></i> Bỏ kiểm duyệt</a></li>
                                                        @elseif($ur->tinhtrang == 0)
                                                            <li><a href="admin/account/approve/{{ $ur->idur }}"><i class="icon-file-pdf"></i> Kiểm duyệt</a></li>
                                                        @endif

                                                        <li><a href="admin/account/deletequyen/{{ $ur->idur }}"><i class="icon-file-excel"></i> Xóa</a></li>
                                                    </ul>
                                                </li>

                                        </td>
                                    </tr>


                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">

                </div>
            </div>



        </div>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 2
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 3
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <div class="badge badge-success mr-1 ml-0">
                                        <small>NEW</small>
                                    </div>
                                    Footer Link 4
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@stop()
