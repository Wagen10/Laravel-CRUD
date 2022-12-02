<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('admin/table') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/data-tables') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Data Table
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('cast') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Cast
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
        </ul>
      </nav>