<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-text mx-3">5 Blog <sup></sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fa fa-home"></i>
            <span class="ms-2">{{ __('layouts.sidebar_link_dashboard') }}</span></a>
    </li>

    <hr class="sidebar-divider">

    @if (Auth::user()->admin)
        <div class="sidebar-heading">
            {{ __('layouts.sidebar_nav_section_users') }}
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="/users">
                <i class="fas fa-user-friends"></i>
                <span class="ms-2">{{__('layouts.sidebar_link_users')}}</span></a>
        </li>
    @endif

    <div class="sidebar-heading">
        {{__('layouts.sidebar_nav_section_blog')}}
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="/posts">
            <i class="fa fa-address-card"></i>
            <span class="ms-2">{{__('layouts.sidebar_link_posts')}}</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="/categories">
            <i class="fa fa-folder-open"></i>
            <span class="ms-2">{{__('layouts.sidebar_link_categories')}}</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.posts', Auth::user()->id) }}">
            <i class="fa fa-id-badge"></i>
            <span class="ms-2">{{__('layouts.sidebar_link_my_posts')}}</span></a>
    </li>

</ul>
