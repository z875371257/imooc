<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //课程管理列表页

        $courses = DB::table('course_cate')
                      ->join('course', 'course_cate.cid', '=', 'course.pid')
                      ->where('title','like','%'.$request->input('fx').'%')
                      ->paginate(10);

        return view('admin.course.index',compact('courses','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $arr = [
            '1' => '课程',
            '2' => '职业路径',
            '3' => '实战'
        ];

        $data = DB::table('course_cate')->distinct()->lists('genera');
        return view('admin.course.create',compact('arr','data'));

    }

    public function cates(Request $request)
    {

        if($request->input('genera') == '1') {
            $cates = DB::Table('course_cate')->get();
            $cateArr = DB::Table('course_cate')->lists('cname', 'cid');

            $newArr = [];
            foreach ($cates as $k => $v) {
                if (substr_count($v->path, ',') == 3 && $v->genera == 1) {
                    $tmp = explode(',', $v->path);
                    $newArr[$k]['cid'] = $v->cid;
                    $newArr[$k]['cname'] = $cateArr[$tmp[1]] . ' ---> ' . $cateArr[$tmp[2]] . ' ---> ' . $v->cname;
                }
            }
            return response()->json($newArr);

        } else if($request->input('genera') == '2'){
            $cates = DB::Table('course_cate')->where('genera', 2)->get();
            if($cates){
                return response()->json($cates);
            }else{
                return 1;
            }
        } else{
            $cates = DB::Table('course_cate')->where('genera', 3)->get();
            if($cates){
                return response()->json($cates);
            }else{}

        }

            // 查找属于三级分类的数据
        /*
            $res = DB::select('SELECT * from mk_course_cate where path REGEXP  "0,.,." and genera = 1');

            foreach ($res as $k => $v){
                echo $v->cid.'#';
                //  拿到二级分类 通过pid 获取 他的父类 取他们的名字进行拼接
                $arr = DB::table('course_cate')->where('cid', $v->pid)->get();
                foreach ($arr as $kk => $vv){
                    // 拿到一级分类  取他们的名字进行拼接
                    $arrs = DB::table('course_cate')->where('cid', $vv->pid)->get();
                    foreach ($arrs as $kkk => $vvv){
                       // 将他们的名字拼接成我模板中想要的然后返回回去
                        $data = $vvv->cname.'-->'.$vv->cname.'-->'.$v->cname.'@';
                        echo $data;
                    }

                }
            }
       */

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data =  $request->except('lid','genera','_token','picc', 'editorValue','bigpicc');
        $data['generas'] = $request->input('genera');
        if($request->input('genera') != 1){
        $data['content'] = $request->input('editorValue');
        }

        $id = DB::table('course')->insertGetId($data);

        if($id){
            // 插入 label_course 表
            if($request->input('lid')){
                $input = $request->only('genera','lid');
                foreach ($input['lid'] as $k=>$v){
                    $res = DB::table('label_course')->insert([
                        ['genera' => $input['genera'], 'lid' => $v, 'cid' => $id],
                    ]);
                }
            }
        }
        if($id){
            return redirect('admin/course/create')->with('success','添加成功');
        }else{
            return back()->with('errors','添加失败');
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
        //修改页面

        $edit = DB::table('course')->where('id', $id)->first();
        return view('admin.course.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
//        dd($request->all());
        $input = $request->except('_token','_method');
//        dd($input);
//        修改
        $res =  Buttom::find($id)->update($input);
//        dd($input);

        if($res){
            return redirect('admin/buttom');
        }else{
            return back()->with('msg','修改失败');
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
       $row = DB::table('course')->where('id', $id)->delete();

       if($row){
           $data = [
               'status'=>0,
               'msg'=>'删除成功'
           ];
       }else{
           $data = [
               'status'=>1,
               'msg'=>'删除失败'
           ];
       }
       return $data;
    }

    //文件上传  小图
    public function fileUpload(Request $request)
    {

        $file = Input::file('picc');

//        return $file;

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            //保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
//            将文件从临时目录移动到制定目录
            $path = $file->move(public_path().'/uploads',$newName);

            $filepath = 'uploads/'.$newName;

            return $filepath;
        }
    }

    //文件上传   大图
    public function fileUploads(Request $request)
    {

        $file = Input::file('bigpicc');

//        return $file;

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            //保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
//            将文件从临时目录移动到制定目录
            $path = $file->move(public_path().'/uploads',$newName);

            $filepath = 'uploads/'.$newName;

            return $filepath;
        }
    }

}