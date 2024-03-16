<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $categories = DB::table("categories")->get();
        return view('admin.category.all_category', compact("categories"));

    }
    public function AddCategory()
    {

        return view("admin.category.add_category");
    }
    public function StoreCategory(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('categories')->insert($data);
        
        return redirect()->route('admin.category.all')->with('success', 'Nhap thanh cong');
    }
    public function EditCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.edit_category', compact('category'));

    }
    public function UpdateCategory(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        DB::table('categories')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('admin.category.all')->with('success', 'Update thanh cong');

    }
    public function DeleteCategory($id)
    {
        DB::table('categories')
        ->where('id', $id)
        ->delete();
        
        return redirect()->route('admin.category.all')->with('success', 'Delete thanh cong');
    }
}

    