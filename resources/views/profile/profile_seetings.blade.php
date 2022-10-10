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
                <div class="form-floating mb-3">
                  
                  {{-- <input class="form-control" id="floatingInput" type="email" placeholder="name@example.com" />
                   --}}
                      <select name="school_name" id="school_name" class="form-control">
                        @foreach ($listSchools as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option> 
                        @endforeach
                        
                      </select>

                  <label for="floatingInput">School name</label></div>

                <div class="form-floating mb-3">
                  
                  <select name="school_name" id="school_name" class="form-control">
                    @foreach ($listCourses as $item)
                    <option value="{{$item->id}}">{{$item->coursename}}</option> 
                    @endforeach
                    
                  </select>
                  
                  <label for="floatingInput">Course Of Study</label></div>

              </div>
              <div class="col-6">

<div class="form-floating"><input class="form-control" id="floatingPassword" type="text" placeholder="Password" /><label for="floatingPassword">Matric Number</label></div>

<div class="mt-4">

  <button class="btn btn-primary" type="button">
    <span class="spinner-border-sm" role="status" aria-hidden="true"></span>
    Verify Matric Number
  </button>
</div>
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

          <div class="show_hide">
            <div class="show_toastr"></div>
        </div>

          <div class="card-body text-justify">
            
            <div class="row">
              <div class="col-6">
                <div class="form-floating">

                  <input class="form-control"
                  name="bvn" type="text"
                   id="bvn" 
                  
                    value="{{$auth_user->bvn ?? ''}}" 
                    onkeyup="fetchBvnData()"
                    pattern="/^-?\d+\.?\d*$/"
                   onKeyPress="if(this.value.length==11) return false;" required>


                  {{-- <input class="form-control" id="floatingPassword" type="text" placeholder="text" name="bvn"/>
                   --}}
                  <label for="floatingPassword">BVN</label></div> <br>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="title" type="text" placeholder="name@example.com" name="title" value="{{$auth_user->title ?? ''}}"   /><label for="floatingInput">Title</label></div>
              </div>

              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="dob" type="text" placeholder="" name="dob" value="{{$auth_user->date_of_birth ?? ''}}"   /><label for="floatingInput">Title</label></div>
              </div>

   

              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" name="fullname" id="fullname" type="text" placeholder="name@example.com" value="{{$auth_user->name ?? ''}}" /><label for="floatingInput"> Full Name</label></div>
              </div>

              <div class="col-6">

<div class="form-floating"><input name="email" class="form-control" id="email" type="email" placeholder="Email Address" value="{{$auth_user->email ?? ''}}"/><label for="floatingPassword">Email Address</label></div>
           
              </div>


              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="phone" name="phone" type="text" placeholder="090*******" name="phone" value="{{$auth_user->phone ?? ''}}" /><label for="floatingInput"> Phone Number</label></div>
              </div>

              <div class="col-6">

<div class="form-floating"><input class="form-control" id="alternate_number" name="alternate_number" type="text" placeholder="090******" value="{{$auth_user->alternate_number ?? ''}}" /><label for="floatingPassword">Alternate Number</label></div>
           
              </div>


              <div class="col-6">
                <div class="form-floating"><input class="form-control" id="gender" name="gender" type="text" placeholder="Gender" value="{{$auth_user->gender ?? ''}}"/><label for="floatingPassword">Gender</label></div>
       </div>

       

       

              {{-- <div class="col-6">
<div class="mt-1">

  <button class="btn btn-primary" type="submit" id="verify_bvn">
    <span class="spinner-border-sm" role="status" aria-hidden="true"></span>
    Verify Identity
  </button>
</div>
</div> --}}

            </div>
          </div>
        </div>
  
      </div>



      <div class="col-lg-8 pe-lg-2">
        <form  method="POST"  onsubmit="return updateInformation()"  aria-label="{{ __('Login') }}">
          @csrf
        

        <div class="card mb-3">
          <div class="card-header bg-light">
            <h5 class="mb-0">Contact Information</h5>
          </div>
          <div class="card-body text-justify">
            
          

            <div class="row">
            
              <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="permanent_address" type="text" placeholder="4,babcock road" name="permanent_address" value="{{$userProfile->permanent_address ?? ''}}"/><label for="floatingInput">Permanent Address</label></div>
              </div>

                <div class="col-6">
                <div class="form-floating mb-3"><input class="form-control" id="state" type="text" placeholder="Lagos" name="state" value="{{$userProfile->state ?? ''}}" /><label for="floatingInput"> Residential State</label></div>

              </div>

              <div class="col-6">

<div class="form-floating"><input class="form-control" id="local_government" type="text" placeholder="local government" name="local_government" value="{{$userProfile->local_government ?? ''}}" /><label for="floatingPassword">Residential Local Government</label></div>
            
              </div>
              <div class="col-6">

<div class="mt-1">

 
</div>

</div>



            </div>


            

          </div>
   
        </div>
  
          <center>

            <button class="btn btn-primary" type="submit" id="update_contact">
              <span class="spinner-border-sm" role="status" aria-hidden="true"></span>
             Update Information
            </button>
          </center>


        </form>

      </div>

      
    </div>
 
  
 

@endsection