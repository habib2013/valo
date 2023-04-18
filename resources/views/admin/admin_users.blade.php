@extends('admin.admin_homee_template')
@section('title', 'All user Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">
    <div class="row">
        <h5 class="mb-0">All users</h5>
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
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">User Type</th>
                  <th scope="col">KYC Level</th>
                  <th scope="col">Is Verified</th>
                  <th class="col" scope="col">Amount</th>
                  <th class="col" scope="col">BVN</th>
                  <th class="text-end" scope="col">Action</th>
               
                </tr>
              </thead>
              <tbody>

                @foreach ($allUsers as $item)

                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="ms-2">{{$item->name}}</div>
                    </div>
                  </td>
                  <td class="text-nowrap">{{$item->email}}</td>
                  <td class="text-nowrap">{{$item->user_type}}</td>
                  <td class="text-nowrap">{{$item->kyc_level == 0 ? 'Very Low' : 'Moderate'}}</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-{{$item->is_verified == 1 ? 'success' : 'danger'}}">{{$item->is_verified == 1 ? 'Verified' : 'Not verified'}}<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                  <td class="text-nowrap">{{$item->wallet_balance}}</td>
                  <td class="text-nowrap">{{$item->bvn ?? 'N/A'}}</td>
                  <td class="text-end">
                    <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-0">
                        <div class="py-2"><a class="dropdown-item" href="#!">Approve User</a>
                            <a class="dropdown-item text-danger" href="#!">Delete User</a>
                        </div>
                      </div>
                    </div>
                  </td>

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