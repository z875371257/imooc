@extends('layout.list')
@section('title','购物车')
@section('content')
 <style type="text/css">
   body-main {
    min-height: 750px;
   }
   
 </style>
<div class="body-main">


<div class="cart-header">
	<div class="cart-header-warp clearfix">
		<div class="cart-title left clearfix">
			<h1 class="left">我的购物车</h1>
			

		</div>
		<div class="right">
			
	<div class="clearfix">
		<span class="left"><a href="/myorder" class="js-myorderbtn">我的订单历史</a></span>
		<span style="display: none;" class="left num js-order-num">0</span>
	</div>

		</div>
	</div>
</div>


<div id="cartBody" class="cart-body">
		<p class="notdata">购物车内空空如也</p>
	</div>




</div>
@endsection
