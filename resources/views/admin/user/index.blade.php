@extends('layout.admin')
@section('title', '用户列表页')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i><a href="{{ url('admin/user') }}">后台用户列表页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('home/user') }}">前台用户列表页</a></span>
        </div>

        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
{{--显示条数--}}
                <form action="/admin/user/" method='get'>
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>
                            显示
                            <select name="record" size="1" aria-controls="DataTables_Table_1">
                                <option value="5" @if($record == '5')selected="selected" @endif>
                                    5
                                </option>
                                <option value="10" @if($record == '10')selected="selected" @endif>
                                    10
                                </option>
                                <option value="15" @if($record == '15')selected="selected" @endif>
                                    15
                                </option>
                                <option value="20" @if($record == '20')selected="selected" @endif>
                                    20
                                </option>
                            </select>
                            条数据
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            关键字:
                            <input type="text" name='keywords' value="{{ $keywords or '' }}"aria-controls="DataTables_Table_1">
                        </label>
                        <button class='btn btn-md btn-info'>搜索</button>
                    </div>
                </form>

{{--js 表单--}}



                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
                       aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr role="row">
                        <th class="" role="columnheader" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 40px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            用户ID
                        </th>
                        <th class="" role="columnheader" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 140px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                          用户名
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 90px;" aria-label="Browser: activate to sort column ascending">
                            联系电话
                        </th>
                        <th class="" role="columnheader" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 108px;" aria-label="Platform(s): activate to sort column ascending">
                            头像
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 160px;" aria-label="Engine version: activate to sort column ascending">
                            权限
                        </th>

                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 117px;" aria-label="CSS grade: activate to sort column ascending">
                            状态
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 85px;" aria-label="CSS grade: activate to sort column ascending">
                           添加时间
                        </th>   <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 60px;" aria-label="CSS grade: activate to sort column ascending">
                            用户IP
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                    @if($users)
                        @foreach($users as $k => $v)
                            <tr class="@if ($k % 2 == 1) even @else odd @endif">
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->telephone }}</td>
                                <td><img src="{{ $v->uface }}" alt=""></td>
                                {{--调用函数 app\Org\function 下的成员方法--}}
                                <td><a href="javascript:void(0)" onclick="auth({{ $v->id }})">{{ getAuth($v->auth) }}</a></td>

                                <td>{{ getStatus($v->status) }}</td>
                                <td>{{ date('Y-m-d',$v->addtime) }}</td>

                                <td>{{ $v->ip }}</td>
                                <td>
                                    <a href="/admin/user/{{$v->id}}/edit" class='btn btn-success' id="edit" style="float: left;">修改</a>
                                    {{-- javascript:;  阻止a连接的默认跳转 --}}
                                    <a href="javascript:void(0)" onclick="delUser({{$v->id}})" class='btn btn-warning' id="del">删除</a>
                                </td>

                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>

                <script>


                    function delUser(id){
//                        alert(id);

                        layer.confirm('确认删除吗？', {
                            btn: ['确定','取消'] //按钮
                        }, function(){

                      $.post("{{url('admin/user/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){

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


                    function auth(uid) {
//                        alert(id);

                        $.post("{{url('admin/auth/')}}/"+uid,{'uid': uid, '_token':'{{csrf_token()}}'},function(data){
                            console.log(data);

                            layer.open({
                                type: 1,
                                title: '请选择权限',
                                skin: 'layui-layer-rim', //加上边框
                                area: ['420px', '240px'], //宽高
                                content: data,
                            });
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
                        {!! $users->appends($request->all())->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection