<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .header-image{
            height: 80px !important;
        }
        .topbar {
            background-color: #E2E6EC;
            color: #fff;
            font-size: 14px;
            padding: 10px 0;
            position: relative;
            z-index: 1051;
        }
        .header{
            margin-top: 20px;
        }

        .topbar a {
            color: #5b6573;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 600;
        }

        .topbar a:hover {
            color: #007bff;
        }

        .topbar-link {
            margin-right: 15px;
            font-size: 14px;
        }

        .topbar-center {
            flex: 1;
            overflow: hidden;
            position: relative;
            height: 20px;
            padding-left: 10px;
        }

        .topbar-right {
            padding-left: 10px;
        }

        .ticker-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .ticker-content {
            display: inline-block;
            white-space: nowrap;
            animation: ticker 15s linear infinite;
        }

        .ticker-content p {
            display: inline-block;
            margin: 0 50px 0 0;
            font-size: 13px;
            font-style: italic;
            font-weight: 400;
            color: #000;
        }

        @keyframes ticker {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .topbar-phone {
            white-space: nowrap;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer !important;
        }

        @media (max-width: 768px) {
            .topbar {
                display: none;
            }
            .header{
                margin-top: 0px !important;
            }
            .mobile-sidebar{
                margin-top: 0px !important;
            }
        }


        .navmenu .dropdown ul a:hover {
            background-color: #0E3EE3;
            color: #fff !important;
        }

        .navmenu .dropdown ul a.active {
            background-color: #0E3EE3;
            color: #fff !important;
        }

        .footer-links ul li a.active {
            color: #fff !important;
        }

        /* Mobile Responsive */
        @media (max-width: 1199px) {
            .sitename {
                font-size: 20px !important;
            }
            .header{
                margin-top: 20px;
            }
            .mobile-sidebar{
                margin-top: 20px;
            }
            .header-image{
                height: 40px !important;
            }
        }

        /* WhatsApp Button */
        #whatsapp-btn {
            position: fixed;
            right: 13px;
            bottom: 60px;
            width: 45px;
            height: 45px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            font-size: 20px;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        #whatsapp-btn:hover {
            background-color: #1DA851;
            color: white;
        }

        /* Dropdown Container */
        .desktop-menu .dropdown {
            position: relative;
            display: inline-block;
        }

        .desktop-menu .dropdown>a {
            padding: 10px 10px;
            display: flex;
            align-items: center;
            text-decoration: none;
            /* font-weight: 600; */
            /* color: #333; */
            transition: all 0.2s ease;
        }

        .desktop-menu .dropdown:hover .dropdown-menu {
            display: flex;
        }

        /* Dropdown Menu */
        .desktop-menu .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            padding: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            gap: 40px;
            z-index: 1000;
            width: auto;
            margin: 0;
            line-height: 1.4;
        }

        /* Columns */
        .desktop-menu .dropdown-column {
            flex: 1;
            min-width: 200px;
        }

        /* Headings */
        .desktop-menu .dropdown-column h4 {
            font-size: 15px;
            font-weight: 700;
            color: #7c8492;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* Menu Items */
        .desktop-menu .menu-item {
            padding: 6px 0 !important;
        }

        /* Links */
        .desktop-menu .dropdown-column a {
            display: block;
            text-decoration: none;
            font-size: 15px;
            color: #333;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .desktop-menu .dropdown-column a small {
            display: block;
            color: #666;
            font-weight: 400;
            font-size: 13px;
            margin-top: 2px;
            line-height: 1;
        }

        /* Hover Effects */
        .desktop-menu .dropdown-column a:hover {
            color: #007bff !important;
            border-left: 3px solid #007bff;
            padding-left: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }

        .desktop-menu .dropdown-column a:hover .item-name {
            color: #007bff !important;
        }

        .desktop-menu .menu-item:hover {
            background: #f8f9fa;
            border-radius: 4px;
        }

        /* Spacing Fixes */
        .desktop-menu .dropdown-menu,
        .desktop-menu .dropdown-column {
            margin: 0;
            /* padding: 0; */
        }

        .desktop-menu .menu-item {
            margin: 0px 0px 10px 0px !important;
            /* padding: 0; */
        }

        .desktop-menu .dropdown-column a {
            display: block;
            padding: 8px 12px;
            margin: -8px -12px;
        }

        .desktop-menu .dropdown-column .menu-link {
            display: flex;
            flex-direction: column;
        }

        .desktop-menu .item-name {
            font-size: 15px;
            font-weight: 600;
            color: #333;
            line-height: 1.2;
        }

        .desktop-menu .item-meta {
            font-size: 13px;
            color: #666;
            font-weight: 400;
            margin-top: 2px;
            line-height: 1.2;
        }

        /* Mobile Sidebar */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            width: 300px;
            height: 100vh;
            background-color: #fff;
            z-index: 1050;
            padding: 20px;
            transition: left 0.3s ease;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .mobile-sidebar.active {
            left: 0;
        }

        .sidebar-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1040;
            display: none;
        }

        .sidebar-backdrop.active {
            display: block;
        }

        .sidebar-logo {
            max-height: 30px;
        }

        .mobile-menu li a {
            display: block;
            padding: 12px 0;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            font-size: 15px;
        }

        .mobile-menu li.has-dropdown>a {
            cursor: pointer;
        }

        .mobile-menu .submenu {
            display: none;
            padding-left: 15px;
        }

        .mobile-menu .has-dropdown.active .submenu {
            display: block;
        }

        .mobile-menu .submenu a {
            font-size: 14px;
            color: #555;
            padding: 8px 0;
        }

        .btn-close {
            background: none;
            border: none;
            font-size: 22px;
        }

        .btn-danger {
            background-color: #f24b32;
            border: none;
        }

        .btn-outline-primary {
            border: 1px solid #007bff;
            color: #007bff;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')

</head>

<body class="index-page">

    @include('frontend.layouts.header')


    <main class="main">
        @yield('page_title')
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="fas fa-arrow-up"></i></a>
    <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" target="_blank" id="whatsapp-btn"
        class="whatsapp-btn d-flex align-items-center justify-content-center">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @yield('script')
    @include('frontend.layouts.script')
    {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.querySelector('.mobile-nav-toggle');
        const sidebar = document.getElementById('mobileSidebar');
        const backdrop = document.getElementById('sidebarBackdrop');
        const closeBtn = document.getElementById('closeSidebar');
        const dropdownLinks = document.querySelectorAll('.has-dropdown > a');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            backdrop.classList.add('active');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.remove('active');
            backdrop.classList.remove('active');
        });

        backdrop.addEventListener('click', () => {
            sidebar.classList.remove('active');
            backdrop.classList.remove('active');
        });

        dropdownLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                link.parentElement.classList.toggle('active');
            });
        });
    });
</script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.querySelector('.mobile-nav-toggle');
            const sidebar = document.getElementById('mobileSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            const closeBtn = document.getElementById('closeSidebar');
            const dropdownLinks = document.querySelectorAll('.has-dropdown > a');
            const desktopMenu = document.querySelector(
            '.desktop-menu'); // Make sure your desktop menu has this class

            toggleBtn.addEventListener('click', () => {
                sidebar.classList.add('active');
                backdrop.classList.add('active');
                if (desktopMenu) desktopMenu.style.display = 'none'; // Hide desktop menu
            });

            const closeSidebar = () => {
                sidebar.classList.remove('active');
                backdrop.classList.remove('active');
                // if (desktopMenu) desktopMenu.style.display = '';
            };

            closeBtn.addEventListener('click', closeSidebar);
            backdrop.addEventListener('click', closeSidebar);

            dropdownLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    link.parentElement.classList.toggle('active');
                });
            });
        });
    </script>


</body>

</html>
