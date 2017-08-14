@extends('layout.admin')

@section('title', '课程添加')

@section('content')
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <div class="mws-panel grid_8">
        <div class="mws-panel-header" >
            <span>课程添加页面</span>
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
            <form action="/admin/course" method='post' enctype="multipart/form-data" class="mws-form" id="art_form">
                <div class="mws-form-inline">

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
                        <label class="mws-form-label">选择分类</label>
                        <div class="mws-form-item">
                            <select class="large small" name="pid" id="pcate">

                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row" id="bigcheck" >
                        <label class="mws-form-label">课程所属标签</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline" id="checkd">

                            </ul>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">课程名:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" value="{{old('title')}}" name="title">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">列表页介绍:</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" value="{{old('referral')}}" name="referral">
                        </div>
                    </div>

                    <div class="mws-form-row" id="description">
                        <label class="mws-form-label">课程详情页简介</label>
                        <div class="mws-form-item">
                            <textarea rows="" cols="" class="large" name="description" value="{{old('description')}}}"></textarea>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">列表页图片:</label>
                        <div class="mws-form-item" >
                            <input type="hidden" name="pic" id="pic">
                            <input type="file" class="small" name="picc" id="file_upload">
                        </div>
                    </div>
                    <p><img id="img1" alt="上传后显示图片" style="max-width:350px;max-height:100px;margin-left:180px" /></p>
                    <script type="text/javascript">
                        $(function () {
                            $("#file_upload").change(function () {
                                uploadImage();
                            });
                        });
                        function uploadImage() {
//                            判断是否有选择上传文件
                            var imgPath = $("#file_upload").val();

                            if (imgPath == "") {
                                alert("请选择上传图片！");
                                return;
                            }
                            //判断上传文件的后缀名
                            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                            if (strExtension != 'jpg' && strExtension != 'gif'
                                && strExtension != 'png' && strExtension != 'bmp') {
                                alert("请选择图片文件");
                                return;
                            }
                            var formData = new FormData($('#art_form')[0]);

                            $.ajax({
                                type: "POST",
                                url: "/admin/upload",
                                data: formData,
                                async: true,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $('#img1').attr('src','/'+data);
                                    $('#pic').val(data);
                                },
                                error: function(XMLHttpRequest, textStatus, errorThrown) {
                                    alert("上传失败，请检查网络后重试");
                                }
                            });
                        }

                    </script>



                    <div class="mws-form-row" id="banner">
                        <label class="mws-form-label">详情页大图 or Banner图:</label>
                        <div class="mws-form-item">
                            <input type="hidden" name="bigpic" id="bigpic">
                            <input type="file"  name="bigpicc" id="file_uploads">
                        </div>
                    </div>
                    <p><img id="img2" alt="上传后显示图片" style="max-width:350px;max-height:100px;margin-left:180px" /></p>

                    <script type="text/javascript">
                        $(function () {
                            $("#file_uploads").change(function () {
                                uploadImages();
                            });
                        });
                        function uploadImages() {
//                            判断是否有选择上传文件
                            var imgPath = $("#file_uploads").val();

                            if (imgPath == "") {
                                alert("请选择上传图片！");
                                return;
                            }
                            //判断上传文件的后缀名
                            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                            if (strExtension != 'jpg' && strExtension != 'gif'
                                && strExtension != 'png' && strExtension != 'bmp') {
                                alert("请选择图片文件");
                                return;
                            }
                            var formData = new FormData($('#art_form')[0]);

                            $.ajax({
                                type: "POST",
                                url: "/admin/uploads",
                                data: formData,
                                async: true,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $('#img2').attr('src','/'+data);
                                    $('#bigpic').val(data);
                                },
                                error: function(XMLHttpRequest, textStatus, errorThrown) {
                                    alert("上传失败，请检查网络后重试");
                                }
                            });
                        }

                    </script>

                    <div class="mws-form-row" id="price">
                        <label class="mws-form-label">价格 :</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" value="{{old('price')}}" name="price">
                        </div>
                    </div>

                    <div class="mws-form-row" id="difficulty">
                        <label class="mws-form-label">难度:</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list">
                                <li>
                                    <label><input type="radio" value="1" name="difficulty" checked="checked">初级</label>
                                    <label><input type="radio" value="2" name="difficulty">中级</label>
                                    <label><input type="radio" value="2" name="difficulty">高级</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">最热 :</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list">
                                <li>
                                    <label><input type="radio" value="1" name="hot">开启</label>
                                    <label><input type="radio" value="2" name="hot" checked="checked">关闭</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">最新 :</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list">
                                <li>
                                    <label><input type="radio" value="1" name="new" checked="checked">开启</label>
                                    <label><input type="radio" value="2" name="new">关闭</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">首页Banner推荐 :</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list">
                                <li>
                                    <label><input type="radio" value="1" name="banner">开启</label>
                                    <label><input type="radio" value="2" name="banner" checked="checked">关闭</label>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="mws-form-row" id="content">
                        <label class="mws-form-label">列表内容:</label>
                        <div class="mws-form-item" name='content'>
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                            <script id="editor" type="text/plain" style="width:800px;height:300px;"></script>
                            <script type="text/javascript" >

                                //实例化编辑器
                                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                var ue = UE.getEditor('editor');


                                function isFocus(e){
                                    alert(UE.getEditor('editor').isFocus());
                                    UE.dom.domUtils.preventDefault(e)
                                }
                                function setblur(e){
                                    UE.getEditor('editor').blur();
                                    UE.dom.domUtils.preventDefault(e)
                                }
                                function insertHtml() {
                                    var value = prompt('插入html代码', '');
                                    UE.getEditor('editor').execCommand('insertHtml', value)
                                }
                                function createEditor() {
                                    enableBtn();
                                    UE.getEditor('editor');
                                }
                                function getAllHtml() {
                                    alert(UE.getEditor('editor').getAllHtml())
                                }
                                function getContent() {
                                    var arr = [];
                                    arr.push("使用editor.getContent()方法可以获得编辑器的内容");
                                    arr.push("内容为：");
                                    arr.push(UE.getEditor('editor').getContent());
                                    alert(arr.join("\n"));
                                }
                                function getPlainTxt() {
                                    var arr = [];
                                    arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
                                    arr.push("内容为：");
                                    arr.push(UE.getEditor('editor').getPlainTxt());
                                    alert(arr.join('\n'))
                                }
                                function setContent(isAppendTo) {
                                    var arr = [];
                                    arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
                                    UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
                                    alert(arr.join("\n"));
                                }
                                function setDisabled() {
                                    UE.getEditor('editor').setDisabled('fullscreen');
                                    disableBtn("enable");
                                }

                                function setEnabled() {
                                    UE.getEditor('editor').setEnabled();
                                    enableBtn();
                                }

                                function getText() {
                                    //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
                                    var range = UE.getEditor('editor').selection.getRange();
                                    range.select();
                                    var txt = UE.getEditor('editor').selection.getText();
                                    alert(txt)
                                }

                                function getContentTxt() {
                                    var arr = [];
                                    arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
                                    arr.push("编辑器的纯文本内容为：");
                                    arr.push(UE.getEditor('editor').getContentTxt());
                                    alert(arr.join("\n"));
                                }
                                function hasContent() {
                                    var arr = [];
                                    arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
                                    arr.push("判断结果为：");
                                    arr.push(UE.getEditor('editor').hasContents());
                                    alert(arr.join("\n"));
                                }
                                function setFocus() {
                                    UE.getEditor('editor').focus();
                                }
                                function deleteEditor() {
                                    disableBtn();
                                    UE.getEditor('editor').destroy();
                                }
                                function disableBtn(str) {
                                    var div = document.getElementById('btns');
                                    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                                    for (var i = 0, btn; btn = btns[i++];) {
                                        if (btn.id == str) {
                                            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                                        } else {
                                            btn.setAttribute("disabled", "true");
                                        }
                                    }
                                }
                                function enableBtn() {
                                    var div = document.getElementById('btns');
                                    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                                    for (var i = 0, btn; btn = btns[i++];) {
                                        UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                                    }
                                }

                                function getLocalData () {
                                    alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
                                }

                                function clearLocalData () {
                                    UE.getEditor('editor').execCommand( "clearlocaldata" );
                                    alert("已清空草稿箱")
                                }
                            </script>

                        </div>
                    </div>
                    <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.config.js"></script>
                    <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.all.min.js"> </script>
                    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                    <script type="text/javascript" charset="utf-8" src="/admins/ueditor/lang/zh-cn/zh-cn.js"></script>


                </div>
                <div class="mws-button-row">
                    <input type="submit" class="btn btn-danger" value="添加">
                    {{csrf_field()}}
                </div>

                <script>
                    $(function(){
                        $('#bigcheck').hide();
                    });

                    //  点击单选框触发onchang事件 对应着这个方法 然后将大类拿过来
                    function daChange(obj)
                    {
                        // 将一些类不需要的给隐藏了
                        if(obj == 1){
                            $('#description').show();
                            $('#price').hide();
                            $('#content').hide();
                            $('#banner').hide();
                            $('#bigcheck').show();
                            $('#img2').hide();
                            $('#difficulty').show();
                        }
                        if(obj == 2){
                            $('#description').hide();
                            $('#difficulty').hide();
                            $('#price').show();
                            $('#content').show();
                            $('#banner').show();
                            $('#bigcheck').hide();
                            $('#img2').show();
                        }
                        if(obj == 3){
                            $('#description').hide();
                            $('#bigcheck').show();
                            $('#difficulty').show();

                        }
                        //发送ajax 然后将遍历出来的数据插入到下拉框里面
                        $.get('/admin/cates',{'genera':obj},function(data){
                            var arr = '';
                            $.each(data, function(i,item){
                                arr += "<option value="+item.cid+">"+item.cname+"</option>";
                                $('#pcate').html(arr);

                           })
                        })

                        $.post('/admin/label/genera', {'_token':'{{ csrf_token() }}', 'genera':obj}, function(data) {
                                var arr = '';
                                $.each(data, function(i,item){
                                     arr += '<li><input type="checkbox" name="lid[]" value='+item.id+'> <label>'+item.title+'</label></li>';
                                     $('#checkd').html(arr);
                                 });
                        } );


                    }
                </script>
            </form>

        </div>
    </div>
@endsection

@section('js')




@endsection