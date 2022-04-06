@extends('layouts.main')
@section('content')
    
  <main class="content">

      @include('components.header_menu')

      <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
                <li class="breadcrumb-item"><a href="#">Admins</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Admins</h1>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#modal-form" class="btn btn-gray-600 d-inline-flex align-items-center" >
                 + Add New Admin
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
                        <th class="border-0">Full Name</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Mobile #</th>
                        <th class="border-0">CNIC</th>
                        <th class="border-0">Role</th>
                        <th class="border-0">Profile pic</th>
                        <th class="border-0">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                   
                    <tr>
                      <td><a href="#" class="text-primary fw-bold"> 1</a> </td>
                      <td><a href="#" class="text-primary fw-bold">Fahad Noor</a> </td>
                      <td class="fw-bold ">fahad.noor@dhamultan.org   </td>
                      <td class="fw-bold ">0321677878  </td>
                      <td class="fw-bold ">3264887878787  </td>
                      <td class="fw-bold ">application administrator  </td>
                      <td class="fw-bold "><img src="{{ asset('public/assets/img/person-profile.png') }}" height="30px" width="30px" alt="Img" > </td>
                      <td>
                        <a href="#" class="text-primary fw-bold">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="30px" height="30px"><path d="M16.5,94.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L35.249,88.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C17.56,94.019,17.029,94.083,16.5,94.083z" opacity=".35"/><path fill="#f2f2f2" d="M14.5,92.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L33.249,86.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C15.56,92.019,15.029,92.083,14.5,92.083z"/><path fill="#f9b84f" d="M76.516,34.03L28.945,81.714L18.361,71.105l47.571-47.684L76.516,34.03z"/><path fill="#f4665c" d="M84.721,22.033l-6.822-6.836c-1.037-1.041-2.726-1.041-3.765,0l-4.961,4.972l10.583,10.608 l4.965-4.968C85.76,24.766,85.76,23.078,84.721,22.033"/><path fill="#9aa2e6" d="M65.625,23.721l3.538-3.554l10.59,10.608l-3.538,3.554L65.625,23.721z"/><path fill="#fedeb3" d="M15.074,85.583l14.146-3.57L18.634,71.406L15.074,85.583z"/><path fill="#40396e" d="M14.5,87.083c-0.393,0-0.775-0.154-1.06-0.438c-0.374-0.373-0.523-0.915-0.395-1.427l3.56-14.177 c0.071-0.282,0.221-0.532,0.426-0.726l56.042-56.177c0.786-0.788,1.832-1.222,2.945-1.222c0,0,0.001,0,0.002,0 c1.113,0,2.158,0.435,2.943,1.223l6.82,6.834c0.001,0,0.001,0.001,0.002,0.002c1.616,1.625,1.616,4.269,0,5.892L29.709,83.071 c-0.106,0.106-0.228,0.196-0.358,0.265c-0.105,0.057-0.219,0.102-0.338,0.132l-14.146,3.57 C14.746,87.068,14.622,87.083,14.5,87.083z M19.414,72.174l-2.848,11.341l11.311-2.854L83.659,24.75 c0.454-0.456,0.454-1.199,0-1.657l-6.82-6.835c-0.219-0.22-0.51-0.34-0.82-0.341h0c-0.311,0-0.602,0.121-0.821,0.341L19.414,72.174 z"/><path fill="#40396e" d="M16.303,78.414L14.5,85.583l7.15-1.807L16.303,78.414z"/></svg>
                        </a> 

                        <a href="#" class="text-primary fw-bold">
                          <svg fill="#fa314a" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg>
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-primary fw-bold"> 2</a> </td>
                      <td><a href="#" class="text-primary fw-bold">Ayesha Khan</a> </td>
                      <td class="fw-bold ">ayesha.khan@dhamultan.org </td>
                      <td class="fw-bold ">0321677878 </td>
                      <td class="fw-bold ">3264887878787  </td>
                      <td class="fw-bold "> application administrator</td>
                      <td class="fw-bold "><img src="{{ asset('public/assets/img/person-profile.png') }}" height="30px" width="30px" alt="Img" > </td>
                      <td>
                        <a href="#" class="text-primary fw-bold">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="30px" height="30px"><path d="M16.5,94.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L35.249,88.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C17.56,94.019,17.029,94.083,16.5,94.083z" opacity=".35"/><path fill="#f2f2f2" d="M14.5,92.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L33.249,86.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C15.56,92.019,15.029,92.083,14.5,92.083z"/><path fill="#f9b84f" d="M76.516,34.03L28.945,81.714L18.361,71.105l47.571-47.684L76.516,34.03z"/><path fill="#f4665c" d="M84.721,22.033l-6.822-6.836c-1.037-1.041-2.726-1.041-3.765,0l-4.961,4.972l10.583,10.608 l4.965-4.968C85.76,24.766,85.76,23.078,84.721,22.033"/><path fill="#9aa2e6" d="M65.625,23.721l3.538-3.554l10.59,10.608l-3.538,3.554L65.625,23.721z"/><path fill="#fedeb3" d="M15.074,85.583l14.146-3.57L18.634,71.406L15.074,85.583z"/><path fill="#40396e" d="M14.5,87.083c-0.393,0-0.775-0.154-1.06-0.438c-0.374-0.373-0.523-0.915-0.395-1.427l3.56-14.177 c0.071-0.282,0.221-0.532,0.426-0.726l56.042-56.177c0.786-0.788,1.832-1.222,2.945-1.222c0,0,0.001,0,0.002,0 c1.113,0,2.158,0.435,2.943,1.223l6.82,6.834c0.001,0,0.001,0.001,0.002,0.002c1.616,1.625,1.616,4.269,0,5.892L29.709,83.071 c-0.106,0.106-0.228,0.196-0.358,0.265c-0.105,0.057-0.219,0.102-0.338,0.132l-14.146,3.57 C14.746,87.068,14.622,87.083,14.5,87.083z M19.414,72.174l-2.848,11.341l11.311-2.854L83.659,24.75 c0.454-0.456,0.454-1.199,0-1.657l-6.82-6.835c-0.219-0.22-0.51-0.34-0.82-0.341h0c-0.311,0-0.602,0.121-0.821,0.341L19.414,72.174 z"/><path fill="#40396e" d="M16.303,78.414L14.5,85.583l7.15-1.807L16.303,78.414z"/></svg>
                        </a> 

                        <a href="#" class="text-primary fw-bold">
                          <svg fill="#fa314a" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg>
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-primary fw-bold"> 3</a> </td>
                      <td><a href="#" class="text-primary fw-bold">Muhammad Ayaz asif</a> </td>
                      <td class="fw-bold ">ayaz.asif@dhamultan.org </td>
                      <td class="fw-bold ">0321677878  </td>
                      <td class="fw-bold ">3264887878787  </td>
                      <td class="fw-bold "> application administrator </td>
                      <td class="fw-bold "><img src="{{ asset('public/assets/img/person-profile.png') }}" height="30px" width="30px" alt="Img" > </td>
                      <td>
                        <a href="#" class="text-primary fw-bold">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="30px" height="30px"><path d="M16.5,94.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L35.249,88.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C17.56,94.019,17.029,94.083,16.5,94.083z" opacity=".35"/><path fill="#f2f2f2" d="M14.5,92.083c-1.734,0-3.365-0.675-4.593-1.9c-1.61-1.608-2.266-3.977-1.712-6.182l3.56-14.178 c0.294-1.171,0.905-2.232,1.77-3.074l56.008-56.143c1.732-1.735,4.035-2.69,6.485-2.69c2.455,0.001,4.757,0.958,6.487,2.694 l7.096,7.124c3.277,3.588,3.186,9.188-0.274,12.661L33.249,86.603c-0.462,0.463-0.985,0.849-1.557,1.152 c-0.429,0.232-0.93,0.428-1.448,0.56l-14.154,3.572C15.56,92.019,15.029,92.083,14.5,92.083z"/><path fill="#f9b84f" d="M76.516,34.03L28.945,81.714L18.361,71.105l47.571-47.684L76.516,34.03z"/><path fill="#f4665c" d="M84.721,22.033l-6.822-6.836c-1.037-1.041-2.726-1.041-3.765,0l-4.961,4.972l10.583,10.608 l4.965-4.968C85.76,24.766,85.76,23.078,84.721,22.033"/><path fill="#9aa2e6" d="M65.625,23.721l3.538-3.554l10.59,10.608l-3.538,3.554L65.625,23.721z"/><path fill="#fedeb3" d="M15.074,85.583l14.146-3.57L18.634,71.406L15.074,85.583z"/><path fill="#40396e" d="M14.5,87.083c-0.393,0-0.775-0.154-1.06-0.438c-0.374-0.373-0.523-0.915-0.395-1.427l3.56-14.177 c0.071-0.282,0.221-0.532,0.426-0.726l56.042-56.177c0.786-0.788,1.832-1.222,2.945-1.222c0,0,0.001,0,0.002,0 c1.113,0,2.158,0.435,2.943,1.223l6.82,6.834c0.001,0,0.001,0.001,0.002,0.002c1.616,1.625,1.616,4.269,0,5.892L29.709,83.071 c-0.106,0.106-0.228,0.196-0.358,0.265c-0.105,0.057-0.219,0.102-0.338,0.132l-14.146,3.57 C14.746,87.068,14.622,87.083,14.5,87.083z M19.414,72.174l-2.848,11.341l11.311-2.854L83.659,24.75 c0.454-0.456,0.454-1.199,0-1.657l-6.82-6.835c-0.219-0.22-0.51-0.34-0.82-0.341h0c-0.311,0-0.602,0.121-0.821,0.341L19.414,72.174 z"/><path fill="#40396e" d="M16.303,78.414L14.5,85.583l7.15-1.807L16.303,78.414z"/></svg>
                        </a> 

                        <a href="#" class="text-primary fw-bold">
                          <svg fill="#fa314a" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><path d="M 28 6 C 25.791 6 24 7.791 24 10 L 24 12 L 23.599609 12 L 10 14 L 10 17 L 54 17 L 54 14 L 40.400391 12 L 40 12 L 40 10 C 40 7.791 38.209 6 36 6 L 28 6 z M 28 10 L 36 10 L 36 12 L 28 12 L 28 10 z M 12 19 L 14.701172 52.322266 C 14.869172 54.399266 16.605453 56 18.689453 56 L 45.3125 56 C 47.3965 56 49.129828 54.401219 49.298828 52.324219 L 51.923828 20 L 12 19 z M 20 26 C 21.105 26 22 26.895 22 28 L 22 51 L 19 51 L 18 28 C 18 26.895 18.895 26 20 26 z M 32 26 C 33.657 26 35 27.343 35 29 L 35 51 L 29 51 L 29 29 C 29 27.343 30.343 26 32 26 z M 44 26 C 45.105 26 46 26.895 46 28 L 45 51 L 42 51 L 42 28 C 42 26.895 42.895 26 44 26 z"/></svg>
                        </a>  
                      </td>
                    </tr>
                  
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
                          <h1 class="mb-0 h4">Add New Admin</h1>
                      </div>
                      <form action="#" class="mt-4" name="subroles" method="Post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <!-- Form -->
                          <div class="form-group mb-4">
                              <label for="email">Sub Role</label>
                              <div class="input-group">
                                  <select class="form-select" id="role" name="role"  >
                                    <option  value="">Select Sub Role</option>
                                    <option  value="1">System Administrator</option>
                                    <option  value="2">Application Administrator</option>
                                    <option  value="3">Application Supervisor</option>
                                  </select>
                              </div>  
                          </div>
                          <!-- End of Form -->

                          <div class="form-group">
                              <!-- Form -->
                              <div class="form-group mb-4">
                                  <label for="password">Name</label>
                                  <div class="input-group">
                                      <input type="text" placeholder="Name" class="form-control" id="title" name="title">
                                  </div>  
                              </div>
                              <!-- End of Form -->
                          </div>

                          <div class="form-group">
                              <!-- Form -->
                              <div class="form-group mb-4">
                                  <label for="password">Mobile Number</label>
                                  <div class="input-group">
                                      <input type="text" placeholder="Mobile Number" class="form-control" id="title" name="title">
                                  </div>  
                              </div>
                              <!-- End of Form -->
                          </div>
                          <div class="form-group">
                              <!-- Form -->
                              <div class="form-group mb-4">
                                  <label for="password">Email Address</label>
                                  <div class="input-group">
                                      <input type="text" placeholder="Email" class="form-control" id="title" name="title">
                                  </div>  
                              </div>
                              <!-- End of Form -->
                          </div>
                          <div class="form-group">
                              <!-- Form -->
                              <div class="form-group mb-4">
                                  <label for="password">CNIC</label>
                                  <div class="input-group">
                                      <input type="text" placeholder="CNIC" class="form-control" id="title" name="title">
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

