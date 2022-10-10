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
        </div>
        <div class="col-12 col-lg-9 col-xl-10 col-xxl-8">
          <div class="row">


            @foreach ($loanProduct as $item)
            <div class="col-md">
              <div class="border rounded-3 overflow-hidden mb-3 mb-md-0">
                <div class="d-flex flex-between-center p-4">
                  <div>
                    <h3 class="fw-light fs-5 mb-0 text-primary">{{$item->loan_name}}</h3>
                    <h2 class="fw-light mt-0 text-primary"><sup class="fs-1">%</sup><span class="fs-3">{{$item->interest}}</span><span class="fs--2 mt-1">/ m</span></h2>
                  </div>
                  <div class="pe-3"><img src="../../../f_assets/assets/img/icons/free.svg" width="70" alt="" /></div>
                </div>
                <div class="p-4 bg-light">
                  <ul class="list-unstyled">
                    <li class="border-bottom py-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> <b>Minimum Repayment Day:</b>  {{$item->min_repayment_day}} days</li>
                    <li class="border-bottom py-2"> <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> <b>maximum Repayment Day:</b> {{$item->max_repayment_day}} days</li>
                    <li class="py-2 border-bottom"><span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> <b>Minimum Investment</b> {{$item->min_principal}} </li>
                    <li class="py-2 border-bottom"><span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> <b>Maximum Investment</b> {{$item->max_principal}} </li>
                    <li class="py-2 border-bottom"><span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> <b>Trust Level</b> {{$item->trust_level}} </li>
                    <li class="py-2 border-bottom"><span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> <b>Return assurance</b> {{$item->return_assurance}} </li>

                  </ul><button class="btn btn-outline-primary d-block w-100" type="button">Invest </button>
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