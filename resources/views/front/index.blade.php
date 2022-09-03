
@section('page_title','Buykidstoy | Buy any Kids toy for your kids')
@section('meta_d',$home_banner[0]->m_desc)
@extends('front/layout')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
 @foreach($home_banner as $list)
 <meta name="description" content="{{$list->m_desc}}">
 @endforeach
 <link rel="canonical" href="{{url('/')}}"/>

  <title>Buykidstoy | Buy any Kids Toy and Very easy</title>
  <link rel="icon" type="text/css" href="{{asset('front_assets/css/logo2.png')}}">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front_asset/img/icons/icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
   <link rel="stylesheet" href="{{asset('front_assets/css/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/brands.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/css/nice-select.css')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('front_assets/css/css//style1.css')}}">
    <!-- Web App Manifest -->
    <link rel="manifest" href="{{asset('front_assets/css/css/manifest.json')}}">
  </head>
  <body>
    <!-- Preloader-->
   
    <div class="page-content-wrapper">
      <!-- Search Form-->
      <!-- Search Form-->
      <div class="container">
        <div class="search-form pt-3 rtl-flex-d-row-r">
          <form action="h" method="">

            <input class="form-control" type="text" id="search_str" placeholder="Search kids toy">

          </form>
          <!-- Alternative Search Options -->
          <div class="alternative-search-options">
            <div class="dropdown">
               <a class="btn btn-danger" id="altSearchOption" onclick="funSearch()"><i>GO</i></a>
              <!-- Dropdown Menu -->
             
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Wrapper -->
    <!-- Hero Wrapper -->
      <div class="hero-wrapper">
        <div class="container">
          <div class="pt-3">
            <!-- Hero Slides-->

            <div class="hero-slides owl-carousel">
              <!-- Single Hero Slide-->
                 @foreach($home_banner as $list)
              <div class="single-hero-slide" style="background-image: url({{asset('storage/media/banner/'.$list->image)}})">
                <div class="slide-content h-100 d-flex align-items-center">
                  <div class="slide-text">
                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">{{$list->bn_txt}}</h4>
                    <a class="btn btn-warning" target="_blank" href="{{$list->btn_link}}" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">{{$list->btn_txt}}</a>
                  </div>
                </div>
              </div>
              @endforeach    

            </div>

                        
              <!-- Single Hero Slide-->
              
            </div>
          </div>
        </div>
      </div>

      <!-- Product Catagories -->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="row g-2 rtl-flex-d-row-r">
           
         <h6>Shop by Categories</h6>
            <!-- Catagory Card -->
             @foreach($home_categories as $list)
            <div class="col-3">
              <div class="card catagory-card">
                <div class="card-body px-2">
                  <a href="{{url('category/'.$list->category_slug)}}"><img src="{{asset('storage/media/category/'.$list->category_image)}}" alt="{{$list->category_name}}">
                  <span>{{$list->category_name}}</span></a
                  ></div>
              </div>
            </div>
           @endforeach
          </div>
        </div>
      </div>

      <!-- Flash Sale Slide -->
      <div class="flash-sale-wrapper">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <h6 class="d-flex align-items-center rtl-flex-d-row-r">Latest Products</h6>
          </div> 
          <div class="flash-sale-slide owl-carousel">
   <!-- Flash Sale Card -->
     @php
              $loop_count=1;
              @endphp
              @foreach($home_categories as $list)
              @php
              $cat_class="";
              if($loop_count==1){
                $cat_class="in active"; 
                $loop_count++;
              }
              @endphp
               @foreach($home_categories_product[$list->id] as $productArr)
    
   <div class="card flash-sale-card">
     <div class="card-body"><a href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt=""><span class="product-title">{{substr($productArr->name,0,30)}}...</span>

         <p class="sale-price">${{$home_product_attr[$productArr->id][0]->price}}<span class="real-price">${{$home_product_attr[$productArr->id][0]->qty}}</span></p>
         <!-- Progress Bar-->
         </a>
      </div>
   </div>
   @endforeach  
   @endforeach  
   <!-- Flash Sale Card -->
            
            
          </div>
        </div>
      </div>
      <!-- Dark Mode -->
      <div class="container">
        <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
          <p class="text-white">Change Mode.and buy kids toy for your kids</p>
          <div class="form-check form-switch mb-0">
            <label class="form-check-label text-white h6 mb-0" for="darkSwitch">Switch to Dark Mode</label>
            <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
          </div>
        </div>
      </div>
      <!-- Top Products -->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>All Products</h6>
          </div>
          <div class="row g-2">

            <!-- Product Card -->
              @php
              $loop_count=1;
              @endphp
              @foreach($home_categories as $list)
              @php
              $cat_class="";
              if($loop_count==1){
                $cat_class="in active"; 
                $loop_count++;
              }
              @endphp
               @foreach($home_categories_product[$list->id] as $productArr)
            <div class="col-6 col-md-4">

              <div class="card product-card">
                <div class="card-body">
                 
                
                  <a class="product-thumbnail d-block" href="{{url('product/'.$productArr->slug)}}"><img class="mb-2" src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}" width="300">
                  <!-- Product Title -->
                  <a class="product-title" href="{{url('product/'.$productArr->slug)}}">{{substr($productArr->name,0,30)}}...</a>

                  <!-- Product Price -->
                  <p class="sale-price">${{$home_product_attr[$productArr->id][0]->price}}<span>${{$home_product_attr[$productArr->id][0]->qty}}</span></p>

                
                </div>
              </div>
            </div>
              @endforeach  
               @endforeach   
          </div>
        </div>
      </div>

      <!-- CTA Area -->
      <div class="container">
        <div class="cta-text dir-rtl p-4 p-lg-5">
          <div class="row">
            <div class="col-9">
              <h4 class="text-white mb-1">Tranding Product Today</h4>
              <p class="text-white mb-2 opacity-75">Get Today Best Kids Toy</p>
            </div>
          </div><img src="img/bg-img/make-up.png" alt="">
        </div>
      </div>
      <!-- Weekly Best Sellers-->
      <div class="weekly-best-seller-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Tranding Products</h6>
          </div>
          <div class="row g-2">
            <!-- Weekly Product Card -->
              @if(isset($home_tranding_product[$list->id][0]))
                       @foreach($home_tranding_product[$list->id] as $productArr)
            <div class="col-12">
              <div class="horizontal-product-card">
                <div class="d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <!-- Thumbnail -->

                    <a class="product-thumbnail shadow-sm d-block" href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>

                  </div>
                  <div class="product-description">
                    <!-- Wishlist  -->

                    <a class="wishlist-btn" href="{{url('product/'.$productArr->slug)}}">
                     <i class="fa fa-eye"></i></a>

                    <!-- Product Title -->
                    <a class="product-title d-block" href="{{url('product/'.$productArr->slug)}}">{{substr($productArr->name,0,30)}}...</a>
                    <!-- Price -->
                    <p class="sale-price"></i>${{$home_tranding_product_attr[$productArr->id][0]->price}}<span>${{$home_tranding_product_attr[$productArr->id][0]->qty}}</span></p>
                    <!-- Rating -->
                    </div>
                </div>
              </div>
            </div>
             @endforeach    
                        @else
                        <li>
                          <figure>
                            No data found
                          <figure>
                        <li>
                        @endif   
           
          </div>
        </div>
      </div>
      <!-- Discount Coupon Card-->
      <div class="container">
        <div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
          <div class="d-flex align-items-center">
           
            <div class="text-content">
              <h4 class="text-white mb-1">All Featured Peoducts</h4>
              <p class="text-white mb-0">To get discount, and New featured kids toys.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Featured Products Wrapper-->
      <div class="featured-products-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Featured Products</h6><a class="btn p-0" href="featured-products.html"></a>
          </div>
          <div class="row g-2">
            <!-- Featured Product Card-->
             @if(isset($home_featured_product[$list->id][0]))
             @foreach($home_featured_product[$list->id] as $productArr)
            <div class="col-4">
              <div class="card featured-product-card">
                <div class="card-body">
                 
                  <div class="product-thumbnail-side">
                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title --><a class="product-title d-block" href="{{url('product/'.$productArr->slug)}}">{{substr($productArr->name,0,30)}}...</a>
                    <!-- Price -->
                    <p class="sale-price">$ {{$home_featured_product_attr[$productArr->id][0]->price}}<span>$ {{$home_featured_product_attr[$productArr->id][0]->qty}}</span></p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
                        <li>
                          <figure>
                            No data found
                          <figure>
                        <li>
                        @endif   
            <!-- Featured Product Card-->
          </div>
        </div>
      </div>
      

  <div class="flash-sale-wrapper">

        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <h6 class="d-flex align-items-center rtl-flex-d-row-r">discounted products</h6>
            <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
           
          </div>
          <!-- Flash Sale Slide-->
          
          <div class="flash-sale-slide owl-carousel">
   <!-- Flash Sale Card -->
    
                
                    @if(isset($home_discounted_product[$list->id][0]))
                       @foreach($home_discounted_product[$list->id] as $productArr)
    
   <div class="card flash-sale-card">
     <div class="card-body"><a href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt=""><span class="product-title">{{substr($productArr->name,0,30)}}...</span>
         <p class="sale-price">${{$home_product_attr[$productArr->id][0]->price}}<span class="real-price">${{$home_product_attr[$productArr->id][0]->qty}}</span></p>
         <!-- Progress Bar-->
         </a>
      </div>
   </div>
    @endforeach    
                        @else
                        <li>
                          <figure>
                            No data found
                          </figure>
                        <li>
                        @endif     
   <!-- Flash Sale Card -->
            
            
          </div>
        </div>
      </div>
    <!-- Internet Connection Status-->

    <!-- Footer Nav-->
    <!--<div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">
          <li><a href="home.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li><a href="message.html"><i class="fa-solid fa-comment-dots"></i>Chat</a></li>
          <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i>Basket</a></li>
          <li><a href="settings.html"><i class="fa-solid fa-gear"></i>Settings</a></li>
          <li><a href="pages.html"><i class="fa-solid fa-heart"></i>Pages</a></li>
        </ul>
      </div>
    </div>-->



   
  </body>
</html>