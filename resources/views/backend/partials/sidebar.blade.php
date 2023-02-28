<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ @config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">RBD</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            {{-- @role('admin')
            <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-user-shield"></i> <span>Roles Management</span></a>
            </li>
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users-cog"></i> <span>Users Management</span></a>
            </li>
            @endrole --}}
            {{-- <li class="menu-header">Starter</li> --}}
            <li class="nav-item dropdown {{ Request::is('application*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Applications</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('application/pending-list') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('certificate.pending') }}">Pending Applications</a>
                    </li>
                    <li class="{{ Request::is('application/approved-list') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('certificate.approved') }}">Approved Applications</a>
                    </li>
                    <li class="{{ Request::is('application/rejected-list') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('certificate.rejected') }}">Rejected Applications</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link" href="#"><i class="fas fa-square"></i> <span>BlankPage</span></a>
            </li> --}}
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a class="btn btn-primary btn-lg btn-block btn-icon-split" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out"></i> Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>
