<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\level;
use App\category;
use App\course;
use App\comment;
use App\User;
use App\Userright;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function listall()
    {
        $User = User::all();
        $Userright = Userright::all();
        return view('Admin.account.account_list',['User' => $User,'Userright' => $Userright]);
    }



    public function create()
    {

        return view('Admin.account.account_create');
    }
    public function postcreate(Request $request)
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
        $User->save();
        return redirect('admin/account/create')->with('thongbao', 'Thêm thành công');
    }



    public function update($id)
    {
        $User = User::find($id);
        return view('Admin.account.account_update',['User'=>$User]);

    }
    public function postupdate(Request $request,$id)
    {
        $this->validate($request,
        ['name' => 'required|min:2|max:100',


        ],
        ['name.required' => 'Bạn chưa nhập tên account','name.min' => 'Tên phải có độ dài lớn hơn 1 kí tự','name.max' => 'Tên phải có độ dài nhỏ hơn 100 kí tự',


        ]
                        );
        $User = User::find($id);
        $User->name = $request->name;
        $User->phone = $request->phone;
        $User->level = $request->level;
        $User->address = $request->address;

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
        return redirect('admin/account/update/'.$id)->with('thongbao', 'Update thành công');
    }



    public function delete($id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect('admin/account/listall')->with('thongbao', 'Delete thành công');
    }


    public function login()
    {
        return view('admin.login_admin');
    }
    public function postlogin(Request $request)
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

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function loginuser()
    {
        return view('user.login_admin');
    }
    public function postloginuser(Request $request)
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

                return redirect('user/index2');

        }
        else
        {
            return redirect('user/login')->with('thongbao', 'Đăng nhập không thành công');
        }


    }


    public function logoutuser()
    {
        Auth::logout();
        return redirect('user/index2');
    }



    public function duyettinhtrang($idur){
        $Userright = Userright::find($idur);

        $Userright->tinhtrang = 1;
        $Userright->User->level = 2;
        $Userright->save();


        return redirect('admin/account/listall')->with('thongbao','Đã kiểm duyệt phiếu đăng ký');
      }
      public function botinhtrang($idur){
        $Userright = Userright::find($idur);

        $Userright->tinhtrang = 0;
        $Userright->User->level = 0;
        $Userright->save();

        return redirect('admin/account/listall')->with('thongbao','Đã bỏ kiểm duyệt phiếu đăng ký');
      }

      public function deletequyen($idur)
    {
        $Userright = Userright::find($idur);
        $Userright->delete();
        return redirect('admin/account/listall')->with('thongbao', 'Delete thành công');
    }

}
