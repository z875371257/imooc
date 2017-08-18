@extends('layout.admin')
<script type="text/javascript" src="/admins/js/libs/jquery-1.8.3.js"></script>
@section('title', '修改后台用户页面')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>修改后台用户</span>
        </div>
        @if ( is_array($errors) && count($errors) > 0)
            <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mws-panel-body no-padding">
            {{-- 将要修改的用户信息显示在input框中  $user模型实例  --}}
            {{-- action = 路由规则 带ID    CSRF认证  提交方法PUT      到 UserController控制器 的  update方法  接收修改表单数据--}}
            <form class="mws-form" action="{{ url('admin/user/'.$user->id) }}" method="post" enctype="multipart/form-data">
                {{--防止跨网站伪造请求--}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="mws-form-block">

                    <div class="mws-form-row">
                        <label class="mws-form-label">用户名:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" value="{{$user->username}}" name="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">手机号:</label>
                        <div class="mws-form-item">
                            <input type="tel" class="small" value="{{ $user->telephone }}" name="telephone" placeholder="请输入11位手机号码" pattern="\d{11}">
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="修改" class="btn btn-success">
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
//                    console.log(data.status);
//                通过返回的status 状态 =0  = 1 做出判断
                if ( data.status == '0' ) {
                    $('input[name=username]').val(data.msg);
                }
            } );

        })




    </script>
@endsection