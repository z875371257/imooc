@extends('layout.admin')
@section('title', '分类的修改页面')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>分类修改页面</span>
        </div>

        @if (count($errors) > 0)
            <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='list-style:none;font-size:17px'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mws-panel-body no-padding">
            <form action="/admin/cate/{{$data->cid}}" method='post' class="mws-form">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">父类名:</label>
                        <div class="mws-form-item">
                            <select class="small" name='pid'>
                                <option value='0'>|---根类---|</option>
                                @foreach($res as $k => $v)

                                    <option value='{{$v->cid}}' @if($data->pid == $v->cid) selected @endif  disabled>{{$v->cname}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">分类名:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name='name' value="{{$data->cname}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">状态:</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><label><input type="radio" name='status' value='1'>启用</label></li>
                                <li><label><input type="radio" name='status' value='0'>禁用</label></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" class="btn btn-danger" value="修改">
                    <input type="hidden" name='id' value='{{$data->cid}}'>


                </div>
            </form>
        </div>
    </div>


@endsection