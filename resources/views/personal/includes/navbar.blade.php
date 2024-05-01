<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div class="col-12 d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <li class="nav-item">
                    <input type="submit" class="btn btn-outline-primary" value="Logout">
                </li>
            </form>
        </ul>
    </div>
</nav>
