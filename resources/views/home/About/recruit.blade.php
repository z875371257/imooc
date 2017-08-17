
@extends('layout.about')
@section('title','讲师招募')

@section('content')
    {!! html_entity_decode($res[2]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection