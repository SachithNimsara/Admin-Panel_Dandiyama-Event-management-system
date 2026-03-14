@extends('layouts.admin')

@section('title', 'Dashboard')
@section('pageTitle', 'Dashboard')

@section('content')

{{-- ================================================================
     ROW 1 — WELCOME BANNER
================================================================ --}}
<div class="welcome-banner">
    <div class="banner-title">
        <i class="bi bi-flower1 me-2" style="color: var(--gold-light);" aria-hidden="true"></i>
        Welcome to Dandiyama Admin Panel
    </div>
    <div class="banner-subtitle">
        Sri Lankan Traditional Event Management System
    </div>
    <div class="banner-divider"></div>
    <div class="banner-meta">
        <i class="bi bi-calendar3 me-1" aria-hidden="true"></i>
        {{-- TODO: This date is rendered server-side by Laravel/Carbon --}}
        {{ now()->format('l, F j, Y') }}
        &nbsp;&bull;&nbsp;
        <i class="bi bi-person-circle me-1" aria-hidden="true"></i>
        Logged in as
        {{-- TODO: Replace "Administrator" with {{ auth()->user()->name }} --}}
        <strong style="color: var(--gold-pale);">Administrator</strong>
    </div>
</div>


{{-- ================================================================
     ROW 2 — OVERVIEW / KPI STAT CARDS
     ----------------------------------------------------------------
     TODO (future developer): Replace the static numbers below with
     variables passed from DashboardController, e.g. $totalEvents.
================================================================ --}}
<h2 class="section-heading mt-2 mb-3">Overview</h2>

<div class="row g-3 mb-4">

    {{-- Total Events --}}
    <div class="col-6 col-sm-6 col-lg-3">
        <div class="stat-card" style="--card-accent: #B22222;">
            <div class="stat-icon" style="background: rgba(178,34,34,0.09);">
                <i class="bi bi-calendar-event" style="color: #B22222;" aria-hidden="true"></i>
            </div>
            {{-- TODO: {{ $totalEvents ?? 0 }} --}}
            <div class="stat-number">128</div>
            <div class="stat-label">Total Events</div>
            <div class="stat-growth positive">
                <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
                +12 this month
            </div>
        </div>
    </div>

    {{-- Bookings --}}
    <div class="col-6 col-sm-6 col-lg-3">
        <div class="stat-card" style="--card-accent: #C9952C;">
            <div class="stat-icon" style="background: rgba(201,149,44,0.09);">
                <i class="bi bi-journal-check" style="color: #C9952C;" aria-hidden="true"></i>
            </div>
            {{-- TODO: {{ $totalBookings ?? 0 }} --}}
            <div class="stat-number">347</div>
            <div class="stat-label">Bookings</div>
            <div class="stat-growth positive">
                <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
                +28 this week
            </div>
        </div>
    </div>

    {{-- Vendors --}}
    <div class="col-6 col-sm-6 col-lg-3">
        <div class="stat-card" style="--card-accent: #5C1A1A;">
            <div class="stat-icon" style="background: rgba(92,26,26,0.09);">
                <i class="bi bi-shop" style="color: #5C1A1A;" aria-hidden="true"></i>
            </div>
            {{-- TODO: {{ $totalVendors ?? 0 }} --}}
            <div class="stat-number">64</div>
            <div class="stat-label">Vendors</div>
            <div class="stat-growth positive">
                <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
                +5 new vendors
            </div>
        </div>
    </div>

    {{-- Customers --}}
    <div class="col-6 col-sm-6 col-lg-3">
        <div class="stat-card" style="--card-accent: #2E7D32;">
            <div class="stat-icon" style="background: rgba(46,125,50,0.09);">
                <i class="bi bi-people" style="color: #2E7D32;" aria-hidden="true"></i>
            </div>
            {{-- TODO: {{ number_format($totalCustomers ?? 0) }} --}}
            <div class="stat-number">1,240</div>
            <div class="stat-label">Customers</div>
            <div class="stat-growth positive">
                <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
                +89 this month
            </div>
        </div>
    </div>

</div>
{{-- END ROW 2 --}}


{{-- ================================================================
     ROW 3 — QUICK ACTIONS  +  RECENT BOOKINGS TABLE
================================================================ --}}
<div class="row g-3 mb-4">

    {{-- ── Quick Actions Panel ─────────────────────────────────── --}}
    <div class="col-12 col-lg-4">
        <h2 class="section-heading">Quick Actions</h2>
        <div class="row g-2">
            {{-- TODO: Replace href="#" values with route() calls when routes exist --}}

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-plus-circle-fill qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">New Event</span>
                </a>
            </div>

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-journal-plus qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">New Booking</span>
                </a>
            </div>

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-person-plus-fill qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">Add Customer</span>
                </a>
            </div>

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-shop-window qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">Add Vendor</span>
                </a>
            </div>

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-image qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">Upload Gallery</span>
                </a>
            </div>

            <div class="col-6">
                <a href="#" class="quick-action-card">
                    <i class="bi bi-bar-chart-line qa-icon" aria-hidden="true"></i>
                    <span class="qa-label">View Reports</span>
                </a>
            </div>
        </div>
    </div>

    {{-- ── Recent Bookings Table ────────────────────────────────── --}}
    <div class="col-12 col-lg-8">
        <h2 class="section-heading">Recent Bookings</h2>
        <div class="activity-card">
            {{--
                TODO (future developer): Replace the static <tr> rows below with:
                  @forelse ($recentBookings as $booking)
                    <tr>
                        <td>#{{ $booking->id }}</td>
                        <td>{{ $booking->customer->name }}</td>
                        <td>{{ $booking->event->category }}</td>
                        <td>{{ $booking->event->date->format('M d, Y') }}</td>
                        <td>{{ $booking->status }}</td>
                    </tr>
                  @empty
                    <tr><td colspan="5" class="text-center text-muted">No bookings found.</td></tr>
                  @endforelse
            --}}
            <div class="table-responsive">
                <table
                    class="table table-hover align-middle mb-0"
                    style="font-size: 0.875rem;"
                    aria-label="Recent bookings"
                >
                    <thead>
                        <tr style="border-color: var(--ivory-dark);">
                            <th style="color: var(--maroon-deep); font-size: 0.72rem; text-transform: uppercase;
                                       letter-spacing: 0.5px; border: none; padding: 10px 12px; font-weight: 700;">
                                #ID
                            </th>
                            <th style="color: var(--maroon-deep); font-size: 0.72rem; text-transform: uppercase;
                                       letter-spacing: 0.5px; border: none; padding: 10px 12px; font-weight: 700;">
                                Customer
                            </th>
                            <th style="color: var(--maroon-deep); font-size: 0.72rem; text-transform: uppercase;
                                       letter-spacing: 0.5px; border: none; padding: 10px 12px; font-weight: 700;">
                                Event Type
                            </th>
                            <th style="color: var(--maroon-deep); font-size: 0.72rem; text-transform: uppercase;
                                       letter-spacing: 0.5px; border: none; padding: 10px 12px; font-weight: 700;">
                                Date
                            </th>
                            <th style="color: var(--maroon-deep); font-size: 0.72rem; text-transform: uppercase;
                                       letter-spacing: 0.5px; border: none; padding: 10px 12px; font-weight: 700;">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Placeholder row 1 --}}
                        <tr>
                            <td style="padding: 12px;" class="text-muted fw-semibold">#B1047</td>
                            <td style="padding: 12px;">Nimali Perera</td>
                            <td style="padding: 12px;">
                                <span class="activity-badge badge-event">Wedding</span>
                            </td>
                            <td style="padding: 12px;" class="text-muted">March 22, 2026</td>
                            <td style="padding: 12px;">
                                <span class="badge bg-success bg-opacity-10 text-success fw-semibold"
                                      style="font-size: 0.68rem; padding: 4px 10px; border-radius: 20px;">
                                    Confirmed
                                </span>
                            </td>
                        </tr>
                        {{-- Placeholder row 2 --}}
                        <tr>
                            <td style="padding: 12px;" class="text-muted fw-semibold">#B1046</td>
                            <td style="padding: 12px;">Ruwan Jayasinghe</td>
                            <td style="padding: 12px;">
                                <span class="activity-badge badge-booking">Temple Pooja</span>
                            </td>
                            <td style="padding: 12px;" class="text-muted">March 19, 2026</td>
                            <td style="padding: 12px;">
                                <span class="badge bg-warning bg-opacity-10 text-warning fw-semibold"
                                      style="font-size: 0.68rem; padding: 4px 10px; border-radius: 20px;">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        {{-- Placeholder row 3 --}}
                        <tr>
                            <td style="padding: 12px;" class="text-muted fw-semibold">#B1045</td>
                            <td style="padding: 12px;">Sandya De Silva</td>
                            <td style="padding: 12px;">
                                <span class="activity-badge badge-vendor">Kandyan Dance</span>
                            </td>
                            <td style="padding: 12px;" class="text-muted">March 17, 2026</td>
                            <td style="padding: 12px;">
                                <span class="badge bg-success bg-opacity-10 text-success fw-semibold"
                                      style="font-size: 0.68rem; padding: 4px 10px; border-radius: 20px;">
                                    Confirmed
                                </span>
                            </td>
                        </tr>
                        {{-- Placeholder row 4 --}}
                        <tr>
                            <td style="padding: 12px;" class="text-muted fw-semibold">#B1044</td>
                            <td style="padding: 12px;">Dinesh Wickramasinghe</td>
                            <td style="padding: 12px;">
                                <span class="activity-badge badge-event">Avurudu Ceremony</span>
                            </td>
                            <td style="padding: 12px;" class="text-muted">April 13, 2026</td>
                            <td style="padding: 12px;">
                                <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold"
                                      style="font-size: 0.68rem; padding: 4px 10px; border-radius: 20px;">
                                    In Progress
                                </span>
                            </td>
                        </tr>
                        {{-- Placeholder row 5 --}}
                        <tr>
                            <td style="padding: 12px;" class="text-muted fw-semibold">#B1043</td>
                            <td style="padding: 12px;">Chamari Fernando</td>
                            <td style="padding: 12px;">
                                <span class="activity-badge badge-booking">Pirith Ceremony</span>
                            </td>
                            <td style="padding: 12px;" class="text-muted">March 15, 2026</td>
                            <td style="padding: 12px;">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary fw-semibold"
                                      style="font-size: 0.68rem; padding: 4px 10px; border-radius: 20px;">
                                    Completed
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- TODO: Add pagination — {{ $recentBookings->links() }} --}}
            <div class="text-end mt-3">
                {{-- TODO: href="{{ route('admin.bookings.index') }}" --}}
                <a href="#"
                   style="font-size: 0.8rem; color: var(--gold-primary);
                          text-decoration: none; font-weight: 600;">
                    View All Bookings <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

</div>
{{-- END ROW 3 --}}


{{-- ================================================================
     ROW 4 — UPCOMING EVENTS  +  MODULE STATUS GRID
================================================================ --}}
<div class="row g-3">

    {{-- ── Upcoming Traditional Events ─────────────────────────── --}}
    <div class="col-12 col-lg-6">
        <h2 class="section-heading">Upcoming Traditional Events</h2>
        <div class="activity-card">
            {{--
                TODO (future developer): Replace static items below with:
                  @forelse ($upcomingEvents as $event)
                    <div class="d-flex ...">
                        <div>{{ $event->name }}</div>
                        <div>{{ $event->location }}</div>
                        <div>{{ $event->date->format('M d, Y') }}</div>
                    </div>
                  @empty
                    <p class="text-muted">No upcoming events.</p>
                  @endforelse
            --}}

            {{-- Event item 1 --}}
            <div class="d-flex align-items-start gap-3 mb-3 pb-3"
                 style="border-bottom: 1px solid var(--ivory-dark);">
                <div class="event-thumb" style="background: rgba(178,34,34,0.09);
                     border-radius: 10px; width: 48px; height: 48px; min-width: 48px;
                     display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-calendar-heart"
                       style="color: var(--temple-red); font-size: 1.3rem;" aria-hidden="true"></i>
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 0.875rem;">
                        Sinhala &amp; Tamil New Year (Avurudu)
                    </div>
                    <div class="text-muted" style="font-size: 0.78rem;">
                        <i class="bi bi-geo-alt me-1" aria-hidden="true"></i>Kandy, Sri Lanka
                    </div>
                    <div style="font-size: 0.75rem; color: var(--gold-primary); margin-top: 3px;">
                        <i class="bi bi-calendar3 me-1" aria-hidden="true"></i>April 13–14, 2026
                    </div>
                </div>
            </div>

            {{-- Event item 2 --}}
            <div class="d-flex align-items-start gap-3 mb-3 pb-3"
                 style="border-bottom: 1px solid var(--ivory-dark);">
                <div class="event-thumb" style="background: rgba(201,149,44,0.09);
                     border-radius: 10px; width: 48px; height: 48px; min-width: 48px;
                     display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-music-note-beamed"
                       style="color: var(--gold-primary); font-size: 1.3rem;" aria-hidden="true"></i>
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 0.875rem;">
                        Perahera — Kandyan Dance Procession
                    </div>
                    <div class="text-muted" style="font-size: 0.78rem;">
                        <i class="bi bi-geo-alt me-1" aria-hidden="true"></i>Temple of the Tooth, Kandy
                    </div>
                    <div style="font-size: 0.75rem; color: var(--gold-primary); margin-top: 3px;">
                        <i class="bi bi-calendar3 me-1" aria-hidden="true"></i>May 5, 2026
                    </div>
                </div>
            </div>

            {{-- Event item 3 --}}
            <div class="d-flex align-items-start gap-3 mb-3 pb-3"
                 style="border-bottom: 1px solid var(--ivory-dark);">
                <div class="event-thumb" style="background: rgba(92,26,26,0.09);
                     border-radius: 10px; width: 48px; height: 48px; min-width: 48px;
                     display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-heart-fill"
                       style="color: var(--maroon-mid); font-size: 1.3rem;" aria-hidden="true"></i>
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 0.875rem;">
                        Traditional Wedding — Sulaiman Family
                    </div>
                    <div class="text-muted" style="font-size: 0.78rem;">
                        <i class="bi bi-geo-alt me-1" aria-hidden="true"></i>Grand Ballroom, Colombo
                    </div>
                    <div style="font-size: 0.75rem; color: var(--gold-primary); margin-top: 3px;">
                        <i class="bi bi-calendar3 me-1" aria-hidden="true"></i>March 22, 2026
                    </div>
                </div>
            </div>

            {{-- Event item 4 --}}
            <div class="d-flex align-items-start gap-3">
                <div class="event-thumb" style="background: rgba(46,125,50,0.09);
                     border-radius: 10px; width: 48px; height: 48px; min-width: 48px;
                     display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-building"
                       style="color: #2E7D32; font-size: 1.3rem;" aria-hidden="true"></i>
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 0.875rem;">
                        Vesak Pooja Ceremony
                    </div>
                    <div class="text-muted" style="font-size: 0.78rem;">
                        <i class="bi bi-geo-alt me-1" aria-hidden="true"></i>Kelaniya Raja Maha Viharaya
                    </div>
                    <div style="font-size: 0.75rem; color: var(--gold-primary); margin-top: 3px;">
                        <i class="bi bi-calendar3 me-1" aria-hidden="true"></i>May 12, 2026
                    </div>
                </div>
            </div>

            <div class="text-end mt-3">
                {{-- TODO: href="{{ route('admin.events.index') }}" --}}
                <a href="#"
                   style="font-size: 0.8rem; color: var(--gold-primary);
                          text-decoration: none; font-weight: 600;">
                    View All Events <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- ── Module Status Grid ───────────────────────────────────── --}}
    <div class="col-12 col-lg-6">
        <h2 class="section-heading">Module Status</h2>
        <div class="activity-card">
            <p class="text-muted mb-3" style="font-size: 0.82rem;">
                <i class="bi bi-info-circle me-1"
                   style="color: var(--gold-primary);" aria-hidden="true"></i>
                Planned modules are listed here. Active modules are fully operational.
            </p>

            {{--
                TODO (future developer): Remove this @php block and drive module
                status from a config file (config/modules.php) or a database table,
                so it can be toggled without code changes.
            --}}
            @php
            $modules = [
                ['icon' => 'bi-calendar-event',   'name' => 'Traditional Events',  'status' => 'active'],
                ['icon' => 'bi-person-badge',      'name' => 'Artists & Performers','status' => 'active'],
                ['icon' => 'bi-music-note-beamed', 'name' => 'Dance Groups',        'status' => 'active'],
                ['icon' => 'bi-journal-check',     'name' => 'Bookings',            'status' => 'active'],
                ['icon' => 'bi-cup-hot',           'name' => 'Catering Services',   'status' => 'planned'],
                ['icon' => 'bi-stars',             'name' => 'Decoration Services', 'status' => 'planned'],
                ['icon' => 'bi-credit-card',       'name' => 'Payments',            'status' => 'planned'],
                ['icon' => 'bi-images',            'name' => 'Gallery',             'status' => 'planned'],
                ['icon' => 'bi-bar-chart-line',    'name' => 'Reports & Analytics', 'status' => 'planned'],
                ['icon' => 'bi-shop',              'name' => 'Vendors',             'status' => 'planned'],
            ];
            @endphp

            <div class="row g-2">
                @foreach ($modules as $module)
                <div class="col-6">
                    <div class="d-flex align-items-center gap-2 p-2 rounded-3"
                         style="background: var(--ivory);
                                border: 1px solid var(--ivory-dark);">
                        <i class="bi {{ $module['icon'] }}"
                           style="font-size: 1.05rem;
                                  color: {{ $module['status'] === 'active' ? 'var(--maroon-mid)' : 'var(--text-muted)' }};
                                  min-width: 20px;"
                           aria-hidden="true"></i>
                        <div style="flex: 1; min-width: 0; overflow: hidden;">
                            <div style="font-size: 0.74rem; font-weight: 600;
                                        white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                {{ $module['name'] }}
                            </div>
                            @if ($module['status'] === 'active')
                                <span style="font-size: 0.64rem; color: #2E7D32; font-weight: 700;">
                                    ● Active
                                </span>
                            @else
                                <span style="font-size: 0.64rem; color: #9A7820; font-weight: 700;">
                                    ○ Planned
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
{{-- END ROW 4 --}}

@endsection
