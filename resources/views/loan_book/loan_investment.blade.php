@extends('homee_template')
@section('title', 'Loan Book')
@section('content')
<div class="card mb-3">
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
          <div class="fs-1">Valo Investment</div>
          <h3 class="fs-2 fs-md-3">Choose a plan of investment from our <br class="d-none d-md-block" /> carefully picked choices.</h3>
          {{-- <div class="d-flex justify-content-center"><label class="form-check-label me-2" for="customSwitch1">Monthly</label>
            <div class="form-check form-switch"><input class="form-check-input" id="customSwitch1" type="checkbox" checked="checked" /><label class="form-check-label align-top" for="customSwitch1">Yearly</label></div>
          </div> --}}
          <div class="show_hide">
            <div class="show_toastr"></div>
        </div>
        
        </div>
        <div class="col-12 col-lg-9 col-xl-10 col-xxl-8">
          <div class="row">


            @foreach ($loanProduct as $item)
            <div class="col-md">
              <div class="border rounded-3 overflow-hidden mb-3 mb-md-0">
                <div class="d-flex flex-between-center p-4">
                  <div>
                    <h3 class="fw-light fs-2 mb-0 text-primary">{{$item->loan_name}}</h3>
                    <h2 class="fw-light mt-0 text-primary"><sup class="fs-1">%</sup><span class="fs-3">{{$item->interest}}</span><span class="fs--2 mt-1">/ m</span></h2>
                  </div>
                  <div class="pe-3"><img src="../../../f_assets/assets/img/icons/free.svg" width="70" alt="" /></div>
                </div>
                <div class="p-4 bg-light">
                  <ul class="list-unstyled">
                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Minimum Investment: </div>
                      <div>  ₦ {{$item->min_principal}}</div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Maximum Investment: </div>
                      <div>  ₦  {{$item->max_principal}} </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Minimum Interest: </div>
                      <div>   {{$item->min_interest}}% </div>
                    </div>


                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Maximum Interest: </div>
                      <div>    {{$item->max_interest}}% </div>
                    </div>



                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Investor Level Allowed: </div>
                      <div> {{$item->investor_level_allowed}} vl</div>
                    </div>


                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Student Level Allowed: </div>
                      <div> {{$item->student_level_allowed}} vl </div>
                    </div>


                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Is Late Fee Allowed: </div>
                      <div> {{$item->is_latefee_allowed == 1 ? 'Yes' : 'No'}} </div>

                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span>Late fee Interest: </div>
                      <div> {{$item->latefee_interest}} %</div>
                    </div>

                  <div class="d-flex justify-content-between">
                    <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span>Loan Tenor: </div>
                    <div> {{$item->loan_tenor}} days</div>
                  </div>


                  <div class="d-flex justify-content-between">
                    <div class="pb-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Repayment Interval: </div>
                    <div> {{$item->repayment_interval}} </div>
                  </div>


                  <input type="hidden" name="loan_package_id" value="{{$item->id}}">
                  <input type="hidden" name="max_investment" value="{{$item->max_principal}}">
                  
                  <input type="hidden" name="token" id="token" class="form-control" value="{{ csrf_token() }}">
        

                  </ul>
                  
                  <button class="btn btn-outline-primary d-block w-100" id="invest_in_a_loan" onclick="investinALoan()" type="button">Invest </button>
                  
                </div>
              </div>
            </div> 
            @endforeach
 
          </div>
        </div>
        <div class="col-12 text-center">
          <h5 class="mt-5">Can't find the right investment?</h5>
          <p class="fs-1">Contact us <a href="#">....</a> help@valo.ng</p>
        </div>
      </div>
    </div>
  </div>



  @endsection