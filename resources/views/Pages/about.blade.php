@extends('layouts.front_master')
@section('title')
    <title>About US</title>
@endsection
@section('styles')

@endsection
@section('content') 
   <!-- CONTENT START -->
   <div class="page-content">
            
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('assets/front/images/banner/about-banner.jpg')}});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">About</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END --> 
        
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END --> 
    
    <div class="section-full p-tb100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="section-head text-left">
                        {{-- <span class="wt-title-subline text-gray-dark font-16 m-b15">What is bitcoin</span> --}}
                        <h2 class="text-uppercase">Putting our clients first since 1986. </h2>
                        <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                        <p><strong>For more than 30 years, we’ve been empowering clients by helping them take control of their financial lives.</strong></p>
                        <p>
                            Trading platform transcendtrade Trade provides professional services since 2012 before going global. The main aim is to enhance live by providing a sophisticated and safe avenue inspired by effective and innovative solutions for investing and trading in different emerging markets in order to improve our investors financial situation and ultimately provide them financial freedom and stability. The experience, accumulated during the work, allowed the company to supply traders from all corners of the world with everything that is necessary for comfortable trading. Moon Pro Trade is an American company with a global interest in the business development, our main focus is in the oil,real estate and gold mining sector. Moon Pro Trade is an independent company with an expected interest of $4 billion annually. We are one of the upcoming top American company based on annual generated interest. Moon Pro Trade is an American management company specializing in profit generation in various financial markets in so many countries. We stand to remain true to the principle in which our company was invented. The major focus of our divisified business portfolio is to provide satisfaction to our investors, providing expert security services to our clients, putting safety first and creating more profitable opportunities to the world. We offer you an outstanding referal bonus of 10% of all referral deposit that is unlimited. This means you earn 10% referal bonus when your downline invest in the Basic plan, Premium plan or Ultimate plan. You also earn 15% when your downline invest in the Veteran or Master plan. It doesn't end there because you can also earn 1% referral bonus from your 2nd generation investment.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="wt-media">
                        <img src="{{asset('assets/front/images/gallery/pic3.jpg')}}" alt="" class="img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
    <!-- SECTION CONTENT -->
    <div class="section-full bg-primary p-t50 p-b30">
        <div class="container">
            <div class="section-content">
                <div class="row">
                        
                    <div class="col-md-3 col-sm-6">
                        <div class="text-black wt-icon-box-wraper center">
                            <div class="counter font-70 font-weight-800 m-b5">25</div>
                            <span class="font-18">years of Excellence</span>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="font-70 font-weight-800 m-b5">15+</div>
                            <span class="font-18">Global Awards</span>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="font-70 font-weight-800 m-b5">24/5</div>
                            <span class="font-18">Customer Support</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END --> 
    

            
</div>
<!-- CONTENT END -->

@endsection

@section('scripts')

@endsection