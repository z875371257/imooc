<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class VedeoController extends Controller
{
    public function index($id)
    {
        $res = DB::table('vedeo')->where('vid', $id)->first();
        $sj = DB::table('section')->where('sid', $res->sid )->first();
        $ssj = DB::table('course')->where('id', $sj->course_id)->first();


        return view('home.vedeo',compact('res','sj','ssj'));
    }
}