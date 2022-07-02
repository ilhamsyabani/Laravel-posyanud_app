<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDetailConroller;

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

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('details', \App\Http\Controllers\DetailController::class);
    Route::resource('reports', \App\Http\Controllers\ReportController::class);
    // Route::get('details', [\App\Http\Controllers\DetailController::class, 'create'])->name('details.buat');
    // Route::get('reports', [\App\Http\Controllers\ReportController::class, 'create'])->name('reports.buat');
    // Route::post('details', [\App\Http\Controllers\DetailController::class, 'store'])->name('details.simpan');
    // Route::post('reports', [\App\Http\Controllers\ReportController::class, 'store'])->name('reports.simpan');
});

Route::get('search', function (Request $request) {
    $query = $request->get('query');
    $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
    return response()->json($filterResult);
});

Route::resource('admiDetail', \App\Http\Controllers\AdminDetailController::class);
