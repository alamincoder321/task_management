<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("pages.dashboard");
    }


    public function language($id)
    {
        CompanyProfile::first()->update([
            'language' => $id
        ]);
        return back();
    }

    // admin logout
    public function Logout()
    {
        try {
            Auth::guard('web')->logout();
            Session::flash('success', 'Logout successfully');
            return redirect('/');
        } catch (\Throwable $th) {
            return send_error('Something went wrong', $th->getMessage());
        }
    }
}
