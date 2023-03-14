 <ul class="navbar-nav sidebar sidebar-dark accordion toggled" id="accordionSidebar" style="background-color:#00022F;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/siswa">
                <div class="sidebar-brand-icon ">
                    <img src="{{asset('template/img/20230131_170949.png')}}" style="height: 125px;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('siswa') ? 'active' : '' }}">
                <a class="nav-link" href="/siswa">
                    <i class="fa-solid fa-house"></i>
                    <span>Beranda</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item {{ Request::is('siswa/raport*') ? 'active' : '' }}">
                <a class="nav-link" href="/siswa/raport{{auth()->user()->nis}}">
                    <i class="fa-solid fa-award"></i>
                    <span>Raport</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            

            <li class="nav-item {{ Request::is('siswa*') ? 'active' : '' }}">
                <img class="nav-link" src="{{asset('template/img/undraw_graduation_re_gthn (1).svg')}}" style=" margin-top: 75px;" align="bottom">
            </li>
            

        </ul>