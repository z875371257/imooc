@extends('layout.list')

@section('title', '课程详情页')

@section('content')

    <link rel="stylesheet" href="/homes/css/47a1f63a7331428d82024a08b9b57fcb.css" type="text/css" />
<div id="main">

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="/course/list">课程</a>
                        <i class="path-split">\</i>{{$res->title}}
        </div>
        <div class="hd clearfix">
            <h2 class="l">{{$res->title}}</h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="/video/15295" class="J-learn-course">开始学习</a>

                <i class="follow-action js-follow-action"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num">{{$res->NNT}}</span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">{{difficulty($res->difficulty)}}</span>
                <em></em>
            </div>



                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="/coursescore/859" class="person-num">
                            <span class="person-num l">12人评价</span>
                        </a>
                                                    <a href="/coursescore/859?page=1" class="evaluation-btn r">查看评价</a>
                                                <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">10.0</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>

    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="/{{$res->pic}}" alt="" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    </div>
    
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">{{$res->description}}</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active active" id="learnOn"  href="/learn/859"><span>章节</span></a></li>
		<li><a id="commentOn" class="" href="/comment/859"><span>评论</span></a></li>
		<li><a id="qaOn" class="" href="/qa/859/t/1?page=1"><span>问答</span></a></li>
		<li><a id="noteOn" class="" href="/note/859?sort=last&page=1"><span>笔记</span></a></li>
	    <!--
        <li><a id="wikiOn" class="" href="/wiki/859">WIKI</a></li>
        -->
	</ul>
	
</div>
            <!-- 课程面板 -->
            <!-- 课程章节 -->
            <div class="mod-chapters">
                @foreach($section as $k=>$v)
                <div class="chapter">
                    <!-- 章节标题 -->
                    <h3>
                        <span class="js-close"><img src="/homes/images/down.png" alt=""></span>
                        <strong>
                            <img src="/homes/images/lists.png" alt="">  &nbsp;
                            {{$v->title}}
                            <div class="chapter-info">
                                <img class="his" width="12px" height="12px" src="/homes/images/gantanhao.png" alt="">
                                <i class="triangle">

                                    <div class="chapter-introubox">
                                        <div class="chapter-content" r>{{$v->description}}</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                    <ul class="video">
                        <li data-media-id="15295">
                            <a href='/video/15295' class="J-media-item">
                                <i class="type"><img width="14px" src="/homes/images/player.png" alt=""></i>
                                    1-1 课程介绍 
                                (03:12)
                                <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                            </a>
                        </li>
                        <li data-media-id="15294">
                            <a href='/video/15294' class="J-media-item">
                                    <i class="type"><img width="14px" src="/homes/images/player.png" alt=""></i>
                                    1-2 案例展示 
                                (03:23)
                                                                        
                                <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                            </a>
                        </li>
                    </ul>
                    <!-- 章节小节 end -->
                </div>
                @endforeach
            </div>
            <script>

                $('.chapter-info, .his').each(function(){

                    $(this).mouseover(function(){
                        $(this).find('.triangle').css('display', 'block');
                    }).mouseout(function(){
                        $(this).find('.triangle').css('display', 'none');
                    })

                })

                $('.chapter').each(function(){
                    $(this).click(function(){
                        var arrs = $(this).find('.video').css('display');
                        if(arrs == 'none'){
                            $(this).find('.video').css('display','block');
                        }else {
                            $(this).find('.video').css('display','none');
                        }
                    })
                })
            </script>
            <!-- 课程章节 end -->
        </div><!--content end-->

        <div class="aside r">
            <div class="bd">
    
        
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="/u/1170998/courses?sort=publish" target="_blank" >
                <img data-userid="1170998" class="js-usercard-dialog" src="picture/55a529c90001205902200220-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="/u/1170998/courses?sort=publish" target="_blank">channingbree...</a><i class="icon-imooc"></i>
            </span>
            <span class="job">Web前端工程师</span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">学习本课程之前，您需要掌握HTML、CSS、JavaScript，jQuery以及ajax和jSon等知识，并且能够熟练运用。</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">通过使用模板Handlebars.js来实现页面的渲染，比起以前使用ajax和json来渲染页面要快很多，性能也提高了许多。</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box">
</div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

</div>

@endsection