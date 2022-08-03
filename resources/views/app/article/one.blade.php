@extends('layouts.app')

@section('content')
<div id="app">
    <div class="row article-one">
        <div class="col-12 p-3">
            <img src="{{$article->img}}" class="article-one-img border rounded mx-auto" alt="...">
            <h5 class="mt-5">{{$article->title}}</h5>
            <p>
                @foreach($article->tags as $tag)
                    @if($loop->last)
                        <span class="tag">{{$tag->label}}</span>
                    @else
                        <span class="tag">{{$tag->label}} |</span>
                    @endif
                @endforeach
            </p>
            <p class="card-text">{{$article->body}}</p>
            <p>Published: {{$article->createdAtForHumans()}}</p>
            <div class="mt-3">
                <span class="badge state">{{$article->state->likes}} <i class="bi bi-heart"></i></span>
                <span class="badge state">{{$article->state->views}} <i class="bi bi-eye"></i></span>
            </div>
        </div>
    </div>
    <hr>
    <div class="row comments-container">
        <form class="mx-auto" action="#" method="">
            <div class="mb-3">
                <label for="commentSubject" class="form-label">Comment's subject</label>
                <input type="text" class="form-control" id="commentSubject">
            </div>
            <div class="mb-3">
                <label for="commentBody" class="form-label">Comment</label>
                <textarea class="form-control" id="commentBody" rows="3"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
        <div class="toast-container mt-5 pb-5 mx-auto">
            @foreach($article->comments as $comment)
                <div class="toast showing" style="width: 100%">
                    <div class="toast-header">
                        <img src="https://picsum.photos/id/{{rand(1,1000)}}/50/50" class="rounded me-2" alt="...">
                        <strong class="me-auto">{{$comment->subject}}</strong>
                        <small class="text-muted">{{$comment->createdAtForHumans()}}</small>
                    </div>
                    <div class="toast-body">
                        {{$comment->body}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>
@endsection

@section('about')

@endsection

