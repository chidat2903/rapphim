<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand"  style="margin-right: 50px" href="{{route('admin.dashboard')}}"><span class="fa fa-area-chart"></span> COSMIC<span
                            class="dashboard_text">Cinema</span></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">Điều hướng chính</li>

                    @php
                        $segment= Request::segment(1);   
                    @endphp
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Rap</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('rap.create')}}"><i class="fa fa-angle-right"></i>Thêm rap</a></li>
                            <li><a href="{{route('rap.index')}}"><i class="fa fa-angle-right"></i> Liệt kê rap</a></li>
                        </ul>
                    </li>

                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>
<!--left-fixed -navigation-->

<!-- header-starts -->
<div class="sticky-header header-section" style="display: flex">
    <div class="header-left">

        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">

            </ul>
        </div>
        <!--notification menu end -->

    </div>
    <div class="header-right">


        <!--search-box-->
        <div class="search-box">
            <form class="input">
                <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search"
                    id="input-31" />
                <label class="input__label" for="input-31">
                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77"
                        preserveAspectRatio="none">
                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                    </svg>
                </label>
            </form>
        </div><!--//end-search-box-->

        <div class="profile_details">
            <ul style="margin: 0">
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
                            <div class="user-name">
                                <p>Admin Name</p>
                                <span>Administrator</span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                        <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                        <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                        <li> <a href="{{route('auth.logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>