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
                <li class="breadcrumb-item"><a href="#">Complaint Management</a></li>
                <li class="breadcrumb-item"><a href="#">New</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">New Complaints</h1>
            </div>
            <!-- <div>
                <button data-bs-toggle="modal" data-bs-target="#modal-form" class="btn btn-gray-600 d-inline-flex align-items-center" >
                 + Add New Admin
                </button>
            </div> -->
        </div>
      </div>

      <div class="card border-0 shadow ">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">C #</th>
                        <th class="border-0">Title</th>
                        <th class="border-0">Type</th>
                        <th class="border-0">House #</th>
                        <th class="border-0">Created By</th>
                        <th class="border-0">Created At</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Available Responders</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                   
                    <tr>
                    	<td><a href="#" class="text-primary fw-bold"> 1</a> </td>
                      	<td><a href="#" class="text-primary fw-bold">flush tank water problem</a> </td>
                      	<td class="fw-bold ">PLUMBING   </td>
                      	<td class="fw-bold "> C-07  </td>
                      	<td class="fw-bold ">Muhammad Shahzad  </td>
                     	<td class="fw-bold "> 2022-04-06 2:05 PM </td>
                     	<td class="fw-bold "> New </td>
                      	<td class="fw-bold "> 
                      		<div class="form-group">
                              <div class="input-group">
                                  <select class="form-select" id="responder" name="role"  >
                                    <option  value="">Select Responder</option>
                                    <option  value="1"> Faraz Mughal --Plumber </option>
                                    <option  value="2"> Kamran Ali --Electrication </option>
                                    <option  value="3"> Farhan Riaz --Driver </option>
                                    <option  value="3"> M Waqad --Painter </option>
                                  </select>
                              </div>  
                          	</div> 
                      	</td>
                      	<td class="fw-bold "> <button class="btn btn-primary assignComplaint" >Assign</button> </td>
                    </tr>
                    <tr>
                      	<td><a href="#" class="text-primary fw-bold"> 2</a> </td>
                      	<td><a href="#" class="text-primary fw-bold">Entrance door lock hard to operate</a> </td>
                      	<td class="fw-bold ">CARPENTER </td>
                      	<td class="fw-bold ">C-13 </td>
                      	<td class="fw-bold ">Sajjad  </td>
                      	<td class="fw-bold "> 2022-04-06 12:25 PM</td>
                      	<td class="fw-bold "> New </td>
                     	<td>
                    		<div class="form-group">
                              <div class="input-group">
                                  <select class="form-select" id="responders" name="role"  >
                                    <option  value="">Select Responder</option>
                                    <option  value="1"> Faraz Mughal --Plumber </option>
                                    <option  value="2"> Kamran Ali --Electrication </option>
                                    <option  value="3"> Farhan Riaz --Driver </option>
                                    <option  value="3"> M Waqad --Painter </option>
                                  </select>
                              </div>  
                          	</div> 
                      	</td>
                      	<td class="fw-bold "> <button class="btn btn-primary assignComplaint"  >Assign</button> </td>
                    </tr>
                    <tr>
                      	<td><a href="#" class="text-primary fw-bold"> 3</a> </td>
                      	<td><a href="#" class="text-primary fw-bold">paint required after converting wood floor to tiles </a> </td>
                      	<td class="fw-bold ">OTHER </td>
                      	<td class="fw-bold ">C-54  </td>
                      	<td class="fw-bold ">Raja Riaz  </td>
                      	<td class="fw-bold "> 2022-04-06 12:25 PM </td>
                      	<td class="fw-bold "> New </td>
                    	<td>
                    		<div class="form-group">
                              <div class="input-group">
                                  <select class="form-select" id="responderf"  name="role"  >
                                    <option  value="">Select Responder</option>
                                    <option  value="1"> Faraz Mughal --Plumber </option>
                                    <option  value="2"> Kamran Ali --Electrication </option>
                                    <option  value="3"> Farhan Riaz --Driver </option>
                                    <option  value="3"> M Waqad --Painter </option>
                                  </select>
                              </div>  
                          	</div>
                      	</td>
                      	<td class="fw-bold "> <button class="btn btn-primary assignComplaint" >Assign</button> </td>
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

    $(".assignComplaint").click(function (e) {
    	//console.log(e);
    	var responder = $("#responder").val();
    	//alert(responder);
    	if($("#responder").val()) {
    		Swal.fire({
            position: 'top-middle',
            icon: 'success',
            title: 'Success',
            showConfirmButton: false,
            text: "Complaint Assiged to Responder Successfully!",
            timer: 3000
        })
    	}
    	else {
	    	Swal.fire({
	            position: 'top-middle',
	            icon: 'error',
	            title: 'Error',
	            showConfirmButton: false,
	            text: "Please Select Responder!",
	            timer: 3000
	        })
    	}
    });


     $("#btn-save").click(function (e) {
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

