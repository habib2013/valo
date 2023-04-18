@extends('homee_template')
@section('title', 'Loan Feed Page')
@section('content')


<div class="row g-3">
    <div class="col-lg-8">
    
      @foreach ($show_loan_available as $item)
   
      <div class="card mb-3">
        <div class="card-header bg-light">
          <div class="row justify-content-between">
            <div class="col">
              <div class="d-flex">
             
                <div class="flex-1 align-self-center ms-2">
                  <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">{{$item->investor->name}}</p>
                  <p class="mb-0 fs--1">{{$item->created_at->diffForHumans()}}  <span class="fas fa-globe-americas"></span></p>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle p-1 dropdown-caret-none btn-reveal" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body overflow-hidden">
          <p>I just invested in a loan you may be interestedin, kindly click on <span class="text-primary"> <a href="/viewallLoans/{{$item->investor->id}}">view</a></span> to see details.</p>
       
        </div>
      
      </div>

      @endforeach
   
  
    </div>
 
  </div>

</div>

</div>
</main>


  @endsection