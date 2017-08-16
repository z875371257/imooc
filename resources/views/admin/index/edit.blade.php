@extends('layout.admin')
@section('title', '修改密码')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>修改密码</span>
        </div>
        <!-- 表单提交后发生错误信息的显示 -->
        @if (count(session('success')) > 0)
            <div class="mws-form-message info" style="margin-top:10px">
                {{session('success')}}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="mws-form-message error" style='margin-top:10px;'>
                修改失败
                <ul>
                    @if(is_object($errors))
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @else
                        <li>{{session('errors')}}</li>
                    @endif
                </ul>
            </div>
        @endif

        <div class="mws-panel-body no-padding">
            <form action="/admin/index/update" method='post' enctype='multipart/form-data' class="mws-form">

                <div class="mws-form-row">
                    <label class="mws-form-label">原密码:</label>
                    <div class="mws-form-item">
                        <input type="password" class="small" name='oldpasswd'><span style="margin-left:20px;color:red;"></span>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">新密码:</label>
                    <div class="mws-form-item">
                        <input type="password" class="small" name='password'>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">确认密码:</label>
                    <div class="mws-form-item">
                        <input type="password" class="small" name='repassword'>
                    </div>
                </div>

        </div>
        <div class="mws-button-row">
            <input type="submit" class="btn btn-danger" value="修改">
            {{csrf_field()}}
        </div>
        </form>
    </div>
    <script type="text/javascript" src="/admins/js/libs/jquery-1.8.3.min.js"></script>
        {{--<script>--}}

            {{--$("input[name=oldpasswd]").blur(function(){--}}
                {{--var oldpasswd = $(this).val();--}}
                {{--$.post('/admin/index/Ajaxpasswd',{'_token':'{{csrf_token()}}','oldpasswd':oldpasswd},function(data){--}}
                    {{--if(data == 1){--}}
                       {{--$('.mws-form-item:eq(0)').append("<span class='error1' style='margin-left:20px;color:red;'>密码错误</span>");--}}
                       {{--$('input[type=submit]').click(function(){--}}
                           {{--return false;--}}
                       {{--})--}}

                    {{--} else {--}}

                    {{--}--}}
                {{--})--}}
            {{--})--}}
            {{--$("input[name=oldpasswd]").focus(function(){--}}
                {{--$('.error1').remove();--}}
            {{--})--}}

        {{--</script>--}}

    </div>
@endsection
