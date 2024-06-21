<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\PaymentMethodModel;
use App\Models\DepositHistoryModel;
use App\Models\WithdrawalHistoryModel;
use App\Models\TradeHistoryModel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        
        $allUser = User::all();
        $data = [
            'page' => 'playlist',
            'allUser' => $allUser,
        ];
        // dd($allUser);
        return view('admin.index',$data);
    }

    public function allPaymentMethod(){
        
        $allpaymentmethods = PaymentMethodModel::all();
        $data = [
            'page' => 'playlist',
            'allpaymentmethods' => $allpaymentmethods,
        ];
        // dd($allpaymentmethods);
        return view('admin.all_payment_method',$data);
    }

    public function editPaymentMethod(Request $request){
        // dd($request->all());

        $affectedRows = PaymentMethodModel::where("id", $request->id)->update(["payment_name" => $request->payment_name,"wallet_address" => $request->wallet_address]);

        return response()->json([
            'status' => 'success',
            'message' => 'successfully',
    
        ]);

    }


    public function processFunds(Request $request){
        // dd($request->all());

        $previousAmount = User::where("id", $request->id)->first();
        
        $amount = 0;
        if ($previousAmount) {
            $amount =  $previousAmount->wallet_balance;
        }
        $newAmount = $amount + $request->amount;
        $affectedRows = User::where("id", $request->id)->update(["wallet_balance" =>  $newAmount]);

        return response()->json([
            'status' => 'success',
            'message' => 'successfully',
    
        ]);
    }

    public function allDeposit(){

        $allDeposit = DepositHistoryModel::all();

        $data = [
            'page' => 'playlist',
            'allDeposit' => $allDeposit,
        ];

        return view('admin.all_deposit',$data);
    }

    public function allWithdrawal(){

        $allWithdrawal = WithdrawalHistoryModel::all();

        $data = [
            'page' => 'playlist',
            'allWithdrawal' => $allWithdrawal,
        ];

        return view('admin.all_withdrawal',$data);
    }
    public function allTrading(){

        $allTrading = TradeHistoryModel::all();

        $data = [
            'page' => 'playlist',
            'allTrading' => $allTrading,
        ];

        return view('admin.all_trading',$data);

    }

    public function deleteAccount(Request $request){
        // dd($request->all());

        $user = User::where('id', $request->id)->first();

        $userWithdrawals = WithdrawalHistoryModel::where('user_id', $request->id)->get();

        $userDeposits = DepositHistoryModel::where('user_id', $request->id)->get();

        $userTrades = TradeHistoryModel::where('user_id', $request->id)->get();

        

        foreach ($userTrades as $userTrade) {
            $userTrade->delete();
         }
        
        foreach ($userWithdrawals as $userWithdrawal) {
           $userWithdrawal->delete();
        }

        foreach ($userDeposits as $userDeposit) {
            $userDeposit->delete();
        }

        if(!$user){
          $message = "user not found";
          return response()->json(['message' => $message], 404);
        }

        if($user){
          $user->delete();
        }
    }

    public function approveWithdrawal(Request $request){
        // dd($request->all());
        $userWithdrawals = WithdrawalHistoryModel::where('id', $request->id)->first();
     
        if ($userWithdrawals->status == 'Approved') {
            $message = "Payment already approved";
            return response()->json(['message' => $message], 404);
        }

        // $user = User::where('id', $userWithdrawals->user_id)->first();

        // $amount = $userWithdrawals->amount + $user->wallet_balance;

        // dd($amount);
        WithdrawalHistoryModel::where("id", $request->id)->update(["status" => $request->status]);

        // User::where("id", $user->id)->update(["wallet_balance" => $amount]);
       

    }

    public function approveDeposit(Request $request){
        //  dd($request ->all());
        $userDeposit = DepositHistoryModel::where('id', $request->id)->first();
        // dd($userDeposit ->status);
        if ($userDeposit->status == 'Approved') {
            $message = "Payment already approved";
            return response()->json(['message' => $message], 404);
        }

        if ($request->status == 'Declined') {
            DepositHistoryModel::where("id", $request->id)->update(["status" => $request->status]);
        }else{
            $user = User::where('id', $userDeposit->user_id)->first();

            $amount = $userDeposit->amount + $user->wallet_balance;
    
            // dd($amount);
            DepositHistoryModel::where("id", $request->id)->update(["status" => $request->status]);
    
            User::where("id", $user->id)->update(["wallet_balance" => $amount]);
        }

      
       

    }

    public function tradeAction(Request $request){
        // dd($request->all());
        TradeHistoryModel::where("id", $request->id)->update(["status" => $request->status]);
    }

}
