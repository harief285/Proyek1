<!-- menu profile quick info -->
<div class="profile clearfix">
        </div>
        <!-- /menu profile quick info -->

        <br>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a href="{{ route('admin')}}"><i class="fa fa-home"></i>Home</a>
                <li><a href="{{ route('admin-tampilbarang')}}"><i class="fa fa-shopping-bag"></i>Barang</a></li>
                <li><a href="{{ route('kontak')}}"><i class="fa fa-address-book-o" aria-hidden="true"></i>Kontak</a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
        </ul>
        </nav>
    </div>
    </div>
<!-- /top navigation -->