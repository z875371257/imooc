@extends('layout.admin')

@section('title', '网站配置修改页面')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header" style="padding-top:2px  ">
            <span>网站配置修改页面</span>
        </div>

        <div class="mws-panel-body no-padding">
            <form action="/admin/conf/{{$res->id}}" method='post' enctype='multipart/form-data' class="mws-form">
                <input type="hidden" name="_method" value="put">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='conf_title' value="{{$res->conf_title}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">名称:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='conf_name' value="{{$res->conf_name}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">类型:</label>
                        <div class="mws-form-item" " >
                        <label for="" style="margin-left:40px "><input type="radio" onclick="showTr()" name="field_type" value="input" >input</label>
                        <label for="" style="margin-left:40px "><input type="radio" onclick="showTr()" name="field_type" value="textarea">textarea</label>
                        <label for="" style="margin-left:40px "><input type="radio" onclick="showTr()" name="field_type" value="radio">radio</label>
                    </div>
                </div>
                <div class="mws-form-row field_value">
                    <label class="mws-form-label">说明:</label>
                    <div class="mws-form-item">
                        <input type="text" name="field_value">
                        <span><i class="fa fa-exclamation-circle yellow">类型值只有在radio的情况下才需要配置，格式 1|开启,0|关闭</i></span>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">类型值:</label>
                    <div class="mws-form-item">
                        <textarea class="conf_content"  name="field_value" style="width:450px;height:100px" value="{{$res->field_value}}"></textarea>
                    </div>
                </div>


        </div>
        <div class="mws-button-row">
            <input type="submit" class="btn btn-info" value="提交" style="margin-left:150px ">
            <input type="button" class="btn btn-danger" onclick="history.go(-1)" value="返回" style="margin-left:40px ">
            {{csrf_field()}}
        </div>
        </form>

        </div>
        <script>
            showTr();
            function showTr()
            {
                var v = $('input[name=field_type]:checked').val();
                if(v == 'radio'){
                    $('.field_value').show();
                } else {
                    $('.field_value').hide();
                }
            }
        </script>
    </div>
@endsection

@section('js')




@endsection