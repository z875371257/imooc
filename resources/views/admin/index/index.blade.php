@extends('layout.admin')
@section('title', '慕课首页')
@section('content')

    <div class="" style="margin-top: 20px">
        <div class="welinfo">
            <span><img src="/admins/images/hello.png" alt="天气"></span>
            <b><i><u>{{ username() }}</u></i></b>，欢迎登录后台管理系统

        </div>

    </div>
    <div class="result_wrap" >
        <div class="result_title" >
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span>{{ php_uname('s')  }}</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{php_sapi_name()}}</span>
                </li>
                <li>
                    <label>PHP运行版本</label><span> {{PHP_VERSION}}</span>
                </li>


                <li>
                    <label>上传附件限制</label><span>{{get_cfg_var ("upload_max_filesize")}}</span>
                </li>
                <li>
                    <label>请求时间</label><span>{{date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME'])}}</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}}</span>
                </li>
                <li>
                    <label>IP</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>官方交流网站：</label><span><a href="http://bbs.itxdl.cn">http://bbs.itxdl.cn</a></span>
                </li>
                <li>
                    <label>官方交流QQ群：</label><span><a href="https://jq.qq.com/?_wv=1027&k=4FLskkW"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>




@endsection