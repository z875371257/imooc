@extends('layout.admin')

@section('title', '友情链接添加页')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header" style="padding-top:2px  ">
            <span>友情链接添加页</span>
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
                        <li>{{session('msg')}}</li>
                    @endif
                </ul>
            </div>
        @endif

        <div class="mws-panel-body no-padding">
            <form action="/admin/link/{{$edit->id}}" method='post' enctype='multipart/form-data' class="mws-form">
                <input type="hidden" name="_method" value="put">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='title' value="{{$edit->title}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">地址:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='url' value="{{$edit->url}}">
                        </div>
                    </div>


                    <div class="mws-form-row">
                        <label class="mws-form-label">状态:</label>
                        <div class="mws-form-item">
                            <input type="radio" name="status" id="optionsRadios1" value="0" @if($edit->status == 0) checked="checked" @endif >启用
                            <input type="radio" name="status" id="optionsRadios1" value="1" @if($edit->status == 1) checked="checked" @endif >禁用
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
