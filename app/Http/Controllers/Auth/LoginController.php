<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        //dd('dddddddddddddd');
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_active != true) {
                Session::put('errorMessage', 'Kindly  Verify your Email. Thanks');
                    $this->logout();
            }
            return redirect()->route('user.dashboard');
           
        }
        Session::put('errorMessage', 'Oppes! You have entered invalid credentials');
        return Redirect::to(route('auth.login'));
    }

    public function logout() {
        Auth::logout();
        return Redirect::to(route('auth.login'));
    }
}
