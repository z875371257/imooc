@extends('layout.admin')
@section('title', '慕课首页')
@section('content')

    <div class="mws-panel grid_3">
        <div class="mws-panel-header">
            <span><i class="icon-book"></i> Website Summary</span>
        </div>
        <div class="mws-panel-body no-padding">
            <ul class="mws-summary clearfix">
                <li>
                    <span class="key"><i class="icon-support"></i> Support Tickets</span>
                    <span class="val">
                                    <span class="text-nowrap">332</span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-certificate"></i> Commision</span>
                    <span class="val">
                                    <span class="text-nowrap">71% <i class="up icon-arrow-up"></i></span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-shopping-cart"></i> This Week Sales</span>
                    <span class="val">
                                    <span class="text-nowrap">144 <i class="down icon-arrow-down"></i></span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-install"></i> Cash Deposit</span>
                    <span class="val">
                                    <span class="text-nowrap">$6,421</span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-key"></i> Last Sign In</span>
                    <span class="val">
                                    <span class="text-nowrap">September 21, 2012</span>
                                </span>
                </li>
                <li>
                    <span class="key"><i class="icon-windows"></i> Operating System</span>
                    <span class="val">
                                    <span class="text-nowrap">Debian Linux</span>
                                </span>
                </li>
            </ul>
        </div>
    </div>
    

@endsection