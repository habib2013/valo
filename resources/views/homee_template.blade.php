<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.11.0/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 07 Sep 2022 10:41:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

@include('includes.head')

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
     
     @include('includes.navs')

     <div class="content">
    
        @include('includes.app_nav')

        <script>
          var navbarPosition = localStorage.getItem('navbarPosition');
          var navbarVertical = document.querySelector('.navbar-vertical');
          var navbarTopVertical = document.querySelector('.content .navbar-top');
          var navbarTop = document.querySelector('[data-layout] .navbar-top');
          var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
          if (navbarPosition === 'top') {
            navbarTop.removeAttribute('style');
            navbarTopVertical.remove(navbarTopVertical);
            navbarVertical.remove(navbarVertical);
            navbarTopCombo.remove(navbarTopCombo);
          } else if (navbarPosition === 'combo') {
            navbarVertical.removeAttribute('style');
            navbarTopCombo.removeAttribute('style');
            navbarTop.remove(navbarTop);
            navbarTopVertical.remove(navbarTopVertical);
          } else {
            navbarVertical.removeAttribute('style');
            navbarTopVertical.removeAttribute('style');
            navbarTop.remove(navbarTop);
            navbarTopCombo.remove(navbarTopCombo);
          }
        </script>
       

       @yield('content')


        
   
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    
    {{--  @include('includes.theme_switch')  --}}

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->

    @include('includes.scripts')

  </body>


<!-- Mirrored from prium.github.io/falcon/v3.11.0/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Wed, 07 Sep 2022 10:48:23 GMT -->
</html>