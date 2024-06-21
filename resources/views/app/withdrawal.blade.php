@extends('layouts.master')
@section('title')
    <title>Withdrawal</title>
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
            <h4 class="page-title">WITHDRAWAL </h4>
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
                  <a href="#"><i class="cc DASH me-5" title="DASH"></i></a>
                </div>
                <div>
                  <h3 class="no-margin text-bold">Balance</h3>
                </div>
                </div>
                <div class="flexbox align-items-center mt-5">
                
                <div class="text-end">
                  <p class="no-margin fw-600"><span class="text-success">+1.35%</span></p>
                </div>
                </div>
            </div>
           
           </div>
          </div>
         </div>		
		  	<div class="row">
          <div class="col-12">
            <div class="box">
              <div class="box-body">
                {{-- <h1 class="page-header text-center no-border fw-600 fs-60 mt-25"><span class="text-primary">Bitcoin </span> is the recommended withdrawal<span class="text-danger"> method </span> It provides fastest withdrawal <br> with 0 commission</h1> --}}
                <h3 class="subtitle text-center">To request for withdrawal to bitcoin, <br> please confirm you have bitcoin account or create it.</h3>
                <div class="row">
                  <div class="col-12">
                    <div class="exchange-calculator text-center mt-35">
                      <label>Amount in base currency:</label>
                      <input type="number" class="form-control" name="coins-exchange" v-model="withdraw.amount" >                
                  
                      <br> <br> <br>
                      <label>Enter corresponding wallet:</label>
                      <input type="text" class="form-control" name="money-exchange" v-model="withdraw.wallet_address" >                
                     
                    </div>
                    <div class="text-center mt-15 mb-25">
                      <a href="#" class="btn btn-primary mx-auto" @click="nextStep()">Withdraw</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
			  </div>

        <textarea style="display: none;" id="paymentMethod" cols="30" rows="10">{{ json_encode($paymentMethod) }}</textarea>
        <textarea style="display: none;" id="processWithdrawal" cols="30" rows="10">{{ route('user.process.withdrawals') }}</textarea>

        
		  </section>
      <!-- /.content -->
    </div>
</div>
@endsection
{{-- <script type="text/javascript">
										
  function tradeConfirmation(type) {
    var tradetype, commodity, trading_choice, trade_name, trade_fullname;
    
    /*var paymentM = document.getElementById("paymentWith");

    var message_amount = "$"+ document.getElementById('amount').value;
    var message = "do you want to withdraw " + message_amount + " worth of " + paymentM + " to ";*/
    
    //trade_name = document.getElementById("trade_name");
    //trade_name.options[trade_name.selectedIndex].text;
    
    /*var sel = document.getElementById("trade_name");
    var trade_fullname = sel.options[sel.selectedIndex].text;*/
    
    document.getElementById("trading_choice").value = type;
    
    //document.getElementById("trade_fullname").value = trade_fullname;
    
    tradetype = document.getElementById("tradetype").value;
                          
    if(tradetype == "FX"){
      commodity = document.getElementById("forex").value;
    } else if(tradetype == "BINANCE"){
      commodity = document.getElementById("crypto").value;
    } else if(tradetype == "GOOG"){
      commodity = document.getElementById("stocks").value;
    }
    document.getElementById("commodity_asset").value = commodity;
                          
    var title = "Place a "+ type +" Trade on " + commodity;
    var message = "You won't be able to revert this!";

    /*swal({ title: title,
    text: message,
    dangerMode: true,
    buttons: true,
    showCancelButton: true,
    type: "success"}).then(okay => {
      if (okay) {
        //window.location.href = "URL";
        document.myform.submit();
      }
    });*/
    
    Swal.fire({
    title: title,
    text: message,
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Buy`,
    denyButtonText: `Sell`,
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire('Buy Processing', '', 'success');
        document.myform.submit();
      } else if (result.isDenied) {
        Swal.fire('Sell Processing', '', 'info');
        document.myform.submit();
      }
    });
  }
                      
  function trading_option(type) {
    var amount, text, percentage, profit;
    //Getting the value of the input field with id="edu"
    amount = document.getElementById("amount").value;
    // If x is less than 0, input is invalid
    //otherwise input is valid
    if (isNaN(amount) || amount < 0 || amount == null || amount == "" ) {
      text = "Please Input a Valid amount";
      //alert(text);
      Swal.fire({
      title: 'Trade Denied',
      text: text,
      showDenyButton: false,
      showCancelButton: true,
      showConfirmButton: false,
      confirmButtonText: `Buy`,
      denyButtonText: `Sell`,
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire('Buy Processing', '', 'success');
          document.myform.submit();
        } else if (result.isDenied) {
          Swal.fire('Sell Processing', '', 'info');
          document.myform.submit();
        }
      });
    } else {
      text = "A valid Input";
      //alert(x);
      //document.myform.submit();
      tradeConfirmation(type);
    }
    //document.getElementById("eduform").innerHTML = text;
    /*document.getElementById("tradetype").value;
    document.getElementById("forex").value;
    document.getElementById("crypto").value;
    document.getElementById("stock").value;
    document.getElementById("time").value;
    //document.getElementById("percentage").value;*/
    percentage = document.getElementById("percentage").value;
    profit = (percentage/100 * amount);
    document.getElementById("user_profit").value = profit;
    //alert(profit);
  }
  
  document.getElementById("percentage").onchange = function(){
      //alert(document.getElementById("percentage").value);
    calculate_percent();
  }
  
  function calculate_percent() {
    var amount, text, percentage, profit;
    //Getting the value of the input field with id="edu"
    amount = document.getElementById("amount").value;
    
    //document.getElementById("eduform").innerHTML = text;
    /*document.getElementById("tradetype").value;
    document.getElementById("forex").value;
    document.getElementById("crypto").value;
    document.getElementById("stock").value;
    document.getElementById("time").value;
    //document.getElementById("percentage").value;*/
    percentage = document.getElementById("percentage").value;
    profit = ((percentage / 100) * amount);
    //alert(profit);
    document.getElementById("profit").innerHTML = profit;
  }
</script>


<script type="text/javascript">
	
	//document.getElementById("select_forex").style.display = "none";
	document.getElementById("select_crypto").style.display = "none";
	document.getElementById("select_stock").style.display = "none";/**/
	
</script>
<script type="text/javascript">
	
	/*document.getElementById("tradetype").onchange = function(){
    	//alert(document.getElementById("tradetype").value);
		var type = document.getElementById("tradetype").value;
		if(type == "FX"){
			document.getElementById("select_forex").style.display = "block";
			document.getElementById("select_crypto").style.display = "none";
			document.getElementById("select_stock").style.display = "none";
		} else 
		
		if(type == "BINANCE"){
			loadtrade(sel.value, "ETHBTC");
			document.getElementById("select_forex").style.display = "none";
			document.getElementById("select_crypto").style.display = "block";
			document.getElementById("select_stock").style.display = "none";
			alert(sel.value);
		} else 
		
		if(type == "AMEX"){
			document.getElementById("select_forex").style.display = "none";
			document.getElementById("select_crypto").style.display = "none";
			document.getElementById("select_stock").style.display = "block";
			loadtrade(sel.value, "EURUSD");
			alert(sel.value);
		}
	};*/
	
	function getTypeVal(sel){
    	// alert(sel.value);
		
		var trade_fullname = sel.options[sel.selectedIndex].text;
		document.getElementById("trade_fullname").value = trade_fullname;
		
		var type = sel.value;
		if(type == "FX"){
			document.getElementById("select_forex").style.display = "block";
			document.getElementById("select_crypto").style.display = "none";
			document.getElementById("select_stock").style.display = "none";/**/
			loadtrade(sel.value, "EURUSD");
			//alert(sel.value);
		} else
		
		if(type == "BINANCE"){
			document.getElementById("select_forex").style.display = "none";
			document.getElementById("select_crypto").style.display = "block";
			document.getElementById("select_stock").style.display = "none";/**/
			loadtrade(sel.value, "ETHBTC");
			//alert(sel.value);
		} else
		
		if(type == "GOOG"){
			document.getElementById("select_forex").style.display = "none";
			document.getElementById("select_crypto").style.display = "none";
			document.getElementById("select_stock").style.display = "block";/**/
			loadtrade(sel.value, "GOOGL");
			//alert(sel.value);
		}
				
	}
	
	function getCommodityVal(sel){
    	//alert(sel.value);
		
		loadtrade("", sel.value);
	}
	
	function loadtrade(type, commodity){
		if(type == "GOOG"){
			var type = "";
		} else {
			var type = type;
		}
		
		new TradingView.widget({
			"autosize": true,
			"symbol": ""+type+":"+commodity+"",
			"interval": "D",
			"timezone": "Etc/UTC",
			"theme": "light",
			"style": "1",
			"locale": "en",
			"toolbar_bg": "#f1f3f6",
			"enable_publishing": false,
			"allow_symbol_change": true,
			"container_id": "tradingview_337f2"
		});
	}
</script>
												
												
<script type="text/javascript">
	
new TradingView.widget({
	"autosize": true,
	/*"width": 375,
  	"height": 500,*/
	"symbol": "FX:EURUSD",
	"interval": "240",
	"timezone": "Etc/UTC",
	"theme": "dark",
	"style": "0",
	"locale": "en",
	"toolbar_bg": "#f1f3f6",
	"enable_publishing": false,
	"withdateranges": true,
	"hide_side_toolbar": false,
	"allow_symbol_change": true,
	"save_image": false,
	"watchlist": [
	"FX:EURUSD"
	],
	"container_id": "tradingview_337f2"
	
	
});/**/
</script> --}}
	
@section('scripts')
<script src="{{asset('assets/app/withdraw.js')}}"></script>
@endsection