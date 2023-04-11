
<!DOCTYPE html>
<html lang="en-US" dir="ltr">


@include('auth.includes.auth_head')

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class="row min-vh-100 bg-100">
          <div class="col-6 d-none d-lg-block position-relative">
            <div class="bg-holder" style="background-image:url(../../../f_assets/assets/img/generic/14.jpg);background-position: 50% 20%;"></div>
            <!--/.bg-holder-->
          </div>
          <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
            <div class="row justify-content-center g-0">
              <div class="col-lg-9 col-xl-8 col-xxl-6">
                <div class="card">
                  <div class="card-header bg-circle-shape bg-shape text-center p-2"><a class="font-sans-serif fw-bolder fs-4 z-index-1 position-relative link-light light" href="../../../index.html">Valo</a></div>
                  <div class="card-body p-4">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h3>Login</h3>
                      </div>
                      <div class="col-auto fs--1 text-600"><span class="mb-0 fw-semi-bold">New User?</span> <span><a href="/register">Create account</a></span></div>
                    </div>
                    <form  method="POST"  onsubmit="return LoginUser()"  aria-label="{{ __('Login') }}">
                      @csrf
                        <div class="show_hide">
                            <div class="show_toastr"></div>
                        </div>
                   

                      <div class="mb-3"><label class="form-label" for="split-login-email">Email address</label><input class="form-control" id="split-login-email" type="email" name="email"/></div>
                      <div class="mb-3">
                        <div class="d-flex justify-content-between"><label class="form-label" for="split-login-password">Password</label></div><input class="form-control" id="split-login-password" type="password" name="password" />
                      </div>
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="split-checkbox" /><label class="form-check-label mb-0" for="split-checkbox">Remember me</label></div>
                        </div>
                        {{--  <div class="col-auto"><a class="fs--1" href="forgot-password.html">Forgot Password?</a></div>
                      --}}
                      </div>
                      <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit" id="login_button">Log in</button></div>
                    </form>
            
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

 


    @include('includes.theme_switch')
   
    @include('auth.includes.auth_scripts')

  </body>


<!-- Mirrored from prium.github.io/falcon/v3.11.0/pages/authentication/split/login.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 07 Sep 2022 11:01:03 GMT -->
</html>