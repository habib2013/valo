@extends('admin.admin_homee_template')
@section('title', 'All Schools Page')
@section('content')
<div class="card mb-3">
  <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../f_assets/assets/img/icons/spot-illustrations/corner-4.png);"></div>
  <!--/.bg-holder-->
  <div class="card-body position-relative">

        <div class="d-flex justify-content-sm-between">
            <h5 class="mb-0">All Schools</h5>
            <a href="/admin/addschool">
                <button class="btn btn-info w-100 fs--1" type="button"><span class="fas fa-school me-2"></span>Add School</button>
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
                  <th scope="col">Name</th>
                  <th scope="col">Size</th>
                
                  <th scope="col">Min Amount</th>
                  <th scope="col">Max AMount</th>
                  <th scope="col">Accredited</th>
             
               
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
                  <td class="text-nowrap">{{$item->size}}</td>
        
                  <td class="text-nowrap">{{$item->min_amount}}</td>
                  <td class="text-nowrap">{{$item->max_amount}}</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-{{$item->accredited == 1 ? 'success' : 'danger'}}">{{$item->accredited == 1 ? 'Accredited' : 'Not Accredited'}}<span class="ms-1" data-fa-transform="shrink-2"></span></span></td>
              

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