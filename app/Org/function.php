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
    // 难度
    function difficulty($id)
    {
        if($id == 1){
            echo '初级';
        } else if($id == 2){
            echo '中级';
        } else if($id == 3){
            echo '高级';
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

    function cates($pid)
    {
#        $cates = DB::Table('course_cate')->get();
#        $cateArr = DB::Table('course_cate')->lists('cname', 'cid');
#
#        $newArr = [];
#        foreach ($cates as $k => $v) {
#            if (substr_count($v->path, ',') == 3 && $v->genera == 1) {
#                $tmp = explode(',', $v->path);
#                $newArr[$k]['cid'] = $v->cid;
#                $newArr[$k]['cname'] = $cateArr[$tmp[1]] . ' ---> ' . $cateArr[$tmp[2]] . ' ---> ' . $v->cname;
#            }
#        }
        $cates = DB::Table('course_cate')
        ->where('cid', $pid)->first();

        if($cates->pid != 0){
            $cateArr = DB::Table('course_cate')->lists('cname', 'cid');
            $newArr = [];
            foreach ($cates as $k => $v) {
                 if (substr_count($v->path, ',') == 3 && $v->genera == 1) {
                    $tmp = explode(',', $v->path);
                    $newArr[$k]['cid'] = $v->cid;
                     $newArr[$k]['cname'] = $cateArr[$tmp[1]] . ' ---> ' . $cateArr[$tmp[2]] . ' ---> ' . $v->cname;
                 }
            }

        }
        return $newArr;


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


//    权限
if ( ! function_exists('getAuth')) {

    function getAuth($auth) {

        if ( $auth == '1' ) {
            return '普通管理员';
        } elseif ( $auth == '2') {
            return '一般管理员';
        } else {
            return '超级管理员';
        }

    }

}

//防止和系统函数重命名  注册composer.json  执行composer dump-autoload 加载  目的列表页显示的时候为汉字
if ( ! function_exists('getStatus') ) {

    function getStatus($status){
        if ($status == '1') {
            return '启用';
        }  else {
            return '禁用';
        }

    }


}

if ( ! function_exists('getSex') ) {

    function getSex($sex){
        if ($sex == '0') {
            return '保密';
        }  else if ($sex == '1') {
            return '男';
        }   else {
            return '女';
        }

    }
}


if ( ! function_exists('getPos') ) {

    function getPos($positions){
        if ($positions == '1') {
            return 'Web前端工程师';
        }  else if ($positions == '2') {
            return 'PHP工程师';
        }   else if ($positions == '3'){
            return 'Java工程师';
        }   else if ($positions == '4'){
            return 'Android工程师';
        }  else {
            return 'iOS工程师';
        }

    }
}
