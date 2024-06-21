@extends('layouts.front_master')
@section('title')
    <title>Education</title>
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
                <h1 class="text-white">education</h1>
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
                        <h2 class="text-uppercase">Knowledge is a wise investment.</h2>
                        <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                        <p><strong>By combining easy-to-understand information with actionable insights, Our company helps make the market seem less daunting and more approachable.</strong></p>
                      
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="wt-media">
                        <img src="{{asset('assets/front/images/gallery/pic3.jpg')}}" alt="" class="img-responsive"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <!-- TITLE  START -->
                    <div class="p-b30">
                        <h2 class="text-uppercase">FAQ</h2>
                        <div class="wt-separator-outer">
                           <div class="wt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE START -->
                    
                    <!-- ACCORDION START -->
                    <div class="wt-accordion acc-bg-gray" id="accordion5">
                    
                        <div class="panel wt-panel">
                            <div class="acod-head acc-actives">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
                                        Quick Start  
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseOne5" class="acod-body collapse in">
                                <div class="acod-content p-tb15">
                                    <h4>Sign Up</h4>

                                    <p>Fill out the registration form on the main page. Check your email and confirm your email address by clicking the link we've sent you.</p>
                                    
                                   <p> Registration is absolutely free. Fund your account when you're ready to make a real profit. Practice with our demo account before making a deposit.</p>
                                    
                                    <p>You're all set to trade once your account is registered. No documentation is needed. All it takes is to accept the Client Agreement in the registration form.</p>
                                    
                                    <h4>Demo Account</h4>
                                    
                                    <p>Make your first steps in professional trading easy and risk-free. Get full access to all the platform features with Moon Pro Trade Demo account. Once your account is set up, practice your trading skills and test your trading strategies with $10,000 on your Demo account. Feel free to switch between Real and Demo accounts in the terminal. On the Demo account you don't deal with the real money and won't be able to withdraw profit.</p>
                                    
                                    <p>If you ran out of demo funds, you can restore the initial balance any time.</p>
                                    
                                    <h4>Minimum deposit</h4>
                                    
                                    <p>For most payment methods, the minimum deposit requirement is 5 $ or the equivalent in your account currency. After making a deposit in this amount, you can safely start trading and making real profits. Please note that the minimum deposit amount may vary depending on the payment system you use. You can find detailed information about the minimum deposit for each payment systems found in the Cash Register section.</p>
                                    
                                   <h4>Learn to trade with transcendtrade  </h4> 
                                    
                                    <p>Build your trading confidence and knowledge with the Education section. Our free materials will help you trade smart and find out more about key strategies and assets offered by Moon Pro Trade.</p>
                                    
                                    <p>We provide one-on-one training classes with our best traders. Contact us to learn more.</p>
                                    
                                    <h5>Account Restrictions</h5>
                                    
                                    <p>Transcendtrade  Trade is only available for persons who have come of legal age.</p>
                                    
                                    <h4>Transcendtrade  Trade for mobile devices</h4>
                                    
                                    <p>Access Moon Pro Trade from any device using a mobile browser or install the Android app on your phone.</p>
                                    
                                    <h4>Still have questions? Get in touch with us</h4>
                                    
                                    <p>Get help from our online customer support chat or email us at support@transcendtrade.org to request a callback. We'll contact you within an hour (during customer support operating hours).</p>
                              
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5">
                                        Trading Basis
                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseTwo5" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>Trade</h4>
                                    <p>Trade is a financial instrument that provides a fixed payout if the prediction of the asset price at the expiry time is correct. Place trades based on whether you believe the price of the asset will be higher or lower than the initial. All you need to do is to choose an asset and predict its price dynamics for a selected period. If the trade is successful, you earn the fixed payout (in-the-money). If at the end of the trade the asset price remains at the same level, your investment is credited back to your account with no profit. If the asset's dynamics were predicted incorrectly, you lose the amount of your investment (out-of-the-money), yet without risking all of your capital.</p>
                                    <h4>Expiry time</h4>
                                    <p>Expiry time determines the moment when the trade is over and you find out if you made a profit.</p>
                                    <p>Moon Pro Trade offers two types of trades: short-term trades with an expiration time of no more than 5 minutes and trades that last from 5 minutes to 3 months.</p>
                                    <h4>Expiry rate</h4>
                                    <p>The expiry rate is the value of the financial asset at the moment of trade expiration. It may be lower, higher or equal to the opening price. The compliance between the expiry rate and the trader's prediction defines the profit.</p>
                                    <h4>Call and Put</h4>
                                    <p>When you predict a Put or High option, you assume that the value of the asset compared to the opening price will fall. A Call or Low option means that you suppose the value of an asset will rise.</p>
                                    <h4>Quote</h4>
                                    <p>Quote relates to the price of an asset at a particular moment. For you as a trader quotes at the trade start (opening price) and end (expiry rate) are particularly important.</p>
                                    <p>Moon Pro Trade quotes are provided by Leverate, a company with a sound reputation of the market leader.</p>
                                    <h4>Opening price</h4>
                                    <p>The asset price at the moment of trade opening.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h3 class="acod-title">
                                <a data-toggle="collapse"  href="#collapseThree5" class="collapsed"  data-parent="#accordion5">
                                    Account
                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                </a>
                             </h3>
                            </div>
                            <div id="collapseThree5" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>Your account currency</h4>
                                    <p>Upon registration, you will be prompted to select the currency of your future account from common currencies from around the world and some cryptocurrencies. Please note that you can't change the account currency after you finish registration.</p>
                                    <h4>Funding and withdrawal methods</h4>
                                    <p>Moon Pro Trade customers can make deposits and withdraw funds using Visa, Mastercard and MIR bank cards, FKWallet, Yandex.Money, WebMoney, Piastrix e-wallet systems, and the cryptocurrencies Bitcoin, Ethereum, Litecoin and Ripple. Available withdrawal methods may vary depending on the region you're trading from.</p>
                                    <h4>Minimum deposit</h4>
                                    <p>The maximum amount you can deposit in a single transaction is 10 000 $ or the equivalent amount in the account currency. There is no limit to the number of deposit transactions you can make.</p>
                                    <h4>When will my money reach my Moon Pro Trade account?</h4>
                                    <p>Your deposit is reflected in your account as soon as you confirm the payment. The money on the bank account is reserved, and then immediately displayed on the platform and in your Moon Pro Trade account.</p>
                                    <h4>My payment was declined. What should I do?</h4>
                                    <p>Various factors could result in this issue. Please email us at support@transcendtrade.org or contact our Customer support team via online chat with as many details as you can about the issue. We'll try to resolve it as soon as we can.</p>
                                    <h4>Account types</h4>
                                    <p>Your account type is determined by the total of deposits and the real trading volume. Upgrade your account by topping up and being active on the platform. We don't charge fees for keeping your account type. It stays with you for unlimited time.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseFour5" data-parent="#accordion5" >
                                        Withdrawals
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseFour5" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>Minimum withdrawal amount</h4>
                                    <p>For most payment methods, the minimum withdrawal amount is 5 $ or the equivalent in the your account currency. Please note that the minimum withdrawal amount may vary depending on the payment system you use.</p>
                                    <h4>Maximum withdrawal amount</h4>
                                    <p>For most payment methods, the maximum withdraw amount is 250 $ or the equivalent in the currency of your account. Please note that the maximum withdrawal amount may vary depending on the payment system you use. Detailed information on each payment system's restrictions can be found in the Cash Register section. Restrictions are set to allow getting funds as quickly as possible.</p>
                                    <h4>No deposit and withdrawal fees</h4>
                                    <p>More than this. We cover your payment system fees when you top up your account or withdraw funds.</p>
                                    <p>However, if your trading volume (the sum of all your trades) isn't at least twice as big as your deposit, we may not cover the 10% fee of the requested withdrawal amount.</p>
                                    <h4>Processing time for a withdrawal request</h4>
                                    <p>We strive to reduce the processing period to the shortest possible time. The waiting time depends on your account type, information about which you can find at the link.Please note that the application is considered only during the working hours of the platform's financial department. Working hours of the finance department: 09:00–22:00 (GMT+3) from Monday to Friday. In a limited mode, we process some applications on weekends. If the application was submitted outside the working hours of the finance department, it will be processed at the beginning of the next working day.</p>
                                    <h4>A withdrawal policy</h4>
                                    <p>transcendtrade Trade cares about your security. That's why verification is mandatory for submitting a withdrawal request. It is a guarantee that your funds won't become fraud or money laundering target.</p>
                                    <p>We transfer money only to the bank accounts that were previously used to fund your Moon Pro Trade account. In the event that the original funding account is no longer available or you topped up your account with several payment methods, please, contact our Customer support team via online chat or email us at support@transcendtrade.org with a detailed description of the issue.</p>
                                    <h4>How to get verified</h4>
                                    <p>Verification is mandatory for withdrawals. You must verify your Id and the payment methods you use to deposit funds to your account.</p>
                                    <p>First, make sure all the personal data fields in your profile are filled out. Then go to the Verification section and follow the instructions. Please don't conceal or touch up parts of the scans or photos except for those mentioned in the instructions.</p>
                                    <p>The use of third-party payment details is prohibited. Withdrawals cannot be made to unverified payment methods.</p>
                                    <p>If you have questions about verification, give us a call, chat online with us, or send us an email. We'll be happy to help!</p>
                                    <h4>I can't submit a withdrawal reques</h4>
                                    <p>Check if you completed all the fields in your profile. To check, go to Profile settings. If the entered data is incorrect or incomplete, the request may be rejected or processing delayed. Make sure you've entered your account information or wallet number correctly (the symbols +, *, /, () and spaces before, after and in the middle are prohibited).</p>
                                    <p>If all the information is entered correctly but the problem still persists, contact our Support team via the online chat or message the online chat with a description of the issue.</p>
                                    <h4>My withdrawal request is approved, but I haven't received the money yet</h4>
                                    <p>Transfers take different amounts of time depending on your payment method.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseFive5" class="collapsed" data-parent="#accordion5">
                                        Bonuses 
                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseFive5" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <p>Bonuses are funds you receive in addition to your deposit to increase your trading potential. The bonus amount depends on your deposit amount and account status. Bonuses are credited to a separate bonus account.</p>
                                    <p>We offer the following types of bonuses:</p>
                                    <p>a welcome bonus for new clients for making their first deposit bonuses for participating in company promos risk-free trades and deposit insurance (more detailed information about these bonus types available below) prize bonuses received from free Moon Pro Trade tournaments (the prize fund is distributed among participants depending on place taken) The conditions for receiving a bonus and its size are individual in each case. The company has the right to revoke issued bonuses if you violate any provisions of the Client Agreement.</p>
                                    <p>If multiple deposits were made due to payment system restrictions, contact Support to receive a bonus for the total deposit amount.</p>
                                    <p>You can decline a bonus when making a deposit.</p>
                                    <p>Risk-free trades</p>
                                    <p>Trades you can open without risking losing your deposit. Regardless of the trade’s outcome, funds will not be deducted from your balance. Risk-free trades are credited when you deposit funds using special promo codes and promotions. The number, size, and type of trades (i.e., in your real or bonus account) are indicated in the description of the promotion or promo code. You can use a risk-free trade whenever you want, but they will be voided if you withdraw funds.</p>
                                    <p>Your available risk-free trades are displayed on the right side of the platform above the green Call button. In the Moon Pro Trade app, they’re located in the field where you enter the investment amount.</p>
                                    <p>There are 2 types of risk-free trades:</p>
                                    <p><b>Real</b>risk-free trades credit any profit to your real account. When you deposit funds to your account using a promotion or a promotional code, the total amount of real risk-free trades (indicated in the description) is moved from your real account to bonus funds. These bonus funds are what’s used when activating a risk-free trade. The full profit from a successful trade is credited to your real account. Those funds can be withdrawn without any issues. If the trade results in a loss, the entire amount remains in your bonus account and doesn’t reflect the loss. The terms and conditions for processing bonus funds from risk-free trades are similar to the terms and conditions for regular bonuses.</p>
                                    <p>For example, you deposit $100 to your account and receive three $10 risk-free trades. That means $30 is reserved from your real account balance and credited to your bonus account. You can use this $30 to open three risk-free trades in a row with possible losses compensated by the platform. All profit from a successful trade will be credited to your real account. Moon Pro Trade will compensate potential losses, though the amount cannot exceed the deposit amount (in this case, $100)</p>
                                    <p><b>Bonus</b> risk-free trades credit any profit to your bonus account. When bonus risk-free trades are credited to an account using a promo code or a promotion, nothing is reserved from your real account. The profit from a successful bonus risk-free trade is credited to your bonus account. An unsuccessful trade will not result in a loss to your deposit. Instead, the entire amount invested in the bonus risk-free trade will remain in your real account.</p>
                                    <p>Please note that activating bonus risk-free trades will affect the amount of turnover required to withdraw bonus funds regardless of the trade’s outcome. You’ll need to hit a trading volume 40 times higher to withdraw the bonus funds received from risk-free trades. The bonus itself cannot be withdrawn immediately after being credited.</p>
                                    <p>For example, you deposit $100 to your account and receive three $10 bonus risk-free trades. You’ll see $100 in real funds in your account. Of that amount, $30 can be used to conduct risk-free trades. All profit, including investments, will go to the bonus account. An unsuccessful trade will not result in a loss to your deposit. Instead, the entire amount invested in the bonus risk-free trade will remain in your real account. However, you’ll need to hit a trading volume 40 times higher to withdraw funds: $30 × 40 = $1,200.</p>
                                    <h4>Deposit insurance</h4>
                                    <p>Deposit insurance is a type of bonuses offered by Moon Pro Trade. We'll cover possible losses for a specific number of your trades. Deposit insurance rules: only the first consecutive trades are insured; the investment in one trade cannot exceed 33% of the total deposit; the amount of compensation from the platform cannot exceed the deposit amount. For instance, a trader received five insured trades, and after they were closed the account balance was less than before the trades. According to the rules, the platform compensates the difference. In this event the funds credited as compensation are considered bonus funds and the rules applied to them are similar to the ones for the regular bonuses.</p>
                                    <p>If the terms and conditions on which the insurance is provided are met, contact the Customer support team to receive your compensation.</p>
                                    <h4>Bonus withdrawal</h4>
                                    <p>Bonus funds, including money earned with bonus funds and in free tournaments, are available for withdrawal only after the necessary trading turnover has been reached. The bonus itself cannot be withdrawn immediately after it has been issued.</p>
                                </div>
                            </div>
                        </div>

                          
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseSix6" class="collapsed" data-parent="#accordion5">
                                        Trades, assets and quotes
                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseSix6" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>Maximum trade amount</h4>
                                    <p>10 000 $ or an equivalent amount in your account currency. Depending on the account type, up to 20 trades in the maximum amount can be opened simultaneously. More information about account types and their features can be found here.</p>
                                    <h4>Minimum trade amount</h4>
                                    <p>The trade amount can't be less than 1 $ or the equivalent amount in your account currency. How do I make a trade?</p>
                                    <p>Select an asset, expiration time and investment amount. Then decide on the price dynamics. If you expect the value of the asset to increase, click the green Call button. To bet on the price decrease, click the red Put button.</p>
                                    <p>Please note that on Moon Pro Trade systematic use of the Martingale strategy (doubling up trade size) is strictly prohibited. Violations of this rule may result in the trades deemed as invalid and your account blocked.</p>
                                    <p>Trade history</p>
                                    <p>Review your trades in the History section. Access it either from the left menu of the terminal or the dropdown menu in the upper right corner by clicking on the user profile and selecting the Trading history section.</p>
                                    <p>Rate of profit</p>
                                    <p>Up to 90% on Moon Pro Trade. Represents the percentage of investment that the trader gets after a trade expires in-the-money.</p>
                                    <p>How can I monitor my active trades?</p>
                                    <p>Trade progress is displayed in the asset chart and the History section (in the left menu). The platform allows you to work with 4 charts at once.</p>
                                    <p>At what time trading is available on Moon Pro Trade platform? Trading on all assets is possible from Monday to Friday. You can trade only cryptocurrency, LATAM and GSMI indices, as well as OTC assets on weekends.</p>
                                    <p>Trading hours for various assets</p>
                                    <p>Find trading hours for every Moon Pro Trade asset in the Asset catalogue section.</p>
                                    <p>Trade results dispute</p>
                                    <p>Full trade details are stored in the Moon Pro Trade system. Asset type, opening and closing price, trade opening and expiry time (accurate to one second) are recorded for every opened trade.</p>
                                    <p>In the event of any doubts about the accuracy of quotes, contact Moon Pro Trade Customer support team with a request to investigate the case and compare quotes with their supplier. The request processing takes at least three business days.</p>
                                    <p>Why Moon Pro Trade quotes are different from those on FOREX and other sources?</p>
                                    <p>Possible reasons include:</p>
                                    <p>quotes from different sources may vary slightly;</p>
                                    <p>FOREX quotes are displayed as Bid (demand price) and Ask (offer price); Binarium displays the average quote, which is calculated as (Bid+Ask)÷2;</p>
                                    <p>a minor difference in the time when quotes are received may cause them to differ in the 4th-5th decimal places.</p>
                                    <p>When registering, you accept that Binarium quotes have priority. They may not coincide with quotations from other resources. Third-party resources can only be considered as auxiliary tools and cannot be used to verify quotes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseSeven7" class="collapsed" data-parent="#accordion5">
                                        Tournaments
                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseSeven7" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>Where are tournaments located on the platform?</h4>
                                    <p>The Tournaments section is located in the menu on the left. It shows the list of available tournaments, which are divided by type as follows:</p>
                                    <p>Current - these are tournaments that have already started and are available for participation. Future - these are tournaments planned for the near future. You can pay the participation fee right now, but the tournament account will only appear when the tournament starts. Archive - these are tournaments that have ended. You can see winners, their results, and prizes. How do tournament types differ?</p>
                                    <p>Moon Pro Trade holds two both free and paid tournaments.</p>
                                    <p>Free tournaments are one-day tournaments held every week on Mondays, Wednesdays, and Fridays. Simply register to participate. The prize fund is $1,500. Prizes are credited as a no deposit bonus which needs to be processed to be withdrawn. Please pay attention that the no deposit bonus rules apply to the prize funds you receive for participating and winning a free tournament.</p>
                                    <p>Paid tournaments are tournaments that require a small tournament fee ($5–$15) to enter. Prizes are credited as real money that must also be processed to be withdrawn (х2). The company reserves the right to not pay a prize if there is no trading volume on the real account. Paid tournaments vary in duration from daily to monthly. The tournament duration is specified in the tournament's terms and conditions available on Moon Pro Trade.</p>
                                    <h4>The tournament currency is US dollars. My account is in another currency. What should I do?</h4>
                                    <p>The participation fee will be debited in your account currency in the equivalent according to the dollar exchange rate at the time of the transaction. Prize funds will be credited to your account in your account currency in the same manner.</p>
                                    <p>Can I opt out of the tournament after I've paid the tournament fee?</p>
                                    <p>Unfortunately, you can't opt out of the tournament, and your fee can't be refunded.</p>
                                    <p>How do I switch to the tournament account and trade as part of the tournament?</p>
                                    <p>You can switch to the tournament account by clicking your balance in the top right corner of the platform. The tournament account is only visible for registered users alongside their real and demo accounts once the tournament starts. In the drop-down menu, select the desired tournament account, open trades, and increase your balance amount to win.</p>
                                    <p>Can I use my real account during the tournament?</p>
                                    <p>Yes, you can trade from any available account (demo, real, tournament) at any moment. To switch between accounts, click your balance in the top right corner of the platform and select the desired account in the drop-down menu.</p>
                                    <p>Why can't I find my name on the tournament list?</p>
                                    <p>Your name will be displayed on the tournament list only after you've opened at least 10 trades from your tournament account.</p>
                                    <p>What should I do if my entire tournament balance is spent? Additional purchases.</p>
                                    <p>You can continue to participate in the tournament after making an additional purchase. An additional purchase is the procedure for restoring your starting tournament balance. The cost of the additional purchase is specified in the tournament rules and is usually the same as the tournament fee. The additional purchase should not be confused with depositing funds to your tournament balance. If the tournament account balance is $999 and the starting balance is $1,000, you'll have $1,000 on your account after making an additional purchase. It makes sense to make an additional purchase when the starting balance is spent. You can make an unlimited number of additional purchases.</p>
                                    <p>How is the tournament winner selected?</p>
                                    <p>The trader with the most funds in their tournament account at the end of the tournament wins. Prize-winning traders receive real funds or bonuses, depending on the type of tournament.</p>
                                    <p>How do I withdraw the tournament prize?</p>
                                    <p>Winners of paid tournament receive real funds as prizes that need to be processed for withdrawal (x2). Moon Pro Trade reserves the right to not approve the withdrawal request if there is no trading volume on the real account. In free tournaments, the prize is credited to the winner's bonus account, and the same conditions apply to its withdrawal as for a no deposit bonus.</p>
                                    <p>Can I withdraw funds from my tournament account?</p>
                                    <p>The funds in the tournament account are virtual and can't be withdrawn.</p>
                                    <p>Can I participate in several tournaments?</p>
                                    <p>Sure! A separate tournament account is displayed in the platform for every tournament you participate in. To switch between accounts, click the balance in the top right corner of the platform.</p>
                                    <p>What are tournament deductions?</p>
                                    <p>Deductions reflect the percentage of participants' contributions that will be added to the tournament prize fund. This means that the prize fund can increase; the more participants there are, the bigger the prizes will be. Deductions are added to the prize fund after participation fees fully cover it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                 <h3 class="acod-title">
                                    <a data-toggle="collapse" href="#collapseEight8" class="collapsed" data-parent="#accordion5">
                                        Tradeback
                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                 </h3>
                            </div>
                            <div id="collapseEight8" class="acod-body collapse">
                                <div class="acod-content p-tb15">
                                    <h4>What is tradeback?</h4>
                                    <p>Tradeback is partial compensation for losses experienced on the real account in the previous week. Tradeback is only credited to your account if the week was unprofitable, meaning that the amount of unprofitable trades opened from the real account for the last week is higher than profitable ones. The tradeback's amount and format (bonus or real funds) are determined by your account type. Read more about this in the Account types section.</p>
                                    <h4>When is tradeback credited?</h4>
                                    <p>If applicable, tradeback is credited every Tuesday at 00:00 GMT+0.</p>
                                    <p>How can I withdraw tradeback?</p>
                                    <p>The procedure for withdrawing tradeback is similar to that of a regular bonus. It's easier to withdraw tradeback accrued to the bonus account. You can do so after achieving x20 trading volume (x40 for a bonus).</p>
                                    <p>VIP account holders have a perk when withdrawing tradeback as they receive it as real funds that don't need to be processed and can be withdrawn immediately.</p>
                                    <p>How is tradeback calculated?</p>
                                    <p>Tradeback is accrued only for the loss of the real funds. Losses of the bonus funds aren't considered when tradeback is calculated. If both bonus and real funds were used for trade, only real funds would be considered as a loss for the tradeback calculations.</p>
                                    <p>Tradeback is calculated by the platform according to the following formula: The last week's loss multiplied by the tradeback percentage corresponding to the account type. The higher the account status, the higher the payout percentage.</p>
                                    <p>Say, the loss of the Business account holder (10% deduction) during the last week was $1,000. The tradeback is: $1,000×10%=$100.</p>
                                    <p>How can I disable tradeback?</p>
                                    <p>You can disable tradeback in your personal account under the Tradeback options section. You can enable the service at any time. You can't receive payouts for the period in which tradeback was disabled.</p>
                                    <p>I didn't receive tradeback. Why is that?</p>
                                    <p>There may be several reasons for it:</p>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <!-- ACCORDION END -->  
                </div>                                      
                <div class="col-md-3 col-sm-3 p-tb15">
                    <!-- BROCHURES -->
                    <div class="wt-box m-b30">
                        <div class="text-left m-b20">
                                 <h4>Brochures</h4>
                                 <div class="wt-separator-outer">
                                     <div class="wt-separator bg-primary"></div>
                                </div>
                             </div>
                        <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                            <a href="#" class="btn-block">
                                <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                <strong class="text-uppercase text-black">Download .PDF</strong>
                            </a>
                        </div>
                        <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                            <a href="#" class="btn-block">
                                <span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
                                <strong class="text-uppercase text-black"> Download .DOC</strong>
                            </a>
                        </div>
                        <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                            <a href="#" class="btn-block">
                                <span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
                                <strong class="text-uppercase text-black">Download .PPT</strong>
                            </a>
                        </div>
                    </div>
                                                 
                    <!-- CONTACT US -->
                    <div class="widget bg-white  widget_getintuch">
                        <h4 class="widget-title">Contact us</h4>
                        <ul>
                          <li><i class="fa fa-map-marker"></i><strong>Address</strong> Street No:4 , Robert villsan road  </li>
                          <li><i class="fa fa-fax"></i><strong>FAX</strong>(082) 634-3456</li>
                          <li><i class="fa fa-phone"></i><strong>phone</strong>0800-987654 (help 24/7 )</li>
                          <li><i class="fa fa-envelope"></i><strong>email</strong>support@transcendtrade.org</li>
                        </ul>
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