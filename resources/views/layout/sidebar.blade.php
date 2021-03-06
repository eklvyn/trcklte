<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $companyName or "Company Name" }}</p>
                <!-- Location -->
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Active</a> -->
                <a href="#">{{ $companyLocation or "Location" }}</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> <span>Live</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Report A</a></li>
                    <li><a href="#">Report B</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-gear"></i> <span>Configure</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Geofences</a></li>
                    <li><a href="#">Landmarks</a></li>
                    <li><a href="#">Routes</a></li>
                    <li><a href="#">Configure Events</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
