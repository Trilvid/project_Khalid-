@extends('layouts.master')
@section('title')
    <title>Demo Account</title>
@endsection
@section('styles')

@endsection
@section('content') 
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content" id="content">			
        @csrf
          <div class="row">
              <div class="col-12">
                  <div class="box">
                    <div class="box-body tickers-block">
                      <div id="carouselTicker" class="carouselTicker">
                        <script type="text/javascript" src="https://widget.coinlore.com/widgets/ticker-widget.js"></script>
                        <div class="coinlore-priceticker-widget" data-mcurrency="usd" data-bcolor="#1f293d" data-scolor="#fff" data-ccolor="#fff" data-pcolor="#428bca">
                          <style>
                              .marqueecoinlore {
                                width: 100%;
                                margin: 0 auto;
                                overflow: hidden;
                                white-space: nowrap;
                                box-sizing: border-box;
                                animation: marquee 50s linear infinite;
                              }
                              .marqueecoinlore:hover {
                                animation-play-state: paused;
                              }
                              @keyframes marquee {
                                0% {
                                  text-indent: 27.5em;
                                }
                                100% {
                                  text-indent: -105em;
                                }
                              }
                            </style>
                        <div style="color: #333; background: #1f293d; box-shadow: 0 1px 3px 0 #ccc; font-family: Helvetica, Arial, sans-serif; min-width: 300px; width: 100%; line-height: 35px; font-size: 16px;">
                          <div class="marqueecoinlore">
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/bitcoin" title="Bitcoin BTC Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/bitcoin.png"
                              />
                              <span style="color: #fff;">Bitcoin</span> <span style="color: #fff;">(BTC)</span> <span style="color: #428bca;">16,826.23<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.00%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/ethereum" title="Ethereum ETH Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/ethereum.png"
                              />
                              <span style="color: #fff;">Ethereum</span> <span style="color: #fff;">(ETH)</span> <span style="color: #428bca;">1,248.37<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #c2220d !important;"> (-0.15%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/tether" title="Tether USDT Coin Price" target="_blank">
                              <img style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;" src="https://c1.coinlore.com/img/20x20/tether.png" />
                              <span style="color: #fff;">Tether</span> <span style="color: #fff;">(USDT)</span> <span style="color: #428bca;">1.00<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.30%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/usd-coin" title="USD Coin USDC Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/usd-coin.png"
                              />
                              <span style="color: #fff;">USD Coin</span> <span style="color: #fff;">(USDC)</span> <span style="color: #428bca;">1.00<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.03%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/binance-coin" title="Binance Coin BNB Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/binance-coin.png"
                              />
                              <span style="color: #fff;">Binance Coin</span> <span style="color: #fff;">(BNB)</span> <span style="color: #428bca;">256.29<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.32%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/binance-usd" title="Binance USD BUSD Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/binance-usd.png"
                              />
                              <span style="color: #fff;">Binance USD</span> <span style="color: #fff;">(BUSD)</span> <span style="color: #428bca;">1.00<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #c2220d !important;"> (-0.02%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/ripple" title="XRP XRP Coin Price" target="_blank">
                              <img style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;" src="https://c1.coinlore.com/img/20x20/ripple.png" />
                              <span style="color: #fff;">XRP</span> <span style="color: #fff;">(XRP)</span> <span style="color: #428bca;">0.341057<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #c2220d !important;"> (-1.79%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/dogecoin" title="Dogecoin DOGE Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/dogecoin.png"
                              />
                              <span style="color: #fff;">Dogecoin</span> <span style="color: #fff;">(DOGE)</span> <span style="color: #428bca;">0.072599<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.49%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/cardano" title="Cardano ADA Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/cardano.png"
                              />
                              <span style="color: #fff;">Cardano</span> <span style="color: #fff;">(ADA)</span> <span style="color: #428bca;">0.266408<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #8dc647 !important;"> (+0.29%) </span>
                            </a>
                            <a style="padding-left: 10px; padding-right: 10px;" href="https://www.coinlore.com/coin/litecoin" title="Litecoin LTC Coin Price" target="_blank">
                              <img
                                style="vertical-align: sub; border-style: none; padding: 2px; -webkit-box-align: center; -ms-flex-align: center; align-items: center; width: 20px; height: 20px;"
                                src="https://c1.coinlore.com/img/20x20/litecoin.png"
                              />
                              <span style="color: #fff;">Litecoin</span> <span style="color: #fff;">(LTC)</span> <span style="color: #428bca;">74.10<span style="font-size: 10px;">USD</span></span>
                              <span style="color: #c2220d !important;"> (-2.34%) </span>
                            </a>
                          </div>
                        </div>
                      </div>
                     </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                  <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Bitcoin Exchange ETH/BTC</h4>

                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide"  href="#"></a></li>	
                            <li><a class="box-btn-fullscreen" href="#"></a></li>
                        </ul>
                      </div>
                      <div class="box-body">
                        <div id="tradingview_337f2" style="height: 400px;"><div id="tradingview_cf4c7-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 100%;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;"><div style="width: 100%;height: 100%;background: transparent;padding: 0 !important;"><iframe id="tradingview_cf4c7" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_cf4c7&amp;symbol=FX%3AEURUSD&amp;interval=240&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=0&amp;toolbarbg=f1f3f6&amp;watchlist=FX%3AEURUSD&amp;studies=%5B%5D&amp;theme=dark&amp;style=0&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=moonpro.org&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD#%7B%22page-uri%22%3A%22moonpro.org%2Faccount%2Fdashboard%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
                        <!--TradingView Widget BEGIN -->

                     

                       <!-- TradingView Widget END -->
                                                       
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">ACTIVE BALANCE</h4>
                </div>
                <!-- /.box-header -->
                <div class="form">
                  <div class="box-body">
                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Balance $ 1000</h4>
                    <hr class="my-15">
                    <div class="row">
                      <div class="col-md-6">
    
                      <div class="form-group">
                        {{-- <label class="form-label">First Name</label> --}}
                        <select class="form-control"  @change="selectTradeType($event)" id="tradetype" name="trade_name">
                                        
                          <!--<option value="">Select</option>-->
                          <option value="FX">Forex</option>
                          <option value="BINANCE">Crypto</option>
                          <option value="GOOG">Stocks</option>
                        </select>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group" id="select_forex">
                          
                          <select class="form-control" @change="selectCommodityType($event)"  id="forex" v-if="trade.selectedType == 'FX' ">
                            <option value="USDCAD">USD/CAD</option>
                            <option value="EURUSD">EUR/USD</option>
                            <option value="USDCHF">USD/CHF</option>
                            <option value="GBPUSD">GBP/USD</option>
                            <option value="NZDUSD">NZD/USD</option>
                            <option value="AUDUSD">AUD/USD</option>
                            <option value="EURCAD">EUR/CAD</option>
                            <option value="EURAUD">EUR/AUD</option>
                            <option value="EURJPY">EUR/JPY</option>
                            <option value="GBPCHF">GBP/CHF</option>
                            <option value="GBPJPY">GBP/JPY</option>
                            <option value="CHFJPY">CHF/JPY</option>
                            <option value="AUDJPY">AUD/JPY</option>
                            <option value="AUDNZD">AUD/NZD</option>
                          </select>		


                          <select class="form-control"  @change="selectCommodityType($event)" id="stock" v-if="trade.selectedType == 'GOOG' ">
                            <option value="GOOGL">Google Inc.</option>
                            <option value="INTC">Intel Corporation</option>
                            <option value="KO">Coca-Cola Company (The)</option>
                            <option value="MSFT">Microsoft Corporation</option>
                            <option value="APPL">Apple Computer, Inc.</option>
                            <option value="EBAY">eBay Inc.</option>
                            <option value="DELL">Dell Inc..</option>
                            <option value="ORCL">Oracle Corporation</option>
                            <option value="DIS">Walt Disney Company (The)</option>
                            <option value="UL">Unilever PLC</option>
                            <option value="AMZN">Amazon.inc</option>
                            <option value="TSLA">TESLA INC</option>
                            <option value="NFLX">NETFLIX INC</option>
                          </select>


                          <select class="form-control"  @change="selectCommodityType($event)" id="crypto"  v-if="trade.selectedType == 'BINANCE' ">
                            <option value="ETHBTC">ETH/BTC</option>
                            <option value="DOGEBTC">DOGE/BTC</option>
                            <option value="BNBBTC">BNB/BTC</option>
                            <option value="BTTBTC">BTT/BTC</option>
                            <option value="XMRBTC">XMR/BTC</option>
                            <option value="XMRETH">XMR/ETH</option>
                            <option value="NEOBTC">NEO/BTC</option>
                            <option value="NEOETH">NEO/ETH</option>
                            <option value="ADABTC">ADA/BTC</option>
                            <option value="ADAETH">ADA/ETH</option>
                            <option value="mtvBTC">MTV/BTC</option>
                            <option value="MTCETH">MTC/ETH</option>
                            <option value="XRPBTC">XRP/BTC</option>
                            <option value="TRXBTC">TRX/BTC</option>
                            <option value="BCHBTC">BCH/BTC</option>
                            <option value="LTCBTC">LTC/BTC</option>
                            <option value="BNBETH">BNB/ETH</option>
                            <option value="DOGEETH">DOGE/ETH</option>
                            <option value="BNBETH">BNB/ETH</option>
                            <option value="BTTETH">BTT/ETH</option>
                            <option value="XRPETH">XRP/ETH</option>
                            <option value="TRXETH">TRX/ETH</option>
                            <option value="BCHETH">BCH/ETH</option>
                            <option value="LTCETH">LTC/ETH</option>
                          </select>		
                        </div>
                      </div>
                    
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" class="form-control" v-model="trade.amount" placeholder="Amount">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group" >
                          
                          <select class="form-control" aria-label="Default" name="time" id="time">
                            <option value="60">1min</option>
                            <option value="120">2min</option>
                            <option value="180">3min</option>
                            <option value="240">4min</option>
                            <option value="300">5min</option>
                            <option value="600">10min</option>
                            <option value="900">15min</option>
                            <option value="1800">30min</option>
                            <option value="3600">1 hour</option>
                          </select>
                          
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                    
                      <div class="col-md-6">
                        <div class="form-group">
                        <p>Select Percentage Return:</p>
                          <select class="form-control"  aria-label="Default" name="percentage" required="" id="percentage">
                                    
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                            <option value="30">30%</option>
                            <option value="40">40%</option>
                            <option value="50">50%</option>
                            <option value="60">60%</option>
                            <option value="70">70%</option>
                            <option value="80">80%</option>
                            <option value="90">90%</option>
                            <option value="100">100%</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <p>Select Strike Rate:</p>
                          <select class="form-control"  aria-label="Default" name="percentage" required="" id="percentage">
                                    
                            <option value="20">1% &amp; 3%</option>
                            <option value="30">2% &amp; 3%</option>
                            <option value="40">5% &amp; 5%</option>
                            <option value="50">2% &amp; 5%</option>
                            <option value="60">21% &amp; 49%</option>
                          </select>
                        </div>

                        <input type="hidden" value="" name="trading_choice" id="trading_choice">
												<input type="hidden" value="" name="profit" id="user_profit">
												<input type="hidden" value="forex" name="trade_fullname" id="trade_fullname">
                      </div>
                    </div>

             
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer text-end">
                    <button type="button" class="btn btn-warning me-1" @click=confirmTrade('sell')>
                      <i class="ti-trash"></i> Sell
                    </button>
                    <button type="submit" class="btn btn-primary" @click=confirmTrade('buy')>
                      <i class="ti-save-alt"></i> Buy
                    </button>
                  </div>  
                </div>
                </div>
                <!-- /.box -->			
            </div>
        

          </div>
          
          <textarea style="display: none;" id="processTrade" cols="30" rows="10">{{ route('user.process.trade') }}</textarea>

      </section>
      <!-- /.content -->
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/app/demo.js')}}"></script>

@endsection