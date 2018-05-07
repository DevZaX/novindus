  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src='{{asset("images/admin.png")}}' class="user-image" alt="User Image">
              <span class="hidden-xs" style="margin-right:10px;">Admin</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-footer">
              
                <div class="pull-right">
                <form id="frm" action="{{url('/logout')}}" method="post">
                  {{ csrf_field() }}
                  <a onclick='document.getElementById("frm").submit()' class="btn btn-default btn-flat">Sign out</a>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='{{asset("images/admin.png")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="margin-top:12px;font-size:10px;">{{Auth::user()->email}}</p>
         
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li >
          <a href="{{url('/menus')}}">
            <i class="glyphicon glyphicon-edit"></i> <span>menus</span>
          </a>
        </li>

        <li >
          <a href="{{url('/titres')}}">
            <i class="glyphicon glyphicon-th-list"></i> <span>titres</span>
          </a>
        </li>
        <li >
           <a  href="{{url('/categories')}}">
            <i class="glyphicon glyphicon-edit"></i> <span>categories</span>
          </a>
        </li>

          <li >
           <a  href="{{url('/ps')}}">
            <i class="glyphicon glyphicon-edit"></i> <span>pages</span>
          </a>
        </li>
    

         <li><a  href="{{url('/arts')}}">
            <i class="glyphicon glyphicon-edit""></i> <span>articles</span>
          </a>
   </li>

     <li><a  href="{{url('/pubs')}}">
            <i class="glyphicon glyphicon-edit""></i> <span>articles home page</span>
          </a>
   </li>

      <li><a  href="{{url('/options')}}">
            <i class="glyphicon glyphicon-edit""></i> <span>  options</span>
          </a>
   </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
