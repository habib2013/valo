@extends('admin.admin_homee_template')
@section('title', 'Add Schools Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">

        <div class="d-flex justify-content-sm-between">
            <h5 class="mb-0">Add Loan</h5>
         
        </div>
      

  </div>
</div>
<div class="row g-3 mb-3">
  <div class="col-lg-12">
    <div class="card h-100">
      <div class="card-header">
     
      </div>
      <div class="card-body bg-light">

        <form  method="POST"  onsubmit="return AddLoan()"  aria-label="{{ __('AddLoan') }}">
            @csrf

            <div class="show_hide">
                <div class="show_toastr"></div>
            </div>

            <label for="School Name">Loan Name</label>
        <div class="mb-3"><input class="form-control form-control-lg" type="text" name="loan_name" placeholder="Loan Name"/></div>
        <label for="School Size">Loan Interest</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="standard Interest" name="interest"  /></div>
      
    {{--  <label for="School Size">Minimum Interest</label>  --}}
        <div class="mb-3"> <input class="form-control" type="hidden" placeholder="Minumum Interest" name="min_interest" value="0" /></div>
      
           <label for="School Size">Maximum Interest</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder=" Interest" name="max_interest"  /></div>
      
             {{--  <label for="School Size">Minimum Principal</label>  --}}
        <div class="mb-3"> <input class="form-control" type="hidden" placeholder="Minumum Principal" name="min_principal"  value="-" /></div>
      
        <label for="School Size">Maximum Principal</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Maximum Principal" name="max_principal"  /></div>
      
        <label for="School Size">Investor Level Allowed</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Investor Level Allowed" name="investor_level_allowed"  /></div>
      
        <label for="School Size">Student Level Allowed</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Student Level Allowed" name="student_level_allowed"  /></div>
      


        <label for="School Size"> Is Late Fee Allowed</label>
        <div class="mb-3">
            <select name="is_latefee_allowed" id="accredited" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <label for="School Size"> Latefee Interest</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Latefee Interest" name="latefee_interest"  /></div>
      
        <label for="School Size">Loan Tenor</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Loan Tenor" name="loan_tenor"  /></div>
      

        <label for="School Size">Repayment Interval</label>
        <div class="mb-3"> <input class="form-control" type="text" placeholder="Repayment Interval" name="repayment_interval"  /></div>
      



        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit" id="login_button">Add Loan</button></div>

        </form>

      </div>
    </div>
  </div>

</div>


  @endsection