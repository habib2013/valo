<?php

namespace App\Http\Controllers\Auth;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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


    public function loginuser(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],)) {

            $msg = array(
				'status'  => 'success',
                'message' => 'Login Successful',
                // 'username' => $username,
            );

            return response()->json($msg);

        }

        else{

       $msg = array(
				'status'  => 'error',
				'message' => 'Invalid login requests, check your credentials and try again !'
			);

			return response()->json($msg );
    // $msg = array(
    //     'status'  => 'success',
    //     'message' => 'Login Successful',
    //     // 'username' => $username,
    // );

    return response()->json($msg);
          
        }
    
        }
}

