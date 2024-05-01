@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{$post->preview_image}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{$post->title}}</p>
                            <a href="{{route('main.show', $post->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="m-auto">{{$posts->links()}}</div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @isset($myPosts)
                                @foreach($myPosts as $post)

                                    <div class="col-md-6 blog-post" data-aos="fade-up">
                                        <div class="blog-post-thumbnail-wrapper">
                                            <img src="{{$post->preview_image}}" alt="blog post">
                                        </div>
                                        <p class="blog-post-category">Blog post</p>
                                        <a href="#!" class="blog-post-permalink">
                                            <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                                Partner</h6>
                                        </a>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Post List</h5>
                        <ul class="post-list">
                            @foreach($popularPosts as $post)
                                <li class="post">
                                    <a href="#!" class="post-permalink media">
                                        <img src="{{$post->preview_image}}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{$post->title}}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
