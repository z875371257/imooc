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
                        <p>{{ $users->nickname }}</p>
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

                    <li><a href="/home/users/set" class="on">个人信息<span class="arr"><i class="icon-right2"></i></span></a></li>
                    <li><a href="/home/users/passedit" class="on">修改密码<span class="arr"><i class="icon-right2"></i></span></a></li>
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
                                    <div class="moco-form-group">
                                        <label for="" class="moco-control-label">昵称：</label>
                                        <div class="moco-control-input">
                                            <input type="text" name="nickname" id="nick"  autocomplete="off"  data-validate="require-nick"  class="moco-form-control" value="{{$users->nickname}}" placeholder="请输入昵称"/>
                                            <div class="rlf-tip-wrap errorHint color-red"></div>
                                        </div>
                                    </div>
                                    <div class="moco-form-group">
                                        <label for="" class="moco-control-label">职位：</label>
                                        <div class="moco-control-input">
                                            <select class="moco-form-control rlf-select" name="positions" hidefocus="true" id="job" data-validate="require-select">
                                                <option value="">请选择职位</option>
                                                <option @if($users->positions == '1')  selected="selected" @endif value="1" >Web前端工程师</option>
                                                <option @if($users->positions == '2')  selected="selected" @endif value="2" >PHP工程师</option>
                                                <option @if($users->positions == '3')  selected="selected" @endif value="3" >Java工程师</option>
                                                <option @if($users->positions == '4')  selected="selected" @endif value="4" >Android工程师</option>
                                                <option @if($users->positions == '5')  selected="selected" @endif value="5" >iOS工程师</option>

                                            </select>
                                            <div class="rlf-tip-wrap errorHint color-red"></div>
                                        </div>
                                    </div>

                                    <div class="moco-form-group wlfg-wrap">
                                        <label for="" class="moco-control-label h16 lh16">性别：</label>
                                        <div class="moco-control-input rlf-group rlf-radio-group">
                                            <label><input type="radio" @if( $users->sex == '0' ) checked="checked" @endif  hidefocus="true" value="0"   name="sex">保密</label>
                                            <label><input type="radio" @if( $users->sex == '1' ) checked="checked" @endif  hidefocus="true" value="1"  name="sex">男</label>
                                            <label><input type="radio" @if( $users->sex == '2' ) checked="checked" @endif  hidefocus="true" value="2"  name="sex">女</label>
                                            <div class="rlf-tip-wrap errorHint color-red"></div>
                                        </div>
                                    </div>
                                    <div class="moco-form-group wlfg-wrap">
                                        <label for="" class="moco-control-label">个性签名：</label>
                                        <div class="moco-control-input">
                                            <div class="pr">
                                                <textarea name="signature"  id="aboutme"  rows="5" class="noresize js-sign moco-form-control">{{ $users->signature }}</textarea>
                                                <p class="numCanInput js-numCanInput ">还可以输入128个字符</p>
                                            </div>
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
                            </div>


{{--个人信息列表页--}}            <div class="common-title">
                                个人信息
                                <a href="javascript: void(0);" class="pull-right js-edit-info" id="edit" onclick="edit({{ session('users')->id }})"><i class="icon-note"></i>编辑</a>
                            </div>
                            <div class="line"></div>
                            <div class="info-wapper">
                                <div class="info-box clearfix">
                                    <label class="pull-left">昵称</label><div class="pull-left">{{ $users->nickname }}</div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">职位</label><div class="pull-left">{{ getPos($users->positions) }}</div>
                                </div>

                                <div class="info-box clearfix">
                                    <label class="pull-left">性别</label><div class="pull-left">
                                        {{ getSex($users->sex) }}</div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">个性签名</label><div class="pull-left">{{ $users->signature }}</div>
                                </div>
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

        function edit() {
            var editor = $('.edit-info').html();
            layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['800px', '600px'], //宽高
                content: '<!doctype html><html lang="en"><head><meta charset="UTF-8"></head><body>'+editor+'</body></html>',
            })

        }

    </script>


@endsection