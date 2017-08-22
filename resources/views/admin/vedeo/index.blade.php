@extends('layout.admin')
@section('title', '分类详情')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>分类列表页</span>
        </div>

        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

                <form action="/admin/vedeo" method='get'>
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>
                            显示
                            <select name="num" size="1" aria-controls="DataTables_Table_1">
                                <option value="5" @if($request->num == '5')selected="selected" @endif>
                                    5
                                </option>
                                <option value="10" @if($request->num == '10')selected="selected" @endif>
                                    10
                                </option>
                                <option value="15" @if($request->num == '15')selected="selected" @endif>
                                    15
                                </option>
                                <option value="20" @if($request->num == '20')selected="selected" @endif>
                                    20
                                </option>
                            </select>
                            条数据
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            关键字:
                            <input type="text" name='search' value="{{$request->search}}"aria-controls="DataTables_Table_1">
                        </label>
                        <button class='btn btn-md btn-info'>搜索</button>
                    </div>
                </form>

                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
                       aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr role="row">
                        <th class="" role="columnheader" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 188px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 243px;" aria-label="Browser: activate to sort column ascending">
                            所属课程
                        </th>

                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                                 rowspan="1" colspan="1" style="width: 243px;" aria-label="Browser: activate to sort column ascending">
                            所属章节
                        </th>

                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 160px;" aria-label="Engine version: activate to sort column ascending">
                            标题
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 160px;" aria-label="Engine version: activate to sort column ascending">
                            视频封面
                        </th>

                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 160px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                    @if($vedeo)
                        @foreach($vedeo as $k => $v)
                            <tr class="@if ($k % 2 == 1) even @else odd @endif">
                                <td>{{$v->vid}}</td>
                                <td>{{course($v->sid)}}</td>
                                <td>{{section($v->sid)}}</td>
                                <td>{{$v->title}}</td>
                                <td><img width="100px" height="50px" src="{{$v->vpic}}" alt=""></td>
                                <td>
                                    <a href="/admin/vedeo/{{$v->sid}}/edit" class='btn btn-success'>修改</a>
                                    <a href="javascript:void(0)" onclick="delCate({{$v->sid}})" class='btn btn-warning'>删除</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>

                <script>

                    function delCate(id){

                        layer.confirm('确认删除吗？', {
                            btn: ['确定','取消'] //按钮
                        }, function(){

                      $.post("{{url('admin/cate/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){

                                if(data.status == 0){
                                    location.href = location.href;
                                    layer.msg(data.msg, {icon: 6});
                                }else{
                                    location.href = location.href;
                                    layer.msg(data.msg, {icon: 5});
                                }

                            });

                        }, function(){

                        });

                    }

                </script>

                <style type="text/css">
                    #page li{
                        background-color: #444444;
                        border-left: 1px solid rgba(255, 255, 255, 0.15);
                        border-right: 1px solid rgba(0, 0, 0, 0.5);
                        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(255, 255, 255, 0.15) inset;
                        color: #fff;
                        cursor: pointer;
                        display: block;
                        float: left;
                        font-size: 12px;
                        height: 20px;
                        line-height: 20px;
                        outline: medium none;
                        padding: 0 10px;
                        text-align: center;
                        text-decoration: none;
                    }
                    #page .active{
                        background-color: #88a9eb;
                        background-image: none;
                        border: medium none;
                        box-shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
                        color: #323232;
                    }
                    #page a{
                        color: #fff;
                    }
                    #page .disabled{

                        color: #666666;
                        cursor: default;
                    }
                    #page ul{

                        margin:0px;
                    }
                </style>

                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

                    <div id='page'>
                        {!! $vedeo->appends($request->all())->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection