
@section('c_name',$home_categories[0]->category_name)
@section('c_desc',$home_categories[0]->c_desc)
@extends('front/layout')

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
@foreach($home_categories as $list)
<meta name="description"content="{{$list->c_desc}}">
@endforeach
<link rel="canonical" href="{{url('/')}}"/>

<title>Buykidstoy | categorey</title>
  <link rel="icon" type="text/css" href="{{asset('front_assets/css/logo2.png')}}">
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('front_assets/css/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/brands.min.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/solid.min.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('front_assets/css/css//style1.css')}}">
<link rel="manifest" href="{{asset('front_assets/css/css/manifest.json')}}">


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
<form action="" method="">

<input class="form-control" type="text" id="search_str" placeholder="Search kids toy">

</form>
<!-- Search Go BTN-->
<div class="alternative-search-options">
<div class="dropdown">
 <a class="btn btn-danger" id="altSearchOption" onclick="funSearch()"><i>GO</i></a>
<!-- search Go Btn-->

</div>
</div>
</div>
</div>


<div class="product-catagories-wrapper py-3">
<div class="container">
<div class="row g-2 rtl-flex-d-row-r">
<div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
<div class="d-flex align-items-center">
<div class="text-content">


<h4 class="text-white mb-1">@yield('c_name')</h4>
<p class="text-white mb-0">@yield('c_desc')</p>

</div>
</div>
</div>
<h5></h5>

@foreach($home_categories as $list)
<div class="col-3">
<div class="card catagory-card">
  <div class="card-body px-2">
    <a href="{{url('category/'.$list->category_slug)}}"><img src="{{asset('storage/media/category/'.$list->category_image)}}" alt="{{$list->category_name}}">
    <span>{{$list->category_name}}</span></a>
     
  </div>
    <p class="text-white mb-0"></p>
    <input type="hidden" name="" value="{{$list->c_desc}}" >
</div>
</div>
@endforeach
</div>
</div>
</div>
<!-- Top Products-->
<div class="top-products-area pb-3">
<div class="container">
<div class="section-heading rtl-text-right">
<h6>Products</h6>
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
    <a class="product-title" href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a>
    <!-- Product Price -->
    <p class="sale-price">${{$home_product_attr[$productArr->id][0]->price}}<span>${{$home_product_attr[$productArr->id][0]->qty}}</span></p>
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



</body>
</html>