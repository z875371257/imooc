@extends('layout.admin')
@section('title', '类别添加')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>分类标签添加页面</span>
        </div>

        <!-- 表单提交后发生错误信息的显示 -->
        @if (count(session('success')) > 0)
            <div class="mws-form-message info" style="margin-top:10px">
                {{session('success')}}
            </div>
        @endif

        @if (count($errors) > 0 || session('errors') > 0)
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
            <form action="/admin/label" method='post' enctype='multipart/form-data' class="mws-form">

                <div class="mws-form-row">
                    <label class="mws-form-label">所属大类:</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            @foreach($arr as $k=>$v)
                                <li><input type="radio" value="{{$k}}" name="genera" "> <label>{{ genera($k) }}</label></li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">标签名称:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='title'>
                    </div>
                </div>

        </div>
        <div class="mws-button-row">
            <input type="submit" class="btn btn-danger" value="添加">
            {{csrf_field()}}
        </div>
        </form>
    </div>
    </div>


@endsection