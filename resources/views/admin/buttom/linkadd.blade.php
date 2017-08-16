@extends('layout.admin')

@section('title', '友情链接添加页')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header" style="padding-top:2px  ">
            <span>友情链接添加页</span>
        </div>

        <div class="mws-panel-body no-padding">
            <form action="/admin/link" method='post' enctype='multipart/form-data' class="mws-form">
                <div class="mws-form-inline">

                    <div class="mws-form-row">
                        <label class="mws-form-label">标题:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='title'>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">地址:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='url'>
                        </div>
                    </div>


                    <div class="mws-form-row">
                        <label class="mws-form-label">状态:</label>
                        <div class="mws-form-item">
                            <input type="radio" name="status" id="optionsRadios1" value="0" checked>启用
                            <input type="radio" name="status" id="optionsRadios1" value="1" >禁用
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
