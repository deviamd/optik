<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('backend/assets/images/logo!.png')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                @if (Auth::check())
            <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
            @endif
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">

                        <i class="ri-mail-send-line"></i>
                        <span>Pengaduan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.index') }}" class="waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-share-line"></i>
                        <span>List Masyarakat</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-profile-line"></i><span class="badge rounded-pill bg-success float-end">1</span>
                        <span>Laporan Harian</span>

                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    </div>
