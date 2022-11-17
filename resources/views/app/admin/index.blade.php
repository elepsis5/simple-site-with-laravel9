@extends('layouts.admin')

@section('header')
    @include('app.sections.header')
@endsection

@section('content')
    <div id="app" class="body-wrapper">
        <div class="content-wrapper">
            <div class="flex-container">
                @include('app.sections.adminSideBar')
                <article-list-component></article-list-component>
            </div>
            <paginate-component></paginate-component>
        </div>
    </div>
@endsection

@section('vue')
    <script src="{{mix('js/app.js')}}"></script>
@endsection