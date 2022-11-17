@extends('layouts.app')

@section('header')
    @include('app.sections.header')
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="flex-container">
            @include('app.sections.adminSideBar')
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" value="{{$article->title}}">
                    <div id="titleHelp" class="form-text">Input title here.</div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="img" aria-describedby="imageHelp" value="{{$article->img}}">
                    <div id="imageHelp" class="form-text">Input image here.</div>
                    <span><img src="{{$article->img}}" alt="..."></span>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Text</label>
                    <textarea class="form-control" id="body" name="body">{{$article->body}}</textarea>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="slug" name="slug" value="{{$article->slug}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection