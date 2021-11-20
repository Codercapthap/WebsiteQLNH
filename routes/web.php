<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/book-table', [App\Http\Controllers\IndexController::class, 'bookTable']);
Route::get('/menu', [App\Http\Controllers\IndexController::class, 'menu']);
Route::get('/about-us', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);
Route::get('/tables', [App\Http\Controllers\HomeController::class, 'tables']);
Route::get('/foods', [App\Http\Controllers\HomeController::class, 'foods']);
Route::get('/map', [App\Http\Controllers\HomeController::class, 'map']);
Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'notifications']);
Route::get('/books', [App\Http\Controllers\HomeController::class, 'books']);

Route::post('/foods', [App\Http\Controllers\ModelController\FoodController::class, 'searchFoods']);
Route::post('/tables', [App\Http\Controllers\ModelController\StaffController::class, 'searchStaffs']);
Route::post('/tables/edit', [App\Http\Controllers\ModelController\StaffController::class, 'editStaffs']);
Route::post('/foods/edit', [App\Http\Controllers\ModelController\FoodController::class, 'editFoods']);
Route::post('/foods/delete', [App\Http\Controllers\ModelController\FoodController::class, 'delete']);
Route::post('/staffs/delete', [App\Http\Controllers\ModelController\StaffController::class, 'delete']);

Route::post('/messages/delete', [\App\Http\Controllers\ModelController\MessageController::class, 'delete']);
Route::post('/messages/add', [\App\Http\Controllers\ModelController\MessageController::class, 'add']);
Route::post('/books/add', [\App\Http\Controllers\ModelController\BookController::class, 'add']);
Route::post('/books/delete', [\App\Http\Controllers\ModelController\BookController::class, 'delete']);
Route::post('/books/check', [\App\Http\Controllers\ModelController\BookController::class, 'check']);

Route::post('/createadmin', [\App\Http\Controllers\Auth\RegisterController::class, 'createadmin']);