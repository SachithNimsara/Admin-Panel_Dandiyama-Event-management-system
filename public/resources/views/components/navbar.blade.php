{{-- ================================================================
     DANDIYAMA ADMIN PANEL — TOP NAVIGATION BAR
     ================================================================
     Includes:
       - Hamburger toggle to collapse / expand the sidebar
       - Current page title (breadcrumb area)
       - Right-side actions: notification bell, settings, admin avatar

     HOW TO CUSTOMISE (future developer):
       Page Title   : In each view, add @section('pageTitle', 'Your Title')
                      The @yield('pageTitle', 'Dashboard') below will pick it up.
       Notifications: Replace the static badge with a real unread count from
                      the authenticated user's notifications, e.g.
                      auth()->user()->unreadNotifications->count()
       Admin Name   : Replace "AD" / "Admin User" with:
                      {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                      {{ auth()->user()->name }}
       Profile Link : Replace href="#" on the avatar with route('admin.profile')
       Settings Link: Replace href="#" with route('admin.settings.index')
       Notif. Link  : Replace href="#" with route('admin.notifications.index')
================================================================ --}}

<header id="topNavbar">

    {{-- ── Hamburger Sidebar Toggle ────────────────────────────── --}}
    {{-- Calls toggleSidebar() defined in layouts/admin.blade.php  --}}
    <button
        class="sidebar-toggle"
        onclick="toggleSidebar()"
        aria-label="Toggle Sidebar"
        title="Toggle Sidebar"
    >
        <i class="bi bi-list"></i>
    </button>

    {{-- Brand name — only visible when the sidebar is collapsed (desktop) --}}
    <span class="navbar-brand-text me-3">Dandiyama</span>

    {{-- ── Page Title / Breadcrumb ──────────────────────────────── --}}
    <div class="d-none d-md-flex align-items-center gap-2">
        <i class="bi bi-house-door" style="color: var(--gold-primary); opacity: 0.65; font-size: 0.85rem;"></i>
        {{--
            TODO (future developer):
            Each page view should declare its own title using:
              @section('pageTitle', 'Traditional Events')
            The default fallback is 'Dashboard'.
        --}}
        <span class="navbar-page-title">{{ $pageTitle ?? 'Dashboard' }}</span>
    </div>

    {{-- ── Right-side Actions ────────────────────────────────────── --}}
    <div class="navbar-actions">

        {{-- Notification Bell ─────────────────────────────────── --}}
        {{-- TODO: Replace href="#" with route('admin.notifications.index') --}}
        {{-- TODO: Show/hide .notification-badge based on unread count      --}}
        <a
            href="#"
            class="navbar-icon-btn"
            title="Notifications"
            aria-label="Notifications"
        >
            <i class="bi bi-bell"></i>
            {{-- Red dot: hide this span when there are no unread notifications --}}
            <span class="notification-badge" aria-label="New notifications"></span>
        </a>

        {{-- Settings Shortcut ──────────────────────────────────── --}}
        {{-- TODO: Replace href="#" with route('admin.settings.index') --}}
        <a
            href="#"
            class="navbar-icon-btn"
            title="Settings"
            aria-label="Settings"
        >
            <i class="bi bi-gear"></i>
        </a>

        {{-- Thin vertical divider ─────────────────────────────── --}}
        <div
            style="width: 1px; height: 26px;
                   background: rgba(201, 149, 44, 0.22);
                   margin: 0 4px;"
            aria-hidden="true"
        ></div>

        {{-- Admin Profile Avatar ──────────────────────────────── --}}
        {{--
            TODO (future developer):
              1. Replace "AD" with {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
              2. Replace "Admin User" with {{ auth()->user()->name }}
              3. Wrap in a Bootstrap Dropdown for a full profile menu:
                   <div class="dropdown">
                       <div class="admin-avatar dropdown-toggle" data-bs-toggle="dropdown"> ... </div>
                       <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                           <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                       </ul>
                   </div>
        --}}
        <div
            class="admin-avatar"
            role="button"
            title="Admin Profile"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            data-bs-title="Admin User"
        >
            AD
        </div>

    </div>
    {{-- END Right-side Actions --}}

</header>
