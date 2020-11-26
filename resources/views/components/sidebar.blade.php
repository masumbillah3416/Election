<!-- Sidebar -->
<ul class="navbar-nav bg-abasas-dark  sidebar sidebar-dark accordion sidebar-toggled " id="accordionSidebar">
{{-- for campus Admin --}}

<hr class="sidebar-divider m-1 p-0 ">
<li class="nav-item active ">
    <a class="nav-link p-3 " href="{{ route('single-user') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Users</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider m-1 p-0 ">





{{-- for comissioner --}}
    <hr class="sidebar-divider m-1 p-0 ">
    <div class="sidebar-heading p-2">
        Users
    </div>
    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('all-users','sec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>SEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('all-users','mec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>MEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('all-users','fec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>FEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('all-users','bec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>BEC</span></a>
    </li>






    <hr class="sidebar-divider m-1 p-0 ">

    <div class="sidebar-heading pt-4 pb-2">
        Election
    </div>


    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('election','central') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Central</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('election','sec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>SEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('election','mec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>MEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('election','fec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>FEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('election','bec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>BEC</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">





    <!-- Nav Item - Dashboard -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
