<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    protected $redirectTo = '/me';

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
            'email' => "required|email",
            'password' => "required|string"
        ]);


        $validate = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role' => 2
        ];


            if (Auth::attempt($validate))
            {
                $url = Redirect::intended('/dashboard')->getTargetUrl();

                return ['success' => true, 'url' => $url];
            }
            else
            {
                $user = User::where(['email' => $validate['email'], 'role' => 2])->first();

                if($user)
                {
                    return ['success' => false, 'not_admin' => false];
                }
                else
                {
                    return ['success' => false, 'not_admin' => true];
                }
            }

    }

}
