<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link">
                    <i class="fa-solid fa-list"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('tags.index')}}" class="nav-link">
                    <i class="fa-solid fa-tag"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('posts.index')}}" class="nav-link">
                    <i class="fa-solid fa-clipboard"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
