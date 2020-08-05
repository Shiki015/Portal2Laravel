<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('users.index') }}" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a  class="d-block">{{ session('user')->firstName }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("users.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                    <ul>
                        <li class="nav-item">
                            <a href="{{ route("users.create") }}" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Add User
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("category.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Categories-NavigationBar
                        </p>
                    </a>

                    <ul>
                        <li class="nav-item">
                            <a href="{{ route("category.create") }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Add Category
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("comment.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Comments
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route("tag.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-at"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                    <ul class="">
                        <li class="nav-item">
                            <a href="{{ route("tag.create") }}" class="nav-link">
                                <i class="nav-icon fas fa-at"></i>
                                <p>
                                    Add Tag
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("news.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            News
                        </p>
                    </a>
                    <ul class="">
                        <li class="nav-item">
                            <a href="{{ route("news.create") }}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Add News
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("sub.index")}}" class="nav-link">
                        <i class="nav-icon fas fa-rss"></i>
                        <p>
                            Subscribers
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route("logs")}}" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Log file
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
