<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GamesController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('catalogue', function () {
    return view('catalogue');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/myProfile', function () {
    return view('myProfile', ['user'=>$user = User::where('id', auth()->id())->first()]);
});

Route::middleware('auth')->group(function () {

    Route::resources([
        'users' => UserController::class,
        'categories' => CategoryController::class,
        'games'  => GamesController::class
    ]);
});

// Search
Route::post('users/search', [UserController::class, 'search']);
Route::post('categories/search', [CategoryController::class, 'search']);

// Export
Route::get('export/users/pdf', [UserController::class, 'PDF']);
Route::get('export/users/excel', [UserController::class, 'excel']);


require __DIR__ . '/auth.php';
