<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class emailController extends Controller
{
    public function sendEmail(Request $request)
    {
      $email=$request->email;

      //echo $email;
     // $details=$user = DB::table('users')->where('email', $email)->first();
      if($details= DB::table('users')->where('email', $email)->first()){
        $name=$details->name;
        $code=Str::random(3).rand(0,99);
        Session::put('codechangepass', $code);
        $data=[
          'name'=>$name,
          'code'=>$code
        ];
        Mail::send('User.email', $data, function ($message) use ($email) {
          $message->from('17dtha2@gmail.com', 'Esuppro');
          $message->to($email, 'You');
          $message->subject('Change Pass');

        });
        echo ('#thanhcong');

      }else{
        echo('#loi1');
      }


    }
    public function changepass(Request $request){
      $email=$request->email;
      $password=$request->pass;
      $code=$request->code;
      $code1=Session::get('codechangepass');
      if($code!=$code1){
        echo('#codesai');
      }else{
        DB::table('users')->where('email', $email)
        ->update(['password' => bcrypt($password)]);

        Session::forget('codechangepass');
        echo('#successchange');
      }
    }

    function forgetpassword()
    {
        return view('User.forgetpassword');
    }
}
