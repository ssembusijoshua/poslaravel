<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

Route::resource('/orders', 'OrderController');
Route::resource('/products', 'ProductController');
Route::resource('/suppliers', 'SupplierController');
// Route::resource('/users', 'UserController');
Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/companies', 'CompanyController');
Route::resource('/transactions', 'TransactionController');

Route::get('/registeruser', [HomeController::class, 'user'])->name('registeruser')
->middleware('auth');
Route::post('/registeruser', [HomeController::class, 'createuser'])->name('registeruser')
->middleware('auth');