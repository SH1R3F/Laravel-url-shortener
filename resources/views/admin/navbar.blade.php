<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-header">
            <!-- Toggler Button -->
            <button class="navbar-toggler" id="sidebar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button><!-- Toggler Button -->
        </a>

        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button><!-- Toggler Button -->

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Items -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('manage.dashboard')}}">Admin Panel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">User Panel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Visit site</a>
                </li>
            </ul><!-- Left Items -->

            <!-- Right Items -->
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user user-icon"></i>
                      <span class='user-text'>Me</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item intro-card">
                        <span class="name">John Doe</span>
                        <span>John Doe@qsaa.co</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('manage.dashboard')}}">Admin Dashboard</a>
                    <a class="dropdown-item" href="#">User Dashboard</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
                </li>


            </ul><!-- Right Items -->

        </div><!-- Navbar Items -->
    </div>
</nav><!-- Navbar -->
