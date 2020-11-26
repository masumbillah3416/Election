<!-- Sidebar -->
<ul class="navbar-nav bg-abasas-dark  sidebar sidebar-dark accordion sidebar-toggled " id="accordionSidebar">
{{-- for campus Admin --}}

@if(Auth::user()->isAdmin())
<hr class="sidebar-divider m-1 p-0 ">
<li class="nav-item active ">
    <a class="nav-link p-3 " href="{{ route('voters') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Voters</span></a>
</li>
@endif

@if(Auth::user()->isCommissioner())

<!-- Divider -->
<hr class="sidebar-divider m-1 p-0 ">





{{-- for comissioner --}}
    <hr class="sidebar-divider m-1 p-0 ">
    <div class="sidebar-heading p-2">
        Users
    </div>
    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('voters',['campus_id'=>1]) }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>SEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{route('voters',['campus_id'=>2]) }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>MEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('voters',['campus_id'=>3]) }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>FEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('voters',['campus_id'=>4])}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>BEC</span></a>
    </li>






    <hr class="sidebar-divider m-1 p-0 ">

    <div class="sidebar-heading pt-4 pb-2">
        Election
    </div>


    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('elections','central') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Central</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('elections','sec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>SEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('elections','mec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>MEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('elections','fec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>FEC</span></a>
    </li>

    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('elections','bec') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>BEC</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">



@endif

    <!-- Nav Item - Dashboard -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
