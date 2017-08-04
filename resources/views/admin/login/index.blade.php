<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

    <title> 后台登录页 </title>

</head>

<body>

<div id="mws-login-wrapper">
    <div id="mws-login">
        <h1>Login</h1>
        <div class="mws-login-lock"><i class="icon-lock"></i></div>
        <div id="mws-login-form">
            <form class="mws-form" action="{{url('/admin/dologin')}}" method="post">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <input type="text" name="username" class="mws-login-username required" placeholder="@if(session('error1')) {{session('error1')}} @else username @endif">
                    </div>
                </div>
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <input type="password" name="password" class="mws-login-password required" placeholder="@if(session('error2')) {{session('error2')}} @else password @endif">

                    </div>
                </div>
                <div class="mws-form-row">
                    <div class="mws-form-item" style='width:150px;float:left'>
                        <input type="text" name="code" class="mws-login-code required" placeholder="@if(session('error3')) {{session('error3')}} @else code @endif" >
                    </div>
                    <div class="mws-form-item" style='float:left;margin-left:15px;margin-top:5px'>
                        <img src="{{ url('admin/code')}} " alt="">
                    </div>
                </div>


                <div class="mws-form-row">
                    <input type="submit" value="Login" class="btn btn-success mws-login-button">
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

<!-- JavaScript Plugins -->
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script src="/admins/js/libs/jquery.placeholder.min.js"></script>
<script src="/admins/custom-plugins/fileinput.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

<!-- Plugin Scripts -->
<script src="/admins/plugins/validate/jquery.validate-min.js"></script>

<!-- Login Script -->
<script src="/admins/js/core/login.js"></script>

</body>
</html>
