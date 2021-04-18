<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\level;
use App\category;
use App\course;
use App\comment;

class courseController extends Controller
{
    public function listall()
    {
        $course = course::all();
        return view('Admin.course.course_list',['course' => $course]);
    }



    public function create()
    {
        $level = level::all();
        $category = category::all();
        return view('Admin.course.course_create',['level' => $level,'category' => $category]);
    }
    public function postcreate(Request $request)
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
                return redirect('admin/course/create')->with('thongbao', 'file hình sai định dạng');
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
                return redirect('admin/course/create')->with('thongbao', 'file media sai định dạng');
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
        return redirect('admin/course/create')->with('thongbao', 'Thêm thành công');
    }



    public function update($idkh)
    {

        $level = level::all();
        $category = category::all();
        $course = course::find($idkh);
        return view('Admin.course.course_update',['course'=>$course,'level'=>$level, 'category'=>$category]);
    }
    public function postupdate(Request $request,$idkh)
    {
        $course = course::find($idkh);
        $this->validate($request,
            ['namekh' => 'required|min:2|max:100',
            'Level' => 'required',
            // 'categoty' => 'required',
            'tomtac' => 'required|min:2',
            'noidung' => 'required|min:2'
            ],[
            'namekh.required' => 'Bạn chưa nhập tên course','namekh.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namekh.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','Level.required' => 'Bạn chưa chọn level'
            // ,'category.required' => 'Bạn chưa chọn category'
            ,'tomtac.required' => 'Bạn chưa chọn category'
            ,'tomtac.min' => 'Tên phải có độ dài lớn hơn 1 kí tự'
            ,'noidung.required' => 'Bạn chưa chọn category'
            ,'noidung.min' => 'Tên phải có độ dài lớn hơn 1 kí tự'
            ]);
            $course->namekh = $request->namekh;
            $course->idlevel = $request->Level;
            $course->tomtac = $request->tomtac;
            $course->noidung = $request->noidung;
            $course->linkyoutube = $request->linkyoutube;


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
                unlink("Admin/update/".$course->hinh);
                $course->hinh = $hinh;
            }

            if ($request->hasFile('media'))
            {
                $file = $request->file('media');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'mp3' && $duoi != 'mp4')
                {
                    return redirect('admin/course/update/'.$idkh)->with('thongbao', 'file media sai định dạng');
                }
                $name = $file->getClientOriginalName();
                $media = Str::random(4) ."_". $name;
                while (file_exists("Admin/update/".$media))
                {
                    $media = Str::random(4) ."_". $name;
                }
                $file->move("Admin/update/",$media);
                // unlink("Admin/update/".$course->media);
                $course->media = $media;
            }


        $course->save();
        return redirect('admin/course/update/'.$idkh)->with('thongbao', 'Update thành công');
    }



    public function delete($idkh)
    {
        $course = course::find($idkh);
        $course->delete();
        return redirect('admin/course/listall')->with('thongbao', 'Delete thành công');
    }
}
