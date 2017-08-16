@extends('layout.about')

@section('title','企业合作')

@section('content')
    {!! html_entity_decode($res[0]->editorValue) !!}
    {{--{{dd($res[0]->editorValue)}}--}}


@endsection