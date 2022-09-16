<div class="col-xxl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex flex-between-center">
        <h5 class="mb-0">KYC Level</h5><a class="btn btn-link btn-sm px-0" href="#!">Update Profile<span class="fas fa-chevron-right ms-1 fs--2"> </span></a>
      </div>
      <div class="card-body">
        <p class="fs--1 text-600">Kindly update your profile <br /> It will help us serve you better</p>
        <div class="progress mb-3 rounded-pill" style="height: 6px;">
          <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar" style="width: {{Auth::user()->kyc_level}}%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="mb-0 text-primary">{{Auth::user()->kyc_level}}% completed</p>
        <p class="mb-0 fs--2 text-500">Last Updated: {{Auth::user()->updated_at->diffForHumans()}}</p>
      </div>
    </div>
  </div>