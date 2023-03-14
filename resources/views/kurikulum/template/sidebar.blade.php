        <ul class="navbar-nav sidebar sidebar-dark accordion toggled" id="accordionSidebar" style="background-color:#00022F;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/kurikulum">
                <div class="sidebar-brand-icon ">
                    <img src="{{asset('template/img/20230131_170949.png')}}" style="height: 125px;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('kurikulum') ? 'active' : '' }}">
                <a class="nav-link" href="/kurikulum">
                    <i class="fa-solid fa-house"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
     <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('kurikulum/kelas_siswa*') ? 'active' : '' }}">
                <a class="nav-link" href="/kurikulum/kelas_siswa">
                    <i class="fa fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item {{ Request::is('kurikulum/data_guru*') ? 'active' : '' }}">
                <a class="nav-link" href="/kurikulum/data_guru">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>Guru</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('kurikulum/data_mapel*') ? 'active' : '' }}">
                <a class="nav-link" href="/kurikulum/data_mapel">
                    <i class="fa fa-book"></i>
                    <span>Mata Pelajaran</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('kurikulum/data_kelas*') ? 'active' : '' }}">
                <a class="nav-link" href="/kurikulum/data_kelas">
                    <i class="fa fa-university"></i>
                    <span>Kelas</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('backup*') ? 'active' : '' }}">
                <a class="nav-link" href="http://localhost/projek/public/backup">
                    <i class="fa-solid fa-database"></i>
                    <span>Cadangkan</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ Request::is('guru/data_kelas*') ? 'active' : '' }}">
                <img class="nav-link" src="{{asset('template/img/undraw_graduation_re_gthn (1).svg')}}" style=" margin-top: 75px;" align="bottom">
            </li>
        </ul>