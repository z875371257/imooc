
@extends('layout.about')
@section('title','关于我们')

@section('content')
    {!! html_entity_decode($res[4]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection