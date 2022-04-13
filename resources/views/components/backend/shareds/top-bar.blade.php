<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        @can('see dashboard')
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('backend.dashboard.index') }}" class="nav-link">{{ __('Dashboard') }}</a>
        </li>
        @endcan
        @can('see settings')
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('backend.setting.index') }}" class="nav-link">{{ __('Arrangement') }}</a>
        </li>
        @endcan
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
