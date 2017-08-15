@extends('layout.about')

@section('title','团队介绍')

@section('content')
    {!! html_entity_decode($res[5]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection