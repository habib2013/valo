
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.11.0/pages/authentication/split/register.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 07 Sep 2022 11:01:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->


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
            <div class="bg-holder" style="background-image:url(../../../f_assets/assets/img/generic/19.jpg);"></div>
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
                        <h3>Register</h3>
                      </div>
                      <div class="col-auto fs--1 text-600"><span class="mb-0 fw-semi-bold">Already User?</span> <span><a href="/login">Login</a></span></div>
                    </div>
                    <form  method="POST"  onsubmit="return RegisterUser()"  aria-label="{{ __('Login') }}">
                      @csrf
                        <div class="show_hide">
                            <div class="show_toastr"></div>
                        </div>
                      <div class="mb-3"><label class="form-label" for="split-name">Name</label><input class="form-control" type="text" autocomplete="on" id="split-name" name="name" required/></div>
                      <div class="mb-3"><label class="form-label" for="split-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="split-email" name="email"  required/></div>
                      <div class="mb-3"><label class="form-label" for="split-email">User-Type</label>
                      
                      <select name="user_type" id="user_type" class="form-control" required>
                        <option value="Student">Student</option>
                        <option value="Investor">Investor</option>
                      </select>
                      </div>
                    
                      {{-- <div class="row gx-2"> --}}
                        <div class="mb-3 "><label class="form-label" for="split-password">Password</label><input class="form-control" type="password" autocomplete="on" id="split-password" name="password" required/></div>
                        {{-- <div class="mb-3 col-sm-6"><label class="form-label" for="split-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="split-confirm-password" name="password_confirmation" /></div>
                      </div> --}}
                      <div class="form-check"><input class="form-check-input" type="checkbox" id="cover-register-checkbox" /><label class="form-label" for="cover-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                      <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit" id="login_button">Register</button></div>
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


<!-- Mirrored from prium.github.io/falcon/v3.11.0/pages/authentication/split/register.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 07 Sep 2022 11:01:04 GMT -->
</html>