@extends('layout.list')
@section('title', '职业路径详情')
@section('content')

<div class='body-main'>

<div class="banner" style="background-image: url(/{{$res->bigpic}});">
    <div class="container">
		<!-- 面包屑 & 分享 -->
		<div class='path'>
			<a href='http://class.imooc.com' target="_blank">职业路径</a> \ 
									<a href='/?c=android' target="_blank">
						{{$res->title}}</a>
					</div>
		

		<!-- 面包屑 & 分享 end -->
	
        <h2 class='cat_name'>{{$res->title}}</h2>
		<p class='name'>{{$res->title}}</p>
		
		<!-- 导学视频 -->

				<!-- 导学视频 end -->
		
		<div class='sc-info clearfix'>

			<dl class='info-wrap'>
				<dt>学习人数</dt>
				<dd>{{$res->NNT}}</dd>
			</dl>
			
			<div class='sc-info-line'></div>
			

                @if(!empty(session()->get('user')->username))
				<a href="/addCart/{{$res->id}}" class="js-buy-trigger buy-trigger">立即购买</a>
				@else
				 <nav class="main_nav">
                    <li class="header-signin">
                       <a href="#0" class="cd-signin js-buy-trigger buy-trigger" id="js-signin-btn">立即购买</a>
                    </li>
                </nav>
				@endif	

			<!-- discount_type 是否为常显 -->
            	            <!-- 调价 or 学生优惠 -->
	            		            					<!-- 调价 -->
					<div class="price-box">
						<div class="adjust-price-box clearfix" style="margin-top:15px">
							<span class="discount r">￥{{$res->price}}0</span>
						</div>

					</div>
		            	            	        
		</div>
	</div>
</div>


<!-- 主体 -->
<div id='scmain' class='scmain'>
		<!-- 固定nav -->
	<div id='pageNav' class='page-nav'>
				<a class='active' href='/sc/6'>详情介绍</a>
			    {{--<a href='/sc/6/publicevaluation' >同学评价<span>160</span></a>--}}
		{{--<a href='/sc/consult/6' target="_blank">路径咨询<span>21</span></a>--}}
	</div>
	<!-- 固定nav end -->


<!-- 职业前景 & 成果展示 -->

<div class="appendtemplate">
	<div class="career-prospects" id="careerProspects">

		{!! html_entity_decode($res->content) !!}
	</div>

</div>


<!-- 用户评价 -->
<div class="user-evaluation-box" id="Comment" >
<!-- 用户评价 -->
<div class="user-evalustion">
	<h2>万事俱备 只等你来</h2>
	<ul class="clearfix">
				<li class="l">
			<div class="user-box clearfix">
				<img src="/homes/picture/590618e10001a94004190419-100-100.jpg" width="64" height="64">
				<p class="user-name">法幢</p>
				<div class="user-text-box">
					<p class="star js-bstar">
						<span class='star'><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i></span>
					</p>
				</div>
			</div>
			<p class="content" title="很幸运！遇到了慕课网，我以前都是从网上下的一些免费课程，有些还是不错的，但总体来说就是学习不系统，基本点比较混淆，重点不明确，现在从慕课网学习，感觉很好，课程讲解很细，学习重点突出、很系统，对于重点掌握的要点有练习题、编程练习、最好的就是助教老师，我每次提出的问题都能很细致的给我讲解，真心的感动啊！现在学习好象是找到点感觉了！很高兴！祝慕课网越来越好！一定会越来越好的，你们做的每一个细节都是很用心的，我能感觉到，从这里学习有种大家庭的氛围，谢谢慕课网的所有老师和所有的工作人员。">很幸运！遇到了慕课网，我以前都是从网上下的一些免费课程，有些还是不错的，但总体来说就是学习不系统，基本点比较混淆，重点不明确，现在从慕课网学习，感觉很好，课程讲解很细，学习重点突出、很系统，对于重点掌握的要点有练习题、编程练习、最好的就是助教老师，我每次提出的问题都能很细致的给我讲解，真心的感动啊！现在学习好象是找到点感觉了！很高兴！祝慕课网越来越好！一定会越来越好的，你们做的每一个细节都是很用心的，我能感觉到，从这里学习有种大家庭的氛围，谢谢慕课网的所有老师和所有的工作人员。</p>
		</li>
				<li class="l">
			<div class="user-box clearfix">
				<img src="/homes/picture/545863f50001df1702200220-100-100.jpg" width="64" height="64">
				<p class="user-name">慕粉1747213157</p>
				<div class="user-text-box">
					<p class="star js-bstar">
						<span class='star'><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i></span>
					</p>
				</div>
			</div>
			<p class="content" title="在大學畢業後, 跑來學編程的小白, 在上慕課前, 在其他網站, 書本上有學習過一些概念. 我敢說慕課網是我上過最好的網上教學網站, 老師思路清晰, 配合例子講解概念很清晰. 進步很大! 等這個學完了, 以後還會買其他課程!">在大學畢業後, 跑來學編程的小白, 在上慕課前, 在其他網站, 書本上有學習過一些概念. 我敢說慕課網是我上過最好的網上教學網站, 老師思路清晰, 配合例子講解概念很清晰. 進步很大! 等這個學完了, 以後還會買其他課程!</p>
		</li>
				<li class="l">
			<div class="user-box clearfix">
				<img src="/homes/picture/58667afa0001b47a06700476-100-100.jpg" width="64" height="64">
				<p class="user-name">朱昆鹏</p>
				<div class="user-text-box">
					<p class="star js-bstar">
						<span class='star'><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i><i class="imv2-star on"></i></span>
					</p>
				</div>
			</div>
			<p class="content" title="学了一段时间，总体感觉还是不错的。内容很全面，老师讲的也很细致 ，通俗易懂。喜欢这种关卡式的学习方式，比较有成就感。还有很多练习设计得也不错，看得出慕课网还是很用心的。还有老师批作业挺仔细的，对我很有帮助。">学了一段时间，总体感觉还是不错的。内容很全面，老师讲的也很细致 ，通俗易懂。喜欢这种关卡式的学习方式，比较有成就感。还有很多练习设计得也不错，看得出慕课网还是很用心的。还有老师批作业挺仔细的，对我很有帮助。</p>
		</li>
			</ul> 
	<a href="/sc/6/publicevaluation" class="more">查看全部<span>160</span>条用户评价</a>
</div>
<!-- 用户评价 end --></div>
<!-- 用户评价 end -->



<div id='Prchor'></div>

<!-- 用户评价end -->

</div>
<!-- 主体 end -->




</div>

@endsection

