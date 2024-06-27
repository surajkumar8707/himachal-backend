<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @active('admin.dashboard') active @endactive">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.contacts']) active @endactive" href="{{ route('admin.contacts') }}">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Contacts</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.bookings']) active @endactive" href="{{ route('admin.bookings') }}">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Bookings</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.room.type.list', 'admin.room.type.create', 'admin.room.type.edit', 'admin.room.type.show']) active @endactive" href="{{ route('admin.room.type.list') }}">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Room Type</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.home-page-carousel.index', 'admin.home-page-carousel.create', 'admin.home-page-carousel.edit', 'admin.home-page-carousel.show']) active @endactive" href="{{ route('admin.home-page-carousel.index') }}">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Home Page Carousel</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.social.media.show', 'admin.social.media.create', 'admin.social.media.storeOrUpdate']) active @endactive" href="{{ route('admin.social.media.show') }}">
                <i class="fas fa-fw fa-share-alt"></i>
                <span>Social Media</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.app.setting']) active @endactive" href="{{ route('admin.app.setting') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>App Setting</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.show.profile', 'admin.edit.profile', 'admin.update.profile']) active @endactive" href="{{ route('admin.show.profile') }}">
                <i class="fas fa-fw fa-user-circle"></i>
                <span>Profile</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @active(['admin.change.password']) active @endactive" href="{{ route('admin.change.password') }}">
                <i class="fas fa-fw fa-key"></i>
                <span>Change Password</span></a>
        </li>
    </ul>
</nav>
