@extends('homee_template')
@section('title', 'Payment Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">
    <div class="row">
      <div class="col-lg-8">
        <h3>Wallet Balance ₦ {{number_format($auth_user->wallet_balance)}}</h3>
        <p class="mt-2">Wallet balance is low. Please replenish your account using the option below to <br /> begin investing.</p>
        <div class="dropdown">
          {{-- <button class="btn btn-link dropdown-toggle ps-0 btn-sm" id="change-plan" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change plan</button>
           --}}
          <div class="dropdown-menu py-3" aria-labelledby="change-plan" style="min-width: 15rem;">
            <div class="dropdown-item px-3 py-2"><span class="d-flex justify-content-between fs--1 text-black"><span class="fw-semi-bold">Standard License</span><span>$59.00</span></span>
              <ul class="list-unstyled ps-1 my-2 fs--1">
                <li> <span class="fas fa-circle" data-fa-transform="shrink-11"></span><span class="ms-1">Use for a single product</span></li>
                <li><span class="fas fa-circle" data-fa-transform="shrink-11"></span><span class="ms-1">Non-paying users only</span></li>
              </ul>
              <p class="fs--2 mb-0">Read the full <a href="#!">Standard License </a></p>
            </div>
            <div class="dropdown-divider my-0"></div>
            <div class="dropdown-item px-3 py-2"><span class="d-flex justify-content-between fs--1 text-black"><span class="fw-semi-bold">Extended License</span><span>$99.00</span></span>
              <ul class="list-unstyled ps-1 my-2 fs--1">
                <li> <span class="fas fa-circle" data-fa-transform="shrink-11"></span><span class="ms-1">Unlimited websites</span></li>
                <li> <span class="fas fa-circle" data-fa-transform="shrink-11"></span><span class="ms-1">Paying users allowed</span></li>
              </ul>
              <p class="fs--2 mb-0">Read the full <a href="#!">Extended License</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row g-3 mb-3">
  <div class="col-lg-8">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="mb-0">Billing History</h5>
      </div>
      <div class="card-body bg-light">

        <div id="tableExample3" data-list='{"valueNames":["name","email","payment"],"filter":true}'>
          <div class="row justify-content-end g-0">
            <div class="col-auto">
              <a href="/loan_investment">
                <button class="btn btn-info w-100 fs--1" type="button"><span class="fas fa-credit-card me-2"></span>Invest In a Loan</button>
           
              </a>
          </div>
         
      
          </div>
          <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
              <thead class="bg-200 text-900">
                <tr>
                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Title</th>
                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Description</th>
                  <th class="sort align-middle white-space-nowrap text-end pe-4" data-sort="payment">Amount</th>
                  <th class="sort align-middle white-space-nowrap text-end pe-4" data-sort="payment">Date Initiated</th>
               
                </tr>
              </thead>
              <tbody class="list" id="table-purchase-body">
                <tr class="btn-reveal-trigger">
                  <th class="align-middle white-space-nowrap name"><a href="../../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                  <td class="align-middle white-space-nowrap email">This is a test,test test</td>
                  <td class="align-middle text-end fs-0 white-space-nowrap payment">
                     <span class="badge badge rounded-pill badge-soft-success">Success
                      <span class="ms-1 fas fa-check" data-fa-transform="shrink-2">

                      </span>
                    </span>
                  </td>
                  <td class="align-middle text-end fs-0 white-space-nowrap payment">
                    <span class="badge badge rounded-pill badge-soft-success">Success
                     <span class="ms-1 fas fa-check" data-fa-transform="shrink-2">

                     </span>
                   </span>
                 </td>
                  
                </tr>
                <tr class="btn-reveal-trigger">
                  <th class="align-middle white-space-nowrap name"><a href="../../app/e-commerce/customer-details.html">Homer</a></th>
                  <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                  <td class="align-middle text-end fs-0 white-space-nowrap payment"> <span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
               
                  <td class="align-middle text-end fs-0 white-space-nowrap payment">
                    <span class="badge badge rounded-pill badge-soft-success">Success
                     <span class="ms-1 fas fa-check" data-fa-transform="shrink-2">

                     </span>
                   </span>
                 </td>
                </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      


      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card h-100">

      <div class="card-header">
        <h5 class="mb-0">Fund Wallet</h5>
      </div>
      <div class="show_hide">
        <div class="show_toastr"></div>
    </div>

      {{-- <form id="login-form" method="post" onsubmit="return payWithPaystack()" role="form" style="display: block;">
        @csrf --}}
    
        <div class="card-body bg-light">
            <select class="form-select mb-3" aria-label="Default select example" id="payment_type" onchange="">
            <option selected="0">From saved card</option>
            <option selected="1">With Debit card</option>
              {{-- <option value="2">With Bank Account</option> --}}
            </select>
         
            <input type="text" name="fund_amount" id="fund_amount" class="form-control" placeholder="₦1,000">
            <input type="hidden" name="token" id="token" class="form-control" value="{{ csrf_token() }}">
        
            <hr />
           {{-- <p class="fs--1 text-600">Once you start your trial, you will have 30 days to use Falcon Premium for free. After 30 days you’ll be charged based on your selected plan.</p>
            --}}
            <input type="hidden" name="email" value="{{auth()->user()->email}}">
            <input type="hidden" name="display_name" value="{{auth()->user()->name}}">
            
           <button id="login_button" class="btn btn-primary d-block w-100" type="submit" onclick="payWithPaystack()"><span class="fa fa-lock me-2"></span>Fund Wallet</button>
            <div class="text-center mt-2"><small class="d-inline-block">By continuing, you are agreeing to our <a href="#!">terms</a> and will be charged at the end of the trial. </small></div>
          </div>

    
    {{-- </form> --}}



    </div>
  </div>
</div>


  @endsection