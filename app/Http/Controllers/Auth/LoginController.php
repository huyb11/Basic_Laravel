<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $info = $request->only('email', 'password');
        if (Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->route('admin.category.all');
        }
        $error = [];
        if (!Auth::validate($info)) {
            $error['email'] = 'Thong tin nhap ko chinh xac';
        }
        return back()->withInput()->withErrors($error);
    }
    public function LoginPage()
    {
        return view('auth.login');
    }
    public function LogOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.page');
    }
}
