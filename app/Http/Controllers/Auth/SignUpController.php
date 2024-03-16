<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function SignUpPage()
    {
        return view("auth.signup");
    }
    public function SignUp(SignUpRequest $request)
    {
        $data = $request->except('_token','password_confirmation');
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
        return redirect()->route('admin.login')->with('success', 'Nhap thanh cong');
    }
}
