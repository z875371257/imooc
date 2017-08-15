@extends('layout.about')

@section('title','友情链接')

@section('content')
    <div class="clearfix friend-links">
        <dl>
            @foreach($links as $k=>$v)
            <dd><a href="{{url($v->url)}}" target="_blank" title="{{$v->title}}">{{$v->title}}</a></dd>
            @endforeach
        </dl>
    </div>


@endsection