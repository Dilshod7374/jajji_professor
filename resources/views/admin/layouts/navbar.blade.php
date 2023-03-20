<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin/home"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown @yield('dashboard')">
                <a href="{{ route('admin.') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @yield('groups')">
                <a href="{{ route('admin.groups.index') }}"><i data-feather="briefcase"></i><span>Groups</span></a>
            </li>
            <li class="dropdown @yield('teachers')">
                <a href="{{ route('admin.teachers.index') }}"><i data-feather="briefcase"></i><span>Teachers</span></a>
            </li>
            <li class="dropdown @yield('wins')">
                <a href="{{ route('admin.achievements.index') }}"><i
                        data-feather="briefcase"></i><span>Achievements</span></a>
            </li>
            <li class="dropdown @yield('parents')">
                <a href="{{ route('admin.parents.index') }}"><i
                        data-feather="briefcase"></i><span>Parents_idea</span></a>
            </li>
            <li class="dropdown @yield('service')">
                <a href="{{ route('admin.services.index') }}"><i data-feather="briefcase"></i><span>Services</span></a>
            </li>
            <li class="dropdown @yield('numbers')">
                <a href="{{ route('admin.numbers.index') }}"><i data-feather="briefcase"></i><span>Numbers</span></a>
            </li>

            <li class="dropdown @yield('humans')">
                <a href="{{ route('admin.humans.index') }}"><i data-feather="briefcase"></i><span>Humans</span></a>
            </li>
        </ul>
    </aside>
</div>
