@extends('layout.admin')
@section('title', '订单详情')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>订单详情</span>
        </div>

        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

                <form action="{{url('admin/order')}}" method='get'>
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
                            订单编号
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 243px;" aria-label="Browser: activate to sort column ascending">
                            商品数量
                        </th>
                        <th class="" role="columnheader" aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 128px;" aria-label="Platform(s): activate to sort column ascending">
                            金额
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 160px;" aria-label="Engine version: activate to sort column ascending">
                            收货人
                        </th>

                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 117px;" aria-label="CSS grade: activate to sort column ascending">
                            收货地址
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            联系电话
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            状态
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                            下单时间
                        </th>
                        <th class="" role="columnheader"  aria-controls="DataTables_Table_1"
                            rowspan="1" colspan="1" style="width: 230px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    
                        @if($res)
                        @foreach($res as $k => $v)
                        <tr class="even">
                            <td class="  sorting_1">{{$v->oid}}</td>
                            <td>{{$v->ocnt}}</td>
                            <td>{{$v->ormb}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->details}}</td>
                            <td>{{$v->telephone}}</td>
                            <td>{{$status[$v->status]}}</td>
                            <td>{{$v->addtime}}</td>
                            <td>
                                <a href="{{url('admin/order/'.$v->uid.'/edit')}}" class='btn btn-success'>修改</a>
                            </td>
                        </tr>
                       @endforeach
                       @endif
                    </tbody>
                </table>

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
                        {!! $res->appends($request->all())->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
