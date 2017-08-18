<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index()
    {
        // 左部遍历
        $res = DB::select("select cid,cname from mk_course_cate where pid=0 and genera=1");
        // 前端开发

        // 前端类别
        $qd = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 1");
        // 职业路径
        $qdkc = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =2 and cname = 'Web前端攻城狮' limit 0,2");
        // 实战
        $qdsz = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =3 and cname = '前端开发' limit 0,2 ");
        // 课程推荐
        $qdtj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,1,.' limit 0,2");

        // 后端开发
        // 后端类别
        $hd = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 2");
        // 后端路径1
        $hdkc1 = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =2 and cname = 'PHP攻城狮' limit 0,1");
        // 后端课程2
        $hdkc2 = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =2 and cname = 'Java攻城狮' limit 0,1");
        // 后端实战
        $hdsz = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =3 and cname = '后端开发' limit 0,2 ");
        // 课程推荐
        $hdtj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,2,.' limit 0,2");

        // 移动开发
        // 移动类别
        $yd = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 3");
        // 移动路径1
        $ydkc1 = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =2 and cname = 'Android攻城狮' limit 0,1");
        // 移动课程2
        $ydkc2 = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =2 and cname = 'IOS攻城狮' limit 0,1");
        // 移动实战
        $ydsz = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas =3 and cname = '移动开发' limit 0,2 ");
        // 课程推荐
        $ydtj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,3,.' limit 0,2");

        // 数据库
        // 数据库类别
        $sjk = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 4");
        // 数据库实战
        $sjksz = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 3 and cname = '数据库' limit 0,2 ");
        // 数据库课程推荐
        $sjktj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,4,.' limit 0,3");

        // 云计算&大数据
        // 云计算&大数据类别
        $yjs = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 5");
        // 云计算&大数据实战
        $yjssz = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 3 and cname = '云计算&大数据' limit 0,2 ");
        // 云计算&大数据课程推荐
        $yjstj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,5,.' limit 0,3");

        // 运维&测试
        // 运维&测试类别
        $yw = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 6");
        // 运维&测试实战
        $ywsz = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 3 and cname = '运维&测试' limit 0,2 ");
        // 运维&测试推荐
        $ywtj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,6,.' limit 0,3");

         // UI设计
        // UI设计类别
        $yj = DB::select("select cid,cname,pid from mk_course_cate where genera = 1 and pid = 7");
        // UI设计实战
        $yjsz = DB::select("select id,title from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 3 and cname = 'UI设计' limit 0,2 ");
        // UI设计推荐
        $yjtj = DB::select("select * from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and generas = 1 and hot = 1 and path REGEXP '0,7,.' limit 0,3");

        // 前台Banner图   实战课程 banner = 1
        $banner = DB::select("select id,bigpic from `mk_course_cate` inner join `mk_course` on `mk_course_cate`.`cid` = `mk_course`.`pid` and banner = 1 and genera = 3 limit 0,7");

        // 实战推荐    最热hot
        $sztj = DB::select("select c.id,c.title,c.referral,l.titles,c.NNT,c.price,c.pic from  mk_label_course lc inner join mk_course c on lc.cid = c.id inner join mk_label l on lc.lid = l.id inner join mk_course_cate cc on c.pid = cc.cid where generas = 3 and hot = 1");

        // 免费好课  最新 banner推荐
        $mfhk = DB::select("select c.id,c.title,c.referral,l.titles,c.NNT,c.pic,c.difficulty from  mk_label_course lc inner join mk_course c on lc.cid = c.id inner join mk_label l on lc.lid = l.id inner join mk_course_cate cc on c.pid = cc.cid where generas = 1 and banner = 1 and new = 1");

        // 前端攻城狮   最新 最热 banner推荐   前端第一个推荐   取正数第一条数据
        $qd1 = DB::select("select * from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and hot = 1 and new = 1 and banner = 1 and c.pid = 28 limit 0,1");

        // 前端第二个推荐  只显示标题的推荐 取前面两条数据  取最新
        $qd2 = DB::select("select id,title from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and c.pid = 28 limit 1,4");

        // 前端第三推荐  取最新最热
        $qd3 = DB::select("select id,title,referral,difficulty,NNT,pic from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and hot = 1 and c.pid = 28 limit 4,8");

         // PHP攻城狮   最新 最热 banner推荐   前端第一个推荐   取正数第一条数据
        $php1 = DB::select("select * from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and hot = 1 and new = 1 and banner = 1 and c.pid = 29 limit 0,1");

        // PHP第二个推荐  只显示标题的推荐 取前面两条数据  取最新
        $php2 = DB::select("select id,title from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and c.pid = 29 limit 1,4");

        // PHP第三推荐  取最新最热
        $php3 = DB::select("select id,title,referral,difficulty,NNT,pic from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and hot = 1 and c.pid = 29 limit 4,8");

        // Android攻城狮   最新 最热 banner推荐   前端第一个推荐   取正数第一条数据
        $android1 = DB::select("select * from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and hot = 1 and new = 1 and banner = 1 and c.pid = 43 limit 0,1");

        // Android第二个推荐  只显示标题的推荐 取前面两条数据  取最新
        $android2 = DB::select("select id,title from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and c.pid = 43 limit 1,4");

        // Android第三推荐  取最新最热
        $android3 = DB::select("select id,title,referral,difficulty,NNT,pic from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and hot = 1 and c.pid = 43 limit 4,8");

        // IOS攻城狮   最新 最热 banner推荐   前端第一个推荐   取正数第一条数据
        $ios1 = DB::select("select * from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and hot = 1 and new = 1 and banner = 1 and c.pid = 44 limit 0,1");

        // IOS第二个推荐  只显示标题的推荐 取前面两条数据  取最新
        $ios2 = DB::select("select id,title from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and c.pid = 44 limit 1,4");

        // IOS第三推荐  取最新最热
        $ios3 = DB::select("select id,title,referral,difficulty,NNT,pic from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and hot = 1 and c.pid = 44 limit 4,8");

        // Java攻城狮   最新 最热 banner推荐   前端第一个推荐   取正数第一条数据
        $java1 = DB::select("select * from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and hot = 1 and new = 1 and banner = 1 and c.pid = 42 limit 0,1");

        // Java攻城狮第二推荐  取最新最热
        $java3 = DB::select("select id,title,referral,difficulty,NNT,pic from  mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 2 and new = 1 and hot = 1 and c.pid = 42 limit 1,5");


        // 底部
        $buttom = DB::select('select * from mk_buttom');

        return view('home.index',compact('java1','java2','java3','ios1','ios2','ios3','android1','android2','android3','php1','php2','php3','qd1','qd2','qd3','sztj','mfhk','res','buttom','qd','qdkc','qdsz','qdtj','hd','hdkc1','hdkc2','hdsz','hdtj','yd','ydkc1','ydkc2','ydsz','ydtj','sjk','sjksz','sjktj','yjs','yjssz','yjstj','yw','ywsz','ywtj','yj','yjsz','yjtj','banner'));
    }

}