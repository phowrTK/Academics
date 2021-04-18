<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\comment;
use App\level;
use App\category;
use App\course;
use App\User;

class commentController extends Controller
{
    public function delete($idcomment, $id)
    {
        $comment = comment::find($idcomment);
        $comment->delete();
        return redirect('admin/course/update/'.$id)->with('thongbao', 'Delete comment thành công');
    }

    public function postcomment($idkh, Request $request)
    {
        $course = course::find($idkh);

        $idkh = $idkh;
        $comment = new comment;
        $comment->idkh = $idkh;
        $comment->id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();

        return back();
    }
}
