@extends('homee_template')
@section('title', 'Loan Book')
@section('content')

<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>

  <div class="card-body position-relative">
    <div class="row">
 
        <h3>Investor profile</h3>
       

        <div class="row g-0">
   
          <div class="show_hide">
            <div class="show_toastr"></div>
        </div>

            <div class="mb-3">
              <div class="card-header bg-light">
        
                <div class="card mb-3">
                  <div class="card-header bg-light d-flex justify-content-between">
                    <h5 class="mb-0">Available Loans</h5><a class="font-sans-serif" href="../../app/social/activity-log.html"></a>
                  </div>
                  <div class="fs--1 p-0">
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">💰 </span></div>
                        </div>
                      </div>
                      <input type="hidden" name="investor_id" id="investor_id" class="form-control" value="{{$id}}">
        
                      @foreach ($showLoan as $item)
                      <div class="notification-body">
                        <p class="mb-1"><strong>{{$item->loan_name}}</strong> @ {{$item->max_interest}}% / {{$item->repayment_interval}}</strong></p>
                        <span class="notification-time"><b>Finance amount: </b> {{$item->max_principal}}</span> <br>
                        <span class="notification-time"><b>Loan Tenor: </b> {{$item->loan_tenor}} weeks</span> <br>
                        <span class="notification-time"><b>Repayment Interval: </b> {{$item->repayment_interval}}</span> <br>
                      
                        <input type="hidden" name="token" id="token" class="form-control" value="{{ csrf_token() }}">
                        <input type="hidden" name="loan_id" id="loan_id" class="form-control" value="{{$item->id}}">
                        <input type="hidden" name="client_id" id="client_id" class="form-control" value="{{auth()->user()->id}}">
                    
                       <br>
                       <div class="d-flex justify-content-between">
                        <button id="login_button" class="btn btn-primary d-block w-100" type="submit" onclick="iwantThisLoan()"><span class=""></span>I want this Loan</button> 
                        <div style="padding-left:5%"></div>
                        <button id="cancel_button" class="btn btn-danger d-block w-100" type="submit" onclick="notInterested()"><span class=""></span>Not Interested</button> 
                    
                       </div>
                      
                      </div>      
                      @endforeach
                    
                    </a>
        
               
                  </div>
        
        
        
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>







  @endsection