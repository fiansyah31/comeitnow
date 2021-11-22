<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading "><span>Helo</span> Alfian</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light active p-3" href="<?= base_url();?>/dashboard"><span><i class="bi bi-house-door-fill" style="font-size: 1.2rem; color: #E08773; margin-right: 5px;"></i></span> Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url();?>/dashboard-product"><span><i class="bi bi-server" style="font-size: 1.2rem; color: #E08773; margin-right: 5px;"></i></span>Product</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url();?>/dashboard-setting"><span><i class="bi bi-gear-fill" style="font-size: 1.2rem; color: #E08773; margin-right: 5px;"></i></span> Setting</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url();?>/dashboard-profile"><span><i class="bi bi-person-fill" style="font-size: 1.2rem; color: #E08773; margin-right: 5px;"></i></span> Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('logout');?>"><span><i class="bi bi-door-closed-fill" style="font-size: 1.2rem; color: #E08773; margin-right: 5px;"></i></span> Logout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light navbar-dashboard">
                <div class="container-fluid">
                    <button class="btn btn-primary bg-dark border-dark" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                          <li class="nav-item dropdown">
                            <a href="/" class="nav-link nav-link-shop">Home</a>
                          </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= user()->username; ?></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">My Account</a>
                                    <a class="dropdown-item" href="#!">Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('logout');?>">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>