<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomCategoryController;
use App\Http\Controllers\Admin\RoomController;
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
    Route::prefix('admin')->name('admin.')->group(function () {
        // TODO Route : Dashboard
        Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

        // TODO Route : Category
        Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
            Route::get('all', 'AllCategory')->name('all');
            Route::get('add', 'AddCategory')->name('add');
            Route::post('store', 'StoreCategory')->name('store');
            Route::get('edit/{id}', 'EditCategory')->name('edit');
            Route::post('update/{id}', 'UpdateCategory')->name('update');
            Route::get('delete/{id}', 'DeleteCategory')->name('delete');
        });
        // TODO Route : product
        Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
            Route::get('/all', 'AllProduct')->name('all');
            Route::get('/add', 'AddProduct')->name('add');
            Route::post('/store', 'StoreProduct')->name('store');
            Route::get('/edit/{id}', 'EditProduct')->name('edit');
            Route::post('/update/{id}', 'UpdateProduct')->name('update');
            Route::get('/delete/{id}', 'DeleteProduct')->name('delete');
        });
        // TODO Route : user
        Route::prefix('user')->controller(UserController::class)->name('user.')->group(function () {
            Route::get('/all', 'AllUser')->name('all');
            Route::get('/edit/{id}', 'AllUser')->name('edit');
            Route::post('/update/{id}', 'UpdateUser')->name('update');
            Route::get('/delete/{id}', 'DeleteUser')->name('delete');
        });

        //todo ROute:room
        Route::prefix('room')->controller(RoomController::class)->name('room.')->group(function () {
            Route::get('all', 'AllRoom')->name('all');
            Route::get('add', 'AddRoom')->name('add');
            Route::post('store', 'StoreRoom')->name('store');
            Route::get('edit/{id}', 'EditRoom')->name('edit');
            Route::post('update/{id}', 'UpdateRoom')->name('update');
            Route::get('delete/{id}', 'DeleteRoom')->name('delete');
        });
        //todo route:roomcatgory
        Route::prefix('room_category')->controller(RoomCategoryController::class)->name('room_category.')->group(function () {
            Route::get('all', 'AllRoomCategory')->name('all');
            Route::get('add', 'AddRoomCategory')->name('add');
            Route::post('store', 'StoreRoomCategory')->name('store');
            Route::get('edit/{id}', 'EditRoomCategory')->name('edit');
            Route::post('update/{id}', 'UpdateRoomCategory')->name('update');
            Route::get('delete/{id}', 'DeleteRoomCategory')->name('delete');
        });
    });
});

//todo route:Auth
Route::get('admin/login/page', [LoginController::class, 'LoginPage'])->name('admin.login.page');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [LoginController::class, 'LogOut'])->name('admin.logout');
Route::post('admin/signup', [SignUpController::class, 'SignUp'])->name('admin.signup');
Route::get('admin/signup/page', [SignUpController::class, 'SignUpPage'])->name('admin.signup.page');
//todo Route:tele
Route::get('update-activity', [TelegramController::class, 'updatedActivity']);

