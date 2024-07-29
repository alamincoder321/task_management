<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showUserLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "username" => "required",
            "password" => "required",
        ], ['username.required' => 'Username is required', 'password.required' => 'Password is required']);

        try {
            if (Auth::guard()->attempt(credentials($request->username, $request->password))) {
                Session::flash('success', 'Login successfully');
                return response()->json(["status" => true, "message" => "Successfully Login", "user" => Auth::user()]);
            } else {
                return send_error("Unauthorized", ['username' => 'Username or password not valid'], 401);
            }
        } catch (\Throwable $th) {
            return send_error("Something went wrong", $th->getMessage());
        }
    }
}
