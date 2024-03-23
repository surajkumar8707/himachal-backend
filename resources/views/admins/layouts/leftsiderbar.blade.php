<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ auth()->user()->name }} <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @active('admin.dashboard') active @endactive">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item @active(['admin.social.media.show', 'admin.social.media.create', 'admin.social.media.storeOrUpdate']) active @endactive">
        <a class="nav-link" href="{{ route('admin.social.media.show') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Social Media</span></a>
    </li>

    <li class="nav-item @active(['admin.app.setting']) active @endactive">
        <a class="nav-link" href="{{ route('admin.app.setting') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Setting</span></a>
    </li>

    <li class="nav-item @active(['admin.show.profile', 'admin.edit.profile', 'admin.update.profile']) active @endactive">
        <a class="nav-link" href="{{ route('admin.show.profile') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <li class="nav-item @active(['admin.contacts']) active @endactive">
        <a class="nav-link" href="{{ route('admin.contacts') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contacts</span></a>
    </li>
    <li class="nav-item @active(['admin.tour.package.list', 'admin.tour.package.create', 'admin.tour.package.edit']) active @endactive">
        <a class="nav-link" href="{{ route('admin.tour.package.list') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tour Packages</span></a>
    </li>


    {{--


    <li class="nav-item @active(['admin.bills.list', 'admin.executive-users.create', 'admin.executive-users.edit']) active @endactive">
        <a class="nav-link" href="{{ route('admin.bills.list') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bill Recipt</span></a>
    </li>

    <li class="nav-item @active(['admin.bills.generated.bills', 'admin.executive-users.create', 'admin.executive-users.edit']) active @endactive">
        <a class="nav-link" href="{{ route('admin.bills.generated.bills') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Generated Bills</span></a>
    </li>

    <li class="nav-item @active(['admin.show.profile', 'admin.edit.profile']) active @endactive">
        <a class="nav-link" href="{{ route('admin.show.profile') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <li class="nav-item @active(['admin.change.password']) active @endactive">
        <a class="nav-link" href="{{ route('admin.change.password') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Change Password</span></a>
    </li> --}}


    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/admins/img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
