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
                        <span>Create Course</span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">

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

                    <form action="admin/course/create" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div style="margin-left:80px" class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Create course</h5>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Name</span>
                                                </div>
                                                <input placeholder="name course" name="namekh" type="text"
                                                    class="form-control">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Tóm
                                                        Tắc</span></div>
                                                <textarea name="tomtac" id="demo" class="form-control ckeditor"
                                                    rows="3"></textarea>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-left:80px">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Chọn Level và Category</h5>
                                        <div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Category</span></div>
                                                <select name="Category" id="Category" class="form-control">
                                                    @foreach ($category as $ca)

                                                        <option value="{{ $ca->idcategory }}">{{ $ca->namecategory }}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Level</span>
                                                </div>
                                                <select name="Level" id="Level" class="form-control">
                                                    @foreach ($level as $lv)

                                                        <option value="{{ $lv->idlevel }}">{{ $lv->namelevel }}</option>

                                                    @endforeach
                                                </select>
                                            </div>


                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-left:80px">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nhập nội dung</h5>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Nội
                                                        Dung</span></div>
                                                <textarea name="noidung" id="demo" class="form-control ckeditor"
                                                    rows="3"></textarea>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Hình ảnh</span></div>
                                                    <input type="file" name="hinh" class="form-control">
                                                </div>
                                                <br>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Media</span></div>
                                                    <input type="file" name="media" class="form-control">
                                                </div>
                                                <br>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Link Youtube</span>
                                                </div>
                                                <input placeholder="Link Youtube" name="linkyoutube" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left:280px" class="form-group">
                                        <div class="col-sm-offset-5 col-sm-9">
                                            <button name="btncreate" type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </form>
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#Category").change(function() {
                var idcategory = $(this).val();
                $.get("admin/ajax/level/"+idcategory, function(data) {
                    $("#Level").html(data);
                });
            });
        });

    </script>

@endsection
