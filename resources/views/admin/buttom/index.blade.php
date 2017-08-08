@extends('layout.admin')

@section('title', '网站底部管理')

@section('content')
    <div class="mws-panel grid_8">

        <div class="mws-panel-header" style="padding-top:2px  ">
            <span><i class="icon-table"></i>网站底部列表页</span>
        </div>

        <div class="mws-panel-body no-padding" >
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
                <form action="{{url('admin/buttom')}}" method='get'>
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>
                            显示
                            <select name="num" size="1" aria-controls="DataTables_Table_1">
                                <option value="5"  @if($num == '5') selected="selected" @endif >
                                    5
                                </option>
                                <option value="10" @if($num == '10') selected="selected" @endif>
                                    10
                                </option>

                            </select>
                            条数据
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            关键字:
                            <input type="text" name='search' value="{{isset($search)?$search:''}}" aria-controls="DataTables_Table_1">
                        </label>
                        <button class='btn btn-md btn-info'>搜索</button>
                    </div>
                </form>

                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
                       aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="Browser: activate to sort column ascending">
                            地址
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 100px;" aria-label="Platform(s): activate to sort column ascending">
                            标题
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width:470px" aria-label="Engine version: activate to sort column ascending">
                            内容
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($res as $k=>$v)
                        <tr class=" ">
                            <td class="  sorting_1">
                            {{$v->id}}
                            </td>
                            <td class=" ">
                            {{$v->url}}
                            </td>
                            <td class=" ">
                            {{strip_tags($v->title)}}
                            </td>
                            <td class=" ">
                            {{$v->editorValue}}
                            </td>
                            <td class=" ">

                                <a href="/admin/buttom/{{$v->id}}/edit/" class='btn btn-info'>修改</a>
                                <a href="javascript:void(0)" onclick="delUser({{$v->id}})" class='btn btn-danger'>删除</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <script>
                    function delUser($id)
                    {
                        layer.confirm('确认删除？', {
                            btn: ['确认','取消'] //按钮
                        }, function(){
                            layer.msg('的确很重要', {icon: 1});
                        }, function(){
                            layer.msg('也可以这样', {
                                time: 20000, //20s后自动关闭
                                btn: ['明白了', '知道了']
                            });
                        });
                    }
                </script>
                <div class="page_list">
                    {!! $res->appends(['search'=>$search,'num'=>$num])->render() !!}
                </div>

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

                    .page_list{
                        padding-top: 0px;
                        height:30px;
                    }
                    .pagination{
                        padding-top: 0px;
                        margin-left: 800px;
                        margin-top:10px ;
                    }


                </style>



                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

                    <div id='page'>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')




@endsection