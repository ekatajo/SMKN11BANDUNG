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
            <li class="nav-item {{ Request::is('guru') ? 'active' : '' }}">
                <a class="nav-link" href="/guru">
                    <i class="fa-solid fa-house"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
     <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('guru/mapel_komponen*') ? 'active' : '' }}">
                <a class="nav-link" href="/guru/mapel_komponen/{{auth()->user()
            ->kode_mapel}}/komponen">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    <span>Komponen</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('guru/kelas_siswa*') ? 'active' : '' }}">
                <a class="nav-link" href="/guru/kelas_siswa">
                    <i class="fa-solid fa-award"></i>
                    <span>Penilaian</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::is('guru/aktivitas*') ? 'active' : '' }}">
                <a class="nav-link" href="/guru/aktivitas">
                    <i class="fa-solid fa-list-ul"></i>
                    <span>Aktivitas</span>
                </a>
            </li>
                        <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item {{ Request::is('/wakel') ? 'active' : '' }}">
                <a class="nav-link" href="/wakel">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>Halaman Walikelas</span>
                </a>
            </li>
            
            

             <li class="nav-item {{ Request::is('guru/data_kelas*') ? 'active' : '' }}">
                <img class="nav-link" src="{{asset('template/img/undraw_graduation_re_gthn (1).svg')}}" style=" margin-top: 75px;" align="bottom">
            </li>

        </ul>