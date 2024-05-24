
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
    <a href="/home/superadmin" class="nav-link {{ Request::is('home/superadmin*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
        Beranda
        </p>
    </a>
    </li>
    <li class="nav-item">
        <a href="/superadmin/jurusan" class="nav-link {{ Request::is('superadmin/jurusan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Jurusan
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/superadmin/peserta" class="nav-link {{ Request::is('superadmin/peserta*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Siswa
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/superadmin/kategori" class="nav-link {{ Request::is('superadmin/kategori*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
            Matpel
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/superadmin/soal" class="nav-link {{ Request::is('superadmin/soal*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
            Manajemen Soal
            </p>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="/superadmin/hasil" class="nav-link {{ Request::is('superadmin/hasil*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
            Hasil Quiz
            </p>
        </a>
    </li>

    
    <li class="nav-item">
        <a href="/superadmin/bobot" class="nav-link {{ Request::is('superadmin/bobot*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
            Bobot
            </p>
        </a>
    </li>

    
    <li class="nav-item">
        <a href="/superadmin/moora" class="nav-link {{ Request::is('superadmin/moora*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
            Persentase
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/superadmin/laporan" class="nav-link {{ Request::is('superadmin/laporan*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
            Laporan Hasil Quiz
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/superadmin/waktu" class="nav-link {{ Request::is('superadmin/waktu*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-clock"></i>
            <p>
            Batas Waktu
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/superadmin/gantipass" class="nav-link {{ Request::is('superadmin/gantipass*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-key"></i>
            <p>
            Ganti Password
            </p>
        </a>
    </li>

    <li class="nav-item">
    <a href="/logout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
        Logout
        </p>
    </a>
    </li>
</ul>
</nav>