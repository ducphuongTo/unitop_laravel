<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('category', [HomeController::class, 'category']);
Route::get('view-category/{slug}', [HomeController::class, 'viewcategory']);


Route::get('/product', [AdminController::class, 'product']);
Route::post('/uploadProduct', [AdminController::class, 'uploadProduct']);

Route::get('/showproduct', [AdminController::class, 'showproduct']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/updateview/{id}', [AdminController::class, 'updateview']);
Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::get('/search', [HomeController::class, 'search']);

Route::post('/addCart/{id}', [HomeController::class, 'addCart']);
Route::get('/showcart', [HomeController::class, 'showcart']);
Route::get('/products', [HomeController::class, 'showproduct']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::post('/order', [HomeController::class, 'confirmOrder']);
Route::get('/showOrder', [AdminController::class, 'showorder']);
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);


Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('category/{cate_slug}/{prod_slug}', [HomeController::class, 'productview']);


Route::get('showCategory', [CategoryController::class, 'index']);
Route::get('add-category', [CategoryController::class, 'add']);
Route::post('insert-cate', [CategoryController::class, 'insert']);
Route::put('edit-category/{id}', [CategoryController::class, 'edit']);
Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);
