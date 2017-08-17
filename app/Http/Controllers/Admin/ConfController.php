<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Conf;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfController extends Controller
{
//    将数据库配置文件写入web.php文件中 网站配置信息可以从web.php直接调用
    public function putFile()
    {
        //获取要被写入的内容
        $con = Conf::lists('conf_content','conf_name')->all();
        //将数组转换成字符串写入
        $str = '<?php    return '.var_export($con,true).';';
        //将mk_conf表中的conf_name和conf_content字段记录写入confid\web.php
        file_put_contents(base_path().'/config/web.php',$str);
    }
//    content字段记录修改添加
    public function changeContent(Request $request)
    {
//        dd($request->all());
        $input = $request->except('_token');
//        dd($input);
        /*遍历修改*/
        foreach($input['id'] as $k=>$v){
            $conf = Conf::find($v);
            $conf->update(['conf_content'=>$input['conf_content'][$k]]);

        }
        $this->putFile();
        //修改成功跳转
        return redirect('admin/conf');

    }
    /**
     * 网站配置列表页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示列表页
       $res = conf::get();
       //显示内容字段记录
        foreach($res as $k=>$v){
            switch($v->field_type){
                case 'input':
//                    <input type="text" name="conf_name" value=''>

                    $res[$k]['_content'] = ' <input style="width:400px" type="text" name="conf_content[]" value="'.$v->conf_content.'">';
                    break;
                case 'textarea':
//                    <textarea class="lg"  name="conf_tips"></textarea>
                    $res[$k]['_content'] = '  <textarea style="width:400px"  name="conf_content[]">'.$v->conf_content.'</textarea>';
                    break;
                case 'radio':

//                    1|开启,0|关闭
//                    ====>
//                    <input type="radio"  name="conf_content" value="1">开启
//                    <input type="radio"  name="conf_content" value="0">关闭
                    $arr = explode(',',$res[$k]->field_value);
//                    dd($arr);
//                    $arr = [
//                        0=>'1|开启',
//                        1=>'0|关闭',
//                    ]
                    $str ='';
                    foreach($arr as $m=>$n){
                        $r = explode('|',$n);
                        $c =   ($res[$k]->conf_content == $r[0]) ? 'checked' : '';
                        $str.= ' <input type="radio"  name="conf_content[]"'.$c.' value="'.$r[0].'">'.$r[1];
                    }
////                    $r =[
////                        0=>1,
////                        1=>开启
////                    ]
                    $res[$k]['_content'] = $str;
                    break;
            }
        }
        return view('admin.conf.index',compact('res'));

    }

    /**
     * 网站配置添加表单页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //网站配置添加页面
        return view('admin.conf.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加处理
        $input = $request->except('_token');
//        dd($res);
        $res = Conf::create($input);
        if($res){
            $this->putFile();
            return redirect('admin/conf');
        }else{
            return back()->with('msg','添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改表单页面
        $res = Conf::find($id);
//        dd($res);
        return view('admin.conf.edit',compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //网站配置记录修改
        $input = $request->except('_token','_method');
//        dd($input);
        $conf = Conf::find($id);

        $res = $conf->update($input);
        if($res){
            $this->putFile();
            return redirect('admin/conf');
        } else {
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除配置记录
        $res = Conf::where('id',$id)->delete();
        if($res){
            $this->putFile();
            $data = ['status'=>0, 'msg'=>'删除成功',];
        } else {
            $data = ['status'=>1, 'msg'=>'删除失败',];
        }
        return $data;
    }
}
