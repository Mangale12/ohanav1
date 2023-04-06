<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('frontend/image/logo/logo.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Front End</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/sliders')}}"><i class="fa fa-circle-o"></i> Front Slider</a></li>
                    <li><a href="{{url('admin/addsliders')}}"><i class="fa fa-circle-o"></i> Add Slider</a></li>
                    <li><a href="{{url('admin/about')}}"><i class="fa fa-circle-o"></i> About Page</a></li>
                    <li><a href="{{url('admin/viewTeams')}}"><i class="fa fa-circle-o"></i> All Team User</a></li>
                    <li><a href="{{url('admin/addTeam')}}"><i class="fa fa-circle-o"></i> Add Team User</a></li>
                    <li><a href="{{url('admin/advisor')}}"><i class="fa fa-circle-o"></i> Advisors(Testimonial)</a></li>
                    <li><a href="{{url('admin/services')}}"><i class="fa fa-circle-o"></i> Services</a></li>

                </ul>
            </li>

             <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>Board Of Directors</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/boardOfDirectors')}}"><i class="fa fa-circle-o"></i> View Members</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/viewAdmin')}}"><i class="fa fa-circle-o"></i> All User</a></li>
                    <li><a href="{{url('admin/addAdmin')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i> <span>Portfolio</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/managePortfolio')}}"><i class="fa fa-circle-o"></i> Manage Portfolio</a></li>
                    <li><a href="{{url('admin/viewObjective')}}"><i class="fa fa-circle-o"></i> Objective</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Project</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/allProjects')}}"><i class="fa fa-circle-o"></i> All Projects</a></li>
                    <li><a href="{{url('admin/addProject')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/companyHistory')}}"><i class="fa fa-circle-o"></i> History</a></li>
                    <li><a href="{{url('admin/addHistory')}}"><i class="fa fa-circle-o"></i> Add History Events</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-handshake-o"></i> <span>Companies</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/viewPartners')}}"><i class="fa fa-circle-o"></i> All Partners</a></li>
                    <li><a href="{{url('admin/addPartners')}}"><i class="fa fa-circle-o"></i> Add Partners</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Page Post</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/blogCategory')}}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li><a href="{{url('admin/addBlogCategory')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="{{url('admin/viewBlogs')}}"><i class="fa fa-circle-o"></i> All Post</a></li>
                    <li><a href="{{url('admin/addBlog')}}"><i class="fa fa-circle-o"></i> Add Post</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Inbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/viewMails')}}"><i class="fa fa-circle-o"></i> All Mails</a></li>
                    <li><a href="{{ url('/suscribe/view') }}"><i class="fa fa-circle-o"></i> View Suscribe</a></li>
                </ul>


            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i> <span>Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/settings')}}"><i class="fa fa-circle-o"></i> All Settings</a></li>
                </ul>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i> <span>Our Service</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('services')}}"><i class="fa fa-circle-o"></i>View All Service</a></li>
                    <li><a href="{{route('addService')}}"><i class="fa fa-circle-o"></i>Add New Service</a></li>
                </ul>

            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
