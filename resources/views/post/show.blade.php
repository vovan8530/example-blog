@extends('layouts.main')


@section('content')

    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">Blog single page</h1>
        <p class="edica-blog-post-meta aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">Written by Richard
            Searls• February 1, 2019• 6:31 pm• Featured • 4 Comments</p>
        <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <img src="{{$post->preview_image}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto aos-init" data-aos="fade-up">
                    <p>{{$post->description}}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 mb-3 aos-init" data-aos="fade-right">
                    <img src="assets/images/blog_post_1.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3 aos-init" data-aos="fade-up">
                    <img src="assets/images/blog_post_2.jpg" alt="blog post" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3 aos-init" data-aos="fade-left">
                    <img src="assets/images/blog_post_3.jpg" alt="blog post" class="img-fluid">
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-9 mx-auto">--}}
{{--                    <p data-aos="fade-up" class="aos-init"><a href="#">Lorem ipsum, or lipsum as it is sometimes--}}
{{--                            known,</a> is dummy text used in laying out printed graphic or web designs. The passage is--}}
{{--                        at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all--}}
{{--                        parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in--}}
{{--                        laying out printed graphic or web designs</p>--}}
{{--                    <h2 class="mb-4 aos-init" data-aos="fade-up">Blog single page</h2>--}}
{{--                    <ul data-aos="fade-up" class="aos-init">--}}
{{--                        <li>What manner of thing was upon me I did not know, but that it was large and heavy and--}}
{{--                            many-legged I could feel.--}}
{{--                        </li>--}}
{{--                        <li>My hands were at its throat before the fangs had a chance to bury themselves in my neck, and--}}
{{--                            slowly--}}
{{--                        </li>--}}
{{--                        <li>I forced the hairy face from me and closed my fingers, vise-like, upon its windpipe.</li>--}}
{{--                    </ul>--}}

{{--                    <blockquote data-aos="fade-up" class="aos-init">--}}
{{--                        <p>You are safe here! I shouted above the sudden noise. She looked away from me downhill. The--}}
{{--                            people were coming out of their houses, astonished.</p>--}}
{{--                        <footer class="blockquote-footer">Oluchi Mazi</footer>--}}
{{--                    </blockquote>--}}
{{--                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic--}}
{{--                        or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who--}}
{{--                        is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes--}}
{{--                        known, is dummy text used in laying out printed graphic or web designs</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>
{{--        <div class="row">--}}
{{--            <div class="col-lg-9 mx-auto">--}}
{{--                <section class="related-posts">--}}
{{--                    <h2 class="section-title mb-4 aos-init" data-aos="fade-up">Related Posts</h2>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4 aos-init" data-aos="fade-right" data-aos-delay="100">--}}
{{--                            <img src="assets/images/blog_post_related_1.png" alt="related post" class="post-thumbnail">--}}
{{--                            <p class="post-category">Blog post</p>--}}
{{--                            <h5 class="post-title">Front becomes an official Instagram</h5>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 aos-init" data-aos="fade-up" data-aos-delay="100">--}}
{{--                            <img src="assets/images/blog_post_related_2.png" alt="related post" class="post-thumbnail">--}}
{{--                            <p class="post-category">Blog post</p>--}}
{{--                            <h5 class="post-title">Front becomes an official Instagram</h5>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 aos-init" data-aos="fade-left" data-aos-delay="100">--}}
{{--                            <img src="assets/images/blog_post_related_3.png" alt="related post" class="post-thumbnail">--}}
{{--                            <p class="post-category">Blog post</p>--}}
{{--                            <h5 class="post-title">Front becomes an official Instagram</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--                <section class="comment-section">--}}
{{--                    <h2 class="section-title mb-5 aos-init" data-aos="fade-up">Leave a Reply</h2>--}}
{{--                    <form action="/" method="post">--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group col-12 aos-init" data-aos="fade-up">--}}
{{--                                <label for="comment" class="sr-only">Comment</label>--}}
{{--                                <textarea name="comment" id="comment" class="form-control" placeholder="Comment"--}}
{{--                                          rows="10">Comment</textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group col-md-4 aos-init" data-aos="fade-right">--}}
{{--                                <label for="name" class="sr-only">Name</label>--}}
{{--                                <input type="text" name="name" id="name" class="form-control" placeholder="Name*">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-4 aos-init" data-aos="fade-up">--}}
{{--                                <label for="email" class="sr-only">Email</label>--}}
{{--                                <input type="email" name="email" id="email" class="form-control" placeholder="Email*"--}}
{{--                                       required="">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-4 aos-init" data-aos="fade-left">--}}
{{--                                <label for="website" class="sr-only">Website</label>--}}
{{--                                <input type="url" name="website" id="website" class="form-control"--}}
{{--                                       placeholder="Website*">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 aos-init" data-aos="fade-up">--}}
{{--                                <input type="submit" value="Send Message" class="btn btn-warning">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </section>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
