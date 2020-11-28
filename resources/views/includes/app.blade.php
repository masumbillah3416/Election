

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


        

    </div><!-- //Main wrapper -->


    <!-- JS Files -->
    <script src="{{asset('abasas/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('abasas/js/popper.min.js')}}"></script>
    <script src="{{asset('abasas/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('abasas/js/plugins.js')}}"></script>
    <script src="{{asset('abasas/js/active.js')}}"></script>
    <script src="{{asset('abasas/js/scripts.js')}}"></script>
    
    @yield('customJS')

    
</body>

</html>
