<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\level;
use App\Userright;
use App\category;
use App\course;
use App\comment;
use App\User;
use App\tracnghiem;
use App\cauhoi;
use App\dapan;
use Illuminate\Support\Facades\DB;
use sessions;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Redirect;
use PDF;

class pageController extends Controller
{
    function __construct()
    {
        $category = category::all();
        view()->share('category',$category);

    }
    function index2()
    {
        return view('User.index2');
    }
    function courses1()
    {
        return view('User.courses1');
    }
    function logincourses1(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('admin/login')->with('thongbao', 'Đăng nhập không thành công');
        }

    }


    function level($idlevel)
    {
        $level = level::find($idlevel);

        $course = course::where('idlevel',$idlevel)->paginate(9);

        return view('User.level',['level' => $level, 'course' => $course]);
    }
    function loginlevel(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('user/index2')->with('thongbao', 'Đăng nhập không thành công');
        }

    }




    function coursesdetail($idkh,Request $request)
    {

        $course = course::find($idkh);
        $course->soluotxem = $course->soluotxem+1;
        $course->save();
        $courselienquan = course::where('idlevel',$course->idlevel)->take(3)->get();

        $tracnghiem = tracnghiem::where('idkh',$idkh)->get();

        if(isset($tracnghiem)){


            for($i=0;$i<$tracnghiem->count();$i++){
                $cauhoi = cauhoi::where('idtn',$tracnghiem[$i]->idtn)->inRandomOrder()->limit(5)->get();
                $count = cauhoi::where('idtn',$tracnghiem[$i]->idtn)->inRandomOrder()->limit(5)->count();

            }


            if(isset($cauhoi)){
                if($count>0){
                $cau1=$cauhoi[0];
                    if($count>1){

                        $cau2=$cauhoi[1];

                            if($count>2){
                                $cau3=$cauhoi[2];

                                    if($count>3){
                                    $cau4=$cauhoi[3];

                                        if($count>4){
                                        $cau5=$cauhoi[4];

                                        return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem,'cau1' => $cau1,'cau2' => $cau2,'cau3' => $cau3,'cau4' => $cau4,'cau5' => $cau5]);
                                        }
                                    return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem,'cau1' => $cau1,'cau2' => $cau2,'cau3' => $cau3,'cau4' => $cau4]);
                                    }

                                return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem,'cau1' => $cau1,'cau2' => $cau2,'cau3' => $cau3]);
                            }
                            return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem,'cau1' => $cau1,'cau2' => $cau2]);
                        }

                    return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem,'cau1' => $cau1]);
                }
                return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem]);
            }
            return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan,'tracnghiem' => $tracnghiem]);
        }
        return view('User.courses-detail',['course' => $course,'courselienquan' => $courselienquan]);




    }



    function logincoursesdetail(Request $request)
    {
        $this->validate($request,
        ['email' => 'required',
        'password' => 'required|min:2|max:100',
        ],
        ['email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::User()->level==1)
            {
                return redirect('admin/index');
            }
            else
            {
                return redirect('user/index2');
            }
        }
        else
        {
            return redirect('user/index2')->with('thongbao', 'Đăng nhập không thành công');
        }

    }




    function allcourse()
    {

        $course = course::all();
        // $vocaburaly = course::where(1);


        // $category = category::find($idcategory);
        $vocaburaly1 = course::where('idcategory',1)->get();
        $vocaburaly2 = course::where('idcategory',2)->get();
        $vocaburaly3 = course::where('idcategory',3)->get();
        $vocaburaly4 = course::where('idcategory',4)->get();
        $vocaburaly5 = course::where('idcategory',5)->get();
        // $course = DB::table('course')
        // ->where('level->category->idcategory', '$idcategory')
        // ->get();
        return view('User.allcourse',['course' => $course, 'vocaburaly1' => $vocaburaly1,'vocaburaly2' => $vocaburaly2,'vocaburaly3' => $vocaburaly3,'vocaburaly4' => $vocaburaly4,'vocaburaly5' => $vocaburaly5]);
        //return view('User.category');




    }



    function register()
    {
        return view('User.register');
    }
    function postregister(Request $request)
    {
        $this->validate($request,
        ['name' => 'required|min:2|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:2|max:100',
        'againpassword' => 'required|same:password',
        'phone' => 'required|min:2|max:100',
        'address' => 'required|min:2|max:100'
        ],
        ['name.required' => 'Bạn chưa nhập tên account','name.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','name.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',
        'email.required' => 'Bạn chưa nhập email','email.email' => 'Bạn chưa nhập đúng định dạng email','email.unique' => 'email đã tồn tại',
        'password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự',
        'againpassword.required' => 'Bạn chưa nhập lại password','againpassword.same' => 'password nhập lại chưa khớp',
        'phone.required' => 'Bạn chưa nhập tên account','phone.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','phone.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',
        'address.required' => 'Bạn chưa nhập tên account','address.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','address.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',
        ]
                        );
        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = bcrypt($request->password);
        $User->phone = $request->phone;
        $User->address = $request->address;
        $User->level = 0;
        $User->save();
        return redirect('user/register')->with('thongbao', 'Đăng ký tài khoản thành công');

    }



    public function profile()
    {

        if(Auth::check()){

        return view('User.profile');
        }
        else{
        return redirect('user/index2')->with('thongbao','Bạn chưa Đăng Nhập!');
        }

    }
    public function updateprofile(Request $request)
    {
        $this->validate($request,
        ['name' => 'required|min:2|max:100',


        ],
        ['name.required' => 'Bạn chưa nhập tên account','name.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','name.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',


        ]
                        );
        $User = Auth::user();
        $User->name = $request->name;
        $User->phone = $request->phone;
        $User->address = $request->address;


        if ($request->hasFile('hinh'))
            {
                $file = $request->file('hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    return redirect('user/profile')->with('thongbao', 'file hình sai định dạng');
                }
                $name = $file->getClientOriginalName();
                $hinh = Str::random(4) ."_". $name;
                while (file_exists("storage/users-avatar/".$hinh))
                {
                    $hinh = Str::random(4) ."_". $name;
                }
                $file->move("storage/users-avatar",$hinh);
                $User->avatar = $hinh;
            }


        if($request->changepassword == "on")
        {
            $this->validate($request,
                [
                'password' => 'required|min:2|max:100',
                'againpassword' => 'required|same:password'
                ],
                ['password.required' => 'Bạn chưa nhập password','pass.min' => 'password phải có độ dài lớn hơn 1 kí tự','password.max' => 'password phải có độ dài nhỏ hơn 100 kí tự',
                'againpassword.required' => 'Bạn chưa nhập lại password','againpassword.same' => 'password nhập lại chưa khớp'
                ]
                 );
            $User->password = bcrypt($request->password);
        }

        $User->save();
        return redirect('user/profile')->with('thongbao', 'Update thành công');
    }


    // public function getdich(){
    //     return view('translate1');
    // }
    public function postdich(Request $request){
       $english = $request->english;
       $tr = new GoogleTranslate('vi');
       $newtr = $tr->translate($english);
       return back()->with('dich', $newtr);

    }



    // public function pdfDownload(){

    //     $pdf = PDF::loadView('pdf_download');

    //     return $pdf->download('coursePDF.pdf');
    //  }
     public function content_download($idkh){

        $course = course::find($idkh);
       // echo ($course->noidung);
        $pdf = PDF::loadView('pdf_download',['course' => $course]);
       // return view('pdf_download',['course' => $course]);
       return $pdf->download('coursePDF.pdf');

     }



     function quyen()
    {
        return view('User.quyen');
    }
    function postquyen(Request $request)
    {

        $Userright = new Userright();
        $Userright->nghenghiep = $request->nghenghiep;
        $Userright->trinhdo = $request->trinhdo;
        $Userright->tinhtrang = 0;
        $Userright->id = Auth::user()->id;

        if ($request->hasFile('hinh'))
        {
            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/quyen')->with('thongbao', 'file hình sai định dạng');
            }
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) ."_". $name;
            while (file_exists("Admin/update/".$hinh))
            {
                $hinh = Str::random(4) ."_". $name;
            }
            $file->move("Admin/update",$hinh);
            $Userright->hinh = $hinh;
        }
        else
        {
            $Userright->hinh = "";
        }


        $Userright->save();
        return redirect('user/quyen')->with('thongbao', 'Đăng ký quyền giảng viên thành công');

    }






    function dangkhoahoc()
    {
        $level = level::all();
        $category = category::all();
        return view('User.dangkhoahoc',['level' => $level,'category' => $category]);
    }
    function postdangkhoahoc(Request $request)
    {

        $this->validate($request,
        ['namekh' => 'required|min:2|max:100|unique:course,namekh',
        'Level' => 'required',
        // 'categoty' => 'required',
        'tomtac' => 'required|min:2',
        'noidung' => 'required|min:2'
        ],[
        'namekh.required' => 'Bạn chưa nhập tên course','namekh.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namekh.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','namekh.unique' => 'Tên course đã tồn tại','Level.required' => 'Bạn chưa chọn level'
        // ,'category.required' => 'Bạn chưa chọn category'
        ,'tomtac.required' => 'Bạn chưa chọn category'
        ,'tomtac.min' => 'Tên phải có độ dài lớn hơn 1 kí tự'
        ,'noidung.required' => 'Bạn chưa chọn category'
        ,'noidung.min' => 'Tên phải có độ dài lớn hơn 1 kí tự'
        ]);
    $course = new course();
    $course->namekh = $request->namekh;
    $course->idlevel = $request->Level;
    $course->idcategory = $request->Category;
    $course->tomtac = $request->tomtac;
    $course->noidung = $request->noidung;
    $course->linkyoutube = $request->linkyoutube;
    $course->soluotxem = 0;
    $course->id = Auth::user()->id;

    if ($request->hasFile('hinh'))
    {
        $file = $request->file('hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
        {
            return redirect('user/dangkhoahoc')->with('thongbao', 'file hình sai định dạng');
        }
        $name = $file->getClientOriginalName();
        $hinh = Str::random(4) ."_". $name;
        while (file_exists("Admin/update/".$hinh))
        {
            $hinh = Str::random(4) ."_". $name;
        }
        $file->move("Admin/update",$hinh);
        $course->hinh = $hinh;
    }
    else
    {
        $course->hinh = "";
    }

    if ($request->hasFile('media'))
    {
        $file = $request->file('media');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'mp3' && $duoi != 'mp4')
        {
            return redirect('user/dangkhoahoc')->with('thongbao', 'file media sai định dạng');
        }
        $name = $file->getClientOriginalName();
        $media = Str::random(4) ."_". $name;
        while (file_exists("Admin/update/".$media))
        {
            $media = Str::random(4) ."_". $name;
        }
        $file->move("Admin/update",$media);
        $course->media = $media;
    }
    else
    {
        $course->media = "";
    }

    $course->save();
        return redirect('user/dangkhoahoc')->with('thongbao', 'Đăng khóa học thành công');

    }




}
