<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Plugin Stylesheets first to ease overrides -->
    <link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/layer.css" media="screen">


    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
    <link rel="stylesheet" href="/admins/css/style.css">

    {{--后台首页--}}
    <link rel="stylesheet" href="/admins/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/admins/css/fonts/font-awesome.css">


    <script src="/admins/layer/layer.js"></script>


    <title>@yield('title')</title>

</head>

<body>
<!-- Header -->
<div id="mws-header" class="clearfix">

    <!-- Logo Container -->
    <div id="mws-logo-container" >

        <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap" style="padding-top:2px">
            <span style='font-size:20px;color:white'>   慕课网后台管理 </span>

        </div>
    </div>

    <!-- User Tools (notifications, logout, profile, change password) -->
    <div id="mws-user-tools" class="clearfix">



        <!-- Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="{{url('/admin/suggest')}}" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
            <!-- Unred messages count -->
            <span class="mws-dropdown-notif">{{ suggest() }}</span>
        </div>

        <!-- User Information and functions section -->
        <div id="mws-user-info" class="mws-inset">

            <!-- User Photo -->
            <div id="mws-user-photo">
                <img src="{{ uface() }}" alt="User Photo">
            </div>

            <!-- Username and Functions -->
            <div id="mws-user-functions">
                <div id="mws-username">

                    Hello, {{ username() }}

                </div>
                <ul>
                    <li><a href="/admin/index/edit">修改密码</a></li>
                    <li><a href="/admin/logout">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Start Main Wrapper -->
<div id="mws-wrapper">

    <!-- Necessary markup, do not remove -->
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>

    <!-- Sidebar Wrapper -->
    <div id="mws-sidebar">

        <!-- Hidden Nav Collapse Button -->
        <div id="mws-nav-collapse">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Searchbox -->
        <div id="mws-searchbox" class="mws-inset">
            <form action="typography.html">
                <input type="text" class="mws-search-input" placeholder="Search...">
                <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
            </form>
        </div>

        <!-- Main Navigation -->
        <div id="mws-navigation">
            <ul>
                <li>
                    <a href="#"><i class="icon-user"></i>用户管理</a>
                    <ul class='closed'>
                        <li><a href="{{url('/admin/user/create')}}">用户添加</a></li>
                        <li><a href="{{url('/admin/user/')}}">用户列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>分类管理</a>
                    <ul class='closed'>
                        <li><a href="/admin/cate/create">添加分类</a></li>
                        <li><a href="/admin/cate">分类列表</a></li>
                        <li><a href="/admin/label/create">分类标签添加</a></li>
                        <li><a href="/admin/label">分类标签列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>课程管理</a>
                    <ul class='closed'>
                        <li><a href="/admin/course/create">课程添加</a></li>
                        <li><a href="/admin/course">课程列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>课程章节管理</a>
                    <ul class='closed'>
                        <li><a href="/admin/section/create">课程章节添加</a></li>
                        <li><a href="/admin/section">课程章节列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>章节视频管理</a>
                    <ul class='closed'>
                        <li><a href="/admin/vedeo/create">章节视频添加</a></li>
                        <li><a href="/admin/vedeo">章节视频列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>订单管理</a>
                    <ul class='closed'>
                        <li><a href="{{url('admin/order')}}">订单列表</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-user"></i>底部管理</a>
                    <ul class='closed'>
                        <li><a href="/admin/buttom/create">内容添加</a></li>
                        <li><a href="/admin/buttom">内容列表</a></li>
                        <li><a href="/admin/link/create">友情链接添加</a></li>
                        <li><a href="/admin/link">友情链接列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-user"></i>网站配置</a>
                    <ul class='closed'>
                        <li><a href="/admin/conf/create">内容添加</a></li>
                        <li><a href="/admin/conf">内容列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-user"></i>意见反馈</a>
                    <ul class='closed'>

                        <li><a href="/admin/suggest">意见反馈列表</a></li>
                    </ul>
                </li>




            </ul>
        </div>
    </div>

    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">

        <!-- Inner Container Start -->
        <div class="container">
            @section('content')


            @show
        </div>
        <!-- Inner Container End -->

        <!-- Footer -->
        <div id="mws-footer">
            {{config('web.copyright')}}
        </div>

    </div>
    <!-- Main Container End -->

</div>

<!-- JavaScript Plugins -->
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script src="/admins/js/libs/layer.js"></script>

<script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
<script src="/admins/js/libs/jquery.placeholder.min.js"></script>
<script src="/admins/custom-plugins/fileinput.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
<script src="/admins/jui/jquery-ui.custom.min.js"></script>
<script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

<!-- Plugin Scripts -->
<script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
<!--[if lt IE 9]>
<script src="js/libs/excanvas.min.js"></script>
<![endif]-->
<script src="/admins/plugins/flot/jquery.flot.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
<script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
<script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
<script src="/admins/plugins/validate/jquery.validate-min.js"></script>
<script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

<!-- Core Script -->
<script src="/admins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admins/js/core/mws.js"></script>

<!-- Themer Script (Remove if not needed) -->
<script src="/admins/js/core/themer.js"></script>

<!-- Demo Scripts (remove if not needed) -->
<script src="/admins/js/demo/demo.dashboard.js"></script>


</body>
</html>
