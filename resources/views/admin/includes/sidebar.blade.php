<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="/admin-home" class="waves-effect"><i class="ti-home"></i>
                        <span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="/" target="_blank" class="waves-effect"><i class="md md-add-circle"></i>
                        <span> Visite Website </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-view-list"></i>
                        <span> Categories  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                      <!--  <li><a href="/category/create">Add Category </a></li>  -->
                        <li><a href="/category/show">Category List </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-local-grocery-store"></i>
                        <span> Products  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/product/create">Add Product </a></li>
                        <li><a href="/product/show">Products List </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-label"></i>
                        <span> Feature  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/feature/create">Add Feature </a></li>
                        <li><a href="/feature/show">Feature List </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-face-unlock"></i>
                        <span> About  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/about-info/create">Add About </a></li>
                        <li><a href="/about-info/show"> Show About </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-local-laundry-service"></i>
                        <span> Services  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/service/create">Add Services </a></li>
                        <li><a href="/service/show">Show Services </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-group-work"></i>
                        <span> Company Info  </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/company-info/create">Add Info </a></li>
                        <li><a href="/company-info/show">Show Info </a></li>
                    </ul>
                </li>
                @if(session('user_type')==1)
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="icon-user"></i>
                            <span> Users </span>
                            <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="/user/create">New User</a></li>
                            <li><a href="/user/show">All User</a></li>
                        </ul>
                    </li>
                @endif

                <li class="has_sub">
                    <a href="/settings" class="waves-effect"><i class="md md-settings"></i>
                        <span> Settings </span></a>
                </li>
                <li class="has_sub">
                    <a href="/logout" class="waves-effect"><i class="md md-settings-power"></i>
                        <span> Logout </span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
