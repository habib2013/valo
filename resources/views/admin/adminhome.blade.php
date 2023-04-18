@extends('admin.admin_homee_template')
@section('title', 'Admin Home')
@section('content')
<div class="row g-3 mb-3">
  @include('overview.welcomekit')
  @include('overview.kyc_progress')
  @include('overview.close_pay')
  </div>
  <div class="row g-3 mb-3">
    @include('overview.statistics')
    
    <div class="col-xxl-6 col-lg-6">
      <div class="card h-100">
        @include('overview.loan_graph')
        @include('overview.loan_table')
      </div>
    </div>
</div> 
@endsection