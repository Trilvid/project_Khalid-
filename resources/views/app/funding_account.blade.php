@extends('layouts.master')
@section('title')
    <title>Funding Account</title>
@endsection
@section('styles')

@endsection
@section('content') 
<div class="content-wrapper" id="content">
  @csrf
    <div class="container-full">
      <div class="content-header">
        <div class="d-flex align-items-center">
          <div class="me-auto">
            <h4 class="page-title">Choose funding method </h4>
            {{-- <div class="d-inline-block align-items-center">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Currency Exchange</li>
                </ol>
              </nav>
            </div> --}}
          </div>
          
        </div>
      </div>
      <!-- Main content -->
      <section class="content">	
        <div class="row">
          <div class="col-lg-3 col-md-6" v-for="(method, index) in paymentMethods">
            <div class="box pull-up">
              <div class="box-body"  @click="selectMethod(index)" style="cursor: pointer">
                <div class="media align-items-center p-0">
                <div class="text-center">
                  <a href="#"><i class="cc BTC me-5" title="BTC"></i></a>
                </div>
                <div>
                  <h3 class="no-margin text-bold">@{{method.payment_name}}</h3>
                </div>
                </div>
                {{-- <div class="flexbox align-items-center mt-5">
                <div>
                  <p class="no-margin fw-600"><span class="text-primary">0.00000434 </span>BTC<span class="text-info">$0.04</span></p>
                </div>
                <div class="text-end">
                  <p class="no-margin fw-600"><span class="text-success">+1.35%</span></p>
                </div>
                </div> --}}
              </div>
            {{-- <div class="box-footer p-0 no-border">
              <div class="chart"><canvas id="chartjs1" class="h-80"></canvas></div>
            </div> --}}
           </div>
          </div>
     
          <div class="col-lg-3 col-md-6">
            <div class="box pull-up">
              <div class="box-body">
                <div class="media align-items-center p-0">
                <div class="text-center">
                  {{-- <a href="#"><i class="cc DASH me-5" title="DASH"></i></a> --}}
                </div>
                <div>
                  <h3 class="no-margin text-bold">EXCHANGE</h3>
                </div>
                </div>
                <div class="flexbox align-items-center mt-5">
                  {{-- <div>
                    <p class="no-margin fw-600"><span class="text-primary">0.00000434 </span>DASH<span class="text-info">$0.04</span></p>
                  </div> --}}
                  <div class="text-end">
                    <p class="no-margin fw-600"><span class="text-success"><h4>+1.35%</h4></span></p>
                  </div>
                </div>
            </div>
            {{-- <div class="box-footer p-0 no-border">
              <div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
            </div> --}}
           </div>
          </div>
         </div>		
		  	<div class="row">
          <div class="col-12">
            <div class="box">
              <div class="box-body">
                <h1 class="page-header text-center no-border fw-600 fs-60 mt-25"><span class="text-primary">Fund</span>  Account<br>  Without additional fees</h1>
                <h3 class="subtitle text-center">Deposit using @{{selectedMethod.payment_name}}</h3>
                <div class="row">
                  <div class="col-12">
                    <div class="exchange-calculator text-center mt-35" v-if="currentStep == 1">
                      <label>Amount in base currency:</label>
                      <input type="number" class="form-control" v-model="deposit.amount" placeholder="" >    <span>USD</span>            
                     
                    </div>
                    <div class="exchange-calculator text-center mt-35" v-if="currentStep == 2">
                      <h3>Amount in base currency: <span id="amount_display" style="color: lawngreen; font: bolder; font-size: 50px;">@{{deposit.amount}}</span> USD</h3>
                      
                      
                      <h5>Official <span id="wallet_type">Bitcoin</span> Wallet Address</h5>
                      <p style="overflow-wrap: break-word;"><h5> @{{selectedMethod.wallet_address}}</h5> </p> 
                      <span>
                          <div class="text-center mt-15 mb-25">
                            <button @click="CopyToClipboard()" class="btn btn-primary mx-auto">Copy Wallet</button>
                          </div>
                      </span>
                      <p>Note: Make sure that you have sent the required amount before clicking on the confirm deposit button.
                      </p>
                      {{-- <div class="form_exchange">
                        <div class="input_exchange" style="width: 100%;">
                          <input type="text" class="input-select" placeholder="Wallet" name="wallet_input" id="wallet_input">
                        </div>
                        <div class="crypto-select">
                          <span id="company_address" style="display: none;">
                          bc1qtutwz02enjmaau93vdqtln396tnzfkvqwgemh4
                          </span>
                          <button class="btn btn-primary w-100 mt-3" onclick="copyToClipboard('#company_address')">Copy Wallet</button>
                        </div>
                      </div> --}}
                    </div>
                    <div class="text-center mt-15 mb-25"  v-if="currentStep == 1">
                      <button class="btn btn-primary mx-auto" @click="nextStep()">FUND ACCOUNT</button>
                    </div>
                    <div class="text-center mt-15 mb-25"  v-if="currentStep == 2">
                      <button class="btn btn-primary mx-auto" @click="confirmPayment()">Confirm Deposit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
			  </div>
			
        
        <textarea style="display: none;" id="paymentMethod" cols="30" rows="10">{{ json_encode($paymentMethod) }}</textarea>
        <textarea style="display: none;" id="processFunding" cols="30" rows="10">{{ route('user.process.funding') }}</textarea>
        
		  </section>
      <!-- /.content -->
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  var blink = document.getElementById('blink');
  setInterval(function(){
    blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
    
  }, 1000);
</script> 
<script src="{{asset('assets/app/funding_account.js')}}"></script>

@endsection