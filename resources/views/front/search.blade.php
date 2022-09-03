<!DOCTYPE html>
@section('page_title','Search')
@extends('front/layout')
<html lang="en">
  <head>
    <title>Buykidstoy | Search </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
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
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
   
    <div class="page-content-wrapper">
      <!-- Catagory Banner-->
      
    <div class="page-content-wrapper">
      <!-- Catagory Banner-->
       <div class="page-content-wrapper">
      <!-- Search Form-->
      <!-- Search Form-->
      <div class="container">
        <div class="search-form pt-3 rtl-flex-d-row-r">
          <form action="">

            <input class="form-control" type="text" id="search_str" placeholder="Search Any Kids Toy">

          </form>
          <!-- Alternative Search Options -->
          <div class="alternative-search-options">
            <div class="dropdown">
               <a class="btn btn-danger" id="altSearchOption" onclick="funSearch()"><i>GO</i></a>
              <!-- Dropdown Menu -->
             
            </div>
          </div>
        </div>
      </div><br><br>
   
      <!-- Top Products-->
      <div class="top-products-area pb-3">
        <div class="container">
          <div class="section-heading rtl-text-right">
            <h4>Search 'result'</h4>
          </div>          
          <div class="row g-2 rtl-flex-d-row-r">
           
           
                @if(isset($product[0]))
                       @foreach($product as $productArr)
            <!-- Product Card -->

            <div class="col-6 col-md-4">
              <div class="card product-card">
                <div class="card-body">
                 
                  <!-- Thumbnail -->
                  <a class="product-thumbnail d-block" href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                  <!-- Product Title -->
                  <a class="product-title" href="single-product.html">{{$productArr->name}}</a>
                  <!-- Product Price -->
                  <p class="sale-price">${{$product_attr[$productArr->id][0]->price}}<span>${{$product_attr[$productArr->id][0]->qty}}</span></p>
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
    </div>
    <!-- Internet Connection Status-->
    <!--<div class="internet-connection-status" id="internetStatus"></div>

    <div class="footer-nav-area" id="footerNav">
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


  </body>
</html>