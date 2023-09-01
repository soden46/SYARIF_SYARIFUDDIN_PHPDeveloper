<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand-icon d-flex align-items-center justify-content-center">
        <img src="{{asset('assets/poto/aku.jpg')}}" alt="Logo" width="" height="80"></img>
    </div>
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class=" sidebar-brand-text mx-3">
            <p>{{(Auth::user()->nama)}}</p>
        </div>
    </a>

    <!-- Divider -->
    <!-- Nav Item - Utilities Collapse Menu-->
    <li class="nav-item">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-users"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="icon-dashboard"></i>
            <span>Data Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/list/create')}}">Tambah Data Transaksi</a>
                <a class="collapse-item" href="{{url('/list')}}">List Data Transaksi</a>
                <a class="collapse-item" href="{{url('/rekap')}}">Rekap Transaksi</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span>Logout</span>
        </a>
    </li>
</ul>
</ul>