<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title_page; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Isep Lutpi Nur" />
    <meta name="keywords" content="Menu management, System Login, User Management" />
    <meta name="author" content="Isep Lutpi Nur" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url(); ?>assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url(); ?>assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(); ?>assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(); ?>assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(); ?>assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url(); ?>assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url(); ?>assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/icon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url(); ?>assets/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook and Twitter integration -->
    <meta property="og:url" content="https://facebook.com/iseplutpinur7" />
    <meta property="og:type" content="Application" />
    <meta property="og:title" content="Login sistem dan Menu manajemen" />
    <meta property="og:description" content="Aplikasi sistem login dan menu manajemen dengan menggunakan bahasa PHP 7" />
    <meta property="og:image" content="assets/images/avatar.jpg" />

    <meta name="twitter:title" content="iseplutpinur7" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="https://twitter.com/iseplutpinur7" />
    <meta name="twitter:card" content="" />
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <?php if (isset($plugins)) : ?>
        <?php if (is_array($plugins)) : ?>
            <?php foreach ($plugins as $plugin) : ?>
                <?php if ($plugin == 'datatable') : ?>
                    <!-- Custom styles for this page -->
                    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>
    <?php endif ?>
</head>

<body id="page-top" onload="startTime()">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <i class="fas fa-code"></i>
                <div class="sidebar-brand-text mx-3">KATALOG MOBIL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- meniapkan sub-sub menu-->
            <li class="nav-item" id="nav-dashboard">
                <a class="nav-link pb-0" href="<?= base_url() ?>admin/Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item" id="nav-slider">
                <a class="nav-link pb-0" href="<?= base_url() ?>admin/Slider">
                    <i class="fas fa-fw fa-copy"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="nav-item" id="nav-produk">
                <a class="nav-link pb-0" href="<?= base_url() ?>admin/produk">
                    <i class="fas fa-fw fa-copy"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            <!-- Heading -->
            <div class="sidebar-heading">
                User </div>

            <!-- meniapkan sub-sub menu-->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>user/edit">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>user/changepassword">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change password</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu </div>

            <!-- meniapkan sub-sub menu-->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>menu">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>menu/submenu">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Submenu Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url() ?>menu/usermanagement">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>User Management</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Nav Item - My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <!-- End of Sidebar -->
        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <h5><span id="clockTopbar"></span></h5>
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <?php
                                if ($user['role_id'] == 1) {
                                    $role_id = 'administrator';
                                } elseif ($user['role_id'] == 2) {
                                    $role_id = 'user';
                                }
                                ?>
                                <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php if ($this->session->flashdata('titleFlash')) : ?>
                        <div class="alert alert-<?= $this->session->flashdata('colorFlash'); ?> alert-dismissible fade show m-3" role="alert">
                            <strong><?= $this->session->flashdata('titleFlash'); ?>!</strong> <?= $this->session->flashdata('captionFlash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>