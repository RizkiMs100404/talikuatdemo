<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin - Talikuat')</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />

    <style>
        body {
            background: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        /* Dark mode global */
        body.dark {
            background: #121212;
            color: #e4e4e4;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #0d6efd 0%, #0a58ca 100%);
            color: #fff;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            transition: transform 0.3s ease-in-out, background 0.3s;
            z-index: 1040;
        }

        body.dark .sidebar {
            background: linear-gradient(180deg, #1f2937 0%, #111827 100%);
        }

        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        .sidebar a {
            color: inherit;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.3s;
            border-radius: 6px;
            margin: 2px 10px;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.15);
            padding-left: 25px;
        }

        .sidebar .active {
            background: rgba(255, 255, 255, 0.25);
            font-weight: bold;
        }

        body.dark .sidebar a:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        body.dark .sidebar .active {
            background: rgba(255, 255, 255, 0.15);
        }

        /* Main panel */
        .main-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            margin-left: 250px;
            transition: margin-left 0.3s ease-in-out;
        }

        .main-panel.expanded {
            margin-left: 0;
        }

        /* Navbar */
        nav.navbar {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding-left: 1rem;
            padding-right: 1rem;
            transition: background 0.3s, color 0.3s;
        }

        body.dark nav.navbar {
            background: #1f2937;
            color: #e4e4e4;
        }

        /* Content wrapper */
        .content-wrapper {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            animation: fadeIn 0.4s ease-in-out;
        }

        /* Footer */
        footer {
            background: #fff;
            padding: 15px;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
            transition: background 0.3s, color 0.3s;
        }

        body.dark footer {
            background: #1f2937;
            color: #a1a1aa;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-panel {
                margin-left: 0;
            }
        }

        /* Dark mode toggle styles */
        .darkmode-toggle {
            width: 50px;
            height: 26px;
            background-color: #ccc;
            border-radius: 50px;
            position: relative;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

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
    @stack('styles')
</head>

<body>
    <div class="layout-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebarMenu">
            @include('layouts.partials.sidebar')
        </aside>

        <!-- Main Panel -->
        <div class="main-panel" id="mainPanel">
            <!-- Navbar -->
            @include('layouts.partials.navbar')

            <!-- Content -->
            <div class="content-wrapper">
                @yield('contents')
            </div>

            <!-- Footer -->
            @include('layouts.partials.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle
        const sidebar = document.getElementById("sidebarMenu");
        const mainPanel = document.getElementById("mainPanel");
        document.getElementById("sidebarToggle")?.addEventListener("click", function () {
            if (window.innerWidth <= 768) {
                sidebar.classList.toggle("show");
            } else {
                sidebar.classList.toggle("collapsed");
                mainPanel.classList.toggle("expanded");
            }
        });

        // Dark mode toggle
        const toggle = document.getElementById("darkModeToggle");

        // Update toggle circle icon and position
        function updateToggleIcon() {
            const isDark = document.body.classList.contains("dark");
            const circle = toggle.querySelector(".toggle-circle");
            const iconLight = circle.querySelector(".icon-light");
            const iconDark = circle.querySelector(".icon-dark");

            if (isDark) {
                circle.style.left = "26px";
                iconLight.style.opacity = "0";
                iconDark.style.opacity = "1";
            } else {
                circle.style.left = "2px";
                iconLight.style.opacity = "1";
                iconDark.style.opacity = "0";
            }
        }

        // Toggle dark mode & save to localStorage
        function toggleDarkMode() {
            document.body.classList.toggle("dark");
            const theme = document.body.classList.contains("dark") ? "dark" : "light";
            localStorage.setItem("theme", theme);
            updateToggleIcon();
        }

        // Set theme on page load (without reload)
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark");
        }

        document.addEventListener("DOMContentLoaded", () => {
            if (toggle) {
                toggle.addEventListener("click", toggleDarkMode);
                updateToggleIcon(); // update icon on load
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
