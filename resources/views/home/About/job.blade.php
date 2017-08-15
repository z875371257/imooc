@extends('layout.about')

@section('title','人才招聘')

@section('content')
    {!! html_entity_decode($res[1]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection