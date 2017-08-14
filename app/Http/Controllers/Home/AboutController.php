<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //企业合作
    public function cooperate()
    {
        $res = about::get();
        return view('home.about.cooperate',compact('res'));
//        dd($res) ;
    }


    //人才招聘
    public function job()
    {
        $res = about::get();
        return view('home.about.job',compact('res'));
    }

    //联系我们
    public function contact()
    {
        $res = about::get();
        return view('home.about.contact',compact('res'));
    }

    //讲师招募
    public function recruit()
    {
        $res = about::get();
        return view('home.about.recruit',compact('res'));
    }

    //关于我们
    public function us()
    {
        $res = about::get();
        return view('home.about.us',compact('res'));
    }

    //团队介绍
    public function group()
    {
        $res = about::get();
        return view('home.about.group',compact('res'));
    }

    //友情链接
    public function friendly()
    {
        $res = about::get();
        return view('home.about.friendly',compact('res'));
    }




}
