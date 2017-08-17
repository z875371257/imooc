
@extends('layout.about')
@section('title','关于我们')

@section('content')
    {!! html_entity_decode($res[3]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection