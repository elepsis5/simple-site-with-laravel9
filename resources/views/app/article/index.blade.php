@extends('layouts.app')

@section('masthead');

@endsection

@section('content')
<!-- Articles Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="margin-top: 7rem;">Articles</h2>
<!-- Icon Divider-->
<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
</div>
<!-- Articles Grid Items-->
<div class="row articles-index">
    @foreach($articles as $article)
        <div class="col-4 pb-3">
            <div class="card">
                <img src="{{$article->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->getBodyWithLimit()}}</p>
                    <p>{{$article->createdAtForHumans()}}</p>
                    <a href="{{route('articleOne', $article->slug)}}" class="btn btn-primary">Подробнее</a>
                    <div class="mt-3">
                        <span class="badge bg-primary"><i class="far fa-thumbs-up">{{$article->state->likes}}</i></span>
                        <span class="badge bg-primary"><i class="far fa-eye">{{$article->state->views}}</i></span>
                    </div>
                    <div class="mt-4">
                        Теги:
                        @foreach($article->tags as $tag)
                            <a href="route('articles.tag', $tag->id)" class="badge bg-danger">{{$tag->label}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
<div class="mx-auto" style="width: max-content">{{$articles->links()}}</div>
@endsection