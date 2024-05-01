<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{'assets/vendors/jquery/jquery.min.js'}}"></script>
    <script src="{{'assets/js/loader.js'}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="{{'assets/images/logo.svg'}}" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.index')}}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    @guest()
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('personal.main.index')}}">Login <span class="sr-only">(current)</span></a>
                        </li>
                    @endguest
                    @auth()
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('personal.main.index')}}">Personal panel <span
                                    class="sr-only">(current)</span></a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>


@yield('content')


<section class="edica-footer-banner-section pt-5">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{'assets/images/apple@1x.svg'}}" alt="ios" class="mr-2"> App
                    Store
                </button>
                <button class="btn btn-success"><img src="{{'assets/images/android@1x.svg'}}" alt="android"
                                                     class="mr-2">
                    Google Play
                </button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or
                service.</p>
        </div>
    </div>
</section>

@include('includes.footer')

<script src="{{'assets/vendors/popper.js/popper.min.js'}}"></script>
<script src="{{'assets/vendors/bootstrap/dist/js/bootstrap.min.js'}}"></script>
<script src="{{'assets/vendors/aos/aos.js'}}"></script>
<script src="{{'assets/js/main.js'}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
