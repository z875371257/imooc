<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta property="qc:admins" content="77103107776553571676375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta name="Keywords" content="" />
<meta name="Description" content="超酷的互联网、IT技术免费学习平台，创新的网络一站式学习、实践体验；服务及时贴心，内容专业、有趣易学。专注服务互联网工程师快速成为技术高手！" />
<meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
<title>课程简介-慕课网</title>

<link rel="stylesheet" href="/homes/css/248691356de14f6c9c5cc25dc6d8e3fb.css" type="text/css" />
    <script src="/homes/banner/bootstrap/js/jquery-1.9.1.js"></script>
    <link rel="stylesheet" type="text/css" href="/homes/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/homes/css/style.css" />
    <script type="text/javascript" src="/homes/js/my.js"></script>
    <script type="text/javascript" src="/homes/js/1.7.js"></script>
    <script src="/homes/js/main.js"></script>

</head>
<body >


<div id="header" class="course-detail-header">
  <div class="cd-inner clearfix">
      <ul class="l">
        <li class="nv nv-goback"><a href="" onclick="cis()" class="revert l"><i><img  src="/homes/images/left.png" alt=""></i></a></li>
        <li class="nv nv-menu">
          <a href="javascript:;" class="chaptername J-chaptername"  data-id="15316" style="cursor:text;"><span>{{$ssj->title}}({{$sj->title}})</span><em>{{$res->title}}</em></a>
        </li>
      </ul>
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

  </div>

    @else
        <div id="login-area">
            <ul class="clearfix logined">
                <li class="shop-cart" id="shop-cart" >
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
</div>

<div id="studyMain">

    <div id="a1" vpic="{{$res->vpic}}" vurl="{{$res->vurl}}"></div>
    <script type="text/javascript" src="/homes/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
    <script type="text/javascript">
        function cis(){
            var arr = history.go(-1);
        }

        var vpic = $('#a1').attr('vpic');
        var vurl = $('#a1').attr('vurl');
//        alert(vpic);
        var flashvars={
            p:0,
            e:1,
            i:''+vpic
        };

        var video=[''+vurl];
        var support=['all'];
        CKobject.embedHTML5('a1','ckplayer_a1',1499,600,video,flashvars,support);


    </script>

<div class="maybe-wenda" id="maybe-wenda" style="display: none;">
    <i class="icon-chat"></i>
    <p class="text">你发的评论可能会是问题？<br/>是否将他发到问答中</p>
    <input class="btn ok" type="button" value="好的" id="wenda-ok">
    <input class="btn no" type="button" value="不用" id="wenda-no">
</div>
</div>

<div class="course-subcontainer clearfix">
  <div class="course-left">
      <ul class="course-menu course-video-menu clearfix js-course-menu" data-ower="all" data-sort="last">
    <li class="course-menu-item"><a class="active" href="javascript:void(0)" id="plMenu">评论</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="qaMenu">问答</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="noteMenu">笔记</a></li>
    <!--
    <li class="course-menu-item"><a href="javascript:void(0)" id="wikiMenu">WIKI</a></li>
    -->
        </ul>
<div id="disArea" class="lists-container list-wrap">
    <div id="pl-content" class="list-tab-con">
        <div class="publish clearfix" id="discus-publish">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
                    <a href="" class="user-head l">
                        <img src="picture/avatar_default.png" >
                    </a>
                    <div id="js-pl-input-fake" class="pl-input-inner l">
                       <textarea  id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！" ></textarea>
                       <span  class="num-limit"><span id="js-pl-limit">0</span>/300</span>
                    </div>
                    <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                        <input type="button"  id="js-pl-submit" class="r course-btn" value="发表评论" />
                    </div>
                </div>

            </div>
        </div>
        <div id="plLoadListData"></div>
    </div>
    <div id="qa-content" class="list-tab-con" style="display:none">
        <div id="qaLoadListData"></div>
    </div>
    <div id="note-content" class="list-tab-con" style="display:none">
        <div id="noteLoadListData">
        </div>
    </div>
    <div id="wiki-content" class="list-tab-con" style="display:none;">
        <div id="wikiLoadListData">
        </div>
    </div>
    <div id="mate-content" class="list-tab-con" style="display:none;">
        <div id="mateLoadListData">
        </div>
    </div>

</div>
  </div>
  <div class="course-right clearfix">

  <div class="js-recom-box">
</div>

  <div class="articlelist js-right-article">
    <div class="course-right-title">
        <h3>手记推荐</h3>
        <a href="/article/?block_id=tuijian_wz" target="_blank" class="more">更多</a>
    </div>
    <div class="course-right-content">

    </div>
    <ul>

    </ul>
  </div>  </div>

</div>



<div id="footer" >
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="/about/contact" target="_blank">联系我们</a></li>
                        <!--<li><a href="/subject/html" target="_blank">专题页面</a></li>-->
                        <li><a href="/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<script type="text/imooc-tpl" id="course-note-tpl">
   <div class="note-pop">
        <div id="js-note-input-fake" class="textarea-wrap">
            <textarea data-maxlength="1000" id="js-note-textarea" class="js-placeholder" name="" placeholder="请输入笔记内容..."></textarea>
            <p class="note-text-counter"><span id="js-note-limit">0</span>/1000</p>
        </div>
        <div class="publish-note-btns input-btm clearfix">
            <div class="verify-code clearfix"></div>
                                            <div title="截图"  class="js-shot-video screen-btn" data-type="note">
                    <span>截图</span>
                </div>
                                        <input type="button" title="发表" value="保存" id="js-note-submit" class="moco-btn moco-btn-green r" />
            <!-- <label for="js-isshare"  class="label-checked r"><input type="checkbox" checked="checked" id="js-isshare" class="checked" /> 公开</label> -->
        </div>
</div>
</script>
<!--问答弹出框 通用-->
<script type="text/imooc-tpl" id="course-qa-tpl">

    <div class="qa-pop">

            <div class="question-area">
                <div class="qa-control qa-ipt-title">
                    <input type="text" id="js-qa-title" maxlength="255" class="js-placeholder autocomplete" placeholder="请输入问题标题" />
                </div>
                <a href="http://www.imooc.com/wenda/detail/292353" target="_blank" class="another-meth">如何更好<br />的提问？</a>
                <dl class="send-area-result">
                </dl>
            </div>

        <div class="qa-control-wrap clearfix">
            <div class="qa-control">
                <div class="rich-text-editor">
                    <textarea id="discuss-editor" >请输入讨论内容...</textarea>
                </div>
            </div>
        </div>
        <div id="js-discuss-btm" class="discuss-bottom input-btm clearfix pop-footer">
            <div class="verify-code clearfix"></div>
                                            <div title="截图"  class="js-shot-video screen-btn" data-type="qa">
                    <span>截图</span>
                </div>
                                        <input id="js-discuss-submit" class="r moco-btn moco-btn-green" type="button" value="发布" />
        </div>
        <div id="use-credit-tip" class="use-credit-tip">
            <span class="credit-info">本次提问将花费2个积分</span>
            <a class="credit-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        </div>
    </div>

</script>
<!--积分弹出框-->
<div class="integral-pop" id="no-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>你的积分不足，无法发表</p>
        <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
            <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
        </div>
    </div>
</div>
<div class="integral-pop" id="enough-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>继续发表请点击 "确定"</p>
        <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
            <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
        </div>
    </div>
</div>

<!--WIKI弹出框 通用-->
<script type="text/imooc-tpl" id="course-wiki-tpl">
    <div class="wiki-pop">

        <div class='search_box clearfix'>
            <input class='search_ipt' type='text' placeholder='输入你想要找的WiKi词条名称' />
            <input type='button' value='搜索' class='search_btn' />
            <a class='createwiki' href='/wiki/create' target="_blank">创建wiki</a>
        </div>

        <div id='js-search-area-result' class='search-area-result'>
        </div>
    </div>

</script>
<!--  登录弹框 -->
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
</body>
</html>
