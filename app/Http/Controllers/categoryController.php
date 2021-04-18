<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;

class categoryController extends Controller
{
    public function listall()
    {
        $category = category::all();
        return view('Admin.category.category_list',['category' => $category]);
    }
    public function create()
    {
        return view('Admin.category.category_create');
    }
    public function postcreate(Request $request)
    {
        //echo $request->namecategory;
        $this->validate($request,
        ['namecategory' => 'required|min:2|max:100|unique:category,namecategory'],
        ['namecategory.required' => 'Bạn chưa nhập tên category','namecategory.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namecategory.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự','namecategory.unique' => 'Tên category đã tồn tại']
                        );
        $category = new category();
        $category->namecategory = $request->namecategory;
        $category->save();
        return redirect('admin/category/create')->with('thongbao', 'Thêm thành công');
    }

    public function update($idcategory)
    {
        $category = category::find($idcategory);
        return view('Admin.category.category_update',['category'=>$category]);
    }
    public function postupdate(Request $request,$idcategory)
    {
        $category = category::find($idcategory);
        $this->validate($request,
        ['namecategory' => 'required|unique:category,namecategory|min:2|max:100'],
        ['namecategory.unique' => 'Tên category đã tồn tại','namecategory.required' => 'Bạn chưa nhập tên category','namecategory.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','namecategory.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự']
                        );
        $category->namecategory = $request->namecategory;
        $category->save();
        return redirect('admin/category/update/'.$idcategory)->with('thongbao', 'Update thành công');
    }

    public function delete($idcategory)
    {
        $category = category::find($idcategory);
        $category->delete();
        return redirect('admin/category/listall')->with('thongbao', 'Delete thành công');
    }
}
