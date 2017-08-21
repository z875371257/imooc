@extends('layout.list')
@section('title', '全部课程_IT培训精英课程-慕课网')

@section('content')

    <div id="main">
        <div class="wrap ">
            <div class="top">
                <div class="course-content">
                    <div class="course-nav-box">
                        <div class="course-nav-row clearfix">
                                <span class="hd l">
                                    方向：
                                </span>
                            <div class="bd fx1">
                                <ul >
                                    <li class="course-nav-item @if(!$fx) on @endif">
                                        <a href="/course/list">
                                            全部
                                        </a>
                                    </li>
                                    <!-- 方向  -->
                                    @foreach($direction as $k=>$v)
                                        <li class="course-nav-item  @if($v->cid==$fx) on   @endif">
                                            <a  href="/course/list?fx={{$v->cid}}" data-ct="photo" >
                                                {{$v->cname}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="course-nav-row clearfix">
                                <span class="hd l">
                                    分类：
                                </span>
                            <div class="bd">
                                <ul class="">
                                    <li class="course-nav-item @if(!$c) on @endif">
                                        <a href="/course/list?">
                                            全部
                                        </a>
                                    </li>
                                    @foreach($classify as $k=>$v)
                                        <li class="course-nav-item @if($v->cid == $c) on @endif  " >
                                            <a href="/course/list?fx={{$v->pid}}&c={{$v->cid}}" data-id=7 data-ct=html>
                                                {{$v->cname}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="course-nav-row clearfix border_bottom_none">
                                <span class="hd l">
                                    类型：
                                </span>
                            <div class="bd">
                                <ul class="">
                                    <li class="course-nav-item @if(!$types) on @endif">
                                        <a href="/course/list">
                                            全部
                                        </a>
                                    </li>
                                    @foreach($type as $k=>$v)
                                        <li class="course-nav-item @if($types == $v->cname) on @endif">
                                            <a href="/course/list?type={{$v->cname}}">
                                                {{$v->cname}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $('.fx1 .course-nav-item').each(function(){
                    $(this).click(function(){

                        var dj = $(this);

                        var tj =  dj.addClass('on');

                        var adds =  dj.siblings().removeClass('on');
                    })
                })
            })

        </script>
        <div class="container">
            <div class="course-tool-bar clearfix">
                <div class="tool-left l">
                    <a href="/course/list?sort=last" class="sort-item">
                        最新
                    </a>
                    <a href="/course/list?sort=pop" class="sort-item active">
                        最热
                    </a>
                </div>
                <div class="l">
                        <span class="tool-item" style="display: none;">
                            <a class="follow-learn tool-chk" href="javascript:void(0);">
                                跟我学
                            </a>
                        </span>
                </div>

            </div>
            <div class="course-list">
                <div class="moco-course-list">
                    <ul class="clearfix">
                        <div class='moco-course-wrap szcoursewrap'>
                            <!-- 前4个课程追加渠道统计链接 -->
                            <a href='http://coding.imooc.com/class/95.html' target="_blank" class='szcourse-cart active'>
                                <div class='szcourse-cart-A'>
                                    <div class='szcourse-cart-b'>
                                        <div class="szcourse-p1 clearfix">
                                            <i class="imv2-war">
                                            </i>
                                            <span>
                                                    实战课程
                                                </span>
                                        </div>
                                        <div class="szcourse-p2">
                                            Node.js项目的线上服务器部署与发布
                                        </div>
                                        <div class='szcourse-p3'>
                                            阿里云部署Node.js+MongoDB+Nginx的应用项目，打通全栈
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    646人在学
                                                </span>
                                            <span class='r'>
                                                    ￥158.00
                                                </span>
                                        </div>
                                    </div>
                                    <div class='szcourse-cart-o'>
                                    </div>
                                    <div class='shizhanpic' style='background-image: url(/homes/images/58e75f2e00015c0705400300-360-202.jpg);'>
                                    </div>
                                </div>
                                <div class='szcourse-cart-B'>
                                    <div>
                                        <div class="szcourse-name clearfix">
                                            Node.js项目的线上服务器部署与发布
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    646人在学
                                                </span>
                                            <span class='r'>
                                                    ￥158.00
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 前4个课程追加渠道统计链接 -->
                            <a href='http://coding.imooc.com/class/90.html' target="_blank" class='szcourse-cart '>
                                <div class='szcourse-cart-A'>
                                    <div class='szcourse-cart-b'>
                                        <div class="szcourse-p1 clearfix">
                                            <i class="imv2-war">
                                            </i>
                                            <span>
                                                    实战课程
                                                </span>
                                        </div>
                                        <div class="szcourse-p2">
                                            Yii 2.0高级组件优化京东电商平台
                                        </div>
                                        <div class='szcourse-p3'>
                                            进阶更高阶的Yii 2.0开发，获得2-3年yii 2.0实战经验
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    234人在学
                                                </span>
                                            <span class='r'>
                                                    ￥349.00
                                                </span>
                                        </div>
                                    </div>
                                    <div class='szcourse-cart-o'>
                                    </div>
                                    <div class='shizhanpic' style='background-image: url(/homes/images/58b38551000156dd05400300-360-202.jpg);'>
                                    </div>
                                </div>
                                <div class='szcourse-cart-B'>
                                    <div>
                                        <div class="szcourse-name clearfix">
                                            Yii 2.0高级组件优化京东电商平台
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    234人在学
                                                </span>
                                            <span class='r'>
                                                    ￥349.00
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 前4个课程追加渠道统计链接 -->
                            <a href='http://coding.imooc.com/class/94.html' target="_blank" class='szcourse-cart '>
                                <div class='szcourse-cart-A'>
                                    <div class='szcourse-cart-b'>
                                        <div class="szcourse-p1 clearfix">
                                            <i class="imv2-war">
                                            </i>
                                            <span>
                                                    实战课程
                                                </span>
                                        </div>
                                        <div class="szcourse-p2">
                                            Angular 4.0从入门到实战 打造股票管理网站
                                        </div>
                                        <div class='szcourse-p3'>
                                            Angular新特性，教你熟练使用Angular和Typescript开发组件式单页应用
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    1028人在学
                                                </span>
                                            <span class='r'>
                                                    ￥199.00
                                                </span>
                                        </div>
                                    </div>
                                    <div class='szcourse-cart-o'>
                                    </div>
                                    <div class='shizhanpic' style='background-image: url(/homes/images/58d8c6da0001ff8505400300-360-202.jpg);'>
                                    </div>
                                </div>
                                <div class='szcourse-cart-B'>
                                    <div>
                                        <div class="szcourse-name clearfix">
                                            Angular 4.0从入门到实战 打造股票管理网站
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    1028人在学
                                                </span>
                                            <span class='r'>
                                                    ￥199.00
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- 前4个课程追加渠道统计链接 -->
                            <a href='http://coding.imooc.com/class/106.html' target="_blank" class='szcourse-cart '>
                                <div class='szcourse-cart-A'>
                                    <div class='szcourse-cart-b'>
                                        <div class="szcourse-p1 clearfix">
                                            <i class="imv2-war">
                                            </i>
                                            <span>
                                                    实战课程
                                                </span>
                                        </div>
                                        <div class="szcourse-p2">
                                            Android应用发展趋势必备武器 热修复与插件化
                                        </div>
                                        <div class='szcourse-p3'>
                                            掌握当下Android最流行的技术，助你达到阿里P5级别
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    192人在学
                                                </span>
                                            <span class='r'>
                                                    ￥248.00
                                                </span>
                                        </div>
                                    </div>
                                    <div class='szcourse-cart-o'>
                                    </div>
                                    <div class='shizhanpic' style='background-image: url(/homes/images/5938b0f100016a9e05400300-360-202.jpg);'>
                                    </div>
                                </div>
                                <div class='szcourse-cart-B'>
                                    <div>
                                        <div class="szcourse-name clearfix">
                                            Android应用发展趋势必备武器 热修复与插件化
                                        </div>
                                        <div class='szcourse-bottom clearfix'>
                                                <span class='l'>
                                                    192人在学
                                                </span>
                                            <span class='r'>
                                                    ￥248.00
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @foreach($courses as $k=>$v)
                            <div class="course-card-container">
                                <a target="_blank" href="/list/detail?c={{$v->id}}" class="course-card">
                                    <div class="course-card-top">
                                        <img class="course-banner lazy" data-original="/{{$v->pic}}"
                                             src="/{{$v->pic}}" style="display: inline;">
                                        <div class="course-label">
                                            <label>
                                                HTML/CSS
                                            </label>
                                        </div>
                                    </div>
                                    <div class="course-card-content">
                                        <h3 class="course-card-name">
                                            {{$v->title}}
                                        </h3>
                                        <div class="clearfix course-card-bottom">
                                            <div class="course-card-info">
                                                <span>
                                                    {{difficulty($v->difficulty)}}
                                                </span>
                                                <span>
                                                    <i class="">
                                                        <img width="10px" height="10px" src="/homes/images/user.png" alt="">
                                                    </i>
                                                    {{$v->NNT}}
                                                </span>
                                            </div>
                                            <p class="course-card-desc">
                                                {{$v->referral}}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </ul>
                </div>
                <div class="page">

                </div>
                {{--<style>--}}
                    {{--.page li{--}}
                        {{--padding: 0 4px;--}}
                        {{--min-width: 24px;--}}
                        {{--line-height: 32px;--}}
                        {{--font-size: 14px;--}}
                        {{--display: inline-block;--}}
                        {{--text-align: center;--}}
                    {{--}--}}

                {{--</style>--}}
            </div>
        </div>
    </div>



@endsection