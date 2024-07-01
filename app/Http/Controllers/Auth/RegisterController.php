<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File, Exception, Log;
use Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserRegistration;
use Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'fullname' => 'required', 'string', 'max:255',
                    'email' => 'required|email', 'string', 'email', 'max:255', 'unique:users',
                    'password' => 'required',
                    'cpassword' => 'required|same:password', 
                ]
            );

            if ($validator->fails()) {
                Session::put('errorMessage', $validator->errors()->toJson());
                // return Redirect::to(route('auth.register'));
                return redirect()->back();
            }

          
            $user = User::where('email', $request->email)->first();
            if($user){
                $message = 'User Email Already Exist.';
                Session::put('errorMessage', $message);
                // return Redirect::to(route('auth.register'));

                return redirect()->back();
            }

            $userGeneratedID = rand();

            $NewUser = new User;
            $NewUser->fullname = $request->fullname;
            $NewUser->email = $request->email;
            $NewUser->password = bcrypt($request->password);
            $NewUser->role = 'member';
            $NewUser->is_active = true;
            
            $NewUser->token = $userGeneratedID;

            // $body = [
            //     'fullname' =>$NewUser->fullname,
            //     'token' =>$NewUser->token,
            // ];
            // // dd($body);
            // Mail::to($NewUser->email)->bcc('support@uyyuu.com')->send(new NewUserRegistration($body));
            
            
            $NewUser->save();

            
            // return response()->json([
            //     'user' => $NewUser,
            //     'message' => "User was created successfully"
            // ], 200);
            Session::put('successMessage', 'Kindly login . Thanks');
            // return Redirect::to(route('auth.register'));
            return redirect()->back();

        } catch (\Exception $error) {
            Log::info('create@RegisterController error message: ' . $error->getMessage());
            $message = 'Unable to Create user. Encountered an error.';
            
            Session::put('errorMessage', $message);
            // return Redirect::to(route('auth.register'));
            return redirect()->back();
        }
    }
}
