@extends('front/layout')

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Buykidstoy | registaer and login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
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
  
<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-12">
                <div class="aa-myaccount-register">                 
                 <form action="" class="aa-login-form" id="frmRegistration">
                    <label for="">Name<span>*</span></label>
                    <input type="text" name="name" placeholder="Name" required>
                    <div id="name_error" class="field_error"></div>
                    
                    <label for="">Email<span>*</span></label>
                    <input type="email" name="email" placeholder="Email" required>
                    <div id="email_error" class="field_error"></div>

                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <div id="password_error" class="field_error"></div> 

                    <label for="">Mobile<span>*</span></label>
                    <input type="text" name="mobile" placeholder="Mobile" required>
                    <div id="mobile_error" class="field_error">
                      
                    </div>

                    <button type="submit" class="btn btn-danger" id="btnRegistration">Register</button class="btn btn-danger">
                    @csrf                
                  </form> 
                </div>
                <div id="thank_you_msg" class="field_error text text-success fs-3"></div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>

   <div class="container">
 
          <form class="aa-login-form" id="frmLogin">
            <h4>Login</h4>
            <div id="login_msg" class="text text-danger fs-5"></div>
            <div class="col-md-12">
            <label for="">Email address<span>*</span></label>
            <input type="email" placeholder="Email" name="str_login_email" required>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="str_login_password" required>
            <button class="btn btn-danger" type="submit" id="btnLogin">Login</button><br>
           </div>
           
            
            @csrf
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    
</div>
 </section>

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
   <style>
     
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled){
      cursor: pointer;
    background: #df1a1a;
}
.aa-login-form{
  width: 100%;
    margin-top: 120px;
    display: grid;
    padding: -2px;
}

.col-md-12{
      padding: 10px;
    display: grid;
}

[type=email]{
  padding: 10px;
}
[type=password]{
  padding: 10px;
}
[type=text]{
  padding: 10px;
}
#btnRegistration{
  margin-top: 26px;
}
#btnLogin{
    margin-top: 26px;
}

   </style>
  </body>
</html>