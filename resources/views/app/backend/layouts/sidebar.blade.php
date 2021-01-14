<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('profile.index') }}" class="brand-link">
        <img src="{{ asset('images/slider/logolab.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">FIK-LAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Main</li>
                <li class="nav-item">
                    <a href="{{ route('profile.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>
                            Profile Lab
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('activity.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kegiatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('magang.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Program Magang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('schedule.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Jadwal Praktikum
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('feedback') }}" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Feedback
                        </p>
                    </a>
                </li>

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                </div>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>