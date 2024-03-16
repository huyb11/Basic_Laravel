<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\TelegramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('check_login')->group(function () {
// TODO Route : Dashboard
Route::get('admin/dashboard',[DashboardController::class,'Dashboard'])->name('admin.dashboard');

// TODO Route : Category
Route::get('admin/category/all',[CategoryController::class,'AllCategory'])->name('admin.category.all');
Route::get('admin/category/add',[CategoryController::class,'AddCategory'])->name('admin.category.add');
Route::post('admin/category/store',[CategoryController::class,'StoreCategory'])->name('admin.category.store');
Route::get('admin/category/edit/{id}',[CategoryController::class,'EditCategory'])->name('admin.category.edit');
Route::post('admin/category/update/{id}',[CategoryController::class,'UpdateCategory'])->name('admin.category.update');
Route::get('admin/category/delete/{id}',[CategoryController::class,'DeleteCategory'])->name('admin.category.delete');

// TODO Route : product
 Route::get('admin/product/all',[ProductController::class,'AllProduct'])->name('admin.product.all');
 Route::get('admin/product/add',[ProductController::class,'AddProduct'])->name('admin.product.add');
 Route::post('admin/product/store',[ProductController::class,'StoreProduct'])->name('admin.product.store');
 Route::get('admin/product/edit/{id}',[ProductController::class,'EditProduct'])->name('admin.product.edit');
 Route::post('admin/product/update/{id}',[ProductController::class,'UpdateProduct'])->name('admin.product.update');
 Route::get('admin/product/delete/{id}',[ProductController::class,'DeleteProduct'])->name('admin.product.delete');

// TODO Route : user
 Route::get('admin/user/all',[UserController::class,'AllUser'])->name('admin.user.all');
 Route::get('admin/user/edit/{id}',[UserController::class,'AllUser'])->name('admin.user.edit');
 Route::post('admin/user/update/{id}',[UserController::class,'UpdateUser'])->name('admin.user.update');
 Route::post('admin/user/delete/{id}',[UserController::class,'DeleteUser'])->name('admin.user.delete');

});
//todo route:Auth
Route::get('admin/login/page',[LoginController::class,'LoginPage'])->name('admin.login.page');
Route::post('admin/login',[LoginController::class,'login'])->name('admin.login');
Route::post('admin/logout',[LoginController::class,'LogOut'])->name('admin.logout');
Route::post('admin/signup',[SignUpController::class,'SignUp'])->name('admin.signup');
Route::get('admin/signup/page',[SignUpController::class,'SignUpPage'])->name('admin.signup.page');
//todo Route:tele
Route::get('update-activity',[TelegramController::class,'updatedActivity']);

