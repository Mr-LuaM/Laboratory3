<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= route_to('home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Furn Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <li class="nav-item <?= $currentRoute == 'home' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= route_to('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
        </a>
    </li>


    <li class="nav-item <?= $currentRoute == 'products' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= route_to('manageProduct') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Products</span>
        </a>
    </li>

    <li class="nav-item <?= $currentRoute == 'users' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= route_to('manageUser') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->