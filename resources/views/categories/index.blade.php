@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Categories</h1>
            <section class="featured-posts-section">
                <ol class="list-group list-group-numbered">
                    @foreach($categories as $category)
                        <li class="list-group-item"><a href="{{route('main.category.posts.index', $category->id)}}">
                                {{$category->title}}
                            </a></li>
                    @endforeach
                </ol>
            </section>
        </div>
    </main>
@endsection
