<?php
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

    function username()
    {
        $res = session('user');
        return $res->username;
    }
    function uface()
    {
        $res = session('user');
        if(!$res->uface)
        {
            $imgs = '/admins/example/cyan_hawk.jpg';
        }else {
            $imgs = $res->uface;

        }
        return $imgs;

    }