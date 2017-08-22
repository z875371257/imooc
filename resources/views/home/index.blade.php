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

                            <!-- <span class="msg_icon" style="display: none;"></span> -->
                        </a>
                    </li>
                    <li class="set_btn user-card-box" id="header-user-card">
                        <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="/home/users/set" target="_self">
                            <img src="@if(!session('details')) http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg
                                                    @else {{ session('details')->profile  }} @endif " alt="">
                            <i class="myspace_remind" style="display: none;"></i>
                            <span style="display: none;">动态提醒 </span>
                        </a>
                        <div class="g-user-card">
                            <div class="card-inner">
                                <div class="card-top clearfix">
                                    <a href="/home/users/set" class="l" class="user-card-item js-header-avator hover" action-type="my_menu" id="header-avator" target="_self">


                                        <img src="@if(!session('details')) http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg
                                                    @else {{ session('details')->profile  }} @endif " alt="">



                                            <i class="myspace_remind" style="display: none;"></i>
                                            <span style="display: none;">动态提醒</span>
                                    </a>
                                    <div class="card-top-right-box l">
                                        <a href="/u/5601964"><span class="name text-ellipsis"> {{ session()->get('users')->username }}</span></a>

                                    </div>
                                </div>
                                <div class="user-center-box">
                                    <ul class="clearfix">
                                        <li class="l">
                                            <a href="{{ url('home/users/set') }}">个人设置 </a>

                                        </li>
                                        <li class="l">
                                            <a href="{{ url('home/users/passedit') }}">修改密码 </a>
                                        </li>
                                    </ul>
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
                <li data-target="#box" data-slide-to="5"></li>
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

    </div>
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
                        <input type="checkbox" id="accept-terms" required checked>
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
