@extends('layouts.main')
@section('content')
    
  <main class="content">

      
      @include('components.header_menu')
      <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-4">
              <div class="card border-0 shadow">
                  <div class="card-body">
                      <div class="row d-block d-xl-flex align-items-center">
                          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                              <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 114.18" style="enable-background:new 0 0 122.88 114.18" xml:space="preserve"><g><path d="M94.78,0.04c-1.89-0.2-3.57,0.29-5.06,1.48c-1.48,1.19-2.3,2.73-2.5,4.63l-1.57,14.89c-0.2,1.9,0.29,3.59,1.48,5.06 c1.19,1.47,2.73,2.3,4.63,2.5l5.62,0.59c-0.55,1.47-1.19,2.85-1.93,4.13c-0.73,1.3-1.88,2.49-3.4,3.58 c2.74-0.41,5.22-1.2,7.47-2.35c2.23-1.14,4.22-2.65,5.92-4.5l6.24,0.66c1.89,0.2,3.57-0.31,5.06-1.48c1.48-1.19,2.3-2.73,2.5-4.63 l1.57-14.89c0.2-1.89-0.29-3.57-1.48-5.06c-1.19-1.48-2.73-2.3-4.63-2.5L94.78,0.04L94.78,0.04L94.78,0.04z M40.19,56.95 c13.2-3.19,27.52-3.67,43.55,0c1.31,0.3,2.67,0.99,3.35,2.04c0.28,0.3,0.54,0.63,0.75,0.99l9.88,13.81l6.05-16.57 c0.58-1.65,1.33-2.73,2.36-3.23l0-0.02l6.75-5.05c0.72-0.54,1.75-0.39,2.29,0.33v0c0.54,0.72,0.39,1.75-0.33,2.29l-3.94,2.95 c0.35,0.14,0.71,0.29,1.07,0.46l4.31-2.82c0.58-0.38,1.37-0.22,1.75,0.37l0,0c0.38,0.58,0.22,1.37-0.36,1.75l-2.21,1.44h5.63 c0.99,0,1.8,0.81,1.8,1.8l0,0c0,0.99-0.81,1.8-1.8,1.8h-4.88c-0.1,0.64-0.6,1.47-0.8,2.04l-10.49,30.23l-0.01,0 c-0.47,1.32-1.39,2.5-2.69,3.26c-2.93,1.72-6.7,0.74-8.42-2.2L84.36,78.1l-4.65,25.56c-1.03,5.67-4.43,10.51-9.84,10.51H54.06 c-5.41,0-8.81-4.84-9.85-10.51l-4.88-26.81L29.09,92.62c-1.72,2.93-5.49,3.92-8.42,2.2c-1.31-0.77-2.22-1.94-2.69-3.26l-0.01,0 L7.48,61.33c-0.2-0.57-0.69-1.4-0.8-2.04H1.8c-0.99,0-1.8-0.81-1.8-1.8l0,0c0-0.99,0.81-1.8,1.8-1.8h5.63l-2.21-1.44 c-0.58-0.38-0.74-1.17-0.36-1.75l0,0c0.38-0.58,1.17-0.74,1.75-0.37l4.31,2.82c0.36-0.16,0.71-0.32,1.07-0.46l-3.94-2.95 C7.33,51,7.18,49.97,7.72,49.26v0c0.54-0.72,1.57-0.87,2.29-0.33l6.75,5.05l0,0.02c1.03,0.5,1.78,1.58,2.36,3.23l6.05,16.57 l9.88-13.81c1.03-1.75,3-2.81,5.05-3.01L40.19,56.95L40.19,56.95z M61.09,10.08c11.17,0,20.22,9.05,20.22,20.22 c0,11.17-9.05,20.22-20.22,20.22c-11.17,0-20.22-9.05-20.22-20.22C40.87,19.14,49.92,10.08,61.09,10.08L61.09,10.08z M100.8,19.72 l3.25,0.52l-0.46,2.87l-3.25-0.52L100.8,19.72L100.8,19.72z M104.3,18.67l-3.24-0.52c0.31-3.99-0.01-6.28,0.63-10.22 c0.23-1.45,1.6-2.44,3.05-2.2c1.45,0.24,2.44,1.6,2.21,3.05C106.3,12.71,105.26,14.79,104.3,18.67L104.3,18.67z"/></g></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Total Complaints</h2>
                                  <h3 class="fw-extrabold mb-1">106</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Total Complaints</h2>
                                  <h3 class="fw-extrabold mb-2">106</h3>
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
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 114.18" style="enable-background:new 0 0 122.88 114.18" xml:space="preserve"><g><path d="M94.78,0.04c-1.89-0.2-3.57,0.29-5.06,1.48c-1.48,1.19-2.3,2.73-2.5,4.63l-1.57,14.89c-0.2,1.9,0.29,3.59,1.48,5.06 c1.19,1.47,2.73,2.3,4.63,2.5l5.62,0.59c-0.55,1.47-1.19,2.85-1.93,4.13c-0.73,1.3-1.88,2.49-3.4,3.58 c2.74-0.41,5.22-1.2,7.47-2.35c2.23-1.14,4.22-2.65,5.92-4.5l6.24,0.66c1.89,0.2,3.57-0.31,5.06-1.48c1.48-1.19,2.3-2.73,2.5-4.63 l1.57-14.89c0.2-1.89-0.29-3.57-1.48-5.06c-1.19-1.48-2.73-2.3-4.63-2.5L94.78,0.04L94.78,0.04L94.78,0.04z M40.19,56.95 c13.2-3.19,27.52-3.67,43.55,0c1.31,0.3,2.67,0.99,3.35,2.04c0.28,0.3,0.54,0.63,0.75,0.99l9.88,13.81l6.05-16.57 c0.58-1.65,1.33-2.73,2.36-3.23l0-0.02l6.75-5.05c0.72-0.54,1.75-0.39,2.29,0.33v0c0.54,0.72,0.39,1.75-0.33,2.29l-3.94,2.95 c0.35,0.14,0.71,0.29,1.07,0.46l4.31-2.82c0.58-0.38,1.37-0.22,1.75,0.37l0,0c0.38,0.58,0.22,1.37-0.36,1.75l-2.21,1.44h5.63 c0.99,0,1.8,0.81,1.8,1.8l0,0c0,0.99-0.81,1.8-1.8,1.8h-4.88c-0.1,0.64-0.6,1.47-0.8,2.04l-10.49,30.23l-0.01,0 c-0.47,1.32-1.39,2.5-2.69,3.26c-2.93,1.72-6.7,0.74-8.42-2.2L84.36,78.1l-4.65,25.56c-1.03,5.67-4.43,10.51-9.84,10.51H54.06 c-5.41,0-8.81-4.84-9.85-10.51l-4.88-26.81L29.09,92.62c-1.72,2.93-5.49,3.92-8.42,2.2c-1.31-0.77-2.22-1.94-2.69-3.26l-0.01,0 L7.48,61.33c-0.2-0.57-0.69-1.4-0.8-2.04H1.8c-0.99,0-1.8-0.81-1.8-1.8l0,0c0-0.99,0.81-1.8,1.8-1.8h5.63l-2.21-1.44 c-0.58-0.38-0.74-1.17-0.36-1.75l0,0c0.38-0.58,1.17-0.74,1.75-0.37l4.31,2.82c0.36-0.16,0.71-0.32,1.07-0.46l-3.94-2.95 C7.33,51,7.18,49.97,7.72,49.26v0c0.54-0.72,1.57-0.87,2.29-0.33l6.75,5.05l0,0.02c1.03,0.5,1.78,1.58,2.36,3.23l6.05,16.57 l9.88-13.81c1.03-1.75,3-2.81,5.05-3.01L40.19,56.95L40.19,56.95z M61.09,10.08c11.17,0,20.22,9.05,20.22,20.22 c0,11.17-9.05,20.22-20.22,20.22c-11.17,0-20.22-9.05-20.22-20.22C40.87,19.14,49.92,10.08,61.09,10.08L61.09,10.08z M100.8,19.72 l3.25,0.52l-0.46,2.87l-3.25-0.52L100.8,19.72L100.8,19.72z M104.3,18.67l-3.24-0.52c0.31-3.99-0.01-6.28,0.63-10.22 c0.23-1.45,1.6-2.44,3.05-2.2c1.45,0.24,2.44,1.6,2.21,3.05C106.3,12.71,105.26,14.79,104.3,18.67L104.3,18.67z"/></g></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Closed Complaints</h2>
                                  <h3 class="mb-1">79</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Closed Complaints</h2>
                                  <h3 class="fw-extrabold mb-2">79</h3>
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
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 114.18" style="enable-background:new 0 0 122.88 114.18" xml:space="preserve"><g><path d="M94.78,0.04c-1.89-0.2-3.57,0.29-5.06,1.48c-1.48,1.19-2.3,2.73-2.5,4.63l-1.57,14.89c-0.2,1.9,0.29,3.59,1.48,5.06 c1.19,1.47,2.73,2.3,4.63,2.5l5.62,0.59c-0.55,1.47-1.19,2.85-1.93,4.13c-0.73,1.3-1.88,2.49-3.4,3.58 c2.74-0.41,5.22-1.2,7.47-2.35c2.23-1.14,4.22-2.65,5.92-4.5l6.24,0.66c1.89,0.2,3.57-0.31,5.06-1.48c1.48-1.19,2.3-2.73,2.5-4.63 l1.57-14.89c0.2-1.89-0.29-3.57-1.48-5.06c-1.19-1.48-2.73-2.3-4.63-2.5L94.78,0.04L94.78,0.04L94.78,0.04z M40.19,56.95 c13.2-3.19,27.52-3.67,43.55,0c1.31,0.3,2.67,0.99,3.35,2.04c0.28,0.3,0.54,0.63,0.75,0.99l9.88,13.81l6.05-16.57 c0.58-1.65,1.33-2.73,2.36-3.23l0-0.02l6.75-5.05c0.72-0.54,1.75-0.39,2.29,0.33v0c0.54,0.72,0.39,1.75-0.33,2.29l-3.94,2.95 c0.35,0.14,0.71,0.29,1.07,0.46l4.31-2.82c0.58-0.38,1.37-0.22,1.75,0.37l0,0c0.38,0.58,0.22,1.37-0.36,1.75l-2.21,1.44h5.63 c0.99,0,1.8,0.81,1.8,1.8l0,0c0,0.99-0.81,1.8-1.8,1.8h-4.88c-0.1,0.64-0.6,1.47-0.8,2.04l-10.49,30.23l-0.01,0 c-0.47,1.32-1.39,2.5-2.69,3.26c-2.93,1.72-6.7,0.74-8.42-2.2L84.36,78.1l-4.65,25.56c-1.03,5.67-4.43,10.51-9.84,10.51H54.06 c-5.41,0-8.81-4.84-9.85-10.51l-4.88-26.81L29.09,92.62c-1.72,2.93-5.49,3.92-8.42,2.2c-1.31-0.77-2.22-1.94-2.69-3.26l-0.01,0 L7.48,61.33c-0.2-0.57-0.69-1.4-0.8-2.04H1.8c-0.99,0-1.8-0.81-1.8-1.8l0,0c0-0.99,0.81-1.8,1.8-1.8h5.63l-2.21-1.44 c-0.58-0.38-0.74-1.17-0.36-1.75l0,0c0.38-0.58,1.17-0.74,1.75-0.37l4.31,2.82c0.36-0.16,0.71-0.32,1.07-0.46l-3.94-2.95 C7.33,51,7.18,49.97,7.72,49.26v0c0.54-0.72,1.57-0.87,2.29-0.33l6.75,5.05l0,0.02c1.03,0.5,1.78,1.58,2.36,3.23l6.05,16.57 l9.88-13.81c1.03-1.75,3-2.81,5.05-3.01L40.19,56.95L40.19,56.95z M61.09,10.08c11.17,0,20.22,9.05,20.22,20.22 c0,11.17-9.05,20.22-20.22,20.22c-11.17,0-20.22-9.05-20.22-20.22C40.87,19.14,49.92,10.08,61.09,10.08L61.09,10.08z M100.8,19.72 l3.25,0.52l-0.46,2.87l-3.25-0.52L100.8,19.72L100.8,19.72z M104.3,18.67l-3.24-0.52c0.31-3.99-0.01-6.28,0.63-10.22 c0.23-1.45,1.6-2.44,3.05-2.2c1.45,0.24,2.44,1.6,2.21,3.05C106.3,12.71,105.26,14.79,104.3,18.67L104.3,18.67z"/></g></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Open Complaints</h2>
                                  <h3 class="mb-1">8</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Open Complaints</h2>
                                  <h3 class="fw-extrabold mb-2">8</h3>
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
                                  <h2 class="h5">Total Customers</h2>
                                  <h3 class="fw-extrabold mb-1">147</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Total Customers</h2>
                                  <h3 class="fw-extrabold mb-2">147</h3>
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
                                  <h2 class="fw-extrabold h5">Registered Customers</h2>
                                  <h3 class="mb-1">34</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Registered Customers</h2>
                                  <h3 class="fw-extrabold mb-2">34</h3>
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
                                  <h2 class="fw-extrabold h5"> Pending Customers</h2>
                                  <h3 class="mb-1">113</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Pending Customers</h2>
                                  <h3 class="fw-extrabold mb-2">113</h3>
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
                                  <!-- <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg> -->
                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 85.82"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>food-delivery</title><path class="" d="M77.1.61h40.36a2.48,2.48,0,0,1,2.47,2.47V30.52h.24a2.72,2.72,0,0,1,2.71,2.72v3A2.77,2.77,0,0,1,120.12,39H101.05c14.17,1.26,22.27,14.44,21.39,31.58H109.83a15,15,0,0,1-29.95,0h-38c0-.27,0-.54,0-.8a40.85,40.85,0,0,1-.34,5.8l-7.91-3.73A15.29,15.29,0,1,1,7.61,59.63L0,56c6.34-7.21,14-10.24,23.25-8.16,3.31.84,6.41,1.59-.08,0A112.39,112.39,0,0,1,33.72,13.07L29,13h0c-1,0-2.05.25-2.72-.24a3.59,3.59,0,0,1-2.88-1.84,7.12,7.12,0,0,1-1-3.79,7.16,7.16,0,0,1,1-3.8,3.91,3.91,0,0,1,2-1.68,1,1,0,0,1,0-.3C26.51-.46,28.7.08,30.65.08l1.9.12a11.1,11.1,0,0,1,4,1.36l2.17,1.22h1.76L46.4,3.92c1.93.38,2.21.22,1.76,2.59a7.49,7.49,0,0,1-.24.9c-.58,1.73-1,1.09-2.84.72L39.55,7c.21,2.23-.5,5-1.49,8.15,3.17,2.69,4.61,6.52,2.43,11.58L35.21,43c8.86,6.28,14.18,12,14.49,21.29H60.93c7.22-5.47,6-15.21-1.9-21.43V39h0V33.16c0-1.86,1-2.7,2.85-2.64H74.63V3.08A2.48,2.48,0,0,1,77.1.61ZM24.36,67.53,16.81,64a6.72,6.72,0,1,0,7.55,3.56Zm1.1-64.26c.09,2.53.25,5.78.37,8a3.4,3.4,0,0,1-.61-.72,6.54,6.54,0,0,1-.89-3.46,6.5,6.5,0,0,1,.89-3.45c.08-.12.16-.24.24-.34ZM98.22,4.86a2.27,2.27,0,0,1,1.6.67,2.32,2.32,0,0,1,.35,2.8,13.12,13.12,0,0,1,3.41,1c5,2.5,7.74,6.41,7.74,12.22a.67.67,0,0,1-.62.67H85.77a.66.66,0,0,1-.66-.67A12.88,12.88,0,0,1,92.85,9.34a12.64,12.64,0,0,1,3.41-1,2.31,2.31,0,0,1,.35-2.8,2.28,2.28,0,0,1,1.61-.67ZM82.36,26.09V24.22a.19.19,0,0,1,.19-.2h31.24a.19.19,0,0,1,.19.2v1.87a.19.19,0,0,1-.19.19H82.55a.19.19,0,0,1-.19-.19ZM101.45,70.6a6.6,6.6,0,0,1-13.19,0Z"/></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Total Responders</h2>
                                  <h3 class="fw-extrabold mb-1">38</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Total Responders</h2>
                                  <h3 class="fw-extrabold mb-2">38</h3>
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
                                  <!-- <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> -->
                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 85.82"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>food-delivery</title><path class="" d="M77.1.61h40.36a2.48,2.48,0,0,1,2.47,2.47V30.52h.24a2.72,2.72,0,0,1,2.71,2.72v3A2.77,2.77,0,0,1,120.12,39H101.05c14.17,1.26,22.27,14.44,21.39,31.58H109.83a15,15,0,0,1-29.95,0h-38c0-.27,0-.54,0-.8a40.85,40.85,0,0,1-.34,5.8l-7.91-3.73A15.29,15.29,0,1,1,7.61,59.63L0,56c6.34-7.21,14-10.24,23.25-8.16,3.31.84,6.41,1.59-.08,0A112.39,112.39,0,0,1,33.72,13.07L29,13h0c-1,0-2.05.25-2.72-.24a3.59,3.59,0,0,1-2.88-1.84,7.12,7.12,0,0,1-1-3.79,7.16,7.16,0,0,1,1-3.8,3.91,3.91,0,0,1,2-1.68,1,1,0,0,1,0-.3C26.51-.46,28.7.08,30.65.08l1.9.12a11.1,11.1,0,0,1,4,1.36l2.17,1.22h1.76L46.4,3.92c1.93.38,2.21.22,1.76,2.59a7.49,7.49,0,0,1-.24.9c-.58,1.73-1,1.09-2.84.72L39.55,7c.21,2.23-.5,5-1.49,8.15,3.17,2.69,4.61,6.52,2.43,11.58L35.21,43c8.86,6.28,14.18,12,14.49,21.29H60.93c7.22-5.47,6-15.21-1.9-21.43V39h0V33.16c0-1.86,1-2.7,2.85-2.64H74.63V3.08A2.48,2.48,0,0,1,77.1.61ZM24.36,67.53,16.81,64a6.72,6.72,0,1,0,7.55,3.56Zm1.1-64.26c.09,2.53.25,5.78.37,8a3.4,3.4,0,0,1-.61-.72,6.54,6.54,0,0,1-.89-3.46,6.5,6.5,0,0,1,.89-3.45c.08-.12.16-.24.24-.34ZM98.22,4.86a2.27,2.27,0,0,1,1.6.67,2.32,2.32,0,0,1,.35,2.8,13.12,13.12,0,0,1,3.41,1c5,2.5,7.74,6.41,7.74,12.22a.67.67,0,0,1-.62.67H85.77a.66.66,0,0,1-.66-.67A12.88,12.88,0,0,1,92.85,9.34a12.64,12.64,0,0,1,3.41-1,2.31,2.31,0,0,1,.35-2.8,2.28,2.28,0,0,1,1.61-.67ZM82.36,26.09V24.22a.19.19,0,0,1,.19-.2h31.24a.19.19,0,0,1,.19.2v1.87a.19.19,0,0,1-.19.19H82.55a.19.19,0,0,1-.19-.19ZM101.45,70.6a6.6,6.6,0,0,1-13.19,0Z"/></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5">Online Responders</h2>
                                  <h3 class="mb-1">16</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Online Responders</h2>
                                  <h3 class="fw-extrabold mb-2">16</h3>
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
                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 85.82"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>food-delivery</title><path class="" d="M77.1.61h40.36a2.48,2.48,0,0,1,2.47,2.47V30.52h.24a2.72,2.72,0,0,1,2.71,2.72v3A2.77,2.77,0,0,1,120.12,39H101.05c14.17,1.26,22.27,14.44,21.39,31.58H109.83a15,15,0,0,1-29.95,0h-38c0-.27,0-.54,0-.8a40.85,40.85,0,0,1-.34,5.8l-7.91-3.73A15.29,15.29,0,1,1,7.61,59.63L0,56c6.34-7.21,14-10.24,23.25-8.16,3.31.84,6.41,1.59-.08,0A112.39,112.39,0,0,1,33.72,13.07L29,13h0c-1,0-2.05.25-2.72-.24a3.59,3.59,0,0,1-2.88-1.84,7.12,7.12,0,0,1-1-3.79,7.16,7.16,0,0,1,1-3.8,3.91,3.91,0,0,1,2-1.68,1,1,0,0,1,0-.3C26.51-.46,28.7.08,30.65.08l1.9.12a11.1,11.1,0,0,1,4,1.36l2.17,1.22h1.76L46.4,3.92c1.93.38,2.21.22,1.76,2.59a7.49,7.49,0,0,1-.24.9c-.58,1.73-1,1.09-2.84.72L39.55,7c.21,2.23-.5,5-1.49,8.15,3.17,2.69,4.61,6.52,2.43,11.58L35.21,43c8.86,6.28,14.18,12,14.49,21.29H60.93c7.22-5.47,6-15.21-1.9-21.43V39h0V33.16c0-1.86,1-2.7,2.85-2.64H74.63V3.08A2.48,2.48,0,0,1,77.1.61ZM24.36,67.53,16.81,64a6.72,6.72,0,1,0,7.55,3.56Zm1.1-64.26c.09,2.53.25,5.78.37,8a3.4,3.4,0,0,1-.61-.72,6.54,6.54,0,0,1-.89-3.46,6.5,6.5,0,0,1,.89-3.45c.08-.12.16-.24.24-.34ZM98.22,4.86a2.27,2.27,0,0,1,1.6.67,2.32,2.32,0,0,1,.35,2.8,13.12,13.12,0,0,1,3.41,1c5,2.5,7.74,6.41,7.74,12.22a.67.67,0,0,1-.62.67H85.77a.66.66,0,0,1-.66-.67A12.88,12.88,0,0,1,92.85,9.34a12.64,12.64,0,0,1,3.41-1,2.31,2.31,0,0,1,.35-2.8,2.28,2.28,0,0,1,1.61-.67ZM82.36,26.09V24.22a.19.19,0,0,1,.19-.2h31.24a.19.19,0,0,1,.19.2v1.87a.19.19,0,0,1-.19.19H82.55a.19.19,0,0,1-.19-.19ZM101.45,70.6a6.6,6.6,0,0,1-13.19,0Z"/></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="fw-extrabold h5"> Offline Responders</h2>
                                  <h3 class="mb-1">22</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Offline Responders</h2>
                                  <h3 class="fw-extrabold mb-2">22</h3>
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
                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#d92d27;}</style></defs><title>no-fire-flame</title><path class="cls-1" d="M101.68,32.93,32.92,101.68a49.29,49.29,0,0,0,77.83-40.24h0a49.12,49.12,0,0,0-9.08-28.51ZM24,93.5,93.49,24a49.25,49.25,0,0,0-66.92,2.61A49.23,49.23,0,0,0,24,93.5Z"/><path d="M43,46.49c1.12,8.32,2.85,14.62,5.8,16.95a48.67,48.67,0,0,1,.84-8.31c1.71-8.89,4.44-9.37,7.07-16a17.69,17.69,0,0,0,.86-10.42C67,30.47,75.7,45.33,77.9,64.22a20.64,20.64,0,0,0,4-11.2,27.21,27.21,0,0,1,7,15.56C90.46,79.7,87.2,86.9,78.57,89.75c1.92-4.61,1.48-8.17-.54-12.86a16.66,16.66,0,0,0-3.36-5.18c-.61,4.57-1.57,8-3.18,9.31A27.31,27.31,0,0,0,71,76.46c-.94-4.89-2.44-5.15-3.88-8.76A9.76,9.76,0,0,1,66.67,62c-5.16.93-10,9.09-11.18,19.46a11.3,11.3,0,0,1-2.2-6.15,15,15,0,0,0-3.84,8.54,13,13,0,0,0,.75,7.53c-6.63-.79-11.08-4.66-13.89-10.9-4-8.94-3.31-15.6.5-24.53A31.13,31.13,0,0,1,43,46.49Z"/><path class="cls-2" d="M61.44,0A61.31,61.31,0,1,1,38,4.66,61.29,61.29,0,0,1,61.44,0Zm40.24,32.93L32.93,101.68A49.44,49.44,0,0,0,80.31,107,49.53,49.53,0,0,0,107,80.3a49,49,0,0,0,3.73-18.86h0a48.93,48.93,0,0,0-9.08-28.51ZM24,93.5,93.5,24A49.32,49.32,0,0,0,24,93.5Z"/></svg>
                              </div>
                              <div class="d-sm-none">
                                  <h2 class="h5">Total Panics</h2>
                                  <h3 class="fw-extrabold mb-1">24</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Total Panics</h2>
                                  <h3 class="fw-extrabold mb-2">24</h3>
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
                                  <h2 class="fw-extrabold h5">Closed Panics</h2>
                                  <h3 class="mb-1">16</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0">Closed Panics</h2>
                                  <h3 class="fw-extrabold mb-2">16</h3>
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
                                  <h2 class="fw-extrabold h5"> Open Panics</h2>
                                  <h3 class="mb-1">4</h3>
                              </div>
                          </div>
                          <div class="col-12 col-xl-7 px-xl-0">
                              <div class="d-none d-sm-block">
                                  <h2 class="h6 text-gray-400 mb-0"> Open Panics</h2>
                                  <h3 class="fw-extrabold mb-2">4</h3>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- <div class="row">
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
@endsection
