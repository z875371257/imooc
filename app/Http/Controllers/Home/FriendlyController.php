<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FriendlyController extends Controller
{
//    友情链接列表页
    public function index()
    {
        $res = DB::select('select * from mk_buttom');
        $links = DB::select('select * from mk_links');
        return view('home.about.friendly',compact('links','res'));
    }
}
