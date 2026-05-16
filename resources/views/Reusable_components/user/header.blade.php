<!-- ======= Header ======= -->
    <header id="header" class="glass-nav sticky-top" style="width:100%; z-index: 1000; transition: var(--transition); border-bottom: 1px solid rgba(0,0,0,0.05);">
        <div class="container d-flex align-items-center justify-content-between py-2">
    
          <div id="Gainaloe_Logo" class="logo flex-shrink-0">
            <a href="/" style="text-decoration: none;" class="d-flex align-items-center">
                <h3 class="m-0 font-weight-bold" style="color: var(--primary-color); font-family: 'Outfit', sans-serif; letter-spacing: -0.5px; white-space: nowrap;">
                    Agro<span style="color: var(--secondary-color);">Pest</span>
                    <span class="small text-muted font-weight-normal ml-1 d-none d-lg-inline" style="font-size: 0.85rem; border-left: 1px solid #ddd; padding-left: 8px;">Advisory System</span>
                </h3>
            </a>
          </div>
 
          <div class="search-container d-none d-md-block flex-grow-1 px-4" style="max-width: 350px;">
              <div class="input-group">
                <input class="form-control searchstring border-right-0" list="plists" name="plist" id="plist" type="text" placeholder="Search..." style="border-radius: 20px 0 0 20px; font-size: 0.9rem;">
                <div class="input-group-append">
                    <span class="input-group-text bg-white" style="border-radius: 0 20px 20px 0; border-left: none; cursor: pointer;">
                        <i class="fas fa-search text-muted small"></i>
                    </span>
                </div>
            </div>
          </div>
 
          <nav class="nav-menu d-none d-lg-block">
            <ul class="d-flex align-items-center m-0 list-unstyled" style="gap: 15px;">
              <li class="active"><a href="/" class="text-dark font-weight-bold">Home</a></li>
              <li><a href="#About" class="text-muted hover-green font-weight-500">About</a></li>
              <li><a href="#PestDiagnostic" class="text-muted hover-green font-weight-500">Diagnostics</a></li>
              <li><a href="#Pests" class="text-muted hover-green font-weight-500">Library</a></li>
              <li><a href="{{url('Help')}}" class="text-muted hover-green font-weight-500">Expert</a></li>   
             
                @if (Route::has('login'))
                    @auth
                      <li class="drop-down">
                        <a href="#" class="text-muted hover-green">My Account <i class="fas fa-angle-down"></i></a> 
                        <ul class="shadow-lg border-0 rounded p-2">
                            <li><a href="{{url('dashboard')}}"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
                            <li><a href="{{url('profile')}}"><i class="fas fa-user mr-2"></i>Profile</a></li>
                            <li><a href="{{url('Orders')}}"><i class="fas fa-table mr-2"></i>My Reports</a></li>
                            <li class="divider my-1"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-danger">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </li>
                        </ul>
                      </li>
                    @else
                        <li><a href="{{ route('login') }}" class="btn-modern btn-outline-dark py-1 px-3 shadow-none" style="font-size: 0.85rem; border-radius: 30px;">Login</a></li>
                    @endauth
                @endif
          
                <li>
                    <a href="{{url('cart')}}" class="position-relative ml-2">
                        <i class="fas fa-shopping-basket text-dark" style="font-size: 1.2rem;"></i>
                        <span class="badge badge-pill badge-success position-absolute" style="top: -8px; right: -8px; font-size: 0.65rem;">
                            {{ count((array) session('cart')) }}
                        </span>
                    </a>
                </li>
            </ul>
          </nav>
          
          <button class="mobile-nav-toggle d-lg-none btn btn-link text-dark"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <style>
        .hover-green:hover {
            color: var(--secondary-color) !important;
            transition: var(--transition);
        }
        .nav-menu ul li a {
            text-decoration: none;
            font-size: 0.95rem;
            transition: var(--transition);
        }
        .drop-down ul {
            position: absolute;
            background: white;
            list-style: none;
            padding: 10px;
            display: none;
            min-width: 180px;
            z-index: 999;
        }
        .drop-down:hover ul {
            display: block;
        }
        .drop-down ul li a {
            display: block;
            padding: 8px 15px;
            color: var(--text-main);
        }
        .drop-down ul li a:hover {
            background: var(--bg-light);
            color: var(--secondary-color);
        }
    </style>