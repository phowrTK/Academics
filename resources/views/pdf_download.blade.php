<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body {
        font-family: DejaVu Sans;
    }
    </style>
<body>
    <img name="hinh" id="hinh" style="width:400px;height: 300px" src="Admin/update/{{ $course->hinh }}"
                                class="img-responsive" alt="course">
                            <div class="course-details-inner">
                                <div class="video-content">
                                </div>
                                <p name="noidung" id="noidung" >{!! $course->noidung !!}</p>
                                <h4 class="sidebar-title">Chi tiết tin</h4>
                                <ul class="course-feature">
                                    <li>Thời gian đăng: {{ $course->created_at }}</li>
                                    <li>Thời gian cập nhật: {{ $course->updated_at }}</li>
                                    <li>Số lượt xem: {{ $course->soluotxem }}</li>


                                </ul>
                            </div>
  </body>
