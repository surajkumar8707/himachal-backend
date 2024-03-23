<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class
			with font-awesome or any other icon font library -->
		<li class="nav-item">
			<a href="{{ route('admin.dashboard') }}" class="nav-link @active('admin.dashboard') active @endactive">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p>Dashboard</p>
			</a>
		</li>

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
		{{-- <li class="nav-item">
			<a href="{{ route('admin.plots.index') }}" class="nav-link @active(['admin.plots.index', 'admin.plots.create', 'admin.plots.edit']) active @endactive">
				<i class="nav-icon fas fa-file-alt"></i>
				<p>Plot</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('admin.admins.index') }}" class="nav-link @active(['admin.admins.index', 'admin.admins.create', 'admin.admins.edit']) active @endactive">
				<i class="nav-icon fas fa-file-alt"></i>
				<p>Admins</p>
			</a>
		</li>

		<li class="nav-item">
			<a href="{{ route('admin.executive.users') }}" class="nav-link @active(['admin.executive.users', 'admin.executive.users.create', 'admin.executive.edit']) active @endactive">
				<i class="nav-icon fas fa-file-alt"></i>
				<p>Executive Users</p>
			</a>
		</li>

        <li class="nav-item">
			<a href="{{ route('admin.bill.index') }}" class="nav-link @active(['admin.bill.index', 'admin.bill.create', 'admin.executive.edit']) active @endactive">
				<i class="nav-icon fas fa-file-alt"></i>
				<p>Bill Request</p>
			</a>
		</li> --}}


		{{-- <li class="nav-item">
			<a href="brands.html" class="nav-link">
				<svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
					</svg>
				<p>Brands</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="products.html" class="nav-link">
				<i class="nav-icon fas fa-tag"></i>
				<p>Products</p>
			</a>
		</li>

		<li class="nav-item">
			<a href="#" class="nav-link">
				<!-- <i class="nav-icon fas fa-tag"></i> -->
				<i class="fas fa-truck nav-icon"></i>
				<p>Shipping</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="orders.html" class="nav-link">
				<i class="nav-icon fas fa-shopping-bag"></i>
				<p>Orders</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="discount.html" class="nav-link">
				<i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
				<p>Discount</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="users.html" class="nav-link">
				<i class="nav-icon  fas fa-users"></i>
				<p>Users</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="pages.html" class="nav-link">
				<i class="nav-icon  far fa-file-alt"></i>
				<p>Pages</p>
			</a>
		</li>--}}
	</ul>
</nav>
