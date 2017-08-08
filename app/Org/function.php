<?php
    //  大类
    function genera($id)
    {
        if($id == 1){
            echo '课程';
        } else if($id == 2){
            echo '职业路径';
        } else if($id == 3){
            echo '实战';
        }
    }
    // 父类名
    function getCateValue($pid)
    {
        if ($pid == '0'){
            return '顶级分类';
        } else {
            $res = DB::table('course_cate')->where('cid', $pid)->first();
            return $res->cname;
        }
    }


    // 状态
    function status($id)
    {
        if($id == 1)
        {
            echo '开启';
        }else{
            echo '关闭';
        }
    }


    // 登录时的用户名
    function username()
    {
        $res = session('user');
        return $res->username;
    }
    // 头像
    function uface()
    {
        $res = session('user');
        if (!$res->uface) {
            $imgs = '/admins/example/cyan_hawk.jpg';
        } else {
            $imgs = $res->uface;

        }
        return $imgs;
    }