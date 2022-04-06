<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
          <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
              <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                  <img src="{{ asset('public/assets/img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white"
                    alt="Bonnie Green">
                </div>
                <div class="d-block">
                  <h2 class="h5 mb-3">Hi, Jane</h2>
                  <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                    <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
                    Sign Out
                  </a>
                </div>
              </div>
              <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                  <span class="sidebar-icon">
                    <img src="{{ asset('public/assets/img/logo-final.png') }}" height="90" width="90" alt=" Logo">
                  </span>
                  <span class="mt-1 ms-1 sidebar-text">RFMS</span>
                </a>
              </li>
              <li class="nav-item {{ Route::current()->getName() == 'dashboard' ? 'active':'' }}   ">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                  </span> 
                  <span class="sidebar-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item {{ Route::current()->getName() == 'roles' ? 'active':'' }} ">
                <a href="{{ route('roles') }}" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                  </span>
                  <span class="sidebar-text">Roles</span>
                </a>
              </li>
              <li class="nav-item {{ Route::current()->getName() == 'subroles' ? 'active':'' }} ">
                <a href="{{ route('subroles') }}" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                  </span>
                  <span class="sidebar-text">SubRoles</span>
                </a>
              </li>
              <li class="nav-item ">
                <a href="../../pages/transactions.html" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                  </span>
                  <span class="sidebar-text">Transactions</span>
                </a>
              </li>
              <li class="nav-item ">
                <span
                  class="nav-link   collapsed  d-flex justify-content-between align-items-center"
                  data-bs-toggle="collapse" data-bs-target="#submenu-app">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    </span> 
                    <span class="sidebar-text">User Management</span>
                  </span>
                  <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  </span>
                </span>
                <div class="multi-level collapse {{ Route::current()->getName() == 'admins' || Route::current()->getName() == 'residents' || Route::current()->getName() == 'responders'  ? 'show':'' }}"
                  role="list" id="submenu-app" aria-expanded="false">
                  <ul class="flex-column nav">
                    <li class="nav-item {{ Route::current()->getName() == 'admins' ? 'active':'' }} ">
                      <a class="nav-link" href="{{ route('admins') }}">
                        <span class="sidebar-text">Admins</span>
                      </a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName() == 'residents' ? 'active':'' }}">
                      <a class="nav-link" href="{{ route('residents') }}">
                        <span class="sidebar-text">Residents</span>
                      </a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName() == 'responders' ? 'active':'' }}">
                      <a class="nav-link" href="{{ route('responders') }}">
                        <span class="sidebar-text">Responders</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="https://demo.themesberg.com/volt-pro/pages/calendar.html" target="_blank" class="nav-link d-flex justify-content-between">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd"></path></svg>
                    </span>
                    <span class="sidebar-text">Topics</span>
                  </span>
                 
                </a>
              </li>
              <li class="nav-item">
                <a href="https://demo.themesberg.com/volt-pro/pages/calendar.html" target="_blank" class="nav-link d-flex justify-content-between">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd"></path></svg>
                    </span>
                    <span class="sidebar-text">Complaint</span>
                  </span>
                  
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="https://demo.themesberg.com/volt-pro/pages/map.html" target="_blank" class="nav-link d-flex justify-content-between">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </span>
                    <span class="sidebar-text">Map</span>
                  </span>
                  <span>
                    <span class="badge badge-sm bg-secondary ms-1 text-gray-800">Pro</span>
                  </span>
                </a>
              </li> -->
              <li class="nav-item">
                <span
                  class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                  data-bs-toggle="collapse" data-bs-target="#submenu-complaint">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    </span> 
                    <span class="sidebar-text">Complaints</span>
                  </span>
                  <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  </span>
                </span>
                <div class="multi-level collapse { Route::current()->getName() == 'complaints' ? 'show':'' }}"
                  role="list" id="submenu-complaint" aria-expanded="false">
                  <ul class="flex-column nav">
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                        <span class="sidebar-text">New</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                        <span class="sidebar-text">Pending</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                        <span class="sidebar-text">In Progress</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                        <span class="sidebar-text">Completed</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <span
                  class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                  data-bs-toggle="collapse" data-bs-target="#submenu-pages">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                    </span> 
                    <span class="sidebar-text">Page examples</span>
                  </span>
                  <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  </span>
                </span>
                <div class="multi-level collapse " role="list"
                  id="submenu-pages" aria-expanded="false">
                  <ul class="flex-column nav">
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/sign-in.html">
                        <span class="sidebar-text">Sign In</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/sign-up.html">
                        <span class="sidebar-text">Sign Up</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/forgot-password.html">
                        <span class="sidebar-text">Forgot password</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/reset-password.html">
                        <span class="sidebar-text">Reset password</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/lock.html">
                        <span class="sidebar-text">Lock</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/404.html">
                        <span class="sidebar-text">404 Not Found</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../pages/examples/500.html">
                        <span class="sidebar-text">500 Not Found</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <span
                  class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                  data-bs-toggle="collapse" data-bs-target="#submenu-components">
                  <span>
                    <span class="sidebar-icon">
                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </span> 
                    <span class="sidebar-text">Components</span>
                  </span>
                  <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  </span>
                </span>
                <div class="multi-level collapse " role="list"
                  id="submenu-components" aria-expanded="false">
                  <ul class="flex-column nav">
                    <li class="nav-item">
                      <a class="nav-link" target="_blank"
                        href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">
                        <span class="sidebar-text">All Components</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/components/buttons.html">
                        <span class="sidebar-text">Buttons</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/components/notifications.html">
                        <span class="sidebar-text">Notifications</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/components/forms.html">
                        <span class="sidebar-text">Forms</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/components/modals.html">
                        <span class="sidebar-text">Modals</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="../../pages/components/typography.html">
                        <span class="sidebar-text">Typography</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            </ul>
          </div>
        </nav>