<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
        <span class="brand-text font-weight-light">V3421064</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/{{ Auth::user()->foto }}" class="rounded " alt="User Image" style="width:32px; height:32px">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-header text-center">Menu</li>
                <li class="nav-item">
                    <a href="/myprofile64" class="nav-link {{ $page === 'MY PROFILE' ? 'bg-light' : '' }}">
                        <p>
                            My Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $page === 'Home' ? 'bg-light' : '' }}">
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a href="/user64"
                            class="nav-link {{ $page === 'LIST USER' ? 'bg-light' : '' }}{{ $page === 'PROFILE USER' ? 'bg-light' : '' }}">
                            <p>
                                User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/agama64" class="nav-link {{ $page === 'LIST AGAMA' ? 'bg-light' : '' }}">
                            <p>
                                Agama
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="/logout64" class="nav-link">
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
