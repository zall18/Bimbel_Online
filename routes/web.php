<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubjectController;
use App\Http\Middleware\UserLogin;
use App\Models\Package;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

    $data['user'] = User::all();

    return view('index', $data);
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('user.login')->group(function () {

    Route::get('/home', [PackageController::class, 'index']);
    Route::get('/buy_package/{id}', [PackageController::class, 'buy_package']);
    Route::post('/buy_package_item', [PackageController::class, 'buy_package_item']);
    Route::get('/my_package', [PackageController::class, 'my_package']);
    Route::get('/materi/{id}', [SubjectController::class, 'materi']);

});
