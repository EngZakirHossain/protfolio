
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="@yield('dashboard')">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="@yield('resume')">
                    <a href="{{route('resume.index')}}"><i class="fas fa-file"></i> <span>CV Upload</span></a>
                </li>
                <li class="@yield('info')">
                    <a href="{{route('info.index')}}"><i class="fas fa-file"></i> <span>Personal Information</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
