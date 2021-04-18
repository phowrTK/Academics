<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thongkeController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
}
