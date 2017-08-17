<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>慕课网-程序员的梦工厂</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
    <meta name="Keywords" content="" />
    <meta name="Description" content="慕课网（IMOOC）是IT技能学习平台。慕课网(IMOOC)提供了丰富的移动端开发、php开发、web前端、android开发以及html5等视频教程资源公开课。并且富有交互性及趣味性，你还可以和朋友一起编程。" />
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
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="/cart" class="shop-cart-icon" target="_blank">
                        <img width='16px' height="16px" src="/homes/images/shopping.png" alt="">
                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>

                    <div class="my-cart" id="js-my-cart"></div>
                </li>

                <nav class="main_nav">
                    <li class="header-signin">
                        <a href="#0" class="cd-signin" id="js-signin-btn">{{ isset( session()->get('user')->username )? "登录": "退出" }}</a>
                    </li>
                    <li class="header-signup">
                        <a href="#0" class="cd-signup" id="js-signup-btn">注册</a>
                    </li>
                </nav>

            </ul>
        </div>
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
                    <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>
                    @endforeach

                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>
                        @foreach($qdkc as $k=>$v)
                        <p class="path-recom">
                            <a href="/course/list2/sc/?c={{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($qdsz as $k=>$v)
                        <p>
                            <a href="/course/list3/sc/?c={{$v->id}}" data-track="syhd-1-1" target="_blank">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($qdtj as $k=>$v)
                        <div class="free-recom-box clearfix">
                            <p><a target="_blank" href="/course/list/?c={{$v->id}}" data-track="syhd-1-3"><span class="cate-tag">课程</span>{{$v->title}}</a></p>
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
                    <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>
                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($hdkc1 as $k=>$v)
                        <p class="path-recom">
                            <a href="http://class.imooc.com/sc/{{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        @foreach($hdkc2 as $k=>$v)
                        <p class="path-recom">
                            <a href="http://class.imooc.com/sc/{{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        @foreach($hdsz as $k=>$v)
                        <p>
                            <a href="http://coding.imooc.com/class/{{$v->id}}" data-track="syhd-1-2" target="_blank">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        @foreach($hdtj as $k=>$v)
                        <div class="free-recom-box clearfix">
                            <p><a target="_blank" href="/learn/{{$v->id}}" data-track="syhd-1-3"><span class="cate-tag">课程</span>{{$v->title}}</a></p>
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
                    <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>
                    @endforeach

                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>
                        @foreach($ydkc1 as $k=>$v)
                        <p class="path-recom">
                            <a href="http://class.imooc.com/sc/{{$v->id}}" target="_blank">
                                <span class="cate-tag">职业路径</span>{{$v->title}}</a>
                        </p>
                        @endforeach
                        @foreach($ydkc2 as $k=>$v)
                            <p class="path-recom">
                                <a href="http://class.imooc.com/sc/{{$v->id}}" target="_blank">
                                    <span class="cate-tag">职业路径</span>{{$v->title}}</a>
                            </p>
                            @endforeach
                        @foreach($ydsz as $k=>$v)
                        <p>
                            <a href="http://coding.imooc.com/class/{{$v->id}}" target="_blank" data-track="syyd-1-1" >
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach

                        <div class="free-recom-box clearfix">
                            @foreach($ydtj as $k=>$v)
                            <p>
                                <a target="_blank" href="/learn/{{$v->id}}" data-track="syyd-1-3">
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
                    <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($sjksz as $k=>$v)
                        <p>
                            <a href="http://coding.imooc.com/class/{{$v->id}}" target="_blank" data-track="sydata-1-2">
                                <span class="cate-tag">实战</span>{{$v->title}}
                            </a>
                        </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($sjktj as $k=>$v)
                            <p>
                                <a target="_blank" href="/learn/{{$v->id}}" data-track="sydata-1-5">
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
                        <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($yjssz as $k=>$v)
                            <p>
                                <a href="http://coding.imooc.com/class/{{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($yjstj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/learn/{{$v->id}}" data-track="sydata-1-5">
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
                        <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($ywsz as $k=>$v)
                            <p>
                                <a href="http://coding.imooc.com/class/{{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($ywtj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/learn/{{$v->id}}" data-track="sydata-1-5">
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
                        <a target="_blank" href="/course/list?c={{$v->cname}}">{{$v->cname}}</a><span class="ml10 mr10">/</span>

                    @endforeach
                    <div class="recomment-box">
                        <div class="title recommend">课程推荐</div>

                        @foreach($yjsz as $k=>$v)
                            <p>
                                <a href="http://coding.imooc.com/class/{{$v->id}}" target="_blank" data-track="sydata-1-2">
                                    <span class="cate-tag">实战</span>{{$v->title}}
                                </a>
                            </p>
                        @endforeach
                        <div class="free-recom-box clearfix">
                            @foreach($yjtj as $k=>$v)
                                <p>
                                    <a target="_blank" href="/learn/{{$v->id}}" data-track="sydata-1-5">
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
                <a href="/course/list?c={{$v->cname}}" target="_blank">
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
                        <a href="/"><img width="100%" height="500px" src="{{$v->bigpic}}" alt=""></a>
                    </div>
                @endforeach
            </div>

            <a class="left banner-anchor prev" href="#box" data-slide="prev">&lsaquo;</a>
            <a class="right banner-anchor next" href="#box" data-slide="next">&rsaquo;</a>
        </div>


        <div class="cb"></div>
    </div><div class='path-banner clearfix'>
        <a href='http://class.imooc.com/?c=fe' target="_blank" data-track='sysdtj-1-1'><img src='/homes/picture/path_1.png' />	</a>
        <a href='http://class.imooc.com/?c=php' target="_blank" data-track='sysdtj-1-2'><img src='/homes/picture/path_2.png' />	</a>
        <a href='http://class.imooc.com/?c=android' target="_blank" data-track='sysdtj-1-3'><img src='/homes/picture/path_3.png' />	</a>
        <a href='http://class.imooc.com/?c=java' target="_blank" data-track='sysdtj-1-4'><img src='/homes/picture/path_4.png' />	</a>
        <a href='http://class.imooc.com/?c=ios' target="_blank" data-track='sysdtj-1-4'><img src='/homes/picture/path_5.png' />	</a>
    </div>
    <div class='container-types clearfix'>	<h3 class='types-title'>		实战推荐
            <a href='/course/coding' class='types-title-more' target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>			</h3>	<div class='clearfix types-content'>

            <!--  实战推荐  -->
            @foreach($sztj as $k=>$v)
            <div class='index-card-container course-card-container container coding'>

                <a target="_blank" class='course-card' href='/coding?c={{$v->id}}' data-track="sztj-1-1">
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

                <a target="_blank" class='course-card' href="/learn/{{$v->id}}" data-track="mfhk-1-1">
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
            <a href="http://www.imooc.com/course/list?c=fe" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58c2494a00018ebd02240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='http://class.imooc.com/sc/25'
                           data-track="syqdkf-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <i class='imv2-path'></i>
                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>前端进阶：响应式开发与常用框架</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                                <i class='imv2-arrow3_r'></i>
                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        <div><a target="_blank" data-track='syqdkf-1-2' href='http://class.imooc.com/sc/2' title='HTML5与CSS3实现动态网页'>· HTML5与CSS3实现动态网页</a></div>
                        <div><a target="_blank" data-track='syqdkf-1-3' href='http://class.imooc.com/sc/20' title='前端小白入门'>· 前端小白入门</a></div>
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner clearfix'>
                    <a target="_blank" data-track='syqdkf-1-5' href='http://coding.imooc.com/class/99.html'><img src='/homes/picture/59226e1a0001e5bd04680100.jpg' /></a>
                    <a target="_blank" data-track='syqdkf-1-6' href='http://coding.imooc.com/class/95.html'><img src='/homes/picture/59226eb2000198f004680100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/430"
                           data-track="syqdkf-1-7"
                        >

                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>jQuery</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>jQuery基础(四)—动画篇</h3>
                                <p title='jQuery基础教程动画篇，讲解jQuery结局开启动画修炼'>jQuery基础教程动画篇，讲解jQuery结局开启动画修炼</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        59580人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover014_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/812"
                           data-track="syqdkf-1-8"
                        >

                            <div class='course-card-top cart-color orange'>
                                <i class='imv2-war'></i>
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Web安全-XSS</h3>
                                <p title='从Web安全XSS的定义开始讲起，从原理到实战全方位理解XSS安全'>从Web安全XSS的定义开始讲起，从原理到实战全方位理解XSS安全</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        17136人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover018_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/789"
                           data-track="syqdkf-1-9"
                        >

                            <div class='course-card-top cart-color red'>
                                <i class='imv2-war'></i>
                                <span>AngularJS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Angular2一小时快速入门</h3>
                                <p title='Angular2一小时快速入门教程，帮助大家快速上手Angular2开发'>Angular2一小时快速入门教程，帮助大家快速上手Angular2开发</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        23496人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover038_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/564"
                           data-track="syqdkf-1-10"
                        >

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Node.js</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>去哪儿前端沙龙分享第三期</h3>
                                <p title='本课程为去哪儿网前端交互沙龙第三期，精彩分享不容错过噢'>本课程为去哪儿网前端交互沙龙第三期，精彩分享不容错过噢</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        24027人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover039_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            PHP开发工程师
            <a href="http://www.imooc.com/course/list?c=php" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58f57d0e0001bc7502240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='http://class.imooc.com/sc/22'
                           data-track="syphp-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <i class='imv2-path'></i>
                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>PHP入门：基础语法到实际运用</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                                <i class='imv2-arrow3_r'></i>
                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        <div><a target="_blank" data-track='syphp-1-2' href='http://class.imooc.com/sc/27' title='ECShop3从基本使用到二次开发'>· ECShop3从基本使用到二次开发</a></div>
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner types-content-banner-one clearfix'>
                    <a target="_blank" href='http://coding.imooc.com/class/85.html' data-track='syphp-1-5'><img src='/homes/picture/5926bd490001157d09560100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/758"
                           data-track="syphp-1-7"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>PHP</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>PHP中的HTTP协议</h3>
                                <p title='PHP视频教程从PHP的角度深度解析HTTP协议知识，例如post、和get请求'>PHP视频教程从PHP的角度深度解析HTTP协议知识，例如post、和get请求</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        16799人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover018_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/754"
                           data-track="syphp-1-8"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>PHP</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>PHP+AJAX实现表格实时编辑</h3>
                                <p title='PHP和AJAX实现表格动态实时编辑案例，轻松实现最好的用户体验'>PHP和AJAX实现表格动态实时编辑案例，轻松实现最好的用户体验</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        10769人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover033_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/722"
                           data-track="syphp-1-9"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>PHP</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>大型PHP电商网站商品秒杀功能实现思路分析</h3>
                                <p title='本课程属于PHP高级教程，汇集前沿技术，实现商品秒杀，小白慎入		'>本课程属于PHP高级教程，汇集前沿技术，实现商品秒杀，小白慎入		</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        14134人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover024_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/696"
                           data-track="syphp-1-10"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>PHP</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>从零开始打造自己的PHP框架</h3>
                                <p title='和我一起开发一套属于自己的PHP框架，自己开发的才是最好用的'>和我一起开发一套属于自己的PHP框架，自己开发的才是最好用的</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        32700人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover011_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            Android开发工程师
            <a href="http://www.imooc.com/course/list?c=android" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/58ac18fd00012a4202240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='http://class.imooc.com/sc/28'
                           data-track="syandroid-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <i class='imv2-path'></i>
                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>Android强化：服务与通信</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                                <i class='imv2-arrow3_r'></i>
                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        <div><a target="_blank" data-track='syandroid-1-2' href='http://class.imooc.com/sc/6' title='零基础入门Android语法与界面'>· 零基础入门Android语法与界面</a></div>
                        <div><a target="_blank" data-track='syandroid-1-3' href='http://class.imooc.com/sc/17' title='Android进阶：网络与数据存储'>· Android进阶：网络与数据存储</a></div>
                        <div><a target="_blank" data-track='syandroid-1-4' href='http://class.imooc.com/sc/23' title='Android从界面到数据存储'>· Android从界面到数据存储</a></div>
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner clearfix'>
                    <a target="_blank" data-track='syandroid-1-5' href='http://coding.imooc.com/class/101.html'><img src='/homes/picture/591be51100019cbc04680100.jpg' /></a>
                    <a target="_blank" data-track='syandroid-1-6' href='http://coding.imooc.com/class/100.html'><img src='/homes/picture/591be8ad0001a12e04680100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/808"
                           data-track="syandroid-1-8"
                        >

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Android</span>
                                <span>React.JS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>ReactNative基础与入门</h3>
                                <p title='敲开React Native的大门,掌握未来趋势新技术'>敲开React Native的大门,掌握未来趋势新技术</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        19398人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover001_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/793"
                           data-track="syandroid-1-9"
                        >

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Android</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>不一样的自定义实现轮播图效果</h3>
                                <p title='Android开发自定义实现轮播图效果案例实现，从无到有让你会懂会用'>Android开发自定义实现轮播图效果案例实现，从无到有让你会懂会用</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        7756人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover016_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/740"
                           data-track="syandroid-1-10"
                        >

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Android</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>带你实现别样的Android侧滑菜单</h3>
                                <p title='学会熟练使用侧滑菜单之DrawerL，介绍常用菜单开源库SlidingMenu'>学会熟练使用侧滑菜单之DrawerL，介绍常用菜单开源库SlidingMenu</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        7553人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover025_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/764"
                           data-track="syandroid-1-11"
                        >

                            <div class='course-card-top cart-color green'>
                                <i class='imv2-war'></i>
                                <span>Android</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Android网络框架-OkHttp使用</h3>
                                <p title='本视频教程主要讲解Android SDK 6.0之后网络请求框架，赶快学起来吧'>本视频教程主要讲解Android SDK 6.0之后网络请求框架，赶快学起来吧</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        10818人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover041_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            iOS开发工程师
            <a href="http://www.imooc.com/course/list?c=ios" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left types-content-left-hmax' style='background-image: url(/homes/images/5900151f0001c25f02240348.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='http://class.imooc.com/sc/19'
                           data-track="-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <i class='imv2-path'></i>
                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>iOS进阶：界面优化与数据存储</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                                <i class='imv2-arrow3_r'></i>
                            </div>
                        </a>
                    </div>

                </div>

                <div class='types-content-recommended'>
                    <div class='recommended-item'>
                        <div><a target="_blank" data-track='-1-2' href='http://class.imooc.com/sc/10' title='iOS入门：基础语法与常用控件'>· iOS入门：基础语法与常用控件</a></div>
                    </div>
                </div>
            </div>
            <div class='types-content-right'>
                <div class='types-content-banner types-content-banner-one clearfix'>
                    <a target="_blank" href='http://www.imooc.com/learn/663' data-track='-1-5'><img src='/homes/picture/59226c9500014bd709580100.jpg' /></a>
                </div>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/774"
                           data-track="-1-9"
                        >

                            <div class='course-card-top cart-color cyan'>
                                <i class='imv2-war'></i>
                                <span>iOS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>iOS架构初探</h3>
                                <p title='iOS视频教程教你轻松搞定各种架构设计模式的学习，如MVC、MVVM等'>iOS视频教程教你轻松搞定各种架构设计模式的学习，如MVC、MVVM等</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        13006人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover021_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/746"
                           data-track="-1-10"
                        >

                            <div class='course-card-top cart-color cyan'>
                                <i class='imv2-war'></i>
                                <span>iOS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>iOS快速构建IM功能</h3>
                                <p title='本视频教程将告诉大家在iOS开发中如何快速构建一个IM功能'>本视频教程将告诉大家在iOS开发中如何快速构建一个IM功能</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        4852人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover004_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/715"
                           data-track="-1-11"
                        >

                            <div class='course-card-top cart-color cyan'>
                                <i class='imv2-war'></i>
                                <span>iOS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>iOS基础之UIImageView知识拓展(上)</h3>
                                <p title='掌握iOS图像处理之UIImage展示，了解UIImageView更多的用途'>掌握iOS图像处理之UIImage展示，了解UIImageView更多的用途</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        6137人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover029_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/677"
                           data-track="-1-12"
                        >

                            <div class='course-card-top cart-color cyan'>
                                <i class='imv2-war'></i>
                                <span>iOS</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>玩儿转Swift 2.0（第四季）</h3>
                                <p title='Swift泛型、扩展、面向协议编程等，大家真正玩儿转swift'>Swift泛型、扩展、面向协议编程等，大家真正玩儿转swift</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        11288人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover039_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            JAVA开发工程师
            <a href="http://www.imooc.com/course/list?c=java" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left ' style='background-image: url(/homes/images/58c8b6c600012f7002240228.jpg);'>

                <div class='course-content-container'>

                    <div class='path-card-container '>
                        <a target="_blank" href='http://class.imooc.com/sc/18'
                           data-track="syjava-1-1"
                        >
                            <div class='path-cart-tit1'>
                                <i class='imv2-path'></i>
                                <span>职业路径</span>
                            </div>


                            <div class='path-cart-tit3'>Java零基础入门</div>

                            <div class='path-cart-more clearfix'>
                                <span>了解详情</span>
                                <i class='imv2-arrow3_r'></i>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
            <div class='types-content-right'>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container coding'>

                        <a target="_blank" class='course-card'
                           href='http://coding.imooc.com/class/93.html'
                           data-track="syjava-1-7"
                        >

                            <div class='course-card-top cart-color red'>
                                <i class='imv2-war'></i>
                                <span>Java</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Java Spring技术栈构建完整前后台团购网站 </h3>
                                <p title='完整的前后台团购网站，提升实战技能与高效编程技巧'>完整的前后台团购网站，提升实战技能与高效编程技巧</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        415人在学
                                    </div>

                                    <div class='course-card-price'>￥388.00</div>
                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk' style='background-image: url(/homes/images/591138710001e41305400300-360-202.jpg)';></div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/821"
                           data-track="syjava-1-8"
                        >

                            <div class='course-card-top cart-color red'>
                                <i class='imv2-war'></i>
                                <span>Java</span>
                                <span>大数据</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>轻松愉快之玩转SpringData</h3>
                                <p title='利用Spring Data提升幸福指数!'>利用Spring Data提升幸福指数!</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        8962人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover047_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/801"
                           data-track="syjava-1-9"
                        >

                            <div class='course-card-top cart-color red'>
                                <i class='imv2-war'></i>
                                <span>Java</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Java模板引擎之Freemarker</h3>
                                <p title='学习Java模板引擎中Freemarker技术，web开发人员必要掌握的技术之一'>学习Java模板引擎中Freemarker技术，web开发人员必要掌握的技术之一</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        16876人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover050_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/531"
                           data-track="syjava-1-10"
                        >

                            <div class='course-card-top cart-color red'>
                                <i class='imv2-war'></i>
                                <span>Java</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>JAVA生成二维码</h3>
                                <p title='二维码无处不在，自己动手用Java生成二维码，三种生成方式任你选'>二维码无处不在，自己动手用Java生成二维码，三种生成方式任你选</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        53418人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover016_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            Python开发工程师
            <a href="http://www.imooc.com/course/list?c=python" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left ' >



                <a target="_blank" href="http://coding.imooc.com/class/78.html" class='index-card-container advert-cart' title="强力django+杀手级xadmin 打造上线标准的在线教育平台" data-track='sypython-1-1'>
                    <img src="/homes/picture/591d57d900019cbc02240227.jpg" />
                </a>
            </div>
            <div class='types-content-right'>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container coding'>

                        <a target="_blank" class='course-card'
                           href='http://coding.imooc.com/class/92.html'
                           data-track="sypython-1-7"
                        >

                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>Python</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Python分布式爬虫打造搜索引擎 Scrapy精讲</h3>
                                <p title='彻底掌握Scrapy原理，Django+Elasticsearch搭建搜索引擎'>彻底掌握Scrapy原理，Django+Elasticsearch搭建搜索引擎</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        699人在学
                                    </div>

                                    <div class='course-card-price'>￥388.00</div>
                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk' style='background-image: url(/homes/images/58d21b90000135a105400300-360-202.jpg)';></div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/790"
                           data-track="sypython-1-8"
                        >

                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>Python</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>django入门与实践</h3>
                                <p title='手把手带你进入Django开发的大门，充分领略Django的魅力'>手把手带你进入Django开发的大门，充分领略Django的魅力</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        18559人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover025_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/753"
                           data-track="sypython-1-9"
                        >

                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>Python</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>python-web.py开发入门</h3>
                                <p title='web.py开发入门入门教程，讲解一个你最快能学会的web开发的框架'>web.py开发入门入门教程，讲解一个你最快能学会的web开发的框架</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        初级<span>·</span>
                                        24921人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover034_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/563"
                           data-track="sypython-1-10"
                        >

                            <div class='course-card-top cart-color blue'>
                                <i class='imv2-war'></i>
                                <span>Python</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Python开发简单爬虫</h3>
                                <p title='本教程带您解开python爬虫这门神奇技术的面纱'>本教程带您解开python爬虫这门神奇技术的面纱</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        111882人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover003_s.jpg' />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class='container-types clearfix'>
        <h3 class='types-title'>
            Linux系统工程师
            <a href="http://www.imooc.com/course/list?c=linux" class="types-title-more" target="_blank">
                <span>更多</span>
                <img width="20" height="20" src="/homes/images/youjian.png" alt="">
            </a>
        </h3>

        <div class='clearfix types-content'>


            <div class='types-content-left ' >

                <div class='index-card-container course-card-container container '>

                    <a target="_blank" class='course-card'
                       href="/learn/792"
                       data-track="-2"
                    >

                        <div class='course-card-top cart-color green'>
                            <i class='imv2-war'></i>
                            <span>测试</span>
                        </div>

                        <div class='course-card-content'>
                            <h3 class='course-card-name'>自动化测试之selenium工具使用</h3>
                            <p title='web自动化测试selenium从0基础开始。'>web自动化测试selenium从0基础开始。</p>
                            <div class='clearfix course-card-bottom'>
                                <div class='course-card-info'>
                                    初级<span>·</span>
                                    12204人在学
                                </div>

                            </div>
                        </div>
                    </a>
                    <img src='/homes/picture/new.png' class='course-cart-new'/>


                    <div class='course-card-bk'>
                        <img src='/homes/picture/cover012_s.jpg' />
                    </div>
                </div>



            </div>
            <div class='types-content-right'>

                <div class='clearfix'>
                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/447"
                           data-track="sylinux-1-7"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>Linux</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Linux软件安装管理</h3>
                                <p title='通过本课程了解Linux中的软件如何进行安装、卸载、升级等管理'>通过本课程了解Linux中的软件如何进行安装、卸载、升级等管理</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        52507人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover018_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/344"
                           data-track="sylinux-1-8"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>Linux</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Linux系统扫描技术及安全防范</h3>
                                <p title='Linux系统下系统扫描及安全防范，规避一些安全的隐患'>Linux系统下系统扫描及安全防范，规避一些安全的隐患</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        中级<span>·</span>
                                        23464人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover044_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/723"
                           data-track="sylinux-1-10"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>Linux</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Linux Bind负载均衡</h3>
                                <p title='DNS转发、主从模式及传输限制，通过本课了解更多DNS知识'>DNS转发、主从模式及传输限制，通过本课了解更多DNS知识</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        8809人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover010_s.jpg' />
                        </div>
                    </div>


                    <div class='index-card-container course-card-container container '>

                        <a target="_blank" class='course-card'
                           href="/learn/540"
                           data-track="sylinux-1-11"
                        >

                            <div class='course-card-top cart-color purple'>
                                <i class='imv2-war'></i>
                                <span>Linux</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>Shell典型应用之应用日志分析</h3>
                                <p title='如何应用shell脚本分析系统日志，这门视频教程会给你答案'>如何应用shell脚本分析系统日志，这门视频教程会给你答案</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        高级<span>·</span>
                                        22530人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='/homes/picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='/homes/picture/cover050_s.jpg' />
                        </div>
                    </div>


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
        <div class="footer-copyright">     <p>©&nbsp2017&nbspimooc.com&nbsp&nbsp京ICP备 13046642号-2</p>    </div>  </div></div><div id="J_GotoTop" class="elevator">
    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback"></i>        <span class="">意见反馈</span>
    </a>
    <a href="/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques"></i>        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="icon-appdownload"></i>        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="icon-wxgzh"></i>        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="icon-up2"></i>        <span class="">返回顶部</span>    </a></div>


<!--script-->
<script type="text/javascript" src="/homes/js/error.js"></script>
<script src="/homes/js/ssologin.js"></script>
<script type="text/javascript" src="/homes/js/sea.js"></script>
<script type="text/javascript" src="/homes/js/sea_config.js"></script>


<div>
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>

    <div class="cd-user-modal">
        <div class="cd-user-modal-container">
            <ul class="cd-switcher">
                <li><a href="#0">用户登录</a></li>
                <li><a href="#0">注册新用户</a></li>
            </ul>

            <div id="cd-login"> <!-- 登录表单 -->
                <form class="cd-form" action="{{ url('login') }}" method="post">
                    {{ csrf_field() }}
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signin-username">用户名</label>
                        <input class="full-width has-padding has-border" id="signin-username" type="text" placeholder="输入用户名" name="username" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">密码</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="输入密码" name="password" required>
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
                <form class="cd-form" action="{{ url('register') }}" method="post">
                    {{ csrf_field() }}
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">用户名</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="输入用户名" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">邮箱</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="输入mail" name="email" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">密码</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="输入密码" name="password" required>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms" required>
                        <label for="accept-terms">我已阅读并同意 <a href="#0">用户协议</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width2" type="submit" value="注册新用户">
                    </p>
                </form>
            </div>
            <a href="#0" class="cd-close-form">关闭</a>
        </div>
    </div>

  

</div>
</body>
</html>
