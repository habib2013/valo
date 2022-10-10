@extends('homee_template')
@section('title', 'Loan Book')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">
    <div class="row">
      <div class="col-lg-8">
        <h3>Wallet Balance ₦ {{number_format($auth_user->wallet_balance)}}</h3>
        <p class="mt-2">Wallet balance is low. Please replenish your account using the option below to <br /> begin investing.</p>
        <div class="dropdown"><button class="btn btn-link dropdown-toggle ps-0 btn-sm" id="change-plan" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change plan</button>
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

        {{-- <div class="form-check mb-0"><input class="form-check-input" type="radio" value="" id="paypal" name="billing" /><label class="form-check-label mb-0 d-block" for="paypal"><img src="../../../f_assets/assets/img/icons/icon-paypal-full.png" height="20" alt="" /></label></div>
        <p class="fs--1 mb-4">Pay with PayPal, Apple Pay, PayPal Credit and much more</p>
        <div class="form-check mb-0"><input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing" /><label class="form-check-label d-flex align-items-center mb-0" for="credit-card"><span class="fs-1 text-nowrap">Credit Card</span><img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="../../../f_assets/assets/img/icons/icon-payment-methods.png" height="20" alt="" /></label></div>
        <p class="fs--1 mb-4">Safe money transfer using your bank accounts. Visa, maestro, discover, american express.</p>
        <div class="row gx-3 mb-3">
          <div class="col"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardNumber">Card Number</label><input class="form-control" id="cardNumber" placeholder="XXXX XXXX XXXX XXXX" type="text" /></div>
          <div class="col"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardName">Name of Card</label><input class="form-control" id="cardName" placeholder="John Doe" type="text" /></div>
        </div>
        <div class="row gx-3">
          <div class="col-6 col-sm-3"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="expDate">Exp Date</label><input class="form-control" id="expDate" placeholder="15/2024" type="text" /></div>
          <div class="col-6 col-sm-3"><label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cvv">CVV<span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Card verification value"><span class="fa fa-question-circle"></span></span></label><input class="form-control" id="cvv" placeholder="123" maxlength="3" pattern="[0-9]{3}" type="text" /></div>
        </div> --}}


      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card h-100">

        form

      <div class="card-header">
        <h5 class="mb-0">Fund Wallet</h5>
      </div>

      <form id="login-form" method="post" onsubmit="return payWithPaystack()" role="form" style="display: block;">
        @csrf
    
        <div class="card-body bg-light">
            <select class="form-select mb-3" aria-label="Default select example" id="payment_type" onchange="">
            <option selected="0">From saved card</option>
            <option selected="1">With Debit card</option>
              <option value="2">With Bank Account</option>
            </select>
          <input type="text" name="fund_amount" id="fund_amount" class="form-control" placeholder="₦1,000">
        
            <hr />
           {{-- <p class="fs--1 text-600">Once you start your trial, you will have 30 days to use Falcon Premium for free. After 30 days you’ll be charged based on your selected plan.</p>
            --}}
           <button class="btn btn-primary d-block w-100" type="submit"><span class="fa fa-lock me-2"></span>Fund Wallet</button>
            <div class="text-center mt-2"><small class="d-inline-block">By continuing, you are agreeing to our <a href="#!">terms</a> and will be charged at the end of the trial. </small></div>
          </div>

    
    </form>



    </div>
  </div>
</div>


  @endsection