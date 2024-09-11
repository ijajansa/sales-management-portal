<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return redirect('login');
});


Auth::routes();
Route::get('register', function () {
    return redirect('login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'employees'],function(){
Route::get('/', [EmployeeController::class, 'index']);
Route::get('create', [EmployeeController::class, 'create']);
Route::post('create', [EmployeeController::class, 'store']);
});
