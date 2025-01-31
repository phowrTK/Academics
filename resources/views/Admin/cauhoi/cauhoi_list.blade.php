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
                        <span>Tổng hợp trắc nghiệm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                        <span>Thêm đề trắc nghiệm</span>
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
                                            <th>Nội dung</th>
                                            <th>Hình</th>
                                            <th>Câu a</th>
                                            <th>Câu b</th>
                                            <th>Câu c</th>
                                            <th>Câu d</th>
                                            <th>Đáp án đúng</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cauhoi as $tn)

                                            <tr>
                                                <td>{{ $tn->idch }}</td>
                                                <td>{{substr($tn->noidung, 0, 10)}}...</td>
                                                <td><img width="100px" src="Admin/update/{{ $tn->image }}" alt=""></td>
                                                <td>{{substr($tn->a, 0, 10)}}...</td>
                                                <td>{{substr($tn->b, 0, 10)}}...</td>
                                                <td>{{substr($tn->c, 0, 10)}}...</td>
                                                <td>{{substr($tn->d, 0, 10)}}...</td>
                                                <td>{{ $tn->dapan->dapan }}</td>

                                                <td>
                                                    <a href="admin/tracnghiem/cauhoi/update/{{ $tn->idch }}"
                                                        class="settings" title="Update" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE8B8;</i></a>
                                                    <a href="admin/tracnghiem/deletecauhoi/{{ $tn->idch }}" class="delete"
                                                        title="Delete" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE5C9;</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">

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

                    <form action="admin/tracnghiem/createcauhoi/{{ $tracnghiem->idtn }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Create</h5>
                                        <div>
                                            {{-- <div class="input-group">

                                                <div class="input-group-prepend"><span class="input-group-text">Chọn khóa
                                                        học</span></div>
                                                <select name="course" class="form-control">
                                                    @foreach ($course as $kh)

                                                        <option value="{{ $kh->idkh }}">{{ $kh->namekh }}</option>

                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Nội
                                                        dung</span></div>
                                                <input placeholder="Nội dung" name="noidung" type="text"
                                                    class="form-control">
                                            </div>

                                            <br>

                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Câu a</span>
                                                </div>
                                                <input placeholder="Câu a" name="a" type="text" class="form-control">
                                            </div>


                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Câu b</span>
                                                </div>
                                                <input placeholder="Câu b" name="b" type="text" class="form-control">
                                            </div>


                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Câu c</span>
                                                </div>
                                                <input placeholder="Câu c" name="c" type="text" class="form-control">
                                            </div>


                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Câu d</span>
                                                </div>
                                                <input placeholder="Câu d" name="d" type="text" class="form-control">
                                            </div>


                                            <br>
                                            <div class="input-group">

                                                <div class="input-group-prepend"><span class="input-group-text">Đáp án
                                                        đúng</span></div>
                                                <select name="dapan" class="form-control">
                                                    @foreach ($dapan as $da)

                                                        <option value="{{ $da->idda }}">{{ $da->dapan }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-9">
                                                    <button name="btncreate" type="submit"
                                                        class="btn btn-primary">Create</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </form>
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
