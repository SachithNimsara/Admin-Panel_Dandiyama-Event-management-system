{{-- ================================================================
     DANDIYAMA ADMIN PANEL — LEFT SIDEBAR NAVIGATION
     ================================================================
     Contains all primary navigation links for the admin panel.
     Links are grouped into logical sections with labelled dividers.

     HOW TO ADD REAL NAVIGATION (future developer):
       1. Define named routes in routes/web.php, e.g.:
            Route::get('/admin/events', [EventController::class, 'index'])
                 ->name('admin.events.index');

       2. Replace href="#" with route('admin.events.index')

       3. Set the active class conditionally using Blade:
            class="nav-link {{ request()->routeIs('admin.events.*') ? 'active' : '' }}"

       4. The JavaScript click-handler in layouts/admin.blade.php
          provides immediate visual feedback, but server-side detection
          ensures correctness after a full page load.
================================================================ --}}

<nav id="sidebar" aria-label="Admin sidebar navigation">

    {{-- ── Brand / Logo ─────────────────────────────────────── --}}
    <div class="sidebar-brand d-flex align-items-center">
        {{-- Lotus / flower icon representing Sri Lankan cultural identity --}}
        <span class="sidebar-brand-icon" aria-hidden="true">
            <i class="bi bi-flower1"></i>
        </span>
        <div>
            <h1 class="sidebar-brand-title">Dandiyama</h1>
            <p class="sidebar-brand-subtitle mb-0">Event Management</p>
        </div>
    </div>

    {{-- ── Navigation Menu ──────────────────────────────────── --}}
    <ul class="sidebar-nav" role="menubar">

        {{-- ━━━━━━━━━━  MAIN  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Main</li>

        {{-- Dashboard --}}
        {{-- TODO: href="{{ route('admin.dashboard') }}" --}}
        {{-- TODO: class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link active" role="menuitem" aria-current="page">
                <i class="bi bi-speedometer2 nav-icon" aria-hidden="true"></i>
                <span>Dashboard</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  EVENTS  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Events</li>

        {{-- Traditional Events --}}
        {{-- TODO: href="{{ route('admin.events.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-calendar-event nav-icon" aria-hidden="true"></i>
                <span>Traditional Events</span>
            </a>
        </li>

        {{-- Event Categories --}}
        {{-- TODO: href="{{ route('admin.event-categories.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-tags nav-icon" aria-hidden="true"></i>
                <span>Event Categories</span>
            </a>
        </li>

        {{-- Temple Events --}}
        {{-- TODO: href="{{ route('admin.temple-events.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-building nav-icon" aria-hidden="true"></i>
                <span>Temple Events</span>
            </a>
        </li>

        {{-- Wedding Events --}}
        {{-- TODO: href="{{ route('admin.wedding-events.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-heart nav-icon" aria-hidden="true"></i>
                <span>Wedding Events</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  PERFORMERS  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Performers</li>

        {{-- Artists & Performers --}}
        {{-- TODO: href="{{ route('admin.artists.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-person-badge nav-icon" aria-hidden="true"></i>
                <span>Artists &amp; Performers</span>
            </a>
        </li>

        {{-- Traditional Dance Groups --}}
        {{-- TODO: href="{{ route('admin.dance-groups.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-music-note-beamed nav-icon" aria-hidden="true"></i>
                <span>Traditional Dance Groups</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  SERVICES  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Services</li>

        {{-- Catering Services --}}
        {{-- TODO: href="{{ route('admin.catering.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-cup-hot nav-icon" aria-hidden="true"></i>
                <span>Catering Services</span>
            </a>
        </li>

        {{-- Decoration Services --}}
        {{-- TODO: href="{{ route('admin.decorations.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-stars nav-icon" aria-hidden="true"></i>
                <span>Decoration Services</span>
            </a>
        </li>

        {{-- Vendors --}}
        {{-- TODO: href="{{ route('admin.vendors.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-shop nav-icon" aria-hidden="true"></i>
                <span>Vendors</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  BOOKINGS  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Bookings</li>

        {{-- Bookings --}}
        {{-- TODO: href="{{ route('admin.bookings.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-journal-check nav-icon" aria-hidden="true"></i>
                <span>Bookings</span>
            </a>
        </li>

        {{-- Customers --}}
        {{-- TODO: href="{{ route('admin.customers.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-people nav-icon" aria-hidden="true"></i>
                <span>Customers</span>
            </a>
        </li>

        {{-- Payments --}}
        {{-- TODO: href="{{ route('admin.payments.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-credit-card nav-icon" aria-hidden="true"></i>
                <span>Payments</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  ANALYTICS  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">Analytics</li>

        {{-- Reports --}}
        {{-- TODO: href="{{ route('admin.reports.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-bar-chart-line nav-icon" aria-hidden="true"></i>
                <span>Reports</span>
            </a>
        </li>

        {{-- Gallery --}}
        {{-- TODO: href="{{ route('admin.gallery.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-images nav-icon" aria-hidden="true"></i>
                <span>Gallery</span>
            </a>
        </li>

        {{-- ━━━━━━━━━━  SYSTEM  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ --}}
        <li class="sidebar-section-label" aria-hidden="true">System</li>

        {{-- Settings --}}
        {{-- TODO: href="{{ route('admin.settings.index') }}" --}}
        <li class="nav-item" role="none">
            <a href="#" class="nav-link" role="menuitem">
                <i class="bi bi-gear nav-icon" aria-hidden="true"></i>
                <span>Settings</span>
            </a>
        </li>

    </ul>
    {{-- END Navigation Menu --}}

</nav>
