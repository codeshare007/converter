<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @can('see dashboard')
        <li class="nav-item">
            <a href="{{ route('backend.dashboard.index') }}"
                class="nav-link {{ (Request::is('backend/dashboard')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('Dashboard') }}
                </p>
            </a>
        </li>
        @endcan

        <li class="nav-header">{{ __('Commission Processing') }}</li>
        <li class="nav-item">
            <a href="{{ route('invoice.get') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Get Invoices') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('invoice.view') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('View Invoices') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Comm Rpt by Rep') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Unpaid Inv Report') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('View Bills') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Send Bills to QB') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Update History') }}
                </p>
            </a>
        </li>


        <li class="nav-header">{{ __('Show Commission') }}</li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Current Reports') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('History Reports') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Other Reports') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Commission Plans') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Custom') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('Setup Options') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbtack"></i>
                <p>
                    {{ __('System Utilities') }}
                </p>
            </a>
        </li>


        <li class="nav-header">{{ __('System') }}</li>
        @can('view users')
        <li class="nav-item">
            <a href="{{ route('backend.users.index') }}"
                class="nav-link {{ (Request::is('backend/users')) ? 'active' : '' }} {{ (Request::is('backend/users/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('User') }}
                </p>
            </a>
        </li>
        @endcan
        @can('see role', 'see permissions', 'see assign.permission')
        <li
            class="nav-item {{ (Request::is('backend/roles/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/roles')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/permissions/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/permissions')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/assignpermission')) ? 'menu-open' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'menu-open' : '' }}">
            <a href="#"
                class="nav-link {{ (Request::is('backend/roles/*')) ? 'active' : '' }} {{ (Request::is('backend/roles')) ? 'active' : '' }}
        {{ (Request::is('backend/permissions/*')) ? 'active' : '' }} {{ (Request::is('backend/permissions')) ? 'active' : '' }}
        {{ (Request::is('backend/assignpermission')) ? 'active' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-shield-alt"></i>
                <p>
                    {{ __('Role & Permission') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('see role')
                <li class="nav-item">
                    <a href="{{ route('backend.roles.index') }}" class="nav-link
                    {{ (Request::is('backend/roles')) ? 'active' : '' }} {{ (Request::is('backend/roles/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Role') }}</p>
                    </a>
                </li>
                @endcan
                @can('see permissions')
                <li class="nav-item">
                    <a href="{{ route('backend.permissions.index') }}" class="nav-link
                    {{ (Request::is('backend/permissions')) ? 'active' : '' }} {{ (Request::is('backend/permissions/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Permission') }}</p>
                    </a>
                </li>
                @endcan
                @can('see assign.permission')
                <li class="nav-item">
                    <a href="{{ route('backend.assignpermission.index') }}" class="nav-link
                    {{ (Request::is('backend/assignpermission')) ? 'active' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Assign permission') }}</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('see settings')
        <li class="nav-item">
            <a href="{{ route('backend.setting.index') }}"
                class="nav-link {{ (Request::is('backend/settings/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                    {{ __('Arrangement') }}
                </p>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a href="{{ route('backend.profile.index') }}"
                class="nav-link {{ (Request::is('backend/profile')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    {{ __('Profile') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    {{ __('Log out') }}
                </p>
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
