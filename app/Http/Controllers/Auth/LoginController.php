<?php

namespace App\Http\Controllers\Auth;

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

    protected function authenticated(Request $request, $user)
    {

        if ($user->hasRole('admin')) {
            return  redirect()->route('admin.index');
        }

        if ($user->hasRole('hr')) {
            return  redirect()->route('hr.dashboard');
        }

        if ($user->hasRole('Doctor')) {
            return  redirect()->route('doctor.dashboard');
        }
        if ($user->hasRole('nurse')) {
            return  redirect()->route('nurse.dashboard');
        }

        if ($user->hasRole('pharmacist')) {
            return  redirect()->route('pharmacy.dashboard');
        }
        if ($user->hasRole('patient')) {
            return  redirect()->route('patient.dashboard');
        }
        if ($user->hasRole('user')) {
            return  redirect()->route('user.dashboard');
        }
       
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
