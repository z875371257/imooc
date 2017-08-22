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
                        <div class="update-avator">
                            <p><a href="javascript:void(0);" class="js-avator-link">更换头像</a></p>
                        </div>
                    </div>
                    <div class="des-mode">
                        <p>{{session('users')->nickname}}</p>
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
                        <li><a href="/home/users/setprofile" class="on">个人信息<span class="arr"><i class="icon-right2"></i></span></a></li>
                    </ul>
                </div>
            </div>




                            {{--发送ajax 提交个人信息修改数据--}}
                            <script type="text/javascript">
                                function sumbit_sure(){
                                    var gnl=confirm("确定要提交?");
                                    if (gnl==true){
                                        return true;
                                    }else{
                                        return false;
                                    }
                                }
                            </script>@extends('layout.list')
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
                                                    <div class="update-avator">
                                                        <p><a href="javascript:void(0);" class="js-avator-link">更换头像</a></p>
                                                    </div>
                                                </div>
                                                <div class="des-mode">
                                                    <p>赵仙儿</p>
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

                                                    <li><a href="/home/users/setprofile/@if( empty( !session('users')) ) {{ session('users')->id }} @endif" class="on">个人信息<span class="arr"><i class="icon-right2"></i></span></a></li>
                                                    <li><a href="/home/users/password/{{session('users')->id}}/edit" >修改密码<span class="arr"><i class="icon-right2"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="setting-right">
                                            <div class="setting-right-wrap wrap-boxes settings" >

                                                <div class="formBox">
                                                    <div id="setting-profile" class="setting-wrap setting-profile">
                                                        <div class="edit-info" style="display: none;">
                                                            <form class="js-wapper-form" action="{{ url('home/users/setprofile') }}" method="post" onsubmit="return sumbit_sure()">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                {{ method_field('PUT') }}
                                                                <div class="moco-form-group">
                                                                    <label for="" class="moco-control-label">昵称：</label>
                                                                    <div class="moco-control-input">
                                                                        <input type="text" name="nickname" id="nick"  autocomplete="off"  data-validate="require-nick"  class="moco-form-control" value=" @if( empty(! session('details') )){{ session('details')->nickname  }} @endif" placeholder="请输入昵称"/>
                                                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="moco-form-group">
                                                                    <label for="" class="moco-control-label">职位：</label>
                                                                    <div class="moco-control-input">
                                                                        <select class="moco-form-control rlf-select" name="job" hidefocus="true" id="job" data-validate="require-select">
                                                                            <option value="">请选择职位</option>
                                                                            <option @if(session('details')->positions == '1')  selected="selected" @endif value="1" >Web前端工程师</option>
                                                                            <option @if(session('details')->positions == '2')  selected="selected" @endif value="2" >PHP工程师</option>
                                                                            <option @if(session('details')->positions == '3')  selected="selected" @endif value="3" >Java工程师</option>
                                                                            <option @if(session('details')->positions == '4')  selected="selected" @endif value="4" >Android工程师</option>
                                                                            <option @if(session('details')->positions == '5')  selected="selected" @endif value="5" >iOS工程师</option>

                                                                        </select>
                                                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="moco-form-group wlfg-wrap">
                                                                    <label for="" class="moco-control-label">所在地区：</label>
                                                                    <div class="moco-control-input profile-address">
                                                                        <select id="province-select" class="moco-form-control" hidefocus="true">
                                                                            <option value="0">省</option>
                                                                            <option value="1">北京</option>
                                                                            <option value="2">天津</option>
                                                                            <option value="3" selected="selected">河北</option>
                                                                            <option value="4">山西</option>

                                                                        </select>
                                                                        <select class="moco-form-control" id="city-select" hidefocus="true">
                                                                            <option value="0">市</option>
                                                                            <option value="5">邯郸市</option>
                                                                            <option value="6" selected="selected">石家庄市</option>

                                                                        </select>
                                                                        <select class="moco-form-control mr0" id="area-select" hidefocus="true">
                                                                            <option value="0">区县</option>
                                                                            <option value="115">长安区</option>

                                                                        </select>
                                                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="moco-form-group wlfg-wrap">
                                                                    <label for="" class="moco-control-label h16 lh16">性别：</label>
                                                                    <div class="moco-control-input rlf-group rlf-radio-group">
                                                                        <label><input type="radio" @if( session('details')->sex == '0' ) checked="checked" @endif  hidefocus="true" value="0"   name="sex">保密</label>
                                                                        <label><input type="radio" @if( session('details')->sex == '1' ) checked="checked" @endif  hidefocus="true" value="1" checked="checked" name="sex">男</label>
                                                                        <label><input type="radio" @if( session('details')->sex == '2' ) checked="checked" @endif  hidefocus="true" value="2"  name="sex">女</label>
                                                                        <div class="rlf-tip-wrap errorHint color-red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="moco-form-group wlfg-wrap">
                                                                    <label for="" class="moco-control-label">个性签名：</label>
                                                                    <div class="moco-control-input">
                                                                        <div class="pr">
                                                                            <textarea name="aboutme"  id="aboutme"  rows="5" class="noresize js-sign moco-form-control">{{ session('details')->signature }}</textarea>
                                                                            <p class="numCanInput js-numCanInput ">还可以输入128个字符</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wlfg-wrap clearfix">
                                                                    <label class="moco-control-label" for=""></label>
                                                                    <div class="moco-control-input">
                                                                        <a href="javascript:void(0);" id="profile-submit" class="moco-btn moco-btn-blue marR10" >确定</a>
                                                                        <a href="javascript:void(0);" class="moco-btn moco-btn-normal js-modal-close">取消</a>
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
                                                                <label class="pull-left">昵称</label><div class="pull-left">{{ session('details')->nickname }}</div>
                                                            </div>
                                                            <div class="info-box clearfix">
                                                                <label class="pull-left">职位</label><div class="pull-left">{{ getPos(session('details')->positions) }}</div>
                                                            </div>
                                                            <div class="info-box clearfix">
                                                                <label class="pull-left">城市</label>
                                                                <div class="pull-left">
                                                                    {{ session('details')->city }}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                            </div>
                                                            <div class="info-box clearfix">
                                                                <label class="pull-left">性别</label><div class="pull-left">
                                                                    {{ getSex(session('details')->sex) }}</div>
                                                            </div>
                                                            <div class="info-box clearfix">
                                                                <label class="pull-left">个性签名</label><div class="pull-left">{{ session('details')->signature }}</div>
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
                                    {{--通过session  获取修改的用户 --}}

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

                            {{--发送ajax 提交个人信息修改数据--}}


                            {{--个人信息列表页--}}
                            <div class="common-title">
                                个人信息
                                <a href="javascript: void(0);" class="pull-right js-edit-info" id="edit" onclick="edit({{ session('users')->id }})"><i class="icon-note"></i>编辑</a>
                            </div>
                            <div class="line"></div>
                            <div class="info-wapper">
                                <div class="info-box clearfix">
                                    <label class="pull-left">昵称</label><div class="pull-left">{{ session('details')->nickname }}</div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">职位</label><div class="pull-left">{{ getPos(session('details')->positions) }}</div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">城市</label>
                                    <div class="pull-left">
                                        {{ session('details')->city }}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">性别</label><div class="pull-left">
                                        {{ getSex(session('details')->sex) }}</div>
                                </div>
                                <div class="info-box clearfix">
                                    <label class="pull-left">个性签名</label><div class="pull-left">{{ session('details')->signature }}</div>
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
        {{--通过session  获取修改的用户 --}}

        function edit() {
            var editor = $('.edit-info').html();
            layer.open({
                type: 1,
                title: '编辑用户个人信息',
                skin: 'layui-layer-rim', //加上边框
                area: ['800px', '600px'], //宽高
                content: '<!doctype html><html lang="en"><head><meta charset="UTF-8"></head><body>'+editor+'</body></html>',
            })

        }

    </script>


@endsection