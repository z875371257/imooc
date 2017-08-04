<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index.index',['session' => session()->get('user')]);
    }

    public function layout()
    {

        return view('layout.admin', ['session' => session()->get('user')]);
    }
}
