@extends('layout.list')
@section('title', 'IT职业路径_编程学习路线_慕课网职业路径')

@section('content')
	<link rel="stylesheet" href="/homes/css/index-less.css" type="text/css"/>
<div class='body-main'>

<div class='program-banner'>
	
	<div class='relative banner-head js-banner-head'>
		<div class='js-all active'>
			<h2 class='tit'>迈向编程之路 成就职业梦想</h2>
			<p class='intro'>
				系统化学习<span>/</span>知识+案例讲解<span>/</span>学练测一体<span>/</span>1对1作业批改
			</p>
		</div>
		
				<div class='js-fe '>
			<h2 class='tit'>Web前端攻城狮</h2>
			<p class='intro'>互联网时代，我们每天的生活离不开各式各样的前端页面。如何利用(X)HTML/CSS/JavaScript/DOM/Flash等技术开发界面，完成动态的交互功能，与后台配合构建用户体验优异的产品？Web前端工程师，等你来挑战~</p>
		</div>
				<div class='js-php '>
			<h2 class='tit'>PHP攻城狮</h2>
			<p class='intro'>告诉我，世界上最好的语言是什么？没错，就是web开发使用者最多，最快最简单，生态环境和社区积累最深厚，却毫无大公司背景的传奇。PHP的传奇，需要你来续写！</p>
		</div>
				<div class='js-android '>
			<h2 class='tit'>Android攻城狮</h2>
			<p class='intro'>全球移动设备，市场份额第一的开放平台，开放平台，开放平台！开放带来丰富的生态，开放利于创新。Android开发资源丰富、门槛低，还有谷歌大法护体，少年，你还犹豫什么</p>
		</div>
				<div class='js-java '>
			<h2 class='tit'>Java攻城狮</h2>
			<p class='intro'>互联网时代，大量事务依托网络，各类网站和系统琳琅满目，他们是如何实现的呢？Java Web开发可以承担这些业务！Java以其平台无关、健壮、安全等特点，长期盘踞编程排行榜首位。广阔前景，期待你的加入~</p>
		</div>
				<div class='js-ios '>
			<h2 class='tit'>iOS攻城狮</h2>
			<p class='intro'>从事iOS系统开发、应用软件开发等多个方向，主要负责移动端产品的开发，应用于iPhone、iPad、iWatch等移动设备。致力于通过不断优化的系统，打造用户体验极佳的产品，你也可以像全球数以万计的开发者一样在AppStore赚到第一桶金。</p>
		</div>
			</div>
	
	<div class='tab-nav js-tabNav clearfix'>
		<a href='/course/class' data-type='all' class='navitem navitemall @if(!$c) active @endif'>
			<i class='navicon all'><img src="/homes/images/5.png"></i>
			<span class='navtext'>全部职业路径</span>
			<div class='navbot'></div>
		</a>
		@foreach($res as $k=>$v)

		<a href='/course/class?c={{$v->cid}}' data-type='fe' class='navitem @if($c==$v->cid) active @endif '>
			<i class='navicon fe'><img src="/homes/images/{{$k}}.png"></i>
			<span class='navtext'>{{$v->cname}}</span>
			<div class='navbot'></div>
		</a>
		@endforeach
	</div>
	
	<div class='MMM'></div>
	<div class='program-banner-wrap'>
		<div class='program-banner-absolute'>
			<div class='program-banner-bk'>
				<div class='svg-block image1'></div>
				<div class='svg-diamond image2'></div>
				<div class='svg-leaf image3'></div>
				<div class='svg-small-circle'></div>
				<div class='svg-big-circle'></div>
				<div class='svg-triangle image4'></div>
			</div>
		</div>
	</div>
	
	
</div>

<div class='program-list'>
<div class='program-list-wrap clearfix'>
		@foreach($class as $k=>$v)
		<a href='/class/detail?id={{$v->id}}' class='program-item'>
			<div class='shadow'>
			<div class='program-list-head'>
				<div class='' style='background-image: url(/{{$v->pic}});'></div>
			</div>
			<div class='program-list-cont'>
				<div class='program-list-tit'>{{$v->title}}</div>
				<div class='program-list-t clearfix'>
					<span class='text'></span>
				</div>
				<div class='program-list-dest'>{{$v->referral}}</div>
				<div class='program-list-bot'>
					<span class='text'>{{$v->NNT}}人在学</span>
					<span class='price'>￥{{$v->price}}0</span>
				</div>
			</div>
		</div>
		<div class='c-line'></div>
		<div class='d-line'></div>
	</a>
		@endforeach
</div>
</div>
	<script>
		$('.navitem').each(function(){
		    $(this).click(function(){
		        addClass('active');
			})
		})
	</script>
</div>


@endsection