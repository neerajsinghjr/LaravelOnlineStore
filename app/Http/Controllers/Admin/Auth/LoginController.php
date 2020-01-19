<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
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

    protected $redirectTo = '/admin/dashboard';

    public function __construct() {

        $this->middleware('admin.guest')->except('logout');

    }

    public function showForm() {

        return view('admin.auth.login');

    }

    public function guard() {

        return Auth::guard('admin');

    }

    protected function authenticated(Request $request, $user) {

        return redirect()->route('admin.dashboard');
        
    }   

    // public function login(Request $request) {

    //     // dd($request->all());

    // }
}
