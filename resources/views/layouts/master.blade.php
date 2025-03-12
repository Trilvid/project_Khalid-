<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/back/images/easypro.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    @yield('title')
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/back/css/vendors_css.css')}}">
	<!--amcharts -->
	{{-- <link href="../../../../www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" /> --}}
	  
	<!-- Style-->  
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="{{asset('assets/back/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/back/css/skin_color.css')}}">
	<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    {{-- <link rel="stylesheet" href="{{asset('assets/back/vendor_components/bootstrap/dist/css/bootstrap.css')}}"> --}}
    @yield('styles')
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-warning fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="#" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			  <span class="light-logo"><img src="{{asset('assets/back/images/easypro.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('assets/back/images/easypro.png')}}" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  {{-- <span class="light-logo"><img src="{{asset('assets/back/images/logo-dark-text.png')}}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{asset('assets/back/images/logo-light-text.png')}}" alt="logo"></span> --}}
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="align-left"></i>
			    </a>
			</li>
		
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<div id="google_translate_element"></div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">		  
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  {{-- <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Notifications">
			  <i data-feather="bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	 --}}
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="User">
				<i data-feather="user"></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 {{-- <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> --}}
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="{{route('auth.logout')}}"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
		  
      
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li>
				  <a href="{{route('user.dashboard')}}">
					<i data-feather="monitor"></i>
					<span>Dashboard</span>
					
				  </a>
				
				</li>
				<li>
				  <a href="{{route('user.demo')}}">
					<i data-feather="bar-chart-2"></i>
					<span>Demo Account</span>
				  </a>
				</li> 
				<li >
				  <a href="{{route('user.funding')}}">
					<i data-feather="pie-chart"></i>
					<span>Funding Account</span>
				  </a>
				</li> 
				<li>
				  <a href="{{route('user.withdrawal')}}">
					<i data-feather="refresh-ccw"></i>
					<span>Withdrawal</span>
				  </a>
				</li> 
				<li>
				  <a href="{{route('user.transaction_history')}}">
					<i data-feather="users"></i>
					<span>Trading History</span>
					
				  </a>
			
				</li>
				<li >
				  <a href="{{route('user.demo_history')}}">
					<i data-feather="sliders"></i>
					<span>Demo History</span>
					
				  </a>
				
				</li>
				<li >
				  <a href="{{route('user.deposit_history')}}">
					<i data-feather="dollar-sign"></i>
					<span>Deposit History</span>
				  </a>
				</li>				
				<li >
				  <a href="{{route('user.withdrawal_history')}}">
					<i data-feather="pie-chart"></i>
					<span>Withdrawal History</span>
					
				  </a>
				
				</li> 
				<li >
					{{-- {{route('user.profile')}} --}}
				  <a href="#">
					<i data-feather="grid"></i>
					<span>Profile</span>
					
				  </a>
				
				</li>  

				@if ( Auth::user()->role == 'admin' ||  Auth::user()->role == 'support')
					

					<li class="treeview active menu-open">
						<a href="#">
						  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
						  <span>Admin</span>
						  <span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						  </span>
						</a>
						<ul class="treeview-menu" style="">
						  <li><a href="{{route('user.admin')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>all user</a></li>
						  <li><a href="{{route('user.admin.all.payment.method')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payment Method</a></li>
						  <li><a href="{{route('user.admin.all_withdrawal')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Withdrawal</a></li>
						  <li><a href="{{route('user.admin.all_deposit')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Deposit</a></li>
						  <li><a href="{{route('user.admin.all.trade')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Trade</a></li>
						  
						</ul>
					  </li>
				@endif
		     
			  </ul>
			  
			  <div class="sidebar-widgets">
				<div class="mx-25 mb-30 p-30 text-center bg-primary-light rounded5">
					<img src="../images/trophy.png" alt="">
					<h4 class="my-3 fw-500 text-uppercase text-primary">Start Trading</h4>
					<span class="fs-12 d-block mb-3 text-black-50">Offering discounts for better online a store can loyalty weapon into driving</span>
					<button type="button" class="waves-effect waves-light btn btn-sm btn-primary mb-5">Invest Now</button>
				</div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block"></strong> ©  {{ now()->year }} All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  @yield('content') 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		
		</ul>
    </div>
	  &copy;  {{ now()->year }} <a href="#">Transcendtrade</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
   
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->
	
	<!-- Sidebar -->
		

	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
	<script src="{{asset('assets/back/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/back/icons/feather-icons/feather.min.js')}}"></script>	
	
	{{-- <script src="../../../../www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
	<script src="../../../../www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
	<script src="../../../../www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>	 --}}

	<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
		</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<script src="{{asset('assets/back/vendor_components/Web-Ticker-master/jquery.webticker.min.js')}}"></script>
	<script src="{{asset('assets/back/vendor_components/echarts-master/dist/echarts-en.min.js')}}"></script>
	<script src="{{asset('assets/back/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js')}}"></script>
    <script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('assets/back/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
	<!-- Crypto Admin App -->
	<script src="{{asset('assets/back/js/template.js')}}"></script>
	<script src="{{asset('assets/back/js/pages/dashboard6.js')}}"></script>
	<script src="{{asset('assets/back/js/pages/dashboard6-chart.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="{{asset('assets/vue.js')}}"></script>
    <script src="{{asset('assets/axios.js')}}"></script>
	<script src="https://unpkg.com/element-ui/lib/index.js"></script>
	
	<!-- this space is for chatbot for customer support -->
	<script src="//code.jivosite.com/widget/9ZzTZxCvnr" async></script>
	<!-- <script src="//code.tidio.co/vbo09yd8ipa1vz63r8szciizgykq693v.js" async></script> -->
    @yield('scripts')
	
</body>

</html>
