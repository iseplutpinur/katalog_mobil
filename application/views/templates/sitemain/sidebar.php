<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <i class="fas fa-code"></i>
        <div class="sidebar-brand-text mx-3">WPU CI LOGIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- looping menu -->
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator </div>

    <!-- meniapkan sub-sub menu-->
    <li class="nav-item active">
        <a class="nav-link pb-0" href="<?= base_url() ?>administrator">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url() ?>administrator/role">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Role</span>
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