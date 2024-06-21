<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethodModel;
use App\Models\DepositHistoryModel;
use App\Models\WithdrawalHistoryModel;
use App\Models\TradeHistoryModel;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $user = User::where('id', Auth::id())->first();

        $data = [
            'page' => 'playlist',
            'user' => $user,
        ];

        return view('app.dashboard',$data);
    }

    public function processTrade(Request $request){

        // dd($request->all());
        // TradeHistoryModel
        $userId = Auth::id();

        $deposit = new TradeHistoryModel;
        $deposit->user_id = $userId;
        $deposit->asset = $request->commodity;
        $deposit->stake_price =0;
        $deposit->type =$request->method;
        $deposit->amount = $request->amount;
        $deposit->status = 'Trading';
        $deposit->save();

        return response()->json([
            'status' => 'success',
            'message' => 'successfully',
            'url' => route('user.transaction_history'),
        ]);

    }

    public function demo()
    {
        return view('app.demo');
    }

    public function funding(){
        
        $paymentMethod = PaymentMethodModel::all();
        $data = [
            'page' => 'playlist',
            'paymentMethod' => $paymentMethod,
        ];
        return view('app.funding_account',$data);
    }
    
    public function processFunding(Request $request){

        // dd($request->all());
        $userId = Auth::id();

        $deposit = new DepositHistoryModel;
        $deposit->user_id = $userId;
        $deposit->method_id = $request->id;
        $deposit->amount = $request->amount;
        $deposit->status = 'Pending';
        $deposit->save();

        return response()->json([
            'status' => 'success',
            'message' => 'successfully',
            'url' => route('user.deposit_history'),
        ]);

    }

    public function withdrawal(){

        $paymentMethod = PaymentMethodModel::all();

        $data = [
            'page' => 'playlist',
            'paymentMethod' => $paymentMethod,
        ];

        return view('app.withdrawal',$data);
    }

    public function processWithdrawals(Request $request){

        //  dd($request->data['selectedMethod']['id']);
        $userId = Auth::id();

        $deposit = new WithdrawalHistoryModel;
        $deposit->user_id = $userId;
        $deposit->method_id = $request->data['selectedMethod']['id'];
        $deposit->amount = $request->data['amount'];
        $deposit->corresponding_wallet = $request->data['wallet_address'];
        $deposit->status = 'Pending';
        $deposit->save();

        return response()->json([
            'status' => 'success',
            'message' => 'successfully',
            'url' => route('user.withdrawal_history'),
        ]);

    }

    public function transaction_history(){
        
        $usersTrade = TradeHistoryModel::where('user_id', Auth::id())->get();

        $data = [
            'page' => 'playlist',
            'usersTrade' => $usersTrade,
        ];
        return view('app.transaction_history',$data);
    }

    public function demo_history(){
        return view('app.demo_history');
    }

    public function deposit_history(){

        $usersDeposit = DepositHistoryModel::where('user_id', Auth::id())->get();

        // return($usersDeposit);

        $data = [
            'usersDeposit' => $usersDeposit,
           
            'page' => 'list-users'
        ];
        return view('app.deposit_history',$data);
    }

    public function withdrawal_history(){
       
        $userWithdrawal = WithdrawalHistoryModel::where('user_id', Auth::id())->get();

        // dd($userWithdrawal);
        // withdrawal_history
        $data = [
            'userWithdrawal' => $userWithdrawal,
            'page' => 'list-users'
        ];

        return view('app.withdrawal_history',$data);
    } 

    public function profile(){
        return view('app.profile');
    } 

    
    
    
}
