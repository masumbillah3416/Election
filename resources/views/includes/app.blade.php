

<!doctype html>
<html class="no-js" lang="zxx">

<head>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Election</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- 
		<!-- Favicons -->
		<link rel="shortcut icon" href="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}">
		<link rel="apple-touch-icon" href="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}"> --}}

		<!-- Google font (font-family: 'Hind', sans-serif;) -->
		<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
		<link rel="stylesheet" href="{{asset('abasas/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('abasas/css/plugins.css')}}">

		<!-- Cusom css -->
	   <link rel="stylesheet" href="{{asset('abasas/css/custom.css')}}">

		<!-- Modernizer js -->
        <script src="{{asset('abasas/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<style>
            .bg-abasas-dark {

background-color: #2a3f5c !important;
color: #fff;

}

			.rules-side-nav .nav-link{
				
				color: black;
			 
				font-weight: 600;
			}
			.rules-side-nav .nav-link.active{
				color:black;
				background-color:rgb(202, 197, 189);

				
			}

			.TextUppercase {
					 
				text-transform: uppercase;
				}

				
				.Footertitle{

				
			
				}
     
    
  
    
    
            .title {
                font-style:normal ;
                font-weight:800; 
                color:#2D3691; 
                font-size:60px; 
                font-family: 'Oswald', sans-serif;
                line-height:normal;
            }
    
            .subTitle {
                font-family:'Arial', Times, serif;
                font-style:normal ; 
                font-weight:800; 
                color:rgb(207, 58, 58);
            }
            .address{
                font-size:15px; 
                color: black;
                font-family:'Arial', Times, serif;
    
            }
    
    
    
            @media only screen and (min-width: 1920px) {
    
    
                .title {
                    font-size: 60px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                
                #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
                display: none;
                }
            }
    
            @media only screen and (min-width: 1600px) and (max-width: 1919px) {
    
    
                .title {
                    font-size: 60px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
            
                display: none !important;
                }
            }
    
            @media only screen and (min-width: 1200px) and (max-width: 1599px) {
    
    
                .title {
                    font-size: 60px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
                display: none;
                }
            }
    
            @media only screen and (min-width: 992px) and (max-width: 1199px) {
    
    
                .title {
                    font-size: 50px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                .address{
                font-size:12px; 
            }
            #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
                display: none;
                }
            }
    
            @media only screen and (min-width: 768px) and (max-width: 991px) {
    
    
                .title {
                    font-size: 40px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                .address{
                font-size:12px; 
            }
            #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
                display: none;
                }
    
            }
    
            @media only screen and (max-width: 767px) {
    
    
                .title {
                    font-size: 30px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                .address{
                font-size:12px; 
            }
            #desktopLogoTop{
                display: block;
                }
                #mobileLogoTop{
                display: none;
                }
            }
    
            @media only screen and (max-width: 576px) {
    
    
                .title {
                    font-size: 25px;
                }
    
                .subTitle {
                    font-size: 15px;
                }
                
    
                .address{
                font-size:12px; 
            }
    
            #desktopLogoTop{
                display: none;
                }
                #mobileLogoTop{
                display: block;
                }
    
    
    
            }



            /* stripe  */

            .StripeElement {
    box-sizing: border-box;
    
    height: 40px;
    
    padding: 10px 12px;
    
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;
    
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
}
  
.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
}
  
.StripeElement--invalid {
    border-color: #fa755a;
}
  
.StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
}


    
        </style>
	</head>
<body>
    <!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- Add your site or application content here -->
    <div class="fakeloader"></div>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper" ng-app="timeCalc" ng-controller="CtrlTimeCalc as timeCalc">

        <!-- Header -->

        @include('includes.nav')
        <!-- //Header -->

        @yield('Breadcrumb')

        <!-- Page Conent -->
        <main class="page-content">
            @yield('content')

        </main><!-- //Page Conent -->

        <!-- Footer -->

        @include('includes.footer')


        {{-- <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                            aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="home" role="tabpanel"
                        aria-labelledby="home-tab">
                        <form action="#">
                            <div class="single-input">
                                <input type="text" placeholder="User name or email" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <input type="password" placeholder="Password" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <button type="submit"
                                    class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons social-icons--rounded">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <form action="#">
                            <div class="single-input">
                                <input type="text" placeholder="User name" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <input type="email" placeholder="Email address" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <input type="password" placeholder="Password" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <input type="password" placeholder="Confirm password" class="cr-round cr-round--lg">
                            </div>
                            <div class="single-input">
                                <button type="submit"
                                    class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Sign
                                        Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="icofont icofont-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form --> --}}
{{-- 
        <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="icofont icofont-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/small-thumbnail/1.png" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Prayer Cap</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="icofont icofont-ui-delete"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/small-thumbnail/2.png" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Attar Perfume</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="icofont icofont-ui-delete"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/small-thumbnail/3.png" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Special T-shirt</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="icofont icofont-ui-delete"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span
                                    class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a href="cart.html" class="cr-btn cr-btn--transparent"><span>View cart</span></a>
                        <a href="checkout.html" class="cr-btn cr-btn--theme"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox --> --}}


    </div><!-- //Main wrapper -->


    <!-- JS Files -->
    <script src="{{asset('abasas/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('abasas/js/popper.min.js')}}"></script>
    <script src="{{asset('abasas/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('abasas/js/plugins.js')}}"></script>
    <script src="{{asset('abasas/js/PrayTimes.js')}}"></script>
    <script src="{{asset('abasas/js/active.js')}}"></script>
    <script src="{{asset('abasas/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    
    @yield('customJS')
</body>

</html>
