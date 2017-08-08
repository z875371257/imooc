@extends('layout.admin')
<script type="text/javascript" src="/admins/js/libs/jquery-1.8.3.js"></script>
@section('title', '后台添加用户页面')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>后台添加用户</span>
        </div>
        @if (count($errors) > 0)
            <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mws-panel-body no-padding">
            {{-- action = 路由规则    method = post方式   name 值要有  到 UserController控制器 的  store方法  接收处理表单数据--}}
            <form class="mws-form" action="{{ url('admin/user') }}" method="post" enctype="multipart/form-data">
                {{--防止跨网站伪造请求--}}
                {{ csrf_field() }}
                <div class="mws-form-block">
                    <div class="mws-form-row">
                        <label class="mws-form-label">用户名:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" value="" name="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">密码:</label>
                        <div class="mws-form-item">
                            <input type="password" class="small" value="" name="password" placeholder="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">手机号:</label>
                        <div class="mws-form-item">
                            <input type="tel" class="small" value="" name="telephone" placeholder="请输入11位手机号码" pattern="\d{11}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">头像:</label>
                        <div class="mws-form-item">
                            <input type="file" class="small" value="" name="uface"">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">权限:</label>
                        <div class="mws-form-item">
                            <select class="small" name="auth">
                                <option value="1" selected="selected">普通管理员</option>
                                <option value="2">一般管理员</option>
                                <option value="3">超级管理员</option>
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">状态:</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list">
                                <li>
                                    <label><input type="radio" value="1" name="status" checked="checked">启用</label>
                                    <label><input type="radio" value="2" name="status">禁用</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="提交" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">

//        alert($);

//      验证用户名是否存在
        $('input[name=username]').blur(function(){

//      获取username 输入框的值
        var val = $('input[name=username]').val();
//        console.log(val);

//     $.post(url,data,callback)
//          url   请求服务器的路由
//          data  请求时所带的参数列表

//           callback 回调函数
            $.post('/admin/checkname', {'_token':'{{ csrf_token() }}', 'username':val}, function(data) {
//                    console.log(data);
//                通过返回的status 状态 =0  = 1 做出判断
                if ( data.status == '0' ) {
                    $('input[name=username]').val(data.msg);
                }
            } );

        })




    </script>
@endsection