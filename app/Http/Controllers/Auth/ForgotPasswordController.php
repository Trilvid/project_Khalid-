<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use File, Exception, Log;
use Redirect,Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use App\Mail\ForgotPassword;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function passwordReset()
    {
        return view('auth.password_reset');
    }


    public function postForgotPassword(Request $request){
        {
            try {
                //  dd($request->all());
                $validator = Validator::make(
                    $request->all(),
                    [
                        'email' => 'required|email', 'string', 'email', 'max:255', 'unique:users',
                    ]
                );
    
                if ($validator->fails()) {
                    Session::put('errorMessage', $validator->errors()->toJson());
                    return Redirect::to(route('user.forgot.password'));
                }
    
    
                // dd('work');
                $user = User::where('email', $request->email)->first();
                if(!$user){
                    $message = 'User Email does not Exist.';
                    Session::put('errorMessage', $message);
                    return Redirect::to(route('user.forgot.password'));
                }
                $str =rand();
                $token= md5($str);
                $user->token =$token;
                $user->save();
    
                $body = [
                    'email' =>$user->email,
                    'fullname' =>$user->fullname,
                    'token' => $user->token
                ];
                // dd($body);
                Mail::to($user->email)->send(new ForgotPassword($body));    
              
               
                // return response()->json([
                //     'user' => $NewUser,
                //     'message' => "User was created successfully"
                // ], 200);
                Session::put('successMessage', 'Kindly check your Email for Instructions. Thanks');
                return Redirect::to(route('user.forgot.password'));
    
            } catch (\Exception $error) {
                Log::info('postForgotPassword@ForgotPasswordController error message: ' . $error->getMessage());
                $message = 'Unable to Create user. Encountered an error.';
                
                Session::put('errorMessage', $message);
                return Redirect::to(route('user.forgot.password'));
            }
        }
    }

    public function changePassword($token){
        if (!$token) {
            abort(404);
        }
        $user = User::where('token', $token)->first();

        if(!$user){
            $message = 'Token Expired.';
            Session::put('errorMessage', $message);
            return redirect()->back();
        }
        $data = [
            'token' => $token
        ];
        return view('auth.change_password',$data);
    }

    public function resetPassword(Request $request){
       
        $validator = Validator::make(
            $request->all(),
            [
                'password' => 'required',
                'confirm_password' => 'required|same:password', 
            ]
        );

        if ($validator->fails()) {
            Session::put('errorMessage', $validator->errors()->toJson());
            // return Redirect::to(route('auth.register'));
            return redirect()->back();
        }

        $user = User::where('token', $request->Utoken)->first();
        if(!$user){
            $message = 'Token Expired.';
            Session::put('errorMessage', $message);
            return redirect()->back();
        }
        $user->password =bcrypt($request->password);
        $user->token ='';
        $user->save();

        Session::put('successMessage', 'Password successfully changed. Thanks');
        return Redirect::to(route('auth.login'));
       
    }
}
