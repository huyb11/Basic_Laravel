<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function AllUser()
    {
     $user = DB::table("users")->get();
        return view("admin.user.all_user",compact("user"));
    }
    public function AddUser()
    {

        return view("admin.user.add_user");
    }
    public function StoreUser(Request $request)
    {
        $user = $request->except('_token');
        $user['created_at'] = new \DateTime();
        DB::table('users')->insert($user);
        return redirect()->route('admin.user.all')->with('success', 'Nhap thanh cong');
    }
    public function EditUser($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.category.edit_category', compact('user'));

    }
    public function UpdateUser(Request $request, $id)
    {
        $user = $request->except('_token');
        $user['updated_at'] = new \DateTime();
        DB::table('users')
        ->where('id', $id)
        ->update($user);
        return redirect()->route('admin.user.all')->with('success', 'Update thanh cong');

    }
    public function DeleteUser($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->delete();
        
        return redirect()->route('admin.user.all')->with('success', 'Delete thanh cong');
    }

   

}
