<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') | Dandiyama</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    {{-- Google Fonts: Cinzel (display/headings) + Lato (body) --}}
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        /* ================================================================
           DANDIYAMA — Sri Lankan Cultural Theme
           ================================================================
           Color Palette:
             --maroon-deep  : Deep maroon, primary brand color
             --maroon-mid   : Mid-tone maroon for gradients
             --temple-red   : Temple-inspired red, accent
             --gold-primary : Gold, cultural highlight color
             --gold-light   : Light gold for text on dark backgrounds
             --gold-pale    : Very pale gold for dividers / backgrounds
             --ivory        : Main page background
             --ivory-dark   : Slightly darker ivory for cards/borders
        ================================================================ */

        :root {
            --maroon-deep:   #5C1A1A;
            --maroon-mid:    #7B2424;
            --temple-red:    #B22222;
            --gold-primary:  #C9952C;
            --gold-light:    #E8C46A;
            --gold-pale:     #F5E6A3;
            --ivory:         #FFF8EC;
            --ivory-dark:    #F2E8D0;
            --sidebar-width: 260px;
            --navbar-height: 64px;
            --text-dark:     #2C1810;
            --text-muted:    #8B6355;
        }

        /* ── Reset & Base ──────────────────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--ivory);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* ── Sidebar ───────────────────────────────────────────────── */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--maroon-deep) 0%, #3D0F0F 100%);
            z-index: 1050;
            transition: transform 0.3s ease;
            overflow-y: auto;
            overflow-x: hidden;
            scrollbar-width: thin;
            scrollbar-color: var(--gold-primary) transparent;
        }
        #sidebar::-webkit-scrollbar       { width: 4px; }
        #sidebar::-webkit-scrollbar-thumb { background: var(--gold-primary); border-radius: 2px; }

        /* Decorative right-edge gold gradient line */
        #sidebar::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, var(--gold-primary), transparent, var(--gold-primary));
        }

        /* Desktop collapsed state */
        #sidebar.collapsed { transform: translateX(-100%); }

        /* ── Sidebar Brand ─────────────────────────────────────────── */
        .sidebar-brand {
            padding: 20px 16px 16px;
            border-bottom: 1px solid rgba(201, 149, 44, 0.3);
        }
        .sidebar-brand-icon {
            font-size: 1.8rem;
            color: var(--gold-primary);
            margin-right: 10px;
            filter: drop-shadow(0 0 6px rgba(201, 149, 44, 0.5));
        }
        .sidebar-brand-title {
            font-family: 'Cinzel', serif;
            font-size: 1.45rem;
            font-weight: 700;
            color: var(--gold-primary);
            letter-spacing: 2px;
            text-shadow: 0 0 20px rgba(201, 149, 44, 0.35);
            margin: 0;
            line-height: 1.1;
        }
        .sidebar-brand-subtitle {
            font-size: 0.62rem;
            color: rgba(232, 196, 106, 0.65);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-top: 3px;
        }

        /* ── Sidebar Navigation ────────────────────────────────────── */
        .sidebar-nav {
            padding: 10px 0 24px;
            list-style: none;
            margin: 0;
        }
        .sidebar-section-label {
            font-size: 0.6rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(201, 149, 44, 0.45);
            padding: 14px 20px 4px;
            font-weight: 700;
        }
        .sidebar-nav .nav-item  { margin: 2px 8px; }
        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 10px 14px;
            border-radius: 8px;
            color: rgba(255, 240, 210, 0.82);
            font-size: 0.875rem;
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }
        .sidebar-nav .nav-link:hover {
            background: rgba(201, 149, 44, 0.13);
            color: var(--gold-light);
            transform: translateX(3px);
        }
        /* Active state — set server-side with request()->routeIs() */
        .sidebar-nav .nav-link.active {
            background: linear-gradient(90deg, rgba(201, 149, 44, 0.22), rgba(201, 149, 44, 0.04));
            color: var(--gold-light);
            font-weight: 600;
            border-left-color: var(--gold-primary);
        }
        .nav-icon {
            font-size: 1.05rem;
            min-width: 20px;
            text-align: center;
            color: var(--gold-primary);
            opacity: 0.88;
        }
        .sidebar-nav .nav-link:hover .nav-icon,
        .sidebar-nav .nav-link.active .nav-icon {
            opacity: 1;
            filter: drop-shadow(0 0 4px rgba(201, 149, 44, 0.65));
        }

        /* ── Top Navbar ────────────────────────────────────────────── */
        #topNavbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            height: var(--navbar-height);
            background: linear-gradient(90deg, var(--maroon-deep) 0%, var(--maroon-mid) 100%);
            z-index: 1040;
            display: flex;
            align-items: center;
            padding: 0 24px;
            box-shadow: 0 2px 12px rgba(92, 26, 26, 0.38);
            border-bottom: 2px solid var(--gold-primary);
            transition: left 0.3s ease;
        }
        /* Thin shimmer line at very top of navbar */
        #topNavbar::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg,
                transparent,
                var(--gold-primary),
                var(--gold-light),
                var(--gold-primary),
                transparent);
        }
        /* When sidebar is collapsed, navbar stretches full-width */
        #topNavbar.expanded { left: 0; }

        /* Brand text shown only when sidebar is collapsed */
        .navbar-brand-text {
            font-family: 'Cinzel', serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--gold-primary);
            letter-spacing: 2px;
            display: none;
        }
        #topNavbar.expanded .navbar-brand-text { display: block; }

        .navbar-page-title {
            font-size: 0.875rem;
            color: rgba(255, 240, 210, 0.75);
        }

        /* Right-side icon buttons */
        .navbar-actions    { margin-left: auto; display: flex; align-items: center; gap: 8px; }
        .navbar-icon-btn {
            background: rgba(201, 149, 44, 0.1);
            border: 1px solid rgba(201, 149, 44, 0.2);
            border-radius: 8px;
            width: 38px; height: 38px;
            display: flex; align-items: center; justify-content: center;
            color: var(--gold-light);
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            position: relative;
        }
        .navbar-icon-btn:hover {
            background: rgba(201, 149, 44, 0.25);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(201, 149, 44, 0.18);
        }
        /* Red dot indicator on notification bell */
        .notification-badge {
            position: absolute;
            top: 6px; right: 6px;
            width: 8px; height: 8px;
            background: var(--temple-red);
            border-radius: 50%;
            border: 1.5px solid var(--maroon-deep);
        }

        /* Admin avatar circle */
        .admin-avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--gold-primary), var(--temple-red));
            border: 2px solid var(--gold-primary);
            display: flex; align-items: center; justify-content: center;
            font-size: 0.82rem;
            font-weight: 700;
            color: white;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Cinzel', serif;
            letter-spacing: 1px;
        }
        .admin-avatar:hover {
            transform: scale(1.07);
            box-shadow: 0 0 14px rgba(201, 149, 44, 0.5);
        }

        /* Hamburger button */
        .sidebar-toggle {
            background: transparent;
            border: none;
            color: var(--gold-light);
            font-size: 1.35rem;
            padding: 4px;
            cursor: pointer;
            transition: color 0.2s;
            margin-right: 16px;
            line-height: 1;
        }
        .sidebar-toggle:hover { color: var(--gold-primary); }

        /* ── Main Content ──────────────────────────────────────────── */
        #mainContent {
            margin-left: var(--sidebar-width);
            margin-top: var(--navbar-height);
            padding: 28px;
            min-height: calc(100vh - var(--navbar-height));
            transition: margin-left 0.3s ease;
            background-color: var(--ivory);
        }
        #mainContent.expanded { margin-left: 0; }

        /* ── Welcome Banner ────────────────────────────────────────── */
        .welcome-banner {
            background: linear-gradient(135deg, var(--maroon-deep) 0%, var(--maroon-mid) 55%, #8B2020 100%);
            border-radius: 16px;
            padding: 36px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(92, 26, 26, 0.28);
            margin-bottom: 28px;
        }
        /* SVG liyavel/lotus-inspired tile overlay */
        .welcome-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none'%3E%3Cg fill='%23C9952C' fill-opacity='0.06'%3E%3Cpath d='M40 8 L46 22 L62 22 L50 32 L55 46 L40 36 L25 46 L30 32 L18 22 L34 22 Z'/%3E%3Ccircle cx='40' cy='62' r='5'/%3E%3C/g%3E%3Cpath d='M8 40 Q24 24 40 40 Q56 56 72 40' stroke='%23C9952C' stroke-opacity='0.06' stroke-width='1.5' fill='none'/%3E%3C/g%3E%3C/svg%3E");
        }
        /* Large decorative floral glyph on the right */
        .welcome-banner::after {
            content: '❁';
            position: absolute;
            right: 36px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 130px;
            color: rgba(201, 149, 44, 0.07);
            pointer-events: none;
        }
        .welcome-banner .banner-title {
            font-family: 'Cinzel', serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--gold-light);
            text-shadow: 0 2px 8px rgba(0,0,0,0.25);
            margin-bottom: 8px;
            position: relative;
        }
        .welcome-banner .banner-subtitle {
            font-size: 1rem;
            color: rgba(255, 240, 210, 0.82);
            margin-bottom: 18px;
            position: relative;
        }
        .banner-divider {
            width: 72px; height: 3px;
            background: linear-gradient(90deg, var(--gold-primary), var(--gold-light));
            border-radius: 2px;
            margin-bottom: 18px;
        }
        .banner-meta {
            font-size: 0.8rem;
            color: rgba(255, 240, 210, 0.58);
            position: relative;
        }

        /* ── Stat Cards ────────────────────────────────────────────── */
        .stat-card {
            background: white;
            border-radius: 14px;
            padding: 22px 20px;
            box-shadow: 0 2px 16px rgba(92, 26, 26, 0.07);
            border: 1px solid rgba(201, 149, 44, 0.11);
            transition: all 0.25s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        /* Color strip along the top edge — controlled per-card via CSS var */
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--card-accent, var(--gold-primary));
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 32px rgba(92, 26, 26, 0.14);
            border-color: rgba(201, 149, 44, 0.28);
        }
        .stat-icon {
            width: 52px; height: 52px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.45rem;
            margin-bottom: 14px;
        }
        .stat-number {
            font-family: 'Cinzel', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1;
            margin-bottom: 4px;
        }
        .stat-label {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            margin-bottom: 10px;
        }
        .stat-growth {
            font-size: 0.78rem;
            display: flex;
            align-items: center;
            gap: 3px;
        }
        .stat-growth.positive { color: #2E7D32; }
        .stat-growth.negative { color: var(--temple-red); }

        /* ── Section Headings ──────────────────────────────────────── */
        .section-heading {
            font-family: 'Cinzel', serif;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--maroon-deep);
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--gold-pale);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-heading::before {
            content: '';
            width: 4px; height: 18px;
            background: var(--gold-primary);
            border-radius: 2px;
            display: inline-block;
        }

        /* ── Quick Action Cards ────────────────────────────────────── */
        .quick-action-card {
            background: white;
            border-radius: 12px;
            padding: 18px 12px;
            box-shadow: 0 2px 12px rgba(92, 26, 26, 0.07);
            border: 1px solid rgba(201, 149, 44, 0.11);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            text-decoration: none;
            color: var(--text-dark);
            transition: all 0.25s ease;
        }
        .quick-action-card:hover {
            background: linear-gradient(135deg, var(--maroon-deep), var(--maroon-mid));
            color: var(--gold-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(92, 26, 26, 0.22);
        }
        .qa-icon {
            font-size: 1.75rem;
            margin-bottom: 8px;
            color: var(--gold-primary);
        }
        .quick-action-card:hover .qa-icon { color: var(--gold-light); }
        .qa-label { font-size: 0.78rem; font-weight: 600; }

        /* ── Activity / Info Cards (shared container style) ────────── */
        .activity-card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 2px 16px rgba(92, 26, 26, 0.07);
            border: 1px solid rgba(201, 149, 44, 0.11);
        }

        /* ── Booking Status Badges ─────────────────────────────────── */
        .activity-badge {
            font-size: 0.68rem;
            padding: 3px 10px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
        }
        .badge-event   { background: rgba(178, 34,  34,  0.1); color: var(--temple-red); }
        .badge-booking { background: rgba(201, 149, 44,  0.1); color: #9A6D10;           }
        .badge-vendor  { background: rgba(92,  26,  26,  0.1); color: var(--maroon-deep);}

        /* ── Footer ────────────────────────────────────────────────── */
        .admin-footer {
            text-align: center;
            padding: 18px 20px;
            font-size: 0.76rem;
            color: var(--text-muted);
            border-top: 1px solid var(--ivory-dark);
            margin-top: 32px;
        }

        /* ── Responsive ────────────────────────────────────────────── */
        @media (max-width: 768px) {
            /* On mobile, sidebar is hidden off-screen by default */
            #sidebar { transform: translateX(-100%); }
            #sidebar.mobile-open { transform: translateX(0); }

            /* Navbar always full-width on mobile */
            #topNavbar, #topNavbar.expanded { left: 0; }

            /* Content fills full width */
            #mainContent, #mainContent.expanded { margin-left: 0; padding: 16px; }

            .welcome-banner            { padding: 24px 20px; }
            .welcome-banner .banner-title { font-size: 1.25rem; }
            .welcome-banner::after     { font-size: 80px; right: 16px; }
        }

        /* Semi-transparent dark overlay behind mobile sidebar */
        #sidebarOverlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.48);
            z-index: 1049;
        }
        #sidebarOverlay.active { display: block; }

        @media (min-width: 769px) {
            #sidebarOverlay { display: none !important; }
        }
    </style>

    {{-- Per-page extra styles --}}
    @stack('styles')
</head>
<body>

    {{-- ================================================================
         MOBILE OVERLAY
         Tapping outside the sidebar on small screens closes it.
         ================================================================ --}}
    <div id="sidebarOverlay" onclick="toggleSidebar()"></div>

    {{-- ================================================================
         SIDEBAR
         Partial: resources/views/partials/sidebar.blade.php
         ================================================================ --}}
    @include('partials.sidebar')

    {{-- ================================================================
         TOP NAVBAR
         Partial: resources/views/partials/navbar.blade.php
         ================================================================ --}}
    @include('partials.navbar')

    {{-- ================================================================
         MAIN CONTENT AREA
         Page-specific content is injected here via @yield('content').
         ================================================================ --}}
    <main id="mainContent">

        @yield('content')

        {{-- Site-wide footer --}}
        <footer class="admin-footer">
            &copy; {{ date('Y') }} <strong>Dandiyama</strong> &mdash;
            Sri Lankan Traditional Event Management System. All rights reserved.
        </footer>

    </main>

    {{-- Bootstrap 5 JS Bundle (includes Popper.js) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /**
         * Dandiyama Admin — Sidebar Toggle
         * ---------------------------------
         * Behaviour differs between desktop and mobile:
         *   Desktop : collapses sidebar, pushes main content to fill space.
         *   Mobile  : slides sidebar in from the left with a dark overlay.
         *
         * TODO (future developer): Persist the collapsed state in localStorage
         * so the user's preference survives a page reload.
         *   e.g. localStorage.setItem('sidebarCollapsed', true)
         */
        const sidebar     = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const topNavbar   = document.getElementById('topNavbar');
        const overlay     = document.getElementById('sidebarOverlay');

        function toggleSidebar() {
            if (window.innerWidth <= 768) {
                // Mobile: slide in/out with overlay backdrop
                sidebar.classList.toggle('mobile-open');
                overlay.classList.toggle('active');
            } else {
                // Desktop: collapse sidebar, expand navbar + content
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
                topNavbar.classList.toggle('expanded');
            }
        }

        /**
         * Client-side Active Nav Link Highlight
         * --------------------------------------
         * Highlights the clicked sidebar item immediately on the client side.
         *
         * TODO (future developer): Replace this with server-side detection in
         * sidebar.blade.php using Blade logic like:
         *   class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
         * This ensures the correct item is highlighted after a full page load.
         */
        document.querySelectorAll('.sidebar-nav .nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                document.querySelectorAll('.sidebar-nav .nav-link')
                        .forEach(function (l) { l.classList.remove('active'); });
                this.classList.add('active');
            });
        });

        // Clean up mobile state when the viewport is resized to desktop
        window.addEventListener('resize', function () {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('mobile-open');
                overlay.classList.remove('active');
            }
        });

        // Initialize Bootstrap tooltips (used on admin avatar)
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipEls = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipEls.forEach(function (el) {
                new bootstrap.Tooltip(el);
            });
        });
    </script>

    {{-- Per-page extra scripts --}}
    @stack('scripts')

</body>
</html>
