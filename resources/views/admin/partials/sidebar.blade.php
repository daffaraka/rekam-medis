<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-restroom"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rekam Medis</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Dashboard</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Select the Tab:</h6> --}}
                <a class="collapse-item" href="index.php">Dashboard</a>
                <!-- <a class="collapse-item" href="index-gsuite.php">Data Tiket G-Suite</a> -->
            </div>
        </div>

    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRekamMedis"
            aria-expanded="true" aria-controls="collapseRekamMedis">
            <i class="fas fa-fw fa-file-medical"></i>
            <span>Rekam Medis</span>
        </a>
        <div id="collapseRekamMedis" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data Penghuni:</h6> --}}
                <a class="collapse-item" href="{{route('rekam-medis.index')}}">Data Rekam Medis</a>
                <!-- <a class="collapse-item" href="tiketgsuite.php">Data Tiket G-suite</a> -->
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Penghuni</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data Penghuni:</h6> --}}
                <a class="collapse-item" href="#">Data Penghuni</a>
                <!-- <a class="collapse-item" href="tiketgsuite.php">Data Tiket G-suite</a> -->
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Screens:</h6>
                <a class="collapse-item" href="admin.php">Data Penghuni</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
