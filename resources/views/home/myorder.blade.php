@extends('layout.list')
@section('title','购买记录')
@section('content')
  
<div class='body-main'>


<div class="order-main clearfix">
	
	    
<div class="slider l">
    <h1>订单服务</h1>
    <ul class="nav-menu">
        <a href="/myorder">
            <li class="clearfix active">
                <p class="nav-name l">购买记录</p>
                <span class="imv2-arrow2_r r"></span>
            </li> 
        </a>
        <a href="/coupon">
            <li class="clearfix ">
                <p class="nav-name l">我的优惠券
                                </p>
                <span class="imv2-arrow2_r r"></span>
            </li> 
        </a>
        <a href="/consult">
            <li class="clearfix ">
                <p class="nav-name l">课程咨询</p>
                <span class="imv2-arrow2_r r"></span>
            </li> 
        </a>
        <a href="/receipt">
            <li class="clearfix ">
                <p class="nav-name l">开具发票</p>
                <span class="imv2-arrow2_r r"></span>
            
            </li>
        </a> 
        <a href="/bill">
            <li class="clearfix ">
                <p class="nav-name l">消费记录</p>
                <span class="imv2-arrow2_r r"></span>
            </li> 
        </a>
    </ul>
</div><!-- .slider end -->

	
	<div class="right-container l">
		<h1>购买记录<span>共<i>{{count($orders)}}</i>个订单</span></h1>
		<div class='myOrder'>
						<ul class="myOrder-list">
						
						@foreach($orders as $k => $v)
							<li data-flag="1708182106226124">
					<p class="myOrder-number">
						订单编号：{{$v->oid}}
						<span class="date">{{date('Y-m-d H:i:s',$v->addtime)}}</span>
						<a href="/user/feedback" target="_blank" class="r">我有疑问，需要反馈？</a>
					</p>

					<div class="myOrder-course clearfix">

						<dl class="course-del l">    @foreach($goods as $kk => $vv) 
														<dd class="clearfix">
								<a href="http://coding.imooc.com/class/113.html" class="l">
									<img class="l" src="/{{$vv[0]->pic}}" width="160" height="90">
								</a>
								<div class="del-box l">
									<!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费 -->
									
																			<!-- cate 订单类型 0无优惠 1组合套餐 2学生优惠 -->
										 
																					<a href="http://coding.imooc.com/class/113.html"><p class="course-name">{{$vv[0]->title}}</a>
																				
																			
																		
									<p class="price-btn-box clearfix">
										<!-- 如果有优惠券 -->
																				<span class="l course-little-price">￥{{$vv[0]->price}}</span>
																			</p>
								</div>
							</dd>
							@endforeach
														
													</dl>
																				<!-- 没有使用优惠券 -->
							<div class="course-money l pt64">
								<div class="total-box">
									<p class="type-price">
										<span class="RMB">¥</span>{{$v->ormb}}
									</p>
								</div>
							</div>
													
												

																				<div class="course-action l">
								<a class="pay-now" href="javascript:void(0)" onclick="delOrder({{$v->oid}})">删除</a>
								
							</div>
																		</div>
				</li>
				@endforeach
				
			</ul>
			<!-- 是否有分页 -->
						<!-- 是否有分页 end -->
					</div>
		
	</div>
</div>


</div>
<script>

	function delOrder(id){
        
        
	    layer.confirm('确认删除吗？', {
	        btn: ['确定','取消'] //按钮
	    }, function(){

	  $.get("{{url('delOrder')}}/"+id,{'_method':'get','_token':'{{csrf_token()}}'},function(data){
                
	            if(data.status == 0){
	                location.href = location.href;
	                layer.msg(data.msg, {icon: 6});
	            }else{
	                location.href = location.href;
	                layer.msg(data.msg, {icon: 5});
	            }

	        });

	    }, function(){

	    });

	    

}

</script>

 
@endsection
