<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/') }}" class="brand-link">
      <img src="{{ asset('BackEndSourceFile')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Site Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('BackEndSourceFile')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_cate_table') }}" class="nav-link active">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_cate') }}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Coupon
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_coupon_table') }}" class="nav-link active">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_coupon') }}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Manage Coupon</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Computer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_computer_table') }}" class="nav-link active">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Computer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_computer') }}" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Manage Computer</p>
                </a>
              </li>
            </ul>
          </li>

          <div class="nav-item">
            <a href="{{ route('manage_user') }}" class="nav-link">
              <i class="nav-icon ion ion-person-add"></i>
              <p>
                User
              </p>
            </a>
          </div>

          <div class="nav-item">
            <a href="{{ route('manage_question') }}" class="nav-link">
              <i class="nav-icon ion ion-email"></i>
              <span class="badge badge-info right">3</span>
              <p>
                Inbox
              </p>
            </a>
          </div>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>