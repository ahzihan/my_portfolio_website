<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">Admin Panel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}"></a>
    </div>

    <ul class="sidebar-menu">

        <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-hand-point-right"></i><span>Dashboard</span></a></li>

        <li class="nav-item dropdown {{ Request::is('banner.index') ? "active" : "" }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Banner Section</span></a>
            <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="{{ route('banner.index') }}"><i class="fas fa-angle-right"></i> Banner Update</a></li>
                <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
            </ul>
        </li>

        <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                <span>Setting</span></a></li>

        <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                <span>Form</span></a></li>

        <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                <span>Table</span></a></li>

        <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                <span>Invoice</span></a></li>

    </ul>
</aside>
