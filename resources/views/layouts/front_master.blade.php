<!DOCTYPE html>

<html lang="en">


<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="Transcendtrade : The main aim is to enhance live by providing a sophisticated and safe avenue inspired by effective and innovative solutions for investing and trading in different emerging markets in order to improve our investors financial situation and ultimately provide them financial freedom and stability" />
	<meta property="og:title" content="Transcendtrade : Crypto, Forex, bond Trading" />
	<meta property="og:description" content="<strong>Transcendtrade</strong> : Crypto, Forex, bond Trading" />
	<meta property="og:image" content="{{asset('assets/back/images/easypro.png')}}" />
	<meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="#" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/back/images/easypro.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    @yield('title')
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/fontawesome/css/font-awesome.min.css')}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/loader.min.css')}}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('assets/front/css/skin/skin-1.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/switcher.css')}}">    

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/plugins/revolution/revolution/css/navigation.css')}}">
    
    <!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    @yield('styles')
 
</head>

<body id="bg">
 
	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-6">
        
            <div class="top-bar bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <div class="wt-topbar-left">
                                <ul class="list-unstyled e-p-bx pull-left">
                                    <li><i class="fa fa-envelope"></i>info.transcendtrade@gmail.com</li>
                                    <li><i class="fa fa-phone"></i>+1 (805) 612‑7315</li>
                                </ul>
                            </div>
                            
                            <div class="wt-topbar-right">
                                <div class=" language-select pull-right">
                                      <div class="dropdown">
                                            <div id="google_translate_element"></div>
                                      </div>
                                </div>
                                
                                <ul class="list-unstyled e-p-bx pull-right">
                                    {{-- <li><a href="#" data-toggle="modal" data-target="#Login-form"><i class="fa fa-user"></i>Login</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#Register-form"><i class="fa fa-sign-in"></i>Register</a></li> --}}
                                    <li><a href="{{route('auth.login')}}"><i class="fa fa-user"></i>Login</a></li>
                                    <li><a href="{{route('register')}}"><i class="fa fa-sign-in"></i>Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

			<!-- Search Form -->
      
            
			<!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                   
                        
                            <!-- MAIN Vav -->
                            <div class="header-nav navbar-collapse collapse ">
                                <ul class=" nav navbar-nav">
                                    <li class="active">
                                        <a href="{{route('home')}}">Home</a>
                                        
                                    </li>
                                
                                    <li>
                                        <a href="javascript:;">Markets</i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="javascript:;">Company<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            
                                            <li><a href="{{route('about')}}">About</a></li>
                                            {{-- <li><a href="#">Career</a></li> --}}
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('customersAgreement')}}">Customers Agreement</a></li>
                                            {{-- <li><a href="#">Privacy policy</a></li> --}}
                                        </ul>
                                    </li>
                                
                                    <li>
                                        <a href="{{route('education')}}">Education</a>
                                        
                                    </li>
                                    
                                    <li class="submenu-direction">
                                        <a href="javascript:;">Resources<i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                        	{{-- <li>
                                                <a href="javascript:;">Help Center</a>
                                                
                                            </li> --}}
                                            <li>
                                                <a href="{{route('customers')}}">Customers</a>
                                                
                                            </li>
                                            {{-- <li>
                                                <a href="javascript:;">Roadmap</a>
                                               
                                            </li>                                         --}}
                                        	{{-- <li>
                                                <a href="javascript:;">Legal Docs</a>
                                              
                                            </li> --}}
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </div>
                    </div>
                </div>
            </div>            
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
         
        @yield('content') 
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark bg-no-repeat bg-full-height bg-center "  style="background-image:url({{asset('assets/front/images/background/footer-bg.jpg')}});">
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main bg-black opacity-05"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-3 col-sm-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title text-white">About transcendtrade</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="#"><img src="images/footer-logo.png" width="230" height="67" alt=""/></a>
                                </div>
                                <p>Trading platform transcendtrade Trade provides professional services since 2012 before going global. The main aim is to enhance live by providing a sophisticated and safe avenue inspired by effective and innovative solutions for investing and trading in different emerging markets in order to improve our investors financial situation and ultimately provide them financial freedom and stability
                                </p>  
                            </div>
                        </div> 
                       
                        <!-- USEFUL LINKS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title text-white">Useful links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                  
                    </div>
                 
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom  overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2023 transcendtrade. All Rights Reserved.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right"> 
                                <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

        <!-- MODAL  LOGIN -->
        <div id="Login-form" class="modal fade " role="dialog">
          <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Login Your Account</h4>
              </div>
              <div class="modal-body p-a30">
                <form id="log-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Enter Username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" type="email">
                        </div>
                    </div>
                    <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                    <span class="font-12">Don't have an account? <a href="javascript:;" class="text-primary">Register Here</a></span>
                </form>
              </div>
              <div class="modal-footer text-center">
                <div class="text-center"><img src="images/logo.png" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- MODAL  REGISTER -->
        <div id="Register-form" class="modal fade " role="dialog">
          <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Register here</h4>
              </div>
              <div class="modal-body p-a30">
                <form id="reg-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Enter Username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Enter Password" type="email">
                        </div>
                    </div>
                    <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                    <span class="font-12">Already Have an Account? <a href="javascript:;" class="text-primary">Login</a></span>
                </form>
              </div>
              <div class="modal-footer text-center">
                <div class="text-center"><img src="images/logo.png" alt=""></div>
              </div>
            </div>
          </div>
        </div> 
        
    </div>
 
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-dot bg-primary"><i class="fa fa-bitcoin"></i></div>
            <div class="step" id="cssload-s1"></div>
            <div class="step" id="cssload-s2"></div>
            <div class="step" id="cssload-s3"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="{{asset('assets/front/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script   src="{{asset('assets/front/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{asset('assets/front/js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script   src="{{asset('assets/front/js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->

<script   src="{{asset('assets/front/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{asset('assets/front/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script   src="{{asset('assets/front/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script   src="{{asset('assets/front/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{asset('assets/front/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script   src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

<script   src="{{asset('assets/front/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{asset('assets/front/js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{asset('assets/front/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{asset('assets/front/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{asset('assets/front/js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->
<script  src="{{asset('assets/front/js/jquery.bgscroll.js')}}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{asset('assets/front/js/tickerNews.min.js')}}"></script><!-- TICKERNEWS-->
<!-- REVOLUTION JS FILES -->

<script  src="{{asset('assets/front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{asset('assets/front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.j')}}s"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="{{asset('assets/front/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="{{asset('assets/front/js/rev-script-2.js')}}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="//code.tidio.co/uqepgovjdhbgv2ehzonuuh97ratzwbxx.js" async></script>

@yield('scripts')

</body>


</html>
