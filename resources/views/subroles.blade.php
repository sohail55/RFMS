@extends('layouts.main')
@section('content')
    
  <main class="content">

      <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
          <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
              <!-- Search form -->
              <!-- <form class="navbar-search form-inline" id="navbar-search-main">
                <div class="input-group input-group-merge search-bar">
                    <span class="input-group-text" id="topbar-addon">
                      <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                      </svg>
                    </span>
                    <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                </div>
              </form> -->
              <!-- / Search form -->
            </div>
            <div class="d-flex align-items-center">
              <span class="rfms">Residents Facilitation Management System (RFMS) </span>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                  <div class="list-group list-group-flush">
                    <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">a few moments ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src=" {{ asset('public/img/team/profile-picture-3.jpg') }} " class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 m-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                </div>
                                <div class="text-end">
                                  <small>5 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Tagged you in a document called "Financial plans",</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                </div>
                                <div class="text-end">
                                  <small>1 d ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                </div>
                                <div class="text-end">
                                  <small>2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                      <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                      View all
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown ms-lg-3">
                <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="media d-flex align-items-center">
                    <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('public/assets/img/team/profile-picture-3.jpg') }}  ">
                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                      <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    My Profile
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    Settings
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
                    Messages
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                    Support
                  </a>
                  <div role="separator" class="dropdown-divider my-1"></div>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">SubRoles</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">SubRoles</h1>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#modal-form" class="btn btn-gray-600 d-inline-flex align-items-center" >
                 + Add New SubRole
                </button>
            </div>
        </div>
      </div>

      <div class="card border-0 shadow ">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Title</th>
                        <th class="border-0">Role</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($subRoles as $key => $subRole)
                    <tr>
                      <td><a href="#" class="text-primary fw-bold">{{ $key+1 }}</a> </td>
                      <td><a href="#" class="text-primary fw-bold">{{ $subRole['title'] }}</a> </td>
                      <td class="fw-bold ">
                      {{ $subRole['roles']['title'] }}
                      </td>
                      <td>
                          @if($subRole['is_active'] == 0)
                            <span class="Active badge">Active</span>
                          @else
                            <span class="InActive">Inactive</span>
                          @endif
                      </td>
                      <td>
                        <a href="#" class="text-primary fw-bold">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="30px" height="30px"><path d="M16.5,94.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L35.249,88.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C17.56,94.019,17.029,94.083,16.5,94.083z" opacity=".35"/><path fill="#f2f2f2" d="M14.5,92.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L33.249,86.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C15.56,92.019,15.029,92.083,14.5,92.083z"/><path fill="#f9b84f" d="M76.516,34.03L28.945,81.714L18.361,71.105l47.571-47.684L76.516,34.03z"/><path fill="#f4665c" d="M84.721,22.033l-6.822-6.836c-1.037-1.041-2.726-1.041-3.765,0l-4.961,4.972l10.583,10.608 l4.965-4.968C85.76,24.766,85.76,23.078,84.721,22.033"/><path fill="#9aa2e6" d="M65.625,23.721l3.538-3.554l10.59,10.608l-3.538,3.554L65.625,23.721z"/><path fill="#fedeb3" d="M15.074,85.583l14.146-3.57L18.634,71.406L15.074,85.583z"/><path fill="#40396e" d="M14.5,87.083c-0.393,0-0.775-0.154-1.06-0.438c-0.374-0.373-0.523-0.915-0.395-1.427l3.56-14.177 c0.071-0.282,0.221-0.532,0.426-0.726l56.042-56.177c0.786-0.788,1.832-1.222,2.945-1.222c0,0,0.001,0,0.002,0 c1.113,0,2.158,0.435,2.943,1.223l6.82,6.834c0.001,0,0.001,0.001,0.002,0.002c1.616,1.625,1.616,4.269,0,5.892L29.709,83.071 c-0.106,0.106-0.228,0.196-0.358,0.265c-0.105,0.057-0.219,0.102-0.338,0.132l-14.146,3.57 C14.746,87.068,14.622,87.083,14.5,87.083z M19.414,72.174l-2.848,11.341l11.311-2.854L83.659,24.75 c0.454-0.456,0.454-1.199,0-1.657l-6.82-6.835c-0.219-0.22-0.51-0.34-0.82-0.341h0c-0.311,0-0.602,0.121-0.821,0.341L19.414,72.174 z"/><path fill="#40396e" d="M16.303,78.414L14.5,85.583l7.15-1.807L16.303,78.414z"/></svg>
                        </a> 

                        <a href="#" class="text-primary fw-bold">
                          <svg fill="#fa314a" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg>
                        </a>  
                      </td>
                    </tr>
                    @endforeach
                    <!-- End of Item -->
                </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body p-0">
                  <div class="card p-3 p-lg-4">
                      <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center text-md-center mb-4 mt-md-0">
                          <h1 class="mb-0 h4">Add New SubRole</h1>
                      </div>
                      <form action="#" class="mt-4" name="subroles" method="Post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <!-- Form -->
                          <div class="form-group mb-4">
                              <label for="email">Role</label>
                              <div class="input-group">
                                  <select class="form-select" id="role" name="role"  >
                                    <option  value="">Select Role</option>
                                    <option  value="1">admins</option>
                                    <option  value="2">handy man Responders</option>
                                    <option  value="3">Security Responders</option>
                                    <option  value="4">Resident</option>
                                  </select>
                              </div>  
                          </div>
                          <!-- End of Form -->
                          <div class="form-group">
                              <!-- Form -->
                              <div class="form-group mb-4">
                                  <label for="password">Title</label>
                                  <div class="input-group">
                                      <input type="text" placeholder="Title" class="form-control" id="title" name="title">
                                  </div>  
                              </div>
                              <!-- End of Form -->
                          </div>
                          <div class="d-grid">
                              <button type="submit" id="btn-save" class="btn btn-gray-800">Save</button>
                          </div>
                      </form>
                      
                  </div>
              </div>
          </div>
        </div>
      </div>

     <!--  <div class="py-4">
          <div class="dropdown">
              <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                  New Task
              </button>
              <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                      Add User
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>                            
                      Add Widget
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>                            
                      Upload Files
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                      Preview Security
                  </a>
                  <div role="separator" class="dropdown-divider my-1"></div>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                      Upgrade to Pro
                  </a>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Customers</h2>
                                  <h3 class="fw-extrabold mb-1">345,678</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                  <h3 class="fw-extrabold mb-2">345k</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  USA
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">22%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Revenue</h2>
                                  <h3 class="mb-1">$43,594</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                  <h3 class="fw-extrabold mb-2">$43,594</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  GER
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg><span class="text-danger fw-bolder">2%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                  <h3 class="mb-1">50.88%</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                                  <h3 class="fw-extrabold mb-2">50.88%</h3>
                              </div>
                              <small class="text-gray-500">
                                  Feb 1 - Apr 1
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Customers</h2>
                                  <h3 class="fw-extrabold mb-1">345,678</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                  <h3 class="fw-extrabold mb-2">345k</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  USA
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">22%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Revenue</h2>
                                  <h3 class="mb-1">$43,594</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                  <h3 class="fw-extrabold mb-2">$43,594</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  GER
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg><span class="text-danger fw-bolder">2%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                  <h3 class="mb-1">50.88%</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                                  <h3 class="fw-extrabold mb-2">50.88%</h3>
                              </div>
                              <small class="text-gray-500">
                                  Feb 1 - Apr 1
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Customers</h2>
                                  <h3 class="fw-extrabold mb-1">345,678</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                  <h3 class="fw-extrabold mb-2">345k</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  USA
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">22%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Revenue</h2>
                                  <h3 class="mb-1">$43,594</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                  <h3 class="fw-extrabold mb-2">$43,594</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  GER
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg><span class="text-danger fw-bolder">2%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                  <h3 class="mb-1">50.88%</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                                  <h3 class="fw-extrabold mb-2">50.88%</h3>
                              </div>
                              <small class="text-gray-500">
                                  Feb 1 - Apr 1
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Customers</h2>
                                  <h3 class="fw-extrabold mb-1">345,678</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                  <h3 class="fw-extrabold mb-2">345k</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  USA
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">22%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Revenue</h2>
                                  <h3 class="mb-1">$43,594</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                  <h3 class="fw-extrabold mb-2">$43,594</h3>
                              </div>
                              <small class="d-flex align-items-center text-gray-500">
                                  Feb 1 - Apr 1,  
                                  <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                  GER
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg><span class="text-danger fw-bolder">2%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                  <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                  <h3 class="mb-1">50.88%</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                                  <h3 class="fw-extrabold mb-2">50.88%</h3>
                              </div>
                              <small class="text-gray-500">
                                  Feb 1 - Apr 1
                              </small> 
                              <div class="small d-flex mt-1">                               
                                  <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> -->
      

  </main>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
    $(function() {

          // Initialize form validation on the registration form.

          // It has the name attribute "registration"

          $("form[name='subroles']").validate({

            // Specify validation rules
            rules: {

             // role: "required",
              //Title: "required",
            },

            // Specify validation error messages
            messages: {
              role: "Role field is required.",
              title: "Title is required.",
            },

            // Make sure the form is submitted to the destination defined

            // in the "action" attribute of the form when valid

            submitHandler: function(form) {

              //Save data into database


             form.submit();

            }

          });

        });

     $("#btn-save").click(function (e) {
              console.log('ia na dnfadsi');
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  e.preventDefault();
                  var formData = {
                      title: jQuery('#title').val(),
                      role: jQuery('#role').val(),
                  };
                  
                  var type = "POST";
                  var ajaxurl = 'createSubRole';
                  $.ajax({
                      type: type,
                      url: ajaxurl,
                      data: formData,
                      dataType: 'json',
                      success: function (data) {
                          $('#modal-form').modal('hide');
                          Swal.fire({
                            position: 'top-middle',
                            icon: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                          })
                          setTimeout(function(){// wait for 5 secs(2)
                             location.reload(); // then reload the page.(3)
                        }, 3000);
                      },
                      error: function (data) {
                          console.log(data);
                      }
                  });
              });
  </script>
  
@endsection

