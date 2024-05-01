@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">Blog single page</h1>
        <p class="edica-blog-post-meta aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">Written by Richard
            Searls• {{$date->format('F')}}, {{$date->year}}• {{$date->format('H:i')}}• Featured
            • {{$post->comments()->count()}} Comments</p>
        <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <img src="{{$post->preview_image}}" alt="featured image" class="w-100">
        </section>

        <section class="post-content pt-5">
            <div class="row">
                <div class="col-lg-9 mx-auto aos-init" data-aos="fade-up">
                    <p>{{$post->description}}</p>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4 aos-init" data-aos="fade-up">Related Posts</h2>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-4 aos-init" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{$relatedPost->preview_image}}" alt="related post" class="post-thumbnail">
                                <a href="{{route('main.show', $relatedPost->id)}}"><p
                                        class="post-category">{{$relatedPost->title}}</p></a>
                                <h5 class="post-title">{{$relatedPost->description}}</h5>
                            </div>
                        @endforeach
                    </div>
                </section>

                @auth()
                    <section class="comment-list">
                        <h2 class="section-title mb-4 aos-init" data-aos="fade-up">Comments({{$post->comments->count()}}
                            )</h2>
                        @foreach($post->comments as $comment)
                            <div class="comment-text">
                            <span class="username"><div>{{$comment->user->name}}</div>
                            <span class="text-muted float-right">{{$comment->createdAt->diffForHumans()}}</span>
                            </span> {{$comment->message}}
                            </div>
                        @endforeach
                    </section>
                @endauth

                <section class="comment-section">
                    <h2 class="section-title mb-5 aos-init" data-aos="fade-up">Leave a Reply</h2>
                    <form action="{{route('comment.store', $post->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 aos-init" data-aos="fade-up">
                                <label class="sr-only">Comment</label>
                                <textarea name="message" class="form-control" placeholder="Comment"
                                          rows="10">{{old('message')}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 aos-init" data-aos="fade-up">
                                <input type="submit" value="Send Message" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

@endsection
