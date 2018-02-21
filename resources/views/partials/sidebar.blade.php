<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input class="form-control" type="text" placeholder="Search..."/><span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                </div>
                <!-- /input-group-->
            </li>
            <li class="sidebar-title"><i class="fa fa-dashboard fa-fw"></i> Dashboard</li>
            <li><a href="javascript:void(0)"><i class="fa fa-bars fa-fw"></i> Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li><a href="{{ route('menu.index') }}" class="addMenu"><i class="fa fa-eye"></i> Menu</a></li>
                    <li><a href="{{ route('menu.show') }}" class="allMenu"><i class="fa fa-eye"></i> Menulist</a></li>
                </ul>
                <!-- /.nav-second-level-->
            </li>
            <li><a href="{{ route('brand.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Brands</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-bar-chart-o fa-fw"></i> Categories<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li><a href="{{ route('category.show') }}" class="allCategories"><i class="fa fa-eye"></i> All Categories</a></li>
                    <li><a href="#" class="addCategory"><i class="fa fa-plus"></i> Add Category</a></li>
                </ul>
                <!-- /.nav-second-level-->
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-bar-chart-o fa-fw"></i> Products<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li><a href="{{ route('products.table') }}" class="allProducts"><i class="fa fa-eye"></i> All Products</a></li>
                    <li><a href="{{ route('products.index') }}" class="addProduct"><i class="fa fa-plus"></i> Add Product</a></li>
                </ul>
                <!-- /.nav-second-level-->
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-user fa-fw"></i> Team<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li><a href="{{ route('teams.index') }}" class="allTeams"><i class="fa fa-eye"></i> All Team Members</a></li>
                    <li><a href="{{ route('teams.create') }}" class="addTeam"><i class="fa fa-plus"></i> Add New Member</a></li>
                </ul>
                <!-- /.nav-second-level-->
            </li>
            <li><a href="{{ route('settings') }}"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
            <li><a href="#"><i class="fa fa-quote-right fa-fw"></i> Testimonials<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li><a href="{{ route('testimonials.index') }}"><i class="fa fa-eye"></i> All Testimonials</a></li>
                    <li><a href="{{ route('testimonials.create') }}"><i class="fa fa-plus"></i> Add Testimonial</a></li>
                </ul>
                <!-- /.nav-second-level-->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse-->
</div>
<!-- /.navbar-static-side-->
