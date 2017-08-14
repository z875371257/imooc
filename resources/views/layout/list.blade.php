<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit" />
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
    <script src="/homes/banner/bootstrap/js/jquery-1.9.1.js"></script>
    <script src="/admins/js/libs/list.js"></script>

    <meta name="Keywords" content="慕课网课程，IT培训精品课程" />
    <meta name="Description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。"
    />
    <link rel="stylesheet" href="/homes/css/moco.min_1.css" type="text/css" />
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
                <a href="http://class.imooc.com" class="program-nav " target="_self">
                    职业路径
                    <i class="icn-new">
                    </i>
                </a>
            </li>
            <li>
                <a href="http://coding.imooc.com" target="_self">
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
        <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
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
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">
                        登录
                    </a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">
                        注册
                    </a>
                </li>
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
<script type="text/javascript" src="/homes/js/error.js">
</script>
<script src="/homes/js/ssologin.js">
</script>
<script type="text/javascript" src="/homes/js/sea.js">
</script>
<script type="text/javascript" src="/homes/js/sea_config_1.js">
</script>
<script type="text/javascript">
    seajs.use("/static/page/" + OP_CONFIG.module + "/" + OP_CONFIG.page);
</script>
<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://": " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E")); (function(d) {
            window.bd_cpro_rtid = "rHT4P1c";
            var s = d.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];
            s0.parentNode.insertBefore(s, s0);
        })(document);
    </script>
    <script>
        (function() {
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div>
</body>

</html>