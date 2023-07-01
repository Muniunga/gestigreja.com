  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('public/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('public/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('public/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link" style="text-align: center;">
      <span class="brand-text font-weight-light" style="font-weight: bold !important; font-size:20px;">GestIgreja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <!--<a href="#" class="d-block">Alexander Pierce</a>-->
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            @if(Auth::user()->user_type==1)
          <li class="nav-item">
            <a href="{{url('admin/dashboard') }}" class="nav-link  @if(Request::segment(2) =='dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard {{ Request::segment(1) }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/admin/lista') }}" class="nav-link @if(Request::segment(2) =='') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/endereco/lista') }}" class="nav-link @if(Request::segment(2) =='endereco') active @endif">
              <i class="nav-icon fas fa-map-marker-alt mr-1"></i>
              <p>
                Endereços
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/paroquia/lista') }}" class="nav-link @if(Request::segment(2) =='paroquia') active @endif">
              <i class="nav-icon fas fa-lg fa-regular fa-landmark fa-fw"></i>
              <p>
                Paroquias
              </p>
            </a>
          </li>
          <li class="nav-item">

            <a href="{{url('admin/membro/lista') }}" class="nav-link @if(Request::segment(2) =='membro') active @endif">
              <i class="nav-icon fas fa-lg fa-users"></i>
              <p>
                Membros
              </p>
            </a>
          </li>

          <li class="nav-item">

            <a href="{{url('admin/dizimo/lista') }}" class="nav-link @if(Request::segment(2) =='dizimo') active @endif">
            <i class="nav-icon fas fa fa-dollar"></i>
              <p>
                Dizimos
              </p>
            </a>
          </li>
          <li class="nav-item">

            <a href="{{url('admin/oferta/lista') }}" class="nav-link @if(Request::segment(2) =='oferta') active @endif">
              <i class="nav-icon  fas fa-lg fa-tags fa-fw "></i>

              <p>
                Ofertas
              </p>
            </a>
          </li>
          <li class="nav-item">

            <a href="{{url('admin/sancao/lista') }}" class="nav-link @if(Request::segment(2) =='sancao') active @endif">
              <i class="nav-icon fas fa-lg fa-exclamation-circle fa-fw"></i>
              <p>
                Sanções
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout') }}" class="nav-link">
               <i class="nav-icon fas fa-lg fa-sign-out-alt" aria-hidden="true"></i>
              <p>
                Sair
              </p>
            </a>
          </li>

          @elseif(Auth::user()->user_type==2)
          <li class="nav-item">
            <a href="{{url('secretario/dashboard') }}" class="nav-link  @if(Request::segment(2) =='dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard {{ Request::segment(1) }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/admin/lista') }}" class="nav-link @if(Request::segment(2) =='lista') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Listar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout') }}" class="nav-link">
               <i class="fa fa-sign-out" aria-hidden="true"></i>
              <p>
                sair
              </p>
            </a>
          </li>

          @elseif(Auth::user()->user_type==3)
          <li class="nav-item">
            <a href="{{url('tesoureiro/dashboard') }}" class="nav-link  @if(Request::segment(2) =='dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard {{ Request::segment(1) }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/admin/lista') }}" class="nav-link @if(Request::segment(2) =='lista') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Listar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout') }}" class="nav-link">
               <i class="fa fa-sign-out" aria-hidden="true"></i>
              <p>
                sair
              </p>
            </a>
          </li>

    @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
