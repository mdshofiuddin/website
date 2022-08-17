@php
$route = Route::current()->getName();

@endphp


<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/images/Tricotfashion.PNG" style="width: 220px;height:60px;" alt="Tricot Fashion Logo"  style="opacity: .8">
      {{-- <img src="assets/images/Tricotfashion.PNG" style="width: 20px;height:20px;" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      {{-- <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/{{Auth::user()->image}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    {{-- <li class="nav-item menu-open"> --}}

    <li class="nav-item bg-custom {{($route=='show-slider' or $route=='create-slider' or $route=='editSlider' or $route=='deleteSlider')?'menu-open':''}}">
      <a href="#" class="nav-link active">
        <i class="fas fa-solid fa-sliders-simple"></i>
        <p>
        Top Slider Section
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('create-slider')}}" class="nav-link {{($route=='create-slider')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
               Create Slider
                </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{route('show-slider')}}" class="nav-link {{($route=='show-slider')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Show Slider
                </p>
              </a>
            </a>
        </li>
      </ul>
    </li>

    <li class="nav-item bg-custom {{($route=='show-about' or $route=='create-about' or $route=='editAbout' or $route=='deleteAbout')?'menu-open':''}}">
      <a href="#" class="nav-link active">
        <i class="fas fa-solid fa-address-card"></i>
        <p>
        About Section
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('create-about')}}" class="nav-link {{($route=='create-about')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
               Create Description
                </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{route('show-about')}}" class="nav-link {{($route=='show-about')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Show About
                </p>
              </a>
            </a>
        </li>
      </ul>
    </li>

    <li class="nav-item bg-custom {{($route=='show-mission' or $route=='create-mission' or $route=='editMission' or $route=='deleteMission')?'menu-open':''}}">
        <a href="#" class="nav-link active">
          <i class="fas fa-solid fa-braille"></i>
          <p>
          Mission & Vission
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-mission')}}" class="nav-link {{($route=='create-mission')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create Description
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-mission')}}" class="nav-link {{($route=='show-mission')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Mission
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>



      <li class="nav-item bg-custom {{($route=='show-certification' or $route=='create-certification' or $route=='editCertification' or $route=='deleteCertification')?'menu-open':''}}">
        <a href="#" class="nav-link active">
            <i class="fas fa-solid fa-certificate"></i>
          <p>
          Certification Section
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-certification')}}" class="nav-link {{($route=='create-certification')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create Certification
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-certification')}}" class="nav-link {{($route=='show-certification')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Certification
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>


      <li class="nav-item bg-custom {{($route=='show-coundown' or $route=='create-coundown' or $route=='editCoundown' or $route=='deleteCoundown')?'menu-open':''}}">
        <a href="#" class="nav-link active">
            <i class="fas fa-solid fa-calculator"></i>
          <p>
          Countdown Section
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-coundown')}}" class="nav-link {{($route=='create-coundown')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create countdown
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-coundown')}}" class="nav-link {{($route=='show-coundown')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Countdown
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>


      <li class="nav-item bg-custom {{($route=='show-process' or $route=='create-process' or $route=='editProcess' or $route=='deleteProcess')?'menu-open':''}}">
        <a href="#" class="nav-link active">
            <i class="fas fa-solid fa-microchip"></i>
          <p>
         Working Process
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-process')}}" class="nav-link {{($route=='create-process')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create Process
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-process')}}" class="nav-link {{($route=='show-process')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Process
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>

      <li class="nav-item bg-custom {{($route=='show-management' or $route=='create-management' or $route=='editManagement' or $route=='deleteManagement')?'menu-open':''}}">
        <a href="#" class="nav-link active">
            <i class="fas fa-solid fa-street-view"></i>
          <p>
         Management
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-management')}}" class="nav-link {{($route=='create-management')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create Management
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-management')}}" class="nav-link {{($route=='show-management')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Management
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>


      <li class="nav-item bg-custom {{($route=='show-contact' or $route=='create-contact' or $route=='editContact' or $route=='deleteContact')?'menu-open':''}}">
        <a href="#" class="nav-link active">
            <i class="fas fa-solid fa-address-book"></i>
          <p>
         Contact Section
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{route('create-contact')}}" class="nav-link {{($route=='create-contact')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                 Create Contact
                  </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('show-contact')}}" class="nav-link {{($route=='show-contact')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Show Contact
                  </p>
                </a>
              </a>
          </li>

        </ul>
      </li>


     @if(Auth::user()->role == 'admin')


      <li class="nav-item bg-custom {{($route=='showData' or $route=='create' or $route=='editData' or $route=='deleteData')?'menu-open':''}}">
      <a href="#" class="nav-link active">
        <i class="fas fa-solid fa-users"></i>
        <p>
          User Permission
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('create')}}" class="nav-link {{($route=='create')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Create User
                </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{route('showData')}}" class="nav-link {{($route=='showData')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  User List
                </p>
            </a>
        </li>

      </ul>
    </li>

@endif

        </ul>
    </nav>

</aside>




