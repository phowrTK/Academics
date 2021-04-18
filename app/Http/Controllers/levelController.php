<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;

class levelController extends Controller
{
    public function listall()
    {
        $level = level::all();
        return view('Admin.level.level_list',['level' => $level]);
    }



    public function create()
    {
        $category = category::all();
        return view('Admin.level.level_create',['category' => $category]);
    }
    public function postcreate(Request $request)
    {

        $this->validate($request,
        ['namelevel' => 'required|min:2|max:100','category' => 'required'],
        ['namelevel.required' => 'Bạn chưa nhập tên level','namelevel.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namelevel.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','level.required' => 'Bạn chưa chọn level']
                        );
        $level = new level();
        $level->namelevel = $request->namelevel;
        $level->idcategory = $request->category;
        $level->save();
        return redirect('admin/level/create')->with('thongbao', 'Thêm thành công');
    }



    public function update($idlevel)
    {
        $category = category::all();
        $level = level::find($idlevel);
        return view('Admin.level.level_update',['category'=>$category,'level'=>$level]);
    }
    public function postupdate(Request $request,$idlevel)
    {
        $level = level::find($idlevel);
        $this->validate($request,
        ['namelevel' => 'required|min:2|max:100','category' => 'required'],
        ['namelevel.required' => 'Bạn chưa nhập tên level','namelevel.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namelevel.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','category.required' => 'Bạn chưa chọn category']
                        );
        $level->namelevel = $request->namelevel;
        $level->idcategory = $request->category;
        $level->save();
        return redirect('admin/level/update/'.$idlevel)->with('thongbao', 'Update thành công');
    }



    public function delete($idlevel)
    {
        $level = level::find($idlevel);
        $level->delete();
        return redirect('admin/level/listall')->with('thongbao', 'Delete thành công');
    }

}
