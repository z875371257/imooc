<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('web.web_title')}}</title>
    <link rel="shortcut icon" href="/homes/images/style.ico"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
    <meta name="Keywords" content="{{config('web.keywords')}}" />
    <meta name="Description" content="{{config('web.description')}}" />
    <meta name="360-site-verification" content="efec9ca9c0c2bf49b8f54f8ea4626ea8" /><meta name="baidu-site-verification" content="f81e4a13096b3a7cab15fe1d39773a4e"/>
    <link rel="stylesheet" href="/homes/css/big.css">
    <link rel="stylesheet" href="/homes/css/moco.min.css" type="text/css" />

    <script type="text/javascript" src="/homes/banner/bootstrap/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/layer/layer.js"></script>
    <script type="text/javascript" src="/homes/banner/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/homes/banner/bootstrap/js/my.js"></script>
    <link rel="stylesheet" href="/homes/banner/bootstrap/css/bootstrap.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/homes/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/homes/css/style.css" />
    <script type="text/javascript" src="/homes/js/my.js"></script>
    <script type="text/javascript" src="/homes/js/1.7.js"></script>
    <script src="/homes/js/main.js"></script>
    <script type="text/javascript" src="/homes/js/tongji.js"></script>


    <link rel="stylesheet" href="/homes/css/moco.min.css" type="text/css" />




</head>
<body  id="index">

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text" title="首页">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
            <li class="set-btn visible-xs-block"><a href="/user/newlogin" target="_self">登录</a> / <a href="/user/newsignup" target="_self">注册</a></li>

            <li>
                <a href="/course/list"  target="_self">课程</a>
            </li>
            <li><a href="/course/class" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="/course/coding" target="_self">实战</a>
            </li>
            <li><a href="/wenda"  target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>

        </ul>

{{--  session 判断显示 session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示 --}}

        @if ( !session()->get('users'))

        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="/cart" class="shop-cart-icon" target="_blank">
                        <img width='16px' height="16px" src="/homes/images/shopping.png" alt="">
                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart">
                        <div class="cart-title-box clearfix">
                            <h2 class="l"></h2>
                            <h5 class="r">已加入<span class="js-incart-num">0</span>门课程</h5>
                        </div>
                        <div class="cart-wrap">
                            <div class="clear-cart">
                                <span class="cartIcon icon-shopping-cart"></span>
                                <h3> 购物车里空空如也</h3>
                                <div class="text">快去这里选购你中意的课程</div>
                                <p><a class="go-link" href="http://coding.imooc.com" target="_blank">实战课程</a></p>
                                <p><a class="go-link" href="http://www.imooc.com/course/program" target="_blank">职业路径</a></p>
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

                <nav class="main_nav">


                   

                  
                          


                    <li class="header-signin" style="margin-left: 20px;">
                        <a href="#0" class="cd-signin" id="js-signin-btn">登录</a>

                    </li>
                    <li class="header-signup">
                        <a href="#0" class="cd-signup" id="js-signup-btn">注册</a>
                    </li>
                </nav>

            </ul>
        </div>
        @else

            <div id="login-area">
                <ul class="clearfix logined">
                    <li class="shop-cart" id="shop-cart">
                        <a href="/cart" class="shop-cart-icon" target="_blank">
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
                                    <span class="text"><a href="/order" target="_blank">我的订单中心</a></span>
                                </div>
                                <a href="/cart" target="_blank" class="r moco-btn moco-btn-red go-cart">去购物车</a>
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
                                            <a href="/order" target="_blank"> <span class="user-center-icon icon-receipt"></span> 订单中心</a>
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



{{--  session 判断显示 session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示session 判断显示 --}}
        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="pa searchTags" >
                <a href="http://class.imooc.com/sc/20" target="_blank">前端小白</a>
                <a href="http://class.imooc.com/sc/18" target="_blank">Java 入门</a>
            </div>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger"      type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><a href="/"><img src="/homes/images/search.png" alt=""></a></div>
        </div>
    </div>
</div>

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">
    <div class="bk"></div>
    <div class="g-banner pr">
        <div class="menuwrap">
        </div>
        <!-- 前端开发 -->
        <div class="submenu a hide" data-id="a">
            <div class="innerBox clearfix" style="background-image: url(/homes/images/febg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>
                    @foreach($qd as $k=>$v)
                    <a href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a>
                        <span class="ml10 mr10">/</span>
                    @endforeach

                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>
                        @foreach($qdkc as $k=>$v)
                        <p class="path-recom">
                            <a href="/class/detail?id={{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($qdsz as $k=>$v)
                        <p>
                            <a href="/coding/detail?c={{$v->id}}" data-track="syhd-1-1" target="_blank">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($qdtj as $k=>$v)
                        <div class="free-recom-box clearfix">
                            <p><a href="/list/detail?c={{$v->id}}">
                                    <span class="cate-tag">课程</span>{{$v->title}}</a></p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- 后端开发 -->
        <div class="submenu b hide" data-id="b">
            <div class="innerBox " style="background-image: url(/homes/images/backbg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>
                    @foreach($hd as $k=>$v)
                        <a href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a>
                        <span class="ml10 mr10">/</span>
                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($hdkc1 as $k=>$v)
                        <p class="path-recom">
                            <a href="/class/detail?id={{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        @foreach($hdkc2 as $k=>$v)
                        <p class="path-recom">
                            <a href="/class/detail?id={{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($hdsz as $k=>$v)
                        <p>
                            <a href="/coding/detail?c={{$v->id}}" data-track="syhd-1-2" target="_blank">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        @foreach($hdtj as $k=>$v)
                        <div class="free-recom-box clearfix">
                            <p><a target="_blank" href="/list/detail?c={{$v->id}}" data-track="syhd-1-3"><span class="cate-tag">课程</span>{{$v->title}}</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- 移动开发 -->
        <div class="submenu c hide" data-id="c">
            <div class="innerBox " style="background-image: url(/homes/images/mobilebg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>
                    @foreach($yd as $k=>$v)
                        <a href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a>
                        <span class="ml10 mr10">/</span>
                    @endforeach

                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>
                        @foreach($ydkc1 as $k=>$v)
                        <p class="path-recom">
                            <a href="/class/detail?id={{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}</a>
                        </p>
                        @endforeach
                        @foreach($ydkc2 as $k=>$v)
                            <p class="path-recom">
                                <a href="/class/detail?id={{$v->id}}" target="_blank">
                                    <span class="cate-tag">职业路径</span>{{$v->title}}</a>
                            </p>
                            @endforeach
                        @foreach($ydsz as $k=>$v)
                        <p>
                            <a href="/coding/detail?c={{$v->id}}" target="_blank" data-track="syyd-1-1" >
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        <div class="free-recom-box clearfix">
                            @foreach($ydtj as $k=>$v)
                            <p>
                                <a target="_blank" href="/list/detail?c={{$v->id}}" data-track="syyd-1-3">
                                    <span class="cate-tag">课程</span>{{$v->title}}
                                </a>
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 数据库 -->
        <div class="submenu d hide" data-id="d">
            <div class="innerBox " style="background-image: url(/homes/images/databg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>

                    @foreach($sjk as $k=>$v)
                    <a target="_blank" href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($sjksz as $k=>$v)
                        <p>
                            <a href="/coding/detail?c={{$v->id}}" target="_blank" data-track="sydata-1-2">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($sjktj as $k=>$v)
                            <p>
                                <a target="_blank" href="/list/detail?c={{$v->id}}" data-track="sydata-1-5">
                                    <span class="cate-tag">课程</span>{{$v->title}}
                                </a>
                            </p>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 云计算&大数据 -->
        <div class="submenu e hide" data-id="e">
            <div class="innerBox " style="background-image: url(/homes/images/bigdatabg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>

                    @foreach($yjs as $k=>$v)
                        <a target="_blank" href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($yjssz as $k=>$v)
                            <p>
                                <a href="/coding/detail?c={{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($yjstj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/list/detail?c={{$v->id}}" data-track="sydata-1-5">
                                        <span class="cate-tag">课程</span>{{$v->title}}
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 运维&测试 -->
        <div class="submenu f hide" data-id="f">
            <div class="innerBox " style="background-image: url(/homes/images/textbg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>

                    @foreach($yw as $k=>$v)
                        <a target="_blank" href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($ywsz as $k=>$v)
                            <p>
                                <a href="/coding/detail?c={{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($ywtj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/list/detail?c={{$v->id}}" data-track="sydata-1-5">
                                        <span class="cate-tag">课程</span>{{$v->title}}
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 视觉设计 -> UI设计 -->
        <div class="submenu g hide" data-id="g">
            <div class="innerBox " style="background-image: url(/homes/images/imgbg.png); background-size: 100%;">
                <div class="subinnerBox">
                    <div class="title">分类目录</div>

                    @foreach($yj as $k=>$v)
                        <a target="_blank" href="/course/list?fx={{$v->pid}}&c={{$v->cid}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($yjsz as $k=>$v)
                            <p>
                                <a href="/coding/detail?c={{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($yjtj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/list/detail?c={{$v->id}}" data-track="sydata-1-5">
                                        <span class="cate-tag">课程</span>{{$v->title}}
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menuContent">
            @foreach($res as $k=>$v)
            <div class="item item{{$k}}" data-id="a">
                <a href="/course/list?fx={{$v->cid}}" >
                    <span class="group">{{$v->cname}}</span>
                    <i style="margin-top:-20px"><img width="20" height="20" src="/homes/images/more.png" alt=""></i>
                </a>
            </div>
            @endforeach
        </div>
        <style>
            #box{
                width:976px;
                float:right;
            }
            .g-banner .prev{
                left:0px;
            }
        </style>
        <div class="g-banner-content carousel slide" id="box">
            <ol class="carousel-indicators">
                <li data-target="#box" data-slide-to="0" class="active"></li>
                <li data-target="#box" data-slide-to="1"></li>
                <li data-target="#box" data-slide-to="2"></li>
                <li data-target="#box" data-slide-to="3"></li>
                <li data-target="#box" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
                @foreach($banner as $k=>$v)
                    <div class="item">
                        <a href="/coding/detail?c={{$v->id}}"><img width="100%" height="500px" src="{{$v->bigpic}}" alt=""></a>
                    </div>
                @endforeach
            </div>

            <a class="left banner-anchor prev" href="#box" data-slide="prev">&lsaquo;</a>
            <a class="right banner-anchor next" href="#box" data-slide="next">&rsaquo;</a>
        </div>


        <div class="cb"></div>
    </div><div class='path-banner clearfix'>
        <a href='/course/class?c=28' target="_blank" data-track='sysdtj-1-1'><img src='/homes/picture/path_1.png' />	</a>
        <a href='/course/class?c=29' target="_blank" data-track='sysdtj-1-2'><img src='/homes/picture/path_2.png' />	</a>
        <a href='/course/class?c=42' target="_blank" data-track='sysdtj-1-3'><img src='/homes/picture/path_3.png' />	</a>
        <a href='/course/class?c=43' target="_blank" data-track='sysdtj-1-4'><img src='/homes/picture/path_4.png' />	</a>
        <a href='/course/class?c=44' target="_blank" data-track='sysdtj-1-4'><img src='/homes/picture/path_5.png' />	</a>
    </div>
    <div class='container-types clearfix'>	<h3 class='types-title'>		实战推荐
            <a href='/course/coding' class='types-title-more' target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>			</h3>	<div class='clearfix types-content'>

            <!--  实战推荐  -->
            @foreach($sztj as $k=>$v)
            <div class='index-card-container course-card-container container coding'>

                <a target="_blank" class='course-card' href='/coding/detail?c={{$v->id}}' data-track="sztj-1-1">
                    <div class='course-card-top cart-color purple'>
                        <span>{{$v->titles}}</span>
                    </div>
                    <div class='course-card-content'>
                        <h3 class='course-card-name'>{{$v->title}}</h3>
                        <p title='{{$v->referral}}'>{{$v->referral}}</p>
                        <div class='clearfix course-card-bottom'>
                            <div class='course-card-info'>
                                {{$v->NNT}}人在学
                            </div>

                            <div class='course-card-price'>￥{{$v->price}}0</div>
                        </div>
                    </div>
                </a>
                <img src='/homes/picture/new.png' class='course-cart-new'/>

                <div class='course-card-bk' style='background-image: url(/{{$v->pic}})'></div>

            </div>
                @endforeach
        </div>
    </div>
    <div class='container-types clearfix'>	<h3 class='types-title'>		免费好课
            <a href='/course/list' class='types-title-more' target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>	<div class='clearfix types-content'>
            @foreach($mfhk as $k=>$v)
            <div class='index-card-container course-card-container container  new'>

                <a target="_blank" class='course-card' href="/list/detail?c={{$v->id}}" data-track="mfhk-1-1">
                    <div class='course-card-top cart-color orange'>
                        <i class='imv2-war'></i>
                        <span>{{$v->titles}}</span>
                    </div>

                    <div class='course-card-content'>
                        <h3 class='course-card-name'>{{$v->title}}</h3>
                        <p title='{{$v->referral}}'>{{$v->referral}}</p>
                        <div class='clearfix course-card-bottom'>
                            <div class='course-card-info'>
                                {{difficulty($v->difficulty)}}<span>·</span>
                                {{$v->NNT}}人在学
                            </div>
                        </div>
                    </div>
                </a>

                <div class='course-card-bk'>
                    <img src='/{{$v->pic}}' />
                </div>
            </div>
            @endforeach

        </div></div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            前端开发工程师
            <a href="/course/class?c=28" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>
        <div class='clearfix types-content'>
            <!-- 第一个推荐 -->
            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58c2494a00018ebd02240348.jpg);'>
                <div class='course-content-container'>
                    <div class='path-card-container '>
                        <a target="_blank" href='/class/detail?id={{$qd1[0]->id}}'
                           data-track="syqdkf-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <span>职业路径</span>
                            </div>

                            <div class='path-cart-tit3'>{{$qd1[0]->title }}</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>

                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第二个推荐 -->
                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        @foreach($qd2 as $k=>$v)
                        <div><a target="_blank" data-track='syqdkf-1-2' href='/class/detail?id={{$v->id}}' title='{{$v->title}}'>· {{$v->title}}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner clearfix'>
                    <a target="_blank" data-track='syqdkf-1-5' href='#'><img src='/homes/picture/59226e1a0001e5bd04680100.jpg' /></a>
                    <a target="_blank" data-track='syqdkf-1-6' href='#'><img src='/homes/picture/59226eb2000198f004680100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    <!-- 第三个带图片推荐 -->
                    @foreach($qd3 as $k=>$v)
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/class/detail?id={{$v->id}}"
                           data-track="syqdkf-1-7"
                        >
                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>jQuery</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$v->title}}</h3>
                                <p title='{{$v->referral}}'>{{$v->referral}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{difficulty($v->difficulty)}}<span>·</span>
                                        {{$v->NNT}}人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>

                        <div class='course-card-bk'>
                            <img src='{{$v->pic}}' />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            PHP开发工程师
            <a href="/course/class?c=29" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>
        <div class='clearfix types-content'>
            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58f57d0e0001bc7502240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='/class/detail?id={{$php1[0]->id}}'
                           data-track="syphp-1-1"
                        >
                            <div class='path-cart-tit1'>

                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>{{$php1[0]->title}}</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        @foreach($php2 as $k=>$v)
                        <div><a target="_blank" data-track='syphp-1-2' href='/class/detail?id={{$v->id}}' title='{{$v->title}}'>· {{$v->title}}</a></div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner types-content-banner-one clearfix'>
                    <a target="_blank" href='http://coding.imooc.com/class/85.html' data-track='syphp-1-5'><img src='/homes/picture/5926bd490001157d09560100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    @foreach($php3 as $k=>$v)
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/class/detail?id={{$v->id}}"
                           data-track="syphp-1-7"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>PHP</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$v->title}}</h3>
                                <p title='{{$v->referral}}'>{{$v->referral}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{difficulty($v->difficulty)}}<span>·</span>
                                        {{$v->NNT}}人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>

                        <div class='course-card-bk'>
                            <img src='{{$v->pic}}' />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            Android开发工程师
            <a href="/course/class?c=43" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>

            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58ac18fd00012a4202240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='/course/class?id={{$android1[0]->id}}'
                           data-track="syandroid-1-1"
                        >
                            <div class='path-cart-tit1'>

                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>{{$android1[0]->title}}</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>

                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        @foreach($android2 as $k=>$v)
                        <div><a target="_blank" data-track='syandroid-1-2' href='/class/detail?id={{$v->id}}' title='{{$v->title}}'>· {{$v->title}}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner clearfix'>
                    <a target="_blank" data-track='syandroid-1-5' href='http://coding.imooc.com/class/101.html'><img src='/homes/picture/591be51100019cbc04680100.jpg' /></a>
                    <a target="_blank" data-track='syandroid-1-6' href='http://coding.imooc.com/class/100.html'><img src='/homes/picture/591be8ad0001a12e04680100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    @foreach($android3 as $k=>$v)
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card' href="/class/detail?id={{$v->id}}" data-track="syandroid-1-8">

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Android</span>
                                <span>React.JS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$v->title}}</h3>
                                <p title='{{$v->referral}}'>{{$v->referral}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{difficulty($v->difficulty)}}<span>·</span>
                                        {{$v->NNT}}人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover001_s.jpg' />
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            iOS开发工程师
            <a href="/course/class?c=44" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/5900151f0001c25f02240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='/class/detail?id={{$ios1[0]->id}}'
                           data-track="-1-1"
                        >
                            <div class='path-cart-tit1'>

                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>{{$ios1[0]->title}}</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>

                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        @foreach($ios2 as $k=>$v)
                        <div><a target="_blank" data-track='-1-2' href='/class/detail?id={{$v->id}}' title='{{$v->title}}'>· {{$v->title}}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner types-content-banner-one clearfix'>
                    <a target="_blank" href='http://www.imooc.com/learn/663' data-track='-1-5'><img src='/homes/picture/59226c9500014bd709580100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    @foreach($ios3 as $k=>$v)
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/class/detail?id={{$v->id}}"
                           data-track="-1-9"
                        >
                            <div class='course-card-top cart-color cyan'>
                                <i class='imv2-war'></i>
                                <span>iOS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$v->title}}</h3>
                                <p title='{{$v->referral}}'>{{$v->referral}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{difficulty($v-difficulty)}}<span>·</span>
                                        {{$v->NNT}}人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='{{$v->pic}}' />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            JAVA开发工程师
            <a href="/course/class?c=42" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left ' style='background-image: url({{$java1[0]->pic}});'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='/class/detail?id={{$java1[0]->id}}'
                           data-track="syjava-1-1"
                        >
                            <div class='path-cart-tit1'>

                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>{{$java1[0]->title}}</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>

                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class='types-content-right'>

                <div class='clearfix'>
                    @foreach($java3 as $k=>$v)
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href='/class/detail?id={{$v->id}}'
                           data-track="syjava-1-7"
                        >

                            <div class='course-card-top cart-color red'>
                                <span>Java</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$v->title}} </h3>
                                <p title='{{$v->referral}}'>{{$v->referral}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{$v->NNT}}人在学
                                    </div>

                                    <div class='course-card-price'>￥{{$v->price}}0</div>
                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk' style='background-image: url({{$v->pic}})';></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class='container-types clearfix'>
        <div class='l article'>		<h3 class='types-title'>热门手记</h3>
            <div class='article-content'>
                <a target="_blank" href='http://www.imooc.com/article/18250' class='hot-content' style='background-image: url(/homes/images/592e8e0c00010e8005900100.jpg);' data-track="syrmsj-1-1">使用Laravel5做权限管理 </a>									<ul>													<li class='clearfix'>						<a class='label' href='/article/tag/18'>							Python						</a>						<i>•</i>						<a target="_blank" href='/article/18537' title='Python虚拟环境，你有使用过吗？分分钟教你使用虚拟环境搭建一个小网站' data-track="syrmsj-1-2" class='content'>Python虚拟环境，你有使用过吗？分分钟教你使用虚拟环境...</a>					</li>																	<li class='clearfix'>						<a class='label' href='/article/tag/8'>							MongoDB						</a>						<i>•</i>						<a target="_blank" href='/article/18438' title='windows32位系统 安装MongoDB' data-track="syrmsj-1-3" class='content'>windows32位系统 安装MongoDB</a>					</li>																	<li class='clearfix'>						<a class='label' href='/article/tag/35'>							大数据						</a>						<i>•</i>						<a target="_blank" href='/article/18419' title='基于CentOS6.4环境编译Spark-2.1.0源码' data-track="syrmsj-1-4" class='content'>基于CentOS6.4环境编译Spark-2.1.0源码</a>					</li>																	<li class='clearfix'>						<a class='label' href='/article/tag/8'>							MongoDB						</a>						<i>•</i>						<a target="_blank" href='/article/18439' title='MongoDB给数据库创建用户' data-track="syrmsj-1-5" class='content'>MongoDB给数据库创建用户</a>					</li>																	<li class='clearfix'>						<a class='label' href='/article/tag/2'>							PHP						</a>						<i>•</i>						<a target="_blank" href='/article/18250' title='使用Laravel5做权限管理' data-track="syrmsj-1-6" class='content'>使用Laravel5做权限管理</a>					</li>																	<li class='clearfix'>						<a class='label' href='/article/tag/3'>							JAVA						</a>						<i>•</i>						<a target="_blank" href='/article/18307' title='热修复与插件化你准备好了吗' data-track="syrmsj-1-7" class='content'>热修复与插件化你准备好了吗</a>					</li>											</ul>						<div class='content-more'>								<a target="_blank" class='clearfix' href='http://www.imooc.com/article' data-track="syrmsj-1-8">					<span>进入手记获取更多</span>					<i class='imv2-arrow3_r'></i>				</a>							</div>		</div>	</div>				<div class='r question'>		<h3 class='types-title'>推荐猿问</h3>		<div class='question-content'>						<a target="_blank" href='http://www.imooc.com/wenda/detail/348941' class='hot-content' style='background-image: url(/homes/images/58ac14f10001f87f05900100.jpg);' data-track='sytjyw-1-1'>如果用python找工作需要哪些必备技能？</a>						<ul>														<li class='clearfix'>						<a class='label' href='/wenda/26'>							前端工具						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/320982' title='刷分零容忍！关于刷分用户的处罚公告' class='content'  data-track="sytjyw-1-7">							刷分零容忍！关于刷分用户的处罚公告						</a>					</li>																			<li class='clearfix'>						<a class='label' href='/wenda/12'>							Android						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/352353' title='问个愚蠢的问题，培训公司的可怕之处在哪？' class='content'  data-track="sytjyw-1-7">							问个愚蠢的问题，培训公司的可怕之处在哪？						</a>					</li>																			<li class='clearfix'>						<a class='label' href='/wenda/17'>							JavaScript						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/352428' title='自学路上处处踩坑，一个小问题要卡几个小时 怎办?' class='content'  data-track="sytjyw-1-7">							自学路上处处踩坑，一个小问题要卡几个小时 怎办?						</a>					</li>																			<li class='clearfix'>						<a class='label' href='/wenda/12'>							Android						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/352450' title='怎样成为一名测试人员' class='content'  data-track="sytjyw-1-7">							怎样成为一名测试人员						</a>					</li>																			<li class='clearfix'>						<a class='label' href='/wenda/17'>							JavaScript						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/352467' title='如何获取数组里对象的某个值？' class='content'  data-track="sytjyw-1-7">							如何获取数组里对象的某个值？						</a>					</li>																			<li class='clearfix'>						<a class='label' href='/wenda/51'>							测试						</a>						<i>•</i>						<a target="_blank" href='/wenda/detail/352471' title='关于电脑的WIFI设置的问题' class='content'  data-track="sytjyw-1-7">							关于电脑的WIFI设置的问题						</a>					</li>												</ul>									<div class='content-more clearfix'>				<a target="_blank" class='clearfix' href='http://www.imooc.com/wenda' data-track='sytjyw-1-8'>					<span>进入猿问获取更多</span>					<i class='imv2-arrow3_r'></i>				</a>			</div>					</div>	</div>	</div><div class='container-types clearfix'>	<h3 class='types-title'>		慕课精英名师推荐				<a href="http://coding.imooc.com" class="types-title-more" target="_blank">						<span>更多</span>			<i class="imv2-arrow2_r"></i>				</a>			</h3>	<div class='lecturer-list clearfix'>				<a target="_blank" href='http://www.imooc.com/u/2155343' class='lecturer-item' data-track="syjstj-1-1">			<img class='lecturer-uimg' src='/homes/picture/545850bb0001979202200220-200-200.jpg' />			<span class='lecturer-name'>扬帆远航_</span>			<span class='lecturer-title'>数据科学家</span>			<span class='lecturer-p' title='拥有多年带领华为数据挖掘团队给全世界范围内著名运营商提供大数据解决方案的经验，工作中所带领的团队主要负责处理、挖掘和分析每天数以TB计的数据。作为一个带领拥有20人团队成功完成多个全球项目的leader,非常了解当今用途最广泛的数据挖掘、机器学习和数理统计方法,同时有着多年熟练应用各种数据挖掘平台工具和数理统计包(例如R,python和Spark)经验。'>拥有多年带领华为数据挖掘团队给全世界范围内著名运营商提供大数据解决方案的经验，工作中所带领的团队主要负责处理、挖掘和分析每天数以TB计的数据。作为一个带领拥有20人团队成功完成多个全球项目的leader,非常了解当今用途最广泛的数据挖掘、机器学习和数理统计方法,同时有着多年熟练应用各种数据挖掘平台工具和数理统计包(例如R,python和Spark)经验。</span>		</a>				<a target="_blank" href='http://www.imooc.com/u/4379042' class='lecturer-item' data-track="syjstj-1-2">			<img class='lecturer-uimg' src='/homes/picture/583e9afa000166c410240770-200-200.jpg' />			<span class='lecturer-name'>编_程_浪_子</span>			<span class='lecturer-title'>PHP开发工程师</span>			<span class='lecturer-p' title='互联网搬砖小王子，从事互联网web 开发6年，热爱搬砖行业，有代码洁癖，对PHP，Python，Java都有涉猎， 实践经验丰富，富有激情，热爱分享，乐观开朗，喜欢专研新技术'>互联网搬砖小王子，从事互联网web 开发6年，热爱搬砖行业，有代码洁癖，对PHP，Python，Java都有涉猎， 实践经验丰富，富有激情，热爱分享，乐观开朗，喜欢专研新技术</span>		</a>				<a target="_blank" href='http://www.imooc.com/u/5245191' class='lecturer-item' data-track="syjstj-1-3">			<img class='lecturer-uimg' src='/homes/picture/590b09de0001503904000400-200-200.jpg' />			<span class='lecturer-name'>DocMike</span>			<span class='lecturer-title'>移动开发工程师</span>			<span class='lecturer-p' title='安卓工程师  多年开发和带团队经验，曾在BAT等多家一线互联网公司就职，P大硕士毕业，应届生导师、校招、社招面试官，主导与开发过多款知名的互联网金融、免费国际电话、外卖等项目的架构与开发'>安卓工程师  多年开发和带团队经验，曾在BAT等多家一线互联网公司就职，P大硕士毕业，应届生导师、校招、社招面试官，主导与开发过多款知名的互联网金融、免费国际电话、外卖等项目的架构与开发</span>		</a>				<a target="_blank" href='http://www.imooc.com/u/3017249' class='lecturer-item' data-track="syjstj-1-4">			<img class='lecturer-uimg' src='/homes/picture/577baef700019c4501400140-200-200.jpg' />			<span class='lecturer-name'>ustbhuangyi</span>			<span class='lecturer-title'>滴滴前端技术专家</span>			<span class='lecturer-p' title='北京科技大学计算机专业硕士。曾任职百度，现就职滴滴，前端技术专家。对Vue.js有很深的理解，是《Vue.js权威指南》一书的主要作者。他有着教科书式的代码写作习惯，对代码有洁癖，追求高质量的代码。强化提升编写高可扩展，通用性强的代码的能力'>北京科技大学计算机专业硕士。曾任职百度，现就职滴滴，前端技术专家。对Vue.js有很深的理解，是《Vue.js权威指南》一书的主要作者。他有着教科书式的代码写作习惯，对代码有洁癖，追求高质量的代码。强化提升编写高可扩展，通用性强的代码的能力</span>		</a>				<a target="_blank" href='http://www.imooc.com/u/5027812' class='lecturer-item' data-track="syjstj-1-5">			<img class='lecturer-uimg' src='/homes/picture/54584cb50001e5b302200220-200-200.jpg' />			<span class='lecturer-name'>快乐动起来呀</span>			<span class='lecturer-title'>Web前端工程师</span>			<span class='lecturer-p' title='先后在360、去哪儿网、今日头条任资深前端工程师，在业务开发和工程架构方面有较多实战经验。'>先后在360、去哪儿网、今日头条任资深前端工程师，在业务开发和工程架构方面有较多实战经验。</span>		</a>			</div></div></div>
<div class="footer bg-white idx-minwidth">  <div class="container">    <div class="footer-wrap idx-width">      <div class="footer-sns">        <a href="http://weibo.com/u/3306361973" class="footer-sns-weibo hide-text" target="_blank" title="新浪微博">新浪微博</a>        <a href="javascript:void(0);" class="footer-sns-weixin" target="_blank" title="微信">          <i class="footer-sns-weixin-expand"></i>        </a>        <a href="http://t.qq.com/mukewang999" class="footer-sns-qqweibo hide-text" target="_blank" title="腾讯微博">腾讯微博</a>        <a href="http://user.qzone.qq.com/1059809142/" class="footer-sns-qzone hide-text" target="_blank" title="QQ空间">QQ空间</a>      </div>    </div>
        <div class="footer-link">
            @foreach($buttom as $k=>$v)
            <a href="{{$v->url}}" target="_blank" title="{{$v->title}}">
                {{$v->title}}
            </a>
            @endforeach

        </div>

        <div class="footer-copyright">
            <p>{{config('web.copyright')}}</p>
        </div>
    </div></div>

<!--script-->
<script type="text/javascript" src="/homes/js/error.js"></script>
<script src="/homes/js/ssologin.js"></script>
<script type="text/javascript" src="/homes/js/sea.js"></script>
<script type="text/javascript" src="/homes/js/sea_config.js"></script>

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


</div>
</body>
</html>
