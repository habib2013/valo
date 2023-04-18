@extends('admin.admin_homee_template')
@section('title', 'All Schools Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">

        <div class="d-flex justify-content-sm-between">
            <h5 class="mb-0">All Loans</h5>
            <a href="/admin/addloan">
                <button class="btn btn-info w-100 fs--1" type="button"><span class="fas fa-school me-2"></span>Add Loan</button>
              </a>
        </div>
      

  </div>
</div>
<div class="row g-3 mb-3">
  <div class="col-lg-12">
    <div class="card h-100">
      <div class="card-header">
     
      </div>
      <div class="card-body bg-light">

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
              <thead>
                <tr>
                  <th scope="col">Loan Name</th>
                  <th scope="col">Interest</th>
                
                  <th scope="col">Min Interest</th>
                  <th scope="col">Max Interest</th>
                  <th scope="col">Max Principal</th>
             
                  <th scope="col">Investor Level Allowed</th>
                  <th scope="col">Student Level Allowed</th>
                  <th scope="col">Is Late fee Allowed</th>
                  <th scope="col">Late fee Interest</th>
                  <th scope="col">Loan Tenor</th>
                  <th scope="col">Repayment Interval</th>
                
               
               
                </tr>
              </thead>
              <tbody>

                @foreach ($allProducts as $item)

                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="ms-2">{{$item->loan_name}}</div>
                    </div>
                  </td>
                  <td class="text-nowrap">{{$item->interest}}</td>
                  <td class="text-nowrap">{{$item->min_interest}}</td>
                  <td class="text-nowrap">{{$item->max_interest}}</td>

                  <td class="text-nowrap">{{$item->max_principal}}</td>
                  <td class="text-nowrap">{{$item->investor_level_allowed}}</td>
                  <td class="text-nowrap">{{$item->student_level_allowed}}</td>

                  <td class="text-nowrap">{{$item->is_latefee_allowed}}</td>
                  <td class="text-nowrap">{{$item->latefee_interest}}</td>
                  <td class="text-nowrap">{{$item->loan_tenor}}</td>

                  <td class="text-nowrap">{{$item->repayment_interval}}</td>
               

                  {{--  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-{{$item->accredited == 1 ? 'success' : 'danger'}}">{{$item->accredited == 1 ? 'Accredited' : 'Not Accredited'}}<span class="ms-1" data-fa-transform="shrink-2"></span></span></td>
                --}}

                </tr>

                @endforeach

                
          
                  

                  
                
              </tbody>
            </table>
          </div>
      


      </div>
    </div>
  </div>

</div>


  @endsection