<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('product', 'ProductController');
Route::resource('productType', 'ProductTypeController');
Route::resource('department', 'DepartmentController');

Auth::routes();

Route::patch('/productType/{product_type_cd}', [ProductTypeController::class, 'update'])->name('productType.update');
Route::delete('/productType/{product_type_cd}', [ProductTypeController::class, 'destroy'])->name('productType.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
