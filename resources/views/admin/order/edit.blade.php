@extends('layout.admin')
@section('title', '修改订单')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	<span>修改订单</span>
	</div>
        @if (count($errors) > 0 || session('errors') > 0)
            <div class="mws-form-message error" style='margin-top:10px;'>
               您没有做任何修改
                <ul>
                    @if(is_object($errors))
                        <li>{{session('errors')}}</li>
                    @endif
                </ul>
            </div>
        @endif
	<div class="mws-panel-body no-padding">
		<form action="{{url('admin/order/'.$res[0]->uid)}}" class="mws-form" method="post">
		 <input type="hidden" name="_method" value="put">
		  {{csrf_field()}}
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">收货人</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="name" value="{{$res[0]->name}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
				<label class="mws-form-label">收货地址</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="details" value="{{$res[0]->details}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
				<label class="mws-form-label">联系电话</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="telephone" value="{{$res[0]->telephone}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">订单状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" name="status" value="1" @if($res[0]->status=='1') checked @endif> <label>已付款</label></li>
    						<li><input type="radio" name="status" value="2" @if($res[0]->status=='2') checked @endif> <label>已发货</label></li>
    						<li><input type="radio" name="status" value="3" @if($res[0]->status=='3') checked @endif> <label>已收货</label></li>
    						<li><input type="radio" name="status" value="4" @if($res[0]->status=='4') checked @endif> <label>订单完成</label></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" class="btn btn-danger" value="提交">
    		</div>
    	</form>
    </div>    	
</div> 

@endsection
