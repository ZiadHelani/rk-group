<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('images/logo.jpeg')}}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RK Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- Dashboard  --}}
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{$title == 'home' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-solid fa-gauge" style="padding-right: 10px"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- end Dashboard  --}}

            <li class="nav-item {{$title == 'Home Header Image' || $title == 'Hero Section' || $title == 'Home About US' || $title == 'Home Trading' || $title == 'Edit Data Trading' || $title == 'Home Engineering' || $title == 'Edit Data Engineering' || $title == 'Home Logistic Services' || $title == 'Our Partner' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Home Header Image' || $title == 'Hero Section' || $title == 'Home About US' || $title == 'Home Trading' || $title == 'Edit Data Trading' || $title == 'Home Engineering' || $title == 'Edit Data Engineering' || $title == 'Home Logistic Services' || $title == 'Our Partner' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-solid fa-house" style="padding-right: 10px"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('home_header_image')}}" class="nav-link {{$title == 'Home Header Image' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Header Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('hero_section')}}" class="nav-link {{$title == 'Hero Section' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hero Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home_about_us')}}" class="nav-link {{$title == 'Home About US' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home About US</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home_trading')}}" class="nav-link {{$title == 'Home Trading' || $title == 'Edit Data Trading' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Trading</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home_engineering')}}" class="nav-link {{$title == 'Home Engineering' || $title == 'Edit Data Engineering' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Engineering</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home_logistic_services')}}" class="nav-link {{$title == 'Home Logistic Services' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Logistic Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home_our_partner')}}" class="nav-link {{$title == 'Our Partner' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Partner</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- end Home Page  --}}

          {{-- About US Page  --}}
          <li class="nav-item {{$title == 'Header Image' || $title == 'About Us Content' || $title == 'Edit Content' || $title == 'Certificates' || $title == 'Organization Chart' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Header Image' || $title == 'About Us Content' || $title == 'Edit Content' || $title == 'Certificates' || $title == 'Organization Chart' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-regular fa-address-card" style="padding-right: 10px"></i>
              <p>
                About US
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('about_header_image')}}" class="nav-link {{$title == 'Header Image' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Image</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('about_us_content')}}" class="nav-link {{$title == 'About Us Content' || $title == 'Edit Content' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Content</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('certificates')}}" class="nav-link {{$title == 'Certificates' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Certificates</p>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="{{route('organization_chart')}}" class="nav-link {{$title == 'Organization Chart' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Organization Chart</p>
                    </a>
                </li>
            </ul>
          </li>
          {{-- end About US Page  --}}

            {{-- Our Work Page  --}}
            <li class="nav-item {{$title == 'Our Work Header Image' || $title == 'Our Work Content' || $title == 'Edit Our Work Content' ? 'menu-open' : 'menu-close'}}">
                <a href="#" class="nav-link {{$title == 'Our Work Header Image' || $title == 'Our Work Content' || $title == 'Edit Our Work Content' ? 'active' : ''}}">
                  {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                  <i class="fa-solid fa-briefcase" style="padding-right: 10px"></i>
                  <p>
                    Our Work
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('our_work_header_image')}}" class="nav-link {{$title == 'Our Work Header Image' ? 'active' : ''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Header Image</p>
                        </a>
                      </li>
                    <li class="nav-item">
                        <a href="{{route('our_work_content')}}" class="nav-link {{$title == 'Our Work Content' || $title == 'Edit Our Work Content' ? 'active' : ''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Content</p>
                        </a>
                      </li>
                </ul>
            </li>
            {{-- end Our Work Page  --}}
            {{-- Contact Us Page  --}}
            <li class="nav-item {{$title == 'Our Office' || $title == 'Get in Touch' || $title == 'Follow US' ? 'menu-open' : 'menu-close'}}">
                <a href="#" class="nav-link {{$title == 'Our Office' || $title == 'Get in Touch' || $title == 'Follow US' ? 'active' : ''}}">
                  {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                  <i class="fa-regular fa-address-book" style="padding-right: 10px"></i>
                  <p>
                    Contact US
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('contact_us_our_office')}}" class="nav-link {{$title == 'Our Office' ? 'active' : ''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Our Office</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact_us_touch')}}" class="nav-link {{$title == 'Get in Touch' ? 'active' : ''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Get in Touch</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact_us_follow_us')}}" class="nav-link {{$title == 'Follow US' ? 'active' : ''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Follow US</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- end Contact Us Page  --}}

          {{-- Logout  --}}
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fa-solid fa-right-from-bracket" style="padding-right: 10px; margin-left:3px;"></i>
              {{-- <i class="nav-icon fas fa-sign-out-alt"></i> --}}
            <p>
                Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </a>
          </li>
          {{-- end logout --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
