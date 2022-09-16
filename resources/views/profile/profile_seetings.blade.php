@extends('homee_template')
@section('title', 'Home')
@section('content')


    <div class="row g-0">



      <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
          <div class="card-header bg-light">
            <h5 class="mb-0">School Information</h5>
          </div>
          <div class="card-body text-justify">
            
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput">School name</label></div>

                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput">Course Of Study</label></div>

              </div>
              <div class="col-6">

<div class="form-floating"><input class="form-control" id="floatingPassword" type="password" placeholder="Password" /><label for="floatingPassword">Matric Number</label></div>
              </div>
            </div>


          </div>
   
        </div>
  
      </div>




      <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
          <div class="card-header bg-light">
            <h5 class="mb-0">Personal Information</h5>
          </div>
          <div class="card-body text-justify">
            
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput">Title</label></div>
<div class="form-floating"><input class="form-control" id="floatingPassword" type="text" placeholder="text" /><label for="floatingPassword">BVN</label></div> <br>
<div class="form-floating"><input class="form-control" id="floatingPassword" type="text" placeholder="text" /><label for="floatingPassword">Age</label></div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput"> Full Name</label></div>
<div class="form-floating"><input class="form-control" id="floatingPassword" type="password" placeholder="Password" /><label for="floatingPassword">Email Address</label></div>
              </div>
            </div>


          </div>
       
          {{-- <div class="card-footer bg-light p-0 border-top"><button class="btn btn-link d-block w-100 btn-intro-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#profile-intro" aria-expanded="true" aria-controls="profile-intro">Show <span class="less">less<span class="fas fa-chevron-up ms-2 fs--2"></span></span><span class="full">full<span class="fas fa-chevron-down ms-2 fs--2"></span></span></button></div>
        --}}
        </div>
  
      </div>



      <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
          <div class="card-header bg-light">
            <h5 class="mb-0">Contact Information</h5>
          </div>
          <div class="card-body text-justify">
            
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput">House Address</label></div>

                <div class="form-floating mb-3"><input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" /><label for="floatingInput"> State</label></div>

              </div>
              <div class="col-6">

<div class="form-floating"><input class="form-control" id="floatingPassword" type="password" placeholder="Password" /><label for="floatingPassword">Email Address</label></div>
              </div>
            </div>


          </div>
   
        </div>
  
      </div>

      
    </div>
 
  
 

@endsection