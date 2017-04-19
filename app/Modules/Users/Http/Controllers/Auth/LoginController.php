<?php

namespace App\Modules\Users\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;

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

    use AuthenticatesUsers, ValidatesRequests;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->redirectTo = '/';
    }

    public function showLoginForm()
    {
        return view('users::auth.login');
    }

    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect($this->redirectTo);
    }
}
