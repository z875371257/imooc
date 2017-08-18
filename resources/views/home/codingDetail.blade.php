@extends('layout.list')
@section('title', '实战详情')

		@section('content')
			<link rel="stylesheet" href="/homes/css/67dfda356a8546e3ac009aec672217c2.css" type="text/css" />
<div class="course-class-infos ">
    <div class="w pr">
		<div class="path">
			<a href="/">实战</a>
			<i class="path-split">\</i><span>{{$res->title}}</span>
		</div>

		<div class='info-warp tc'>
			
			<div class='hide'>
				<h1 class="l">从零开发安卓节目点播直播App</h1>
			</div>
			
			
			<div class='info-bar tc'>
				<div class="statics clearfix">
					<div class="static-item first">
						<span class="meta">难度</span>
						<span class="meta-value"><strong>{{difficulty($res->difficulty)}}</strong></span>
					</div>
					<div class="static-item static-time">
						<span class="meta">时长</span>
						<span class="meta-value"><strong>18小时20分钟</strong></span>
						<em></em>
					</div>
					<div class="static-item">
						<span class="meta">学习人数</span>
						<span class="meta-value"><strong>{{$res->NNT}}</strong></span>
						<em></em>
					</div>

				</div>
			</div>
			
			<div class="price-box">
				<span class="num clearfix">
										
										<span class="discount-price">
						<span class="baseline baseline-y">
						<span class="new-y">&yen;</span>
						<span class="cur-price"><b>{{$res->price}}</b><b class="sub">0</b></span>
						</span>
					</span>
										
				</span>

				
															</div>

			<div class="clearfix btnwarp">
														<a href="/addCart/{{$res->id}}" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="126" data-pay="0" id="buy-trigger">
						<span>立即购买</span>
					</a>
					
					<a href='javascript:;' class='js-addcart addcart' data-cid='126' data-type='1'>
						<i class='sz-add-shopping-cart'></i>
					</a>
					
													<div class="preview-tip"> 			
								</div>
			</div>

			<!-- 调价说明 -->
						

		</div>
	</div>
			
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap" style="background-image:url(/{{$res->bigpic}})"></div>
    </div>
</div>

<div class='course-infos-t'>
<div id='Anchor'></div>
<div class="comp-tab-t js-comp-tab">
	<ul class='clearfix'>
		<li class="comp-tab-item-first comp-tab-item active">
			<a href="#">课程介绍</a>
		</li>

		<li class="comp-tab-item ">
			<a href="/coding/chapter?c={{$res->id}}">课程章节</a>
		</li>

		<li class="comp-tab-item ">
			<a href="/class/evaluation/126.html#Anchor">用户评价</a>
			<span>44</span>
				
	</ul>
</div>

<div class='js-fixed course-fixed-nav hide'>
	<h3 class='fixed-course-name' title='{{$res->title}}'>{{$res->title}}</h3>
	
	<ul class='fixed-nav clearfix'>
		<li class="fixed-nav-item-first fixed-nav-item ml0 active">
			<a href="#">课程介绍</a>
		</li>
				<li class="fixed-nav-item ">
			<a href="/class/chapter/126.html#Anchor">课程章节</a>
		</li>

		<li class="fixed-nav-item ">
			<a href="/class/evaluation/126.html#Anchor">用户评价</a>
			<span>4</span>
		</li>

	</ul>


</div>

<div class="infolayout clearfix">


		<div class="appendtemplate">
		<div class="introduce-content">
	<div class="section1">
		<div class="wrap-box">

			{!! html_entity_decode($res->content) !!}
		</div>
	</div>


		</div>
		</div>
</div>

</div>

@endsection