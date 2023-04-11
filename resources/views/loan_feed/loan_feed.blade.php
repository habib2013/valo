@extends('homee_template')
@section('title', 'Loan Feed Page')
@section('content')


<div class="row g-3">
    <div class="col-lg-8">
    
      <div class="card mb-3">
        <div class="card-header bg-light">
          <div class="row justify-content-between">
            <div class="col">
              <div class="d-flex">
                <div class="avatar avatar-2xl status-online">
                  <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                </div>
                <div class="flex-1 align-self-center ms-2">
                  <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> shared an <a href="#!">album</a></p>
                  <p class="mb-0 fs--1">11 hrs &bull; Consett, UK &bull; <span class="fas fa-globe-americas"></span></p>
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
          <p>Rowan Sebastian Atkinson CBE is an English actor, comedian and screenwriter best known for his work on the sitcoms Blackadder and Mr. Bean.</p>
          <div class="row mx-n1">
            <div class="col-6 p-1"><a href="../../assets/img/generic/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/4.jpg" alt="" /></a></div>
            <div class="col-6 p-1"><a href="../../assets/img/generic/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/5.jpg" alt="" /></a></div>
            <div class="col-4 p-1"><a href="../../assets/img/gallery/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/4.jpg" alt="" /></a></div>
            <div class="col-4 p-1"><a href="../../assets/img/gallery/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/5.jpg" alt="" /></a></div>
            <div class="col-4 p-1"><a href="../../assets/img/gallery/3.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/3.jpg" alt="" /></a></div>
          </div>
        </div>
        <div class="card-footer bg-light pt-0">
          <div class="border-bottom border-200 fs--1 py-3"><a class="text-700" href="#!">345 Likes</a> &bull; <a class="text-700" href="#!">34 Comments</a></div>
          <div class="row g-0 fw-semi-bold text-center py-2 fs--1">
            <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-active.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
            <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-active.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
            <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
          </div>
          <form class="d-flex align-items-center border-top border-200 pt-3">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
            </div><input class="form-control rounded-pill ms-2 fs--1" type="text" placeholder="Write a comment..." />
          </form>
          <div class="d-flex mt-3">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2 fs--1">
              <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
              <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min </div>
            </div>
          </div>
          <div class="d-flex mt-3">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2 fs--1">
              <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆</p>
              <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 3hrs </div>
            </div>
          </div><a class="fs--1 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
        </div>
      </div>
  
    </div>
    <div class="col-lg-4">
      <div class="card mb-3">
        <div class="card-body fs--1">
          <div class="d-flex"><span class="fas fa-gift fs-0 text-warning"></span>
            <div class="flex-1 ms-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Emma Watson</a>'s Birthday is today</div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Add to your feed</h5><a class="fs--1" href="#!">See all</a>
        </div>
        <div class="card-body">
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Katheryn Winnick</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/5.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Travis Fimmel</a></h6>
              <p class="fs--1 mb-0">5 mutual connections</p><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Gustaf Skarsgård</a></h6>
              <p class="fs--1 mb-0">10 mutual connections</p><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/8.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Clive Standen</a></h6>
              <p class="fs--1 mb-0">8 mutual connections</p><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/15.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Jennie Jacques</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/6.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Isaac Hempstead</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Antony Hopkins</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
              <div class="border-bottom border-dashed my-3"></div>
            </div>
          </div>
          <div class="d-flex">
            <div class="avatar avatar-3xl">
              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
            </div>
            <div class="flex-1 ms-2">
              <h6 class="mb-0"><a href="../../pages/user/profile.html">Sophie Turner</a></h6><button class="btn btn-light btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Follow</span></button>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>

</div>

</div>
</main>


  @endsection