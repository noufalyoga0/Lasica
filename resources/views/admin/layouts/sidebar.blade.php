<h3>Admin Panel</h3>

<div class="admin-menu">
    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <a href="{{ route('admin.orders.index') }}"
       class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
        Orders
    </a>

    <a href="{{ route('admin.payments.index') }}"
       class="{{ request()->routeIs('admin.payments.*') ? 'active' : '' }}">
        Payments
    </a>

    <a href="{{ route('admin.trips.index') }}"
       class="{{ request()->routeIs('admin.trips.*') ? 'active' : '' }}">
        Trips
    </a>

    <a href="{{ route('admin.users.index') }}"
       class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
        Users
    </a>
</div>
