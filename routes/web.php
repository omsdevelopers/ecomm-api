<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Admin\ProductController;


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

Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/admin/list', [AdminController::class, 'admin_list']);
    Route::get('admin/admin/add', [AdminController::class, 'admin_add']);
    Route::post('admin/admin/add', [AdminController::class, 'add_admin_insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'add_admin_edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'admin_add_update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'admin_add_delete']);

    Route::get('admin/category/list', [CategoryController::class, 'category_list']);
    Route::get('admin/category/add', [CategoryController::class, 'category_add']);
    Route::post('admin/category/add', [CategoryController::class, 'category_insert']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'category_edit']);
    Route::post('admin/category/edit/{id}', [CategoryController::class, 'category_update']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'category_delete']);


    Route::get('admin/brand/add', [BrandController::class, 'brand_add'])->name('add-new');
    Route::post('admin/brand/add', [BrandController::class, 'store']);
    Route::get('admin/brand/list', [BrandController::class, 'list'])->name('brand-list');
    Route::get('admin/brand/edit/{id}', [BrandController::class, 'brand_edit'])->name('edit-brand');
    Route::post('admin/brand/edit/{id}', [BrandController::class, 'brand_update']);
    Route::get('admin/brand/delete/{id}', [BrandController::class, 'brand_delete'])->name('delete-brand');

    Route::resource('admin/products', ProductController::class);
});


Route::get('admin', [AuthController::class, 'login']);
Route::post('admin', [AuthController::class, 'auth_login_admin']);
Route::get('admin/logout', [AuthController::class, 'logout_admin']);


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [PageController::class, 'login'])->name('login');
    Route::post('login_submit', [LoginController::class, 'submit'])->name('login_post');

    Route::get('register', [PageController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
