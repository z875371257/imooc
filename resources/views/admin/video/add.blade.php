@extends('layout.admin')
@section('title', '类别添加')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>课程章节添加页面</span>
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
                <form action="/admin/section" method='post' enctype='multipart/form-data' class="mws-form">

                <div class="mws-form-row">
                    <label class="mws-form-label">所属大类:</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                                @foreach($arr as $k=>$v)
                                <li><input type="radio" value="{{$k}}" name="genera" onchange="daChange({{$k}})"> <label>{{ genera($k) }}</label></li>
                                @endforeach

                        </ul>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">父级分类</label>
                    <div class="mws-form-item">
                        <select class="large small"  id="pcate" onchange="fChange(this)" >

                        </select>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">分类所属课程</label>
                    <div class="mws-form-item">
                        <select class="large small" id="course" onchange="secChange(this)">

                        </select>
                    </div>
                </div>


                <div class="mws-form-row">
                    <label class="mws-form-label">所属章节</label>
                    <div class="mws-form-item">
                        <select class="large small" name="s_id" id="section" >

                        </select>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">视频标题:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='title'>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">上传视频</label>
                    <div class="mws-form-item">
                        <input type="file" class="small" name='vurl'>
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

    <script>

        //  点击单选框触发onchang事件 对应着这个方法 然后将大类拿过来
        function daChange(obj)
        {
            //发送ajax 然后将遍历出来的数据插入到下拉框里面
            $.get('/admin/ajaxcate',{'genera':obj},function(data){
                var arr = '';
                arr += "<option value='0'>根类</option>";
                $.each(data, function(i,item){

                    arr += "<option value="+item.cid+"  >"+item.cname+"</option>";

                    $('#pcate').html(arr);

//                    $('#pcate').attr('onchange','fChange('+item.cid+')');
                })
            })
        }

        function fChange(obj)
        {
            $.post('/admin/section/ajaxs', {'_token':'{{ csrf_token() }}', 'id':$(obj).val()},function(data){
                var arr = ''
                if(data){
                    $.each(data, function(i,item){
                        arr += "<option value="+item.id+"  >"+item.title+"</option>";
                        $('#course').html(arr);
                    })
                }

            })
        }

        function secChange(obj)
        {
            alert($(obj).val());
            {{--$.post('/admin/video/ajaxs', {'_token':'{{ csrf_token() }}', 'id':$(obj).val()},function(data){--}}
                {{--console.log(data);--}}
                {{--var arr = ''--}}
//                if(data){
//                    $.each(data, function(i,item){
//                        arr += "<option value="+item.id+"  >"+item.title+"</option>";
//                        $('#course').html(arr);
//                    })
//                }
//            })
        }

    </script>
@endsection