<div class="bg-primary text-white min-vh-100 p-4" style="width:15%;">
    <ul class="list-unstyled d-flex flex-column gap-3">
        <li class="mb-3">
            <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-white text-decoration-none {{ request()->routeIs('admin.dashboard') ? 'fw-bold' : '' }}">
                <span class="me-2">📊</span> Dashboard
            </a>
        </li>
        <li class="mb-3">
            <a href="{{ route('admin.users.index') }}" class="d-flex align-items-center text-white text-decoration-none {{ request()->routeIs('admin.users.*') ? 'fw-bold' : '' }}">
                <span class="me-2">👤</span> Users
            </a>
        </li>
        <li class="mb-3">
            <a href="{{ route('admin.products') }}" class="d-flex align-items-center text-white text-decoration-none">
                <span class="me-2">📦</span> Products
            </a>
        </li>
        <li class="mb-3">
            <a href="{{ route('admin.orders') }}" class="d-flex align-items-center text-white text-decoration-none">
                <span class="me-2">📝</span> Orders
            </a>
        </li>
        <li class="mb-3">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                <span class="me-2">⚙️</span> Settings
            </a>
        </li>
    </ul>
</div>
