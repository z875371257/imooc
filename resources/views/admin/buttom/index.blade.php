@extends('layout.admin')

@section('title', '网站底部管理')

@section('content')
    <div class="mws-panel grid_8">

        <div class="mws-panel-header">
            <span><i class="icon-table"></i>网站底部列表页</span>
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
                       aria-describedby="DataTables_Table_1_info" >
                    <thead>
                    <tr role="row">
                        <th  role="columnheader" rowspan="1" colspan="1" style="width: 188px;" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>
                        <th  role="columnheader" rowspan="1" colspan="1" style="width: 150px;" aria-label="Browser: activate to sort column ascending">
                            地址
                        </th>
                        <th  role="columnheader" rowspan="1" colspan="1" style="width: 100px;" aria-label="Platform(s): activate to sort column ascending">
                            标题
                        </th>
                        <th  role="columnheader" rowspan="1" colspan="1" style="width:470px;" aria-label="Engine version: activate to sort column ascending">
                            内容
                        </th>

                        <th  role="columnheader"  rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all" style="height:200px;">
                    @foreach($res as $k=>$v)
                        <tr class=" ">
                            <td class="  sorting_1">
                            {!!$v->id!!}
                            </td>
                            <td class=" ">
                            {!!$v->url!!}
                            </td>
                            <td class=" ">
                            {!!$v->title!!}
                            </td>
                            <td class=" " >
                            {{--{!!$v->editorValue !!}--}}
                                {{--{!! html_entity_decode($v->editorValue) !!}--}}
                                {!! substr($v->editorValue,0,200).'...' !!}

                            </td>
                            <td class=" ">
                                <a href="/admin/buttom/{{$v->id}}/edit/" class='btn btn-success'>修改</a>
                                <a href="javascript:void(0)" onclick="delUser({{$v->id}})" class='btn btn-warning'>删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
                <script src="/admins/layer/layer.js"></script>

                <script>

                    function delUser(id)
                    {
                        //询问框
                        layer.confirm('确定删除？', {
                            btn: ['确定','取消'] //按钮
                        }, function(){
                            $.post("{{url('admin/buttom')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                                if(data.status == 0){
                                    location.href=location.href;
                                    layer.msg('删除成功',{icon:5});
                                } else {
                                    layer.msg('删除失败',{icon:6});
                                    location.href=location.href;
                                }
                            })
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
                        {!! $res->appends(['search'=>$search,'num'=>$num])->render() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')




@endsection