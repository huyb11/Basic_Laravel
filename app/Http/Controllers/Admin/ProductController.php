<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin\Product\StoreRequest;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $product = DB::table("products")
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.*', 'products.*')
            ->get();
        return view('admin.product.all_product', compact("product"));
    }
    public function AddProduct()
    {
        $data['category'] = DB::table("categories")
            ->get();
        return view('admin.product.add_product', $data);
    }
    public function StoreProduct(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('products')->insert($data);
        return redirect()->route('admin.product.all')->with('success', 'Nhap thanh cong');
    }
    public function EditProduct($id)
    {
        $data['product'] = DB::table('products')
        ->where('id', $id)
        ->first();
        $data['category'] = DB::table("categories")
        ->get();
        return view('admin.product.edit_product', $data);
    }
    public function UpdateProduct(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('products')
            ->where('id', $id)
            ->update($data);
        return redirect()->route('admin.product.all')->with('success', 'Update thanh cong');
    }

    public function DeleteProduct($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();
        return redirect()->route('admin.product.all')->with('success', 'Xoa thanh cong');
    }
}
