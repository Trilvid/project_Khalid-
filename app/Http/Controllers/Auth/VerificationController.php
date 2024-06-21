<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Redirect,Response;
use Session;
use File,Exception, Log;
use App\Models\User;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('signed')->only('verify');
    //     $this->middleware('throttle:6,1')->only('verify', 'resend');
    // }
    public function verifyUser($token, Request $request) {

        try {
            $user = User::where('token', $token)->first();
            
            if(!$user){
                Session::put('errorMessage', 'User does not exist');
                return Redirect::to(route('auth.login'));
            }
            $user->is_active =1;
            $user->token ='';
            $user->save();

            Session::put('successMessage',  'Email successfully Verify');
            return Redirect::to(route('auth.login'));

        } catch(\Exception $error) {
            Log::info('verifyUser@VerificationController error message: ' . $error->getMessage());
                 $message = 'Unable to Verify user. Encountered an error.';
                 Session::put('errorMessage',  $message);
                return Redirect::to(route('auth.login'));
        }
           
    }
}
