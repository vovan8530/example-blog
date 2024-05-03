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
                                <img src="{{asset($post->preview_image)}}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between ">
                                <a href="{{route('main.show', $post->id)}}"
                                   class="blog-post-permalink">{{$post->title}}</a>

                                <div class="d-flex">
                                    @auth()
                                        <form action="{{route('like.store', $post->id)}}" method="post">
                                            @csrf
                                            @if($post->user_likes_count != 0)
                                                <span>{{$post->user_likes_count}}</span>
                                            @endif
                                            <button type="submit" class="border-0 bg-transparent">
                                                @if(auth()->user()->postLikes->contains($post->id))
                                                    <i class="fa-solid fa-heart"></i>
                                                @else
                                                    <i class="fa-regular fa-heart"></i>
                                                @endif
                                            </button>
                                        </form>
                                    @endauth
                                    @guest()
                                        <div>
                                            <span>{{$post->user_likes_count}}</span>
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    @endguest
                                </div>
                            </div>
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
                                            <img src="{{asset($post->preview_image)}}" alt="blog post">
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
                                        <img src="{{asset($post->preview_image)}}" alt="blog post">
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
