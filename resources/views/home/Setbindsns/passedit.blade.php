@extends('layout.list')
@section('title', '个人信息页面')

@section('content')
    <link rel="stylesheet" href="/homes/css/base.css">
    <link rel="stylesheet" href="/homes/css/common_less.css">
    <link rel="stylesheet" href="/homes/css/profile_less.css">
    <link rel="stylesheet" href="/homes/css/mkm.css">
    <link rel="stylesheet" href="/homes/css/lr.css">

    <div id="main">

        <div class="settings-cont clearfix">
            <div class="setting-left l">
                <div class="avator-wapper">
                    <div class="avator-mode">
                        <img class="avator-img" src="http://img.mukewang.com/597b0ff300016efc06950694-200-200.jpg" data-portrait="597b0ff300016efc06950694" width="92" height="92">
                        <div class="update-avator" style="bottom: -30px;">
                            <p><a href="javascript:void(0);" class="js-avator-link">更换头像</a></p>
                        </div>

                        <script type="text/javascript">
                            $('.update-avator').mousemove(function () {
                                $('.js-avator-link').text('更换头像');
                                $('.update-avator').style.bottom ='0px';
                            });

                            $('.update-avator').mouseleave(function () {
                                $('.js-avator-link').text('');
                                $('.update-avator').style.bottom ='-30px';

                            });
                        </script>
                    </div>
                    <div class="des-mode">
                        <p>{{ session()->get('users')->nickname }}</p>
                        <dl class="js-auth-list clearfix auth-list">
                            <dd ><i class="icon-set_sns"></i><div class="icon-tips hide"><div class="triangle_border_up"><span></span></div>还未实名认证</div></dd>

                            <dd ><i class="imv2-school"></i><div class="icon-tips hide"><div class="triangle_border_up"><span></span></div>还未学籍认证</div></dd>

                            <dd class="active"><i class="icon-set_phone"></i><div class="icon-tips hide"><div class="triangle_border_up"><span></span></div>你已绑定手机</div></dd>
                            <dd class="active"><i class="icon-set_email"></i><div class="icon-tips hide"><div class="triangle_border_up"><span></span></div>你已绑定邮箱</div></dd>
                        </dl>
                    </div>
                </div>
                <iframe src="about:blank" id="uploadtarget" name="uploadtarget" frameborder="0" style="display:none;"></iframe>
                <div class="list-wapper">
                    <h2>账户管理</h2>
                    <div class="line"></div>
                    <ul class="menu">

                        <li><a href="/home/users/set" class="on">密码修改<span class="arr"><i class="icon-right2"></i></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="setting-right">
                <div class="setting-right-wrap wrap-boxes settings" >

                    <div class="formBox">
                        <div id="setting-profile" class="setting-wrap setting-profile">
                            <div class="edit-info" style="display: none;">
                                <form class="js-wapper-form" id="js-wapper-form" action="{{ url('home/users/setprofile') }}" method="post" onsubmit="return sumbit_sure()">
                                    {{ csrf_field() }}


                                    <div class="wlfg-wrap clearfix">
                                        <label class="moco-control-label" for=""></label>
                                        <div class="moco-control-input">
                                            <input type="submit" value="提交">
                                            {{--<a href="javascript:void(0)" onclick="func()" id="profile-submit" class="moco-btn moco-btn-blue marR10" >确定</a>--}}
                                            {{--<a href="" class="moco-btn moco-btn-normal js-modal-close">取消</a>--}}
                                            <p class="js-gerror g_error"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            {{--个人信息列表页--}}            <div class="common-title">
                                密码修改
                                <a href="javascript: void(0);" class="pull-right js-edit-info" id="edit" onclick="edit({{ session('users')->id }})"><i class="icon-note"></i>编辑</a>
                            </div>
                            <div class="line"></div>
                            <div class="info-wapper">
                                <form action="{{ url('home/users/dopassupdate') }}" method="post">
                                    {{ csrf_field() }}
                                <div class="moco-form-group">
                                    <label for="" class="moco-control-label">原始密码：</label>
                                    <div class="moco-control-input">
                                        <input type="text" name="passwd" id="passwd"  autocomplete="off"  data-validate="require-nick"  class="moco-form-control" value="" placeholder="请输入昵称"/>
                                        <span id="text1"></span>
                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                    </div>
                                </div>
                                <div class="moco-form-group">
                                    <label for="" class="moco-control-label">新密码：</label>
                                    <div class="moco-control-input">
                                        <input type="text" name="repasswd" id="repasswd"  autocomplete="off"  data-validate="require-nick"  class="moco-form-control" value="" placeholder="请输入昵称"/>
                                        <span id="text2"></span>
                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                    </div>
                                </div>
                                <div class="moco-form-group">
                                    <label for="" class="moco-control-label">确认密码：</label>
                                    <div class="moco-control-input">
                                        <input type="text" name="password" id="password"  autocomplete="off"  data-validate="require-nick"  class="moco-form-control" value="" placeholder="请输入昵称"/>
                                        <span id="text3"></span>
                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                    </div>
                                </div>
                                    <div class="wlfg-wrap clearfix">
                                        <label class="moco-control-label" for=""></label>
                                        <div class="moco-control-input">
                                            <input type="submit" value="提交">
                                            {{--<a href="javascript:void(0)" onclick="func()" id="profile-submit" class="moco-btn moco-btn-blue marR10" >确定</a>--}}
                                            {{--<a href="" class="moco-btn moco-btn-normal js-modal-close">取消</a>--}}
                                            <p class="js-gerror g_error"></p>
                                        </div>
                                    </div>
                                </form>


                                {{--个人信息列表页--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    {{-- 编辑弹出窗口 --}}
    <script type="text/javascript">

        $('#passwd').focus(function () {
            $(this).css('border', '2px solid green');
            $('#text1').css('color', 'green');
            $('#text1').text('请在安全的情况下输入您的密码');
        });
        var ps = null;
        $('#passwd').blur(function () {

            // 获取文本值
             ps = $(this).val();

            $.post("{{ url('home/users/passupdate') }}",{ 'password':ps, '_token':'{{ csrf_token() }}'}, function (data) {
                    console.log(data.status);
//
                if (data.status == '0') {
                    $('#passwd').css('border', '');
                    $('#text1').css('color', 'green');
                    $('#text1').text('原密码正确');
                } else {
                    $('#passwd').css('border', '2px solid red');
                    $('#text1').css('color', 'red');
                    $('#text1').text('原密码不正确');
                }
            })
        });



        $('#repasswd').focus(function () {
            $(this).css('border', '2px solid green');
            $('#text2').css('color', 'green');
            $('#text2').text('请在安全的情况下输入您的密码');
        });

        var pd = null;
        $('#repasswd').blur(function () {
//        获取文本值
             pd = $(this).val();
//       console.log(pd);

//       正则
            var reg6 = /^\w{6,20}$/;

//        执行正则
            if ( !reg6.test(pd)) {
                $(this).css('border', '2px solid red');
                $('#text2').css('color', 'red');
                $('#text2').text('密码不符合规则');

            }   else if(pd == ps ) {
                $(this).css('border', '2px solid red');
                $('#text2').css('color', 'red');
                $('#text2').text('新密码不能和原密码一致');

            }  else {
                $(this).css('border', '');
                $('#text2').css('color', 'green');
                $('#text2').text('密码可用');
            }

        })


        $('#password').focus(function () {
            $(this).css('border', '2px solid green');
            $('#text3').css('color', 'green');
            $('#text3').text('请在安全的情况下输入您的密码');
        });

        var p = null;
        $('#password').blur(function () {
//        获取文本值
             p = $(this).val();
//       console.log(pd);

//       正则
            var reg6 = /^\w{6,20}$/;

//        执行正则
            if ( !reg6.test(p)) {
                $(this).css('border', '2px solid red');
                $('#text3').css('color', 'red');
                $('#text3').text('密码不符合规则');

            }   else if(pd !== p ) {
                $(this).css('border', '2px solid red');
                $('#text3').css('color', 'red');
                $('#text3').text('两次密码不一致');

            }  else {
                $(this).css('border', '');
                $('#text3').css('color', 'green');
                $('#text3').text('请点击修改');
            }

        })


    </script>


@endsection