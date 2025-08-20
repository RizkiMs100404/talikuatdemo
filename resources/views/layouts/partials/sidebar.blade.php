<!-- SIDEBAR -->
<aside id="sidebar" class="d-flex flex-column shadow-sm vh-100 position-fixed bg-white transition-all" style="width:250px;">
    <!-- Brand -->
<div class="brand-box px-3 py-4 d-flex align-items-center border-bottom">
    <img src="{{ asset('images/logo.png') }}" alt="TaliKuat Logo" 
         class="brand-logo me-2">
    <span class="brand-text">TaliKuat</span>
</div>


    <!-- Menu -->
    <ul class="nav flex-column mt-3">
        <li class="nav-item">
            <a href="/dashboard.index" class="nav-link px-3 py-2 d-flex align-items-center {{ request()->is('dashboard.index') ? 'active' : '' }}">
                <i class="bi bi-file-easel me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/manajeman.index" class="nav-link px-3 py-2 d-flex align-items-center {{ request()->is('manajeman.index') ? 'active' : '' }}">
                <i class="bi bi-person-bounding-box me-2"></i> Manajemen User
            </a>
        </li>

        <!-- Masterdata -->
        <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex justify-content-between align-items-center {{ request()->is('masterdata.*') ? 'active' : '' }}"
               data-bs-toggle="collapse" href="#masterdataMenu" role="button" aria-expanded="{{ request()->is('masterdata.*') ? 'true' : 'false' }}">
                <span><i class="bi bi-mastodon me-2"></i> Masterdata</span>
                <i class="bi bi-chevron-down small"></i>
            </a>
            <div class="collapse ps-4 {{ request()->is('masterdata.*') ? 'show' : '' }}" id="masterdataMenu">
                <a href="/masterdata.jenispekerjaan" class="nav-link py-1 {{ request()->is('masterdata.jenispekerjaan') ? 'active' : '' }}">Jenis Pekerjaan</a>
                <a href="/masterdata.kontraktor" class="nav-link py-1 {{ request()->is('masterdata.kontraktor') ? 'active' : '' }}">Data Kontraktor</a>
                <a href="/masterdata.konsultan" class="nav-link py-1 {{ request()->is('masterdata.konsultan') ? 'active' : '' }}">Data Konsultan</a>
            </div>
        </li>

        <!-- Data Umum -->
        <li class="nav-item">
            <a href="/dataumum.index" class="nav-link px-3 py-2 d-flex align-items-center {{ request()->is('dataumum.index') ? 'active' : '' }}">
                <i class="bi bi-bar-chart-line me-2"></i> Data Umum
            </a>
        </li>

        <!-- Jadwal -->
        <li class="nav-item">
            <a href="/jadual.index" class="nav-link px-3 py-2 d-flex align-items-center {{ request()->is('jadual.index') ? 'active' : '' }}">
                <i class="bi bi-journal-bookmark me-2"></i> Jadwal
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex justify-content-between align-items-center {{ request()->is('laporan*') ? 'active' : '' }}"
               data-bs-toggle="collapse" href="#laporanMenu" role="button" aria-expanded="{{ request()->is('laporan*') ? 'true' : 'false' }}">
                <span><i class="bi bi-book me-2"></i> Laporan</span>
                <i class="bi bi-chevron-down small"></i>
            </a>
            <div class="collapse ps-4 {{ request()->is('laporan*') ? 'show' : '' }}" id="laporanMenu">
                <a href="/laporanm.index" class="nav-link py-1 {{ request()->is('laporanm.index') ? 'active' : '' }}">Laporan Mingguan UPTD</a>
                <a href="/laporanb.index" class="nav-link py-1 {{ request()->is('laporanb.index') ? 'active' : '' }}">Laporan Bulanan UPTD</a>
                <a href="/laporanu.index" class="nav-link py-1 {{ request()->is('laporanu.index') ? 'active' : '' }}">Laporan Keuangan</a>
                <a href="/laporanmk.index" class="nav-link py-1 {{ request()->is('laporanmk.index') ? 'active' : '' }}">Laporan Mingguan Konsultan</a>
                <a href="/laporanbk.index" class="nav-link py-1 {{ request()->is('laporanbk.index') ? 'active' : '' }}">Laporan Bulanan Konsultan</a>
            </div>
        </li>

        <!-- Sign Out -->
        <li class="nav-item mt-auto border-top">
            <a href="/logout" class="nav-link px-3 py-2 d-flex align-items-center text-danger hover-bg-danger">
                <i class="bi bi-door-open me-2"></i> Sign Out
            </a>
        </li>
    </ul>
</aside>

<style>
    .transition-all { transition: all 0.3s ease; }

    /* Base */
    #sidebar .nav-link {
        color: #212529;
        border-radius: 8px;
    }
    #sidebar .nav-link i {
        color: currentColor;
    }

    /* Hover Light */
    #sidebar .nav-link:hover {
        background-color: #f1f5ff;
        color: #0d6efd;
    }

    /* Active Light */
    #sidebar .nav-link.active {
        background-color: #0d6efd;
        color: #fff !important;
        font-weight: 600;
    }
    #sidebar .nav-link.active i {
        color: #fff !important;
    }

    /* Dark Mode Sidebar */
    body.dark #sidebar {
        background: #1e1e2d !important;
        color: #e4e4e4;
    }
    body.dark #sidebar a {
        color: #e4e4e4;
    }
    body.dark #sidebar a:hover {
        background: rgba(255,255,255,0.08);
    }
    body.dark #sidebar .active {
        background: rgba(255,255,255,0.15);
    }

    /* Brand container */
.brand-box {
    justify-content: flex-start;
    padding-left: 20px; /* beri jarak dari kiri */
}

/* Logo style */
.brand-logo {
    width: 42px;
    height: 42px;
    object-fit: contain;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}

/* Brand text style - Light Mode */
.brand-text {
    font-size: 1.35rem;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(90deg, #007bff, #00c6ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: 0.5px;
}

/* Brand text style - Dark Mode */
body.dark .brand-text {
    background: linear-gradient(90deg, #66b2ff, #66fff9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Responsive tweak */
@media (max-width: 768px) {
    .brand-logo {
        width: 36px;
        height: 36px;
    }
    .brand-text {
        font-size: 1.15rem;
    }
}


</style>
