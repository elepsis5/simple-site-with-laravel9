<section class="page-section portfolio" id="articles">
    <div class="container">
        <!-- Articles Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Articles</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Articles Grid Items-->
        <div class="row justify-content-center">
            <div class="row mt-5">
                @foreach($articles as $article)
                <div class="col pb-3">
                    <div class="card">
                        <img src="{{$article->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->getBodyWithLimit()}}</p>
                            <p>{{$article->createdAtForHumans()}}</p>
                            <a href=" {{route('articleOne', $article->slug)}} " class="btn btn-primary">More</a>
                            <div class="mt-3">
                                <span class="badge state">{{$article->state->likes}} <i class="bi bi-heart"></i></span>
                                <span class="badge state">{{$article->state->views}} <i class="bi bi-eye"></i></span>
                            </div>
                            <div class="mt-4">
                                Tags:
                                @foreach ($article->tags as $tag)
                                <a href=" route('article.tag', $tag->id) " class="badge tag">{{$tag->label}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <a href=" {{route('articlesAll')}} " class="btn btn-primary">All articles</a>
            </div>
        </div>
    </div>
</section>
