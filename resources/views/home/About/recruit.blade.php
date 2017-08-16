
@extends('layout.about')
@section('title','讲师招募')

@section('content')
    {!! html_entity_decode($res[3]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection