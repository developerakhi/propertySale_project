<!-- Sidebar -->
<div class="sidebar">
    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.home')}}" class="brand-link">
          <img src="{{asset('public/backend/dist/img/icon-home-logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3">
          <span class="brand-text font-weight-light">Iconhomes</span>
        </a>
    
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview ">
          <a href="{{route('admin.home')}}" class="nav-link active">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="las la-home"></i>
            <p>
              Properties
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('property.create')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>Add Properties</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('property.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>All Properties</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>category</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('location.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>location</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('size.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>size</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{route('type.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>Location Type</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="lar la-question-circle"></i>
            <p>
              Customers Queries
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('CustomerQuery.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>All Queries</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="las la-recycle"></i>
            <p>
              Post Your ADS
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('postad.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>All Ads</p>
              </a>
            </li>
          </ul>
        </li>
       
       <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="las la-recycle"></i>
            <p>
              Plot Visit Schedule
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('plotvisit.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>All Plot Visit</p>
              </a>
            </li>
          </ul>
        </li>
       
       
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="las la-cog"></i>
            <p>
              Business Settings
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('business.index')}}" class="nav-link">
                <i class="lar la-circle size"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    
  </div>
  <!-- /.sidebar -->
</aside>