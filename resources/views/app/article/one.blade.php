@extends('layouts.app')

@section('header')
    @include('app.sections.header')
@endsection

@section('content')
<div id="app">
    <article-component></article-component>
    <hr>
    <comment-component></comment-component>
</div>
@endsection

@section('about')

@endsection

@section('vue')
    <script src="{{mix('js/app.js')}}"></script>
@endsection

