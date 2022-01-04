<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReturnedController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('out_of_unit', [ProductController::class, 'out_of_stock'])->name('out_of_unit');

    Route::get('product', [ProductController::class, 'index'])->name('product');
    Route::get('product/unit_add', [ProductController::class, 'show_unit']);
    // Route::post('product/update_unit', [ProductController::class, 'update_unit']);
    Route::get('product/add', [ProductController::class, 'create']);
    Route::post('product/add', [ProductController::class, 'store'])->name('product-upload');
    Route::post('product/edit', [ProductController::class, 'edit'])->name('product-edit');
    Route::post('product/destroy', [ProductController::class, 'update_status'])->name('product-destroy');

    Route::get('type-product', [TypeProductController::class, 'index'])->name('type-product');
    Route::get('type-product/add', [TypeProductController::class, 'create']);
    Route::post('type-product/add', [TypeProductController::class, 'store'])->name('product-insert');
    Route::post('type-product/edit', [TypeProductController::class, 'edit'])->name('type-edit');
    Route::post('type-product/destroy', [TypeProductController::class, 'destroy'])->name('type-destroy');

    Route::get('inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('inventory/add', [InventoryController::class, 'show'])->name('inventory-add');
    Route::post('inventory/update', [InventoryController::class, 'update']);
    Route::post('inventory/edit', [InventoryController::class, 'edit']);
    Route::post('inventory/delete', [InventoryController::class, 'destroy']);

    Route::get('returned', [ReturnedController::class, 'index']);
    Route::post('returned/update', [ReturnedController::class, 'store']);
    Route::post('returned/edit', [ReturnedController::class, 'update']);
    Route::post('returned/delete', [ReturnedController::class, 'destroy']);

    Route::get('claim', [ClaimController::class, 'index']);
    Route::post('claim/update', [ClaimController::class, 'store']);
    Route::post('claim/edit', [ClaimController::class, 'edit']);
    Route::post('claim/delete', [ClaimController::class, 'destroy']);






});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

