@extends('admin.admin_homee_template')
@section('title', 'Add Schools Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">

        <div class="d-flex justify-content-sm-between">
            <h5 class="mb-0">Add Schools</h5>
         
        </div>
      

  </div>
</div>
<div class="row g-3 mb-3">
  <div class="col-lg-12">
    <div class="card h-100">
      <div class="card-header">
     
      </div>
      <div class="card-body bg-light">

        <form  method="POST"  onsubmit="return AddSchool()"  aria-label="{{ __('AddSchool') }}">
            @csrf

            <div class="show_hide">
                <div class="show_toastr"></div>
            </div>

            <label for="School Name">School Name</label>
        <div class="mb-3"><input class="form-control form-control-lg" type="text" name="name" placeholder="School Name"/></div>
        <label for="School Size">School Size</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="School Size" name="size"  /></div>
        <label for="School Size"> Is Accredited</label>
        <div class="mb-3">
            <select name="accredited" id="accredited" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <label for="School Size">Minimum Amount</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Minimum Amount" name="min_amount"  /></div>
      
        <label for="School Size">Maximum Amount</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Maximum Amount" name="max_amount"  /></div>
      


        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit" id="login_button">Add School</button></div>

        </form>

      </div>
    </div>
  </div>

</div>


  @endsection