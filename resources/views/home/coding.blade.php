@extends('layout.list')
@section('title', '实战课程_开发项目实战_编程项目实战-慕课网')
@section('content')

<div class="top-wrap-box">
	<!-- 顶部广告banner -->
		<div class="banner-bg-box clearfix">
		<a class="banner-item l" href="/course/coding" data-track="szbanner-1-1" target="_blank" style="background-image: url(/homes/images/598929ae0001b77705900120.jpg)" title=8月份充电期>
		</a>
		<a class="banner-item l" href="/course/coding" data-track="szbanner-1-2" target="_blank" style="background-image: url(/homes/images/59896da70001e06005900120.jpg)" title="一线互联网企业职场必杀技专辑">
		</a>
	</div>
		<!-- 顶部广告banner end -->
</div>


<!--课程列表-->
<div class="w index-main">
		<!-- 类别 -->
	<div class="cato-wrap-box clearfix">
				<div class="cato-nav-box l">
			<p class="smalle-title">按方向:</p>
	        <div class="cato-nav-row">
	            <ul class="">
	                <li class="cato-nav-item @if(!$f && !$c) on @endif">
	                    <a href="/course/coding" id="cato">全部</a>
	                </li>
					@foreach($res as $k=>$v)
					<li class="cato-nav-item @if($f == $v->cid) on @endif">
	                    <a href="/course/coding?f={{$v->cid}}" data-ct="fe">{{$v->cname}}</a>
	                </li>
					@endforeach
				</ul>
	        </div>
	    </div>
		<div class="skill-nav-box l">
	    	<p class="smalle-title">热门分类:</p>
	        <div class="cato-nav-row">
	            <ul class="">
					@foreach($label as $k=>$v)
					<li class="cato-nav-item @if($c == $v->titles) on @endif">
	                    <a href="/course/coding?c={{$v->titles}}" data-ct="html">{{$v->titles}}</a>
	                </li>
					@endforeach
				</ul>
	        </div>
	    </div>
	    	</div>
	<!-- 类别 end -->

	<div class="screening-box clearfix">
		<div class="screening-time l">
						<span><a href="/" class="on">默认排序</a></span>
			<span><a href="" >最新</a></span>
			<span><a href="" >销量</a></span>
			<span><a href="" >评价数</a></span>
					</div>
		<!-- 判断登录 && 并且购买过实战课程 -->
			</div>


	<div class="index-list-wrap">
		<div class="shizhan-course-list clearfix">
				@foreach($coding as $k=>$v)
				<div class="shizhan-course-wrap l">
					<a href="/coding/detail?c={{$v->id}}">
	                    <div class="shizhan-course-box">
	                    	<!-- 学习进度 -->
							<div class="box">
				            	<div class="img-box">
					            	<img  class="shizhan-course-img" alt="{{$v->title}}" src="/{{$v->pic}}">
					            </div>
		                        <div class="shizhan-intro-box">
		                            <p class="shizan-name" title="{{$v->title}}">{{$v->title}}</p>
		                            <p class="shizan-desc" title="{{$v->referral}}">{{$v->referral}}</p>
									<div class="shizhan-info-bottom">
										<div class="bottom-box clearfix">
											<div class="evaluation-box l">
												<div class="shizhan-info">
													<span>{{difficulty($v->difficulty)}}</span>
													<i>·</i>
													<span>{{$v->NNT}}人学习</span>
												</div>
												<div class="stars">
													<img width="12px" height="12px" src="/homes/images/start.png" alt="">
													<img width="12px" height="12px" src="/homes/images/start.png" alt="">
													<img width="12px" height="12px" src="/homes/images/start.png" alt="">
													<img width="12px" height="12px" src="/homes/images/start.png" alt="">
													<img width="12px" height="12px" src="/homes/images/start.png" alt="">
												</div>

												<div class="evaluation-desc-box clearfix">
													<i class="trangle"></i>
													<div class="left-box l">
														<p>综合评分</p>
														<p class="big-text">10.00</p>
														<p>0人评价</p>
													</div>
													<div class="right-box l">
														<p>内容实用<span>10.0</span></p>
														<p>通俗易懂<span>10.0</span></p>
														<p>逻辑清晰<span>10.0</span></p>
													</div>
												</div>
											</div>
											<div class="r">
												<!-- 有促销价 -->
												<!-- 没有促销价 -->
												<p class="shizhan-price"></p>
												<p class="shizhan-course-price">￥{{$v->price}}0</p>
											</div>
										</div>
									</div>

		                        </div>
				            </div>


	                    </div>
					</a>
				</div>
				@endforeach
		</div>
		<div class="page">

		</div>
 			</div>
</div>
<!-- 课程列表end -->
@endsection