<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                    <i class="fa-solid fa-house"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('likes.index')}}" class="nav-link">
                    <i class="fa-regular fa-heart"></i>
                    <p>
                        Like Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('comments.index')}}" class="nav-link">
                    <i class="fa-regular fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('main.index')}}" class="nav-link">
                    <i class="fa-solid fa-globe"></i>
                    <p>
                        Edica web
                    </p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
