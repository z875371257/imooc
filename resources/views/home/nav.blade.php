<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


</body>
</html>



@if( ! session()->get('username'))
    <div id="login-area">
        <ul class="header-unlogin clearfix">
            <li class="shop-cart" id="shop-cart">
                <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                    <span class="icon-shopping-cart js-endcart"></span>
                    <span class="shopping_icon js-cart-num" data-ordernum="0" data-cartnum="0"style="display: none"> 0 </span>
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
            <li class="header-signin">
                <a href="#" id="js-signin-btn"> 登录</a>
                /
                <a href="#" id="js-signup-btn"> 注册 </a>
            </li>
        </ul>
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
                <div class="my-cart" id="js-my-cart" style="display: block;">
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
                    <img width="40" height="40" src="http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg">
                    <i class="myspace_remind" style="display: none;"></i>
                    <span style="display: none;">动态提醒 </span>
                </a>
                <div class="g-user-card">
                    <div class="card-inner" style="display: block;">
                        <div class="card-top clearfix">
                            <a href="/u/5601964" class="l">
                                <img src="http://img.mukewang.com/597b0ff300016efc06950694-100-100.jpg"
                                     alt="weixin_赵世强_0">
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
                            <a href="/passport/user/logout?referer=http://www.imooc.com" class="r">安全退出</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

@endif







