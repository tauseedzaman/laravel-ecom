@section('page_title',$product[0]->name)
@section('img',$product[0]->image)
@section('desc',$product[0]->desc)
@section('keywords',$product[0]->keywords)
@extends('front/layout')

<meta property="og:title" content="@yield('page_title')"/>
<meta property="og:url" content="{{url()->current()}}"/>
<meta property="og:site_name" content="{{url('/')}}">
<meta property="og:image" content="{{asset('storage/media/')}}/@yield('img')">
<meta property="og:description" content="@yield('desc')">
<meta name="description" content="@yield('desc')">
<meta name="title" content="@yield('page_title')">
<meta name="keywords" content="@yield('keywords')">
<link rel="canonical" href="{{url('/')}}"/>
<!--======00--00==========================---=========================00--00=======---->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    
<title>@yield('page_title')</title>  
 
  
    <!-- Favicon -->
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
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('front_assets/css/css//style1.css')}}">
    <!-- Web App Manifest -->
    <link rel="manifest" href="{{asset('front_assets/css/css/manifest.json')}}">
  </head>
  <body>
    
    <div class="page-content-wrapper">
      <div class="single-product-slide">
        
        <img src="{{asset('storage/media/'.$product[0]->image)}}">
       <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="row g-2 rtl-flex-d-row-r">
            <!-- multi image -->
              @if(isset($product_images[$product[0]->id][0]))
              @foreach($product_images[$product[0]->id] as $list)
            <div class="col-2">
              
                <div class="card-body px-2" id="pimages">
                  <a href="{{asset('storage/media/'.$list->images)}}" data-lightbox="example-1"><img src="{{asset('storage/media/'.$list->images)}}" alt="{{$product[0]->name}}" width="70px"></a
                  >
              </div>
            </div>
            @endforeach

                          @endif
          </div>
        </div>
      </div>
        <div class="container">

          <div class="post-bookmark-wrap">
          
          </div>
        </div>
      </div>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3 dir-rtl">
          <div class="container">
            <h5 class="post-title">{{$product[0]->name}}</h5>

            <p class="sale-price">${{$product_attr[$product[0]->id][0]->price}}<span>${{$product_attr[$product[0]->id][0]->qty}}</span></p>
             <p class="Cat">
                      Category: <a class="text text-danger">{{$product[0]->model}}</a>
                      </p>
                       <a target="_blank" href="{{$product[0]->warranty}}"><li class="btn btn-warning text text-white">Buy Now</li></a><br><br>

                      <!--- share icon--->
            <a target="_blank" href="https://www.facebook.com/sharer.php?
u={{url()->current()}}"><li class="btn btn-primary text text-white" id="share-btn"><i class="fa fa-facebook" id="share"></i>Facebook</li></a>

             <a target="_blank" href="https://api.whatsapp.com/send?text={!!$product[0]->name!!} {{url()->current()}}
"><li class="btn btn-success text text-white" id="share-btn"><i class="fa fa-whatsapp" id="share"></i>whatsapp</li></a>

              <a target="_blank" href="https://www.linkedin.com/shareArticle?url=[{{url()->current()}}]&title=[{!!$product[0]->name!!}]"><li class="btn btn-primary text-white" id="share-btn"><i class="fa fa-linkedin" id="share"></i>linkedin</li></a>

               <a target="_blank" href="https://twitter.com/share?url={{url()->current()}}&text=[{!!$product[0]->name!!}]
"><li class="btn btn-primary text text-white" id="share-btn"><i class="fa fa-twitter" id="share"></i>twitter</li></a>

               <a target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=[{!!$product[0]->image!!}]&url=[{{url()->current()}}]&description=[{!!$product[0]->name!!}]"><li class="btn btn-danger text text-white" id="share-btn"><i class="fa fa-pinterest" id="share"></i>pinterest</li></a><hr
                <!--- share icon--->
          </div>
         

         
        </div>
        <div class="post-content bg-white py-3 mb-3 dir-rtl">
          <div class="container">
            <h5 class="text text-danger">Product Discription</h5>
            <p>{!!$product[0]->desc!!}</p>
          
          </div>
        </div>
      
     
   
        <div class="pb-3"></div>
        <!-- Related Products Slides-->
        <div class="related-product-wrapper bg-white py-3 mb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
              <h6 class="text text-success">Related Products</h6>
            </div>
            <div class="related-product-slide owl-carousel">
               <!--related products-->

              @if(isset($related_product[0]))
                    @foreach($related_product as $productArr)
              <div class="card product-card bg-gray shadow-none">
                <div class="card-body">
                  <!-- Thumbnail -->
                  <a href="{{url('product/'.$productArr->slug)}}"><img src="{{asset('storage/media/'.$productArr->image)}}" alt=""></a>
                  <!-- Product Title -->
                  <a class="product-title" href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a>
                  
                  <!-- Product Price -->
                  <p class="sale-price">${{$related_product_attr[$productArr->id][0]->price}}<span>${{$related_product_attr[$productArr->id][0]->qty}}</span></p>
                </div>
              </div>
@endforeach    
@else
<li>
<figure >
No data found
<figure>
<li>
@endif  
          </div>
        </div>
              <!--related products-->
              </div>
            </div>
          </div>
        </div>
                <div class="post-content bg-white py-3 mb-3 dir-rtl">
          <div class="container">
            <h5 class="text text-danger"></h5>
            <p>{!!$product[0]->short_desc!!}</p>
          
          </div></div>
        <!-- Rating & Review Wrapper -->
        <div class="rating-and-review-wrapper bg-white py-3 mb-3 dir-rtl">
          <div class="container">
             <h6>Ratings &amp; Reviews</h6>
            @if(isset($product_review[0]))    
                   <h5>
                   @php  
                      echo count($product_review);
                   @endphp
                    Review(s) for {{$product[0]->name}}</h5> 
                   
           
@foreach($product_review as $list)
            <div class="rating-review-content">
              <ul class="ps-0">
                <!-- Single User Review -->
                <li class="single-user-review d-flex">
                  <div class="rating-comment">
                    <li class="text text-dark fs-5"><i class="fa fa-circle-user text text-Secondary" id="share"></i>{{$list->name}}</li>
                    <li class="text text-danger">{{$list->rating}}</li>
                    <p class="comment mb-0 text text-dark">{{$list->review}}</p><span class="name-date"><?php echo date("d/F/Y") ?></span><hr>
                  </div>
                </li>
                <!-- Single User Review -->
                  @endforeach
                   </ul>
                   @else
                        <h2>No review found</h2>
                         @endif
              
            </div>

          </div>
        </div>


        <!-- Ratings Submit Form-->
        <div class="ratings-submit-form bg-white py-3 dir-rtl">
          <div class="container">
            
              <div class="review_msg"></div>
            <h6>Submit A Review</h6>
            <form id="frmProductReview">
          <div class="">
          <select class="form-select" name="rating" required>
          <option value="" selected disabled>select the rating</option>
          <option class="text text-danger">Good</option>
          <option class="text text-danger">Very Good</option>
           <option class="text text-danger">Fantastic</option>
          <option class="text text-danger">Nice</option>
          <option class="text text-danger">bad</option>
          <option class="text text-danger">worst</option>
          </select>
          </div><br>
              <textarea class="form-control mb-3" name="review"placeholder="Write your review..." required></textarea>

              <button class="btn btn-warning text text-white col-md-12 fs-120" type="submit">Submit Review</button><hr>
              <input type="hidden" name="product_id" value="{{$product[0]->id}}"/>
                      @csrf
            </form>
          
          </div>
        </div>
      </div>
    </div>

    
    <!-- Internet Connection Status-->
   
   
   <style>

   </style>
  </body>
</html>