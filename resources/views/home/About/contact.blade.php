@extends('layout.about')

@section('title','联系我们')

@section('content')
    {!! html_entity_decode($res[1]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection