<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logos.png" alt="" height="20">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logos.png" alt="" height="18">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logos.png" alt="" height="20">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logos.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php $routes == "/" ? "text-danger" : "text-light" ?>" href="/"
                                    role="button">
                                    View API
                                </a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link text-light" href="javascript: void(0);"
                                    role="button">
                                    View API
                                </a>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link <?php $routes == "/post-api" ? "text-danger" : "text-light" ?>" href="/create-post-api"
                                    role="button">
                                    Post API
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 text-light"><?= session('fullname') ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="<?= base_url(); ?>/logout"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <?= lang('Files.Logout') ?></a>
                </div>
            </div>
        </div>
    </div>
</header>