<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>EasyPro </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/back/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('assets/back/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/back/css/skin_color.css')}}">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('assets/back/images/auth-bg/bg-1.jpg')}})">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Enter email to recover password</p>							
							</div>
							<div class="p-40">
								<form method="POST" action="{{route('user.send.password.recovery.link')}}">
									@csrf
									@include('Includes.messages')
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input  type="email" name="email"  class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
								
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="{{route('register')}}" class="text-warning ms-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
	<script src="{{asset('assets/back/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/back/icons/feather-icons/feather.min.js')}}"></script>	

</body>

</html>
