<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @yield('title')

        {{--{{config('web.web_title')}}--}}



    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit" />
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
    <script src="/homes/banner/bootstrap/js/jquery-1.9.1.js"></script>
    <script src="/homes/banner/bootstrap/js/list.js"></script>
    <link rel="stylesheet" href="/homes/css/d6ce7be945424a9b914c162b14d44966.css" type="text/css" />

    <meta name="Keywords" content="{{config('web.keywords')}}" />
    <meta name="Description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。"
    />
    <link rel="stylesheet" href="/homes/css/moco.min_1.css" type="text/css" />

    {{--<link rel="stylesheet" href="/homes/css/index-less.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="/homes/css/index-less_1.css" type="text/css"/>--}}
    <link rel="stylesheet" href="/homes/css/index-less_2.css" type="text/css"/>

    <link rel="stylesheet" href="/homes/css/0aa178d80ba044de83db95986c61bede.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/0b9cb28d416b48c58157f6d1a364a7b5.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/common-less_1.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/moco.min.css" type="text/css" />
    {{--<link rel="stylesheet" href="/homes/css/67dfda356a8546e3ac009aec672217c2.css" type="text/css" />--}}

    <link rel="stylesheet" href="/homes/css/126-less.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/homes/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/homes/css/style.css" />
    <script type="text/javascript" src="/homes/js/my.js"></script>
    <script type="text/javascript" src="/homes/js/1.7.js"></script>
    <script src="/homes/js/main.js"></script>
    <script type="text/javascript" src="/homes/js/tongji.js"></script>

    <link rel="stylesheet" href="/homes/css/moco.min.css" type="text/css" />



    <script type="text/javascript">
        eval(function(p, a, c, k, e, d) {
            e = function(c) {
                return (c < a ? "": e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--) d[e(c)] = k[c] || e(c);
                k = [function(e) {
                    return d[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1;
            };
            while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p;
        } ('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()', 54, 54, '|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'), 0, {}))
    </script>
    <script type="text/javascript">
        var OP_CONFIG = {
            "module": "course",
            "page": "list",
            "userout": 0,
            "usercaution": null
        };
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp = "v=201708111926";
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
    </script>
    <link rel="stylesheet" href="/homes/css/f37e70af00f44cf084353e6e5c275c79.css"
          type="text/css" />
</head>


{{--        头部导航信息          头部导航信息   头部导航信息   头部导航信息   头部导航信息   头部导航信息  --}}
<body id="List_courseId">
<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo">
                <a href="/" target="_self" class="hide-text" title="首页">
                慕课网
            </a>
        </div>
        <button type="button" class="navbar-toggle visible-xs-block js-show-menu">
            <i class="icon-menu">
            </i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block">
                <a href="/user/newlogin" target="_self">
                    登录
                </a>
                /
                <a href="/user/newsignup" target="_self">
                    注册
                </a>
            </li>
            <li>
                <a href="/course/list" class="active" target="_self">
                    课程
                </a>
            </li>
            <li>
                <a href="/course/class" class="program-nav " target="_self">
                    职业路径
                    <i class="icn-new">
                    </i>
                </a>
            </li>
            <li>
                <a href="/course/coding" target="_self">
                    实战
                </a>
            </li>
            <li>
                <a href="/wenda" target="_self">
                    猿问
                </a>
            </li>
            <li>
                <a href="/article" target="_self">
                    手记
                </a>
            </li>
        </ul>

        {{--   session    session  是否有  --}}

@if ( !session()->get('users'))
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="/cart" class="shop-cart-icon" target="_blank">
                                <span class="js-endcart">
                                    <img width='16px' height="16px" src="/homes/images/shopping.png" alt="">
                                </span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0"
                              style='display: none'>
                                    0
                                </span>
                          <span>
                                    购物车
                          </span>
                    </a>
                    <div class="my-cart" id="js-my-cart">
                    </div>
                </li>
                <nav class="main_nav">

                    <li class="header-signin" style="margin-left: 60px;">
                        <a href="#0" class="cd-signin" id="js-signin-btn">登录</a>
                    </li>
                    <li class="header-signup">
                        <a href="#0" class="cd-signup" id="js-signup-btn">注册</a>
                    </li>
                </nav>
            </ul>
        </div>
        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="pa searchTags">
                <a href="http://class.imooc.com/sc/20" target="_blank">
                    前端入门
                </a>
                <a href="http://class.imooc.com/sc/18" target="_blank">
                    Java入门
                </a>
            </div>
            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" type="text"
                       autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'>
                <i class='search'>
                    <img src="/homes/images/search.png" alt="">
                </i>
            </div>
        </div>
    </div>

@else

        <div id="login-area">
            <ul class="clearfix logined">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart js-endcart"></span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0" style="display: none">0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart">
                        <div class="cart-title-box clearfix">
                            <h2 class="l">我的购物车</h2>
                            <h5 class="r">已加入<span class="js-incart-num">0</span>门课程
                            </h5>
                        </div>
                        <div class="cart-wrap">
                            <div class="clear-cart">
                                <span class="cartIcon icon-shopping-cart"> </span>
                                <h3>购物车里空空如也</h3>
                                <div class="text">
                                    快去这里选购你中意的课程
                                </div>
                                <p><a class="go-link" href="http://coding.imooc.com" target="_blank"> 实战课程</a></p>
                                <p><a class="go-link" href="http://www.imooc.com/course/program" target="_blank"> 职业路径</a></p>
                            </div>
                        </div>
                        <div class="more-box clearfix">
                            <div class="l show-box">
                                <span class="text"><a href="http://order.imooc.com/myorder" target="_blank">我的订单中心</a></span>
                            </div>
                            <a href="http://order.imooc.com/pay/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>
                        </div>
                    </div>
                </li>
                <li class="remind_warp">
                    <i class="msg_remind" style="display: none;"></i>
                    <a target="_blank" href="/u/5601964/notices">
                        <i class="icon-notifi"> </i>
                        <!-- <span class="msg_icon" style="display: none;"></span> -->
                    </a>
                </li>
                <li class="set_btn user-card-box" id="header-user-card">
                    <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="/u/5601964" target="_self">
                        <img src="@if(!session('details')) http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg
                                                    @else {{ session('details')->profile  }} @endif " alt="">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒 </span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top clearfix">
                                <a href="/u/5601964" class="l" class="user-card-item js-header-avator hover" action-type="my_menu" id="header-avator" target="_self">


                                    <img src="@if(!session('details')) http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg
                                                    @else {{ session('details')->profile  }} @endif " alt="">



                                    <i class="myspace_remind" style="display: none;"></i>
                                    <span style="display: none;">动态提醒</span>
                                </a>
                                <div class="card-top-right-box l">
                                    <a href="/u/5601964"><span class="name text-ellipsis"> weixin_赵世强_0</span></a>
                                    <div class="meta">
                                        <a href="/u/5601964/experience"> 经验<b id="js-user-mp">197</b> </a>
                                        <a href="/u/5601964/credit"> 积分<b id="js-user-credit"> 1 </b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-center-box">
                                <ul class="clearfix">
                                    <li class="l">
                                        <a href="/u/5601964/courses" target="_blank"><span class="user-center-icon icon-tick"></span>我的课程</a>
                                    </li>
                                    <li class="l">
                                        <a href="http://order.imooc.com/myorder" target="_blank"> <span class="user-center-icon icon-receipt"></span> 订单中心</a>
                                        <i id="js-usercard-coupon-icon" style="display: none;"></i>
                                    </li>
                                    <li class="l">
                                        <a href="/mall/index" target="_blank"><span class="user-center-icon icon-score_shop"> </span> 积分商城</a>
                                    </li>
                                    <li class="l">
                                        <a href="/user/setbindsns" target="_blank"> <span class="user-center-icon icon-set"> </span>个人设置 </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">  表单验证</span>
                                    <span class="media-name text-ellipsis"> 5-1用户名输入框验证</span>
                                    <i class="icon-clock"> </i>
                                    <a href="http://www.imooc.com/video/527" class="continue" title="用户名输入框验证 5-1用户名输入框验证">继续</a>
                                </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a href="{{ url('passport/user/logout') }}" class="r">安全退出</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    @endif



</div>
@section('content')

@show

<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box">
                    </div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank"
                   title="新浪微博">
                </a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/"
                   target="_blank" title="QQ空间">
                </a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li>
                            <a href="http://www.imooc.com/" target="_blank">
                                网站首页
                            </a>
                        </li>
                        <li>
                            <a href="/about/cooperate" target="_blank" title="企业合作">
                                企业合作
                            </a>
                        </li>
                        <li>
                            <a href="/about/job" target="_blank">
                                人才招聘
                            </a>
                        </li>
                        <li>
                            <a href="/about/contact" target="_blank">
                                联系我们
                            </a>
                        </li>
                        <li>
                            <a href="/about/recruit" target="_blank">
                                讲师招募
                            </a>
                        </li>
                        <li>
                            <a href="/about/faq" target="_blank">
                                常见问题
                            </a>
                        </li>
                        <li>
                            <a href="/user/feedback" target="_blank">
                                意见反馈
                            </a>
                        </li>
                        <li>
                            <a href="http://daxue.imooc.com/" target="_blank">
                                慕课大学
                            </a>
                        </li>
                        <li>
                            <a href="/about/friendly" target="_blank">
                                友情链接
                            </a>
                        </li>
                        <!-- <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>
                    Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2
                </p>
            </div>
        </div>
    </div>
</div>
<div id="J_GotoTop" class="elevator">
    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback">
        </i>
        <span class="">
                    意见反馈
                </span>
    </a>
    <a href="/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques">
        </i>
        <span class="">
                    常见问题
                </span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app">
        <i class="icon-appdownload">
        </i>
        <span class="">
                    APP下载
                </span>
        <div class="elevator-app-box">
        </div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin">
        <i class="icon-wxgzh">
        </i>
        <span class="">
                    官方微信
                </span>
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none"
       id="backTop">
        <i class="icon-up2">
        </i>
        <span class="">
                    返回顶部
                </span>
    </a>
</div>
<!--script-->
<script type="text/javascript" src="/homes/js/error.js"></script>
<script src="/homes/js/ssologin.js"></script>
<script type="text/javascript" src="/homes/js/sea.js"></script>
<script type="text/javascript" src="/homes/js/sea_config_1.js"></script>
<script type="text/javascript" src="/homes/js/common.js"></script>
<script type="text/javascript" src="/homes/js/moco.min.js"></script>
<script type="text/javascript" src="/homes/js/require.js"></script>
<script>
    requirejs.config({
        urlArgs: requirejsTimestamp,
        baseUrl: '/static/module/',
        skipDataMain: true,
        waitSeconds: 0,
        paths: {
            lib: '/static/lib',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            store: '/static/lib/store/store.min.js',
            ueditor: '/static/lib/ueditor/ueditor.final.min.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            juicer: '/static/lib/juicer/juicer.min.js',
            ace: '/static/lib/ace1.2.6/ace.js',
            //ace: '/static/lib/ace/src/ace.js',
            pagination: '/static/lib/pagination/jquery.pagination.js',
            swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
            uploader: '/static/lib/webuploader/0.1.5/webuploader.js',

            jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
            ide: '/static/lib/ide/dest/ide.min.js',
            autocomplete:'/static/lib/util/autocomplete.js',
            validate:'/static/lib/util/validate.js',
            placeholder:'/static/lib/util/placeholder.js',
            modalbutton:'/static/lib/util/modal.button.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
            jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
        },
        shim: {
            'swfobject': {
                exports: 'swfobject'
            }
        }
    });
</script>


<div class="cd-user-modal">
    <div class="cd-user-modal-container">
        <ul class="cd-switcher">
            <li><a href="#0">用户登录</a></li>
            <li><a href="#0">注册新用户</a></li>
        </ul>

        <div id="cd-login"> <!-- 登录表单 -->
            <form class="cd-form" action="{{ url('login') }}" method="post" name="form1">
                {{ csrf_field() }}
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signin-username">用户名</label>
                    <input class="full-width has-padding has-border" id="signin-username" type="text" placeholder="输入用户名" name="username" required><br>
                    <span id="text4"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">密码</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="输入密码" name="password" required><br>
                    <span id="text5"></span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">记住登录状态</label>
                </p>

                <p class="fieldset">
                    <input class="full-width2" type="submit" value="登 录">
                </p>
            </form>
        </div>

        <div id="cd-signup"> <!-- 注册表单 -->
            <form class="cd-form" action="{{ url('register') }}" method="post" name="form2">
                {{ csrf_field() }}
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">用户名</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="输入用户名" required><br>
                    <span id="text1"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">邮箱</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="输入mail" name="email" required><br>
                    <span id="text2"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">密码</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="输入密码" name="password" required><br>
                    <span id="text3"></span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms" required>
                    <label for="accept-terms">我已阅读并同意 <a href="#0">用户协议</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width2" type="submit" value="注册新用户" id="submit">
                </p>
            </form>
        </div>
        <a href="#0" class="cd-close-form">关闭</a>
    </div>
</div>


{{--         注册验证JS    --}}

<script type="text/javascript">
    //        验证用户名
    $('#signup-username').focus(function () {
        $(this).css('border', '2px solid green');
        $('#text1').css('color', 'green');
        $('#text1').text('请输入字母数字下划线 6-20个字符');
    })



    $('#signup-username').blur(function () {
//        获取文本值
        var us = $(this).val();
//       console.log(us);

//       正则
        var reg = /^\w{6,20}$/;

//        执行正则
        if ( !reg.test(us)) {
            $(this).css('border', '2px solid red');
            $('#text1').css('color', 'red');
            $('#text1').text('用户名不符合规则');

        }   else {

//          url   username
//          {}
//          回调函数

            $.post("{{ url('home/username') }}",{ 'username':us, '_token':'{{ csrf_token() }}'}, function (data) {
//                console.log(data.status);
//
                if (data.status == '0') {
                    $('#signup-username').css('border', '2px solid red');
                    $('#text1').css('color', 'red');
                    $('#text1').text('用户名已存在');
                } else {
                    $('#signup-username').css('border', '');
                    $('#text1').css('color', 'green');
                    $('#text1').text('用户名可用');
                }
            })
        }

    })
    //        验证邮箱
    $('#signup-email').focus(function () {
        $(this).css('border', '2px solid green');
        $('#text2').css('color', 'green');
        $('#text2').text('请输入正确格式的邮箱 如 15100126870@163.com');
    })

    $('#signup-email').blur(function () {
//        获取文本值
        var es = $(this).val();
//           console.log(es);

//       正则
        var reg1 = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;

//        执行正则
        if ( !reg1.test(es)) {
            $(this).css('border', '2px solid red');
            $('#text2').css('color', 'red');
            $('#text2').text('邮箱不符合要求');

        }   else {

//          url   username
//          {}
//          回调函数

            $.post("{{ url('home/email') }}",{ 'email':es, '_token':'{{ csrf_token() }}'}, function (data) {
//                   console.log(data[0].msg);

                if (data.status == '0') {
                    $('#signup-email').css('border', '2px solid red');
                    $('#text2').css('color', 'red');
                    $('#text2').text('邮箱已存在');
                }  else {
                    $('#signup-email').css('border', '');
                    $('#text2').css('color', 'green');
                    $('#text2').text('邮箱可用');
                }
            })
        }
    })


    //        验证密码


    $('#signup-password').focus(function () {
        $(this).css('border', '2px solid green');
        $('#text3').css('color', 'green');
        $('#text3').text('请输入字母数字下划线 6-20个字符');
    })

    $('#signup-password').blur(function () {
//        获取文本值
        var ps = $(this).val();
//    console.log(ps);

//       正则
        var reg2 = /^\w{6,20}$/;

//        执行正则
        if ( !reg2.test(ps)) {
            $(this).css('border', '2px solid red');
            $('#text3').css('color', 'red');
            $('#text3').text('密码不符合要求');

        }   else {
            $('#signup-password').css('border', '');
            $('#text3').css('color', 'green');
            $('#text3').text('密码可用');
        }
    })

</script>

{{--       注册验证JS    --}}




{{--         登录验证    --}}
<script type="text/javascript">
    //        验证用户名
    $('#signin-username').focus(function () {
        $(this).css('border', '2px solid green');
        $('#text4').css('color', 'green');
        $('#text4').text('请输入您的用户名');
    })


    var userinfo = null;
    $('#signin-username').blur(function () {
//        获取文本值
        userinfo = $(this).val();
//       console.log(userinfo);

//       正则
        var reg5 = /^\w{6,20}$/;

//        执行正则
        if ( !reg5.test(userinfo)) {
            $(this).css('border', '2px solid red');
            $('#text4').css('color', 'red');
            $('#text4').text('用户名不符合规则');

        }   else {

//          url   username
//          {}
//          回调函数

            $.post("{{ url('home/username/login') }}",{ 'username':userinfo, '_token':'{{ csrf_token() }}'}, function (data) {
//                    console.log(data.status);

                if (data.status == '0') {
                    $('#signin-username').css('border', '');
                    $('#text4').css('color', 'green');
                    $('#text4').text('用户名正确');
                } else {
                    $('#signin-username').css('border', '2px solid red');
                    $('#text4').css('color', 'red');
                    $('#text4').text('用户名不存在');
                }
            })
        }

    })


    //        验证密码


    $('#signin-password').focus(function () {
        $(this).css('border', '2px solid green');
        $('#text5').css('color', 'green');
        $('#text5').text('请在安全的情况下输入您的密码');
    })



    $('#signin-password').blur(function () {
//        获取文本值
        var pd = $(this).val();
//       console.log(pd);

//       正则
        var reg6 = /^\w{6,20}$/;

//        执行正则
        if ( !reg6.test(pd)) {
            $(this).css('border', '2px solid red');
            $('#text5').css('color', 'red');
            $('#text5').text('密码不符合规则');

        }   else {

//          url   username
//          {}
//          回调函数

            $.post("{{ url('home/username/password') }}",{ 'password':pd, 'username':userinfo, '_token':'{{ csrf_token() }}'}, function (data) {
                console.log(data.status);

                if (data.status == '0') {
                    $('#signin-password').css('border', '');
                    $('#text5').css('color', 'green');
                    $('#text5').text('密码正确');
                } else {
                    $('#signin-password').css('border', '2px solid red');
                    $('#text5').css('color', 'red');
                    $('#text5').text('密码不正确');
                }
            })
        }

    })

</script>



{{--  登录后显示用户信息  登录后显示用户信息  登录后显示用户信息 --}}
<script>
    //       $('#header-avator').mousemove(function () {
    //           if ( $('.card-inner ').style.display == 'none' ) {
    //               $('.card-inner ').style.display = 'block';
    //           }
    //       })

    $('.set_btn').mouseover(function(){
        $(this).addClass('hover');
    }).mouseout(function(){
        $(this).removeClass('hover');
    })
</script>





{{--  登录后显示用户信息  登录后显示用户信息  登录后显示用户信息 --}}


</body>

</html>