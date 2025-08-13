<!-- SIDEBAR -->
<aside id="sidebar" class="d-flex flex-column shadow-sm vh-100 position-fixed bg-white transition-all" style="width:250px;">
    <!-- Brand -->
    <div class="px-3 py-4 d-flex align-items-center border-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="me-2 text-primary bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>
        <span class="fw-bold fs-5 text-primary">TaliKuat</span>
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

</style>
