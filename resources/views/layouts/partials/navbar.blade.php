<!-- NAVBAR -->
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-gradient shadow-sm px-4 py-2 sticky-top transition-all"
     style="background: linear-gradient(90deg, #ffffff, #f8f9fa);">

    <!-- Toggle Sidebar -->
    <button class="btn btn-outline-primary me-3 shadow-sm hover-scale" id="sidebarToggle" title="Menu">
        <i class='bx bx-menu fs-5'></i>
    </button>

    <!-- Brand -->
    <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="#">
        <span class="brand-text">Tali Kuat</span>
    </a>

    <!-- Search Form -->
    <form class="d-none d-md-flex ms-4 flex-grow-0" style="max-width: 250px;" action="#">
        <div class="input-group shadow-sm rounded-pill overflow-hidden">
            <input type="search" class="form-control form-control-sm border-0" placeholder="Search..." aria-label="Search"
                   style="padding-left: 15px; transition: 0.3s;">
            <button class="btn btn-primary btn-sm px-3" type="submit">
                <i class='bx bx-search'></i>
            </button>
        </div>
    </form>

    <!-- Right Icons -->
    <ul class="navbar-nav ms-auto align-items-center">
        <!-- Dark/Light Mode -->
        <li class="nav-item me-3">
            <div class="darkmode-toggle" id="darkModeToggle" role="button" tabindex="0" aria-label="Toggle dark mode" style="user-select:none;">
                <div class="toggle-circle">
                    <i class="bi bi-sun-fill icon-light"></i>
                    <i class="bi bi-moon-fill icon-dark"></i>
                </div>
            </div>
        </li>

        <!-- Notifications -->
        <li class="nav-item me-3 position-relative">
            <a href="#" class="nav-link position-relative hover-scale" title="Notifications">
                <i class='bx bxs-bell fs-4 text-secondary'></i>
                <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle shadow-sm">
                    8
                </span>
            </a>
        </li>

        <!-- Profile -->
        <li class="nav-item">
            <a href="#" class="nav-link d-flex align-items-center hover-scale" title="Profile">
                <img src="{{ asset('template/images/gambar.PNG') }}" alt="Profile"
                     class="rounded-circle border border-2" width="40" height="40">
            </a>
        </li>
    </ul>
</nav>

<style>
    /* Toggle Container */
    .darkmode-toggle {
        width: 50px;
        height: 26px;
        background-color: #ccc;
        border-radius: 50px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Bulatan + Icon */
    .toggle-circle {
        width: 22px;
        height: 22px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 2px;
        left: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: left 0.3s ease, color 0.3s ease;
        font-size: 14px;
        color: #f39c12;
    }

    /* Icon positioning & smooth fade */
    .toggle-circle .icon-light,
    .toggle-circle .icon-dark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .toggle-circle .icon-light {
        opacity: 1;
        color: #f39c12;
        z-index: 2;
    }

    .toggle-circle .icon-dark {
        opacity: 0;
        color: #f1c40f;
        z-index: 1;
    }

    /* Mode Dark Aktif */
    body.dark .darkmode-toggle {
        background-color: #555;
    }

    body.dark .toggle-circle {
        left: 26px;
        color: #f1c40f;
    }

    body.dark .toggle-circle .icon-light {
        opacity: 0;
        z-index: 1;
    }

    body.dark .toggle-circle .icon-dark {
        opacity: 1;
        z-index: 2;
    }
</style>
