 
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    

 <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
   <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2" id="logo"><a href="{{url('/')}}">
          <img src="{{asset('front_assets/css/logo.png')}}"></a>
        </div>
      
        <!-- Filter Option-->
        <div class="filter-option ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaFilterOffcanvas" aria-controls="suhaFilterOffcanvas"><i class="fa fa-sliders-h"></i>
        </div>

         <div class="filter-option ms-2" id="user">
          <i>
             @if(session()->has('FRONT_USER_LOGIN')!=null)

          
            
      <div class="dropdown">
  <button class="btn btn-success">hi user <i class="fa fa-caret-down" style="margin-left: 10px;"></i></button>
  <div class="dropdown-content">
  <a href="{{url('/logout')}}">Logout</a>
  </div>
</div>
          @else

          <li class="btn btn-danger"><a href="{{url('registration')}}">Login</a></li>

          @endif

          </i>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-start suha-filter-offcanvas-wrap" tabindex="-1" id="suhaFilterOffcanvas" aria-labelledby="suhaFilterOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Catagory-->
              <div class="widget catagory mb-4">
                <h6 class="widget-title mb-2"></h6>
                <div class="widget-desc">
                  <!-- Single Checkbox-->
                  <div class="form-check">
                    <div id="sidebarMenu">
          <ul class="menu">
           <lu>{!! getTopNavCat() !!}</a></li>
         </ul>

    </div>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>

    
    <!-- All JavaScript Files-->
    <script src="{{asset('front_assets/js/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/waypoints.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.passwordstrength.js')}}"></script>
    <script src="{{asset('front_assets/js/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front_assets/js/js/theme-switching.js')}}"></script>
    <script src="{{asset('front_assets/js/js/no-internet.js')}}"></script>
    <script src="{{asset('front_assets/js/js/active.js')}}"></script>
    <script src="{{asset('front_assets/js/js/pwa.js')}}"></script>
   <script src="{{asset('front_assets/js/custom.js')}}"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
   
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">