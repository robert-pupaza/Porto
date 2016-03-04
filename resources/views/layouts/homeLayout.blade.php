<!DOCTYPE html>
<html class="dark">
    <head>
        <title>
            @yield('title')
        </title>
        
        <!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 4.5.1</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        
		<!-- Vendor CSS -->
        
		<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    
		<link rel="stylesheet" href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-shop.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-animate.css')}}">
		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/settings.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/layers.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/navigation.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('vendor/circle-flip-slideshow/css/component.css')}}" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{URL::asset('vendor/modernizr/modernizr.min.js')}}"></script>
        
    </head>
    <body>
        <div class="body">
            @yield('body')
            @include('layouts.footer')
        </div>
        <!-- Vendor -->
		<script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{URL::asset('vendor/common/common.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.stellar/jquery.stellar.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{URL::asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{URL::asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{URL::asset('vendor/vide/vide.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::asset('js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{URL::asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{URL::asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{URL::asset('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
		<script src="{{URL::asset('js/views/view.home.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{URL::asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{URL::asset('js/theme.init.js')}}"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
    </body>
</html>