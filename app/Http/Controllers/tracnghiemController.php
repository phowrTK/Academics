<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\level;
use App\category;
use App\course;
use App\comment;
use App\User;
use App\tracnghiem;
use App\dapan;
use App\cauhoi;
use Illuminate\Support\Facades\DB;


class tracnghiemController extends Controller
{
    public function listall()
    {
        $course = course::all();
        $tracnghiem = tracnghiem::all();
        return view('Admin.tracnghiem.tracnghiem_list',['tracnghiem' => $tracnghiem,'course' => $course]);
    }
    public function postcreate(Request $request)
    {

        $this->validate($request,
        ['nametn' => 'required|min:2|max:100|unique:tracnghiem,nametn','course' => 'required'],
        ['nametn.required' => 'Bạn chưa nhập tên tracnghiem','nametn.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','nametn.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','nametn.unique' => 'Tên tracnghiem đã tồn tại','course.required' => 'Bạn chưa chọn khóa học']
                        );
        $tracnghiem = new tracnghiem();
        $tracnghiem->nametn = $request->nametn;
        $tracnghiem->idkh = $request->course;
        $tracnghiem->save();
        return redirect('admin/tracnghiem/listall')->with('thongbao', 'Thêm thành công');
    }


    public function update($idtn)
    {
        $course = course::all();
        $tracnghiem = tracnghiem::find($idtn);
        return view('Admin.tracnghiem.tracnghiem_update',['course'=>$course,'tracnghiem'=>$tracnghiem]);
    }
    public function postupdate(Request $request,$idtn)
    {

        $tracnghiem = tracnghiem::find($idtn);
        $this->validate($request,
        ['nametn' => 'required|min:2|max:100|unique:tracnghiem,nametn','course' => 'required'],
        ['nametn.required' => 'Bạn chưa nhập tên trắc nghiệm','nametn.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','nametn.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','nametn.unique' => 'Tên level đã tồn tại','course.required' => 'Bạn chưa chọn course']
                        );

        $tracnghiem->nametn = $request->nametn;
        $tracnghiem->idkh = $request->course;
        $tracnghiem->save();
        return redirect('admin/tracnghiem/update/'.$idtn)->with('thongbao', 'Update thành công');
    }

    public function delete($idtn)
    {
        $tracnghiem = tracnghiem::find($idtn);
        $tracnghiem->delete();
        return redirect('admin/tracnghiem/listall')->with('thongbao', 'Delete thành công');
    }


    public function listcauhoi($idtn)
    {
        $tracnghiem = tracnghiem::find($idtn);
        $cauhoi = cauhoi::where('idtn',$idtn)->get();
        $dapan = dapan::all();
        return view('Admin.cauhoi.cauhoi_list',['cauhoi'=>$cauhoi,'dapan'=>$dapan,'tracnghiem'=>$tracnghiem]);
    }

    public function createcauhoi(Request $request,$idtn)
    {

        $this->validate($request,
        ['noidung' => 'required|min:2|max:100|unique:cauhoi,noidung','a' => 'required'],
        ['noidung.required' => 'Bạn chưa nhập noidung','noidung.min' => 'noidung phải có độ dài lớn hơn 1 kí tự','noidung.max' => 'noidung phải có độ dài nhỏ hơn 100 kí tự','noidung.unique' => 'noidung tracnghiem đã tồn tại','a.required' => 'Bạn chưa nhập đáp án A']
                        );
        // $tracnghiem = tracnghiem::where('idtn',$idtn)->get();
        $cauhoi = new cauhoi();
        $cauhoi->idtn = $idtn;
        $cauhoi->noidung = $request->noidung;
        $cauhoi->a = $request->a;
        $cauhoi->b = $request->b;
        $cauhoi->c = $request->c;
        $cauhoi->d = $request->d;
        $cauhoi->idda = $request->dapan;

        if ($request->hasFile('hinh'))
        {
            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return back()->with('thongbao', 'file hình sai định dạng');
            }
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) ."_". $name;
            while (file_exists("Admin/update/".$hinh))
            {
                $hinh = Str::random(4) ."_". $name;
            }
            $file->move("Admin/update",$hinh);
            $cauhoi->image = $hinh;
        }
        else
        {
            $cauhoi->image = "";
        }

        $cauhoi->save();
        return back()->with('thongbao', 'Thêm thành công');
    }

    public function updatecauhoi($idch)
    {
        $dapan = dapan::all();
        $cauhoi = cauhoi::find($idch);
        return view('Admin.cauhoi.cauhoi_update',['dapan'=>$dapan,'cauhoi'=>$cauhoi]);
    }
    public function postupdatecauhoi(Request $request,$idch)
    {

        $cauhoi = cauhoi::find($idch);
        // $this->validate($request,
        // ['nametn' => 'required|min:2|max:100|unique:tracnghiem,nametn','course' => 'required'],
        // ['nametn.required' => 'Bạn chưa nhập tên trắc nghiệm','nametn.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','nametn.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','nametn.unique' => 'Tên level đã tồn tại','course.required' => 'Bạn chưa chọn course']
        //                 );

        $cauhoi->noidung = $request->noidung;
        $cauhoi->a = $request->a;
        $cauhoi->b = $request->b;
        $cauhoi->c = $request->c;
        $cauhoi->d = $request->d;
        $cauhoi->idda = $request->dapan;

        if ($request->hasFile('hinh'))
            {
                $file = $request->file('hinh');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    return redirect('admin/course/update/'.$idkh)->with('thongbao', 'file hình sai định dạng');
                }
                $name = $file->getClientOriginalName();
                $hinh = Str::random(4) ."_". $name;
                while (file_exists("Admin/update/".$hinh))
                {
                    $hinh = Str::random(4) ."_". $name;
                }
                $file->move("Admin/update",$hinh);
                unlink("Admin/update/".$cauhoi->hinh);
                $cauhoi->hinh = $hinh;
            }

        $cauhoi->save();
        return redirect('admin/tracnghiem/cauhoi/update/'.$idch)->with('thongbao', 'Update thành công');
    }

    public function deletecauhoi($idch)
    {
        $cauhoi = cauhoi::find($idch);
        $cauhoi->delete();
        return back()->with('thongbao', 'Delete thành công');
    }






}
