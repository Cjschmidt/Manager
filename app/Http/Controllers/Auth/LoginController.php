<?php

namespace App\Http\Controllers\Auth;

use App\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin(Request $request)
    {
        return view('backend.authentication.login')->render();
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'				=> "required|email",
            'password'          => "required|string"
        ]);

        $admin = Administrator::where(
            [
                'email' => $request->get('email'),
            ])->first();

        if($admin)
        {
            if(Hash::check($request->get('password'), $admin->password))
            {

                return ['success' => true];
            }
            else
            {
                return ['success' => false];
            }
        }
        else
        {
            return ['success' => false];
        }

    }
}
