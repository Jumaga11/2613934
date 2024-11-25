<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GamesController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {

    $sliders = App\Models\Game::where('slider', 1)->get();
    return view('welcome')->with('sliders', $sliders);
});

Route::get('catalogue', function () {

    $categories = App\Models\Category::all();
    $games      = App\Models\Game::all();
    return view('catalogue')->with('categories', $categories)
                            ->with('games', $games);
});

Route::get('catalogue/{id}', function () {
    $game = App\Models\Game::find(request()->id);
    return view('view-game')->with('game', $game);
});

Route::get('catalogue/add/{id}', function () {
    $game = App\Models\Game::find(request()->id);
    dd($game->toArray);
});

Route::post('gamesbycat', function(Request $request) {
    if ($request->fcat == 'All') {
        //All categories
        $categories = App\Models\Category::all();
        $games      = App\Models\Game::all();
        return view('gamesbycat')->with('categories', $categories)
                                ->with('games', $games);
    } else {
        //By category
        $idcat    = App\Models\Category::where('name', $request->fcat)->first();
        $category = App\Models\Category::where('id', $idcat->id)->first();
        $games    = App\Models\Game::where('category_id', $idcat->id)->get();

        return view('gamesbycat')->with('category', $category)
                                ->with('games', $games);
    }
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/myProfile', function () {

    return view('myProfile', ['user' => $user = User::where('id', auth()->id())->first()]);
});

Route::middleware('auth')->group(function () {

    Route::resources([
        'users'      => UserController::class,
        'categories' => CategoryController::class,
        'games'      => GamesController::class
    ]);
});

// Search
Route::post('users/search',      [UserController::class, 'search']);
Route::post('categories/search', [CategoryController::class, 'search']);
Route::post('games/search',      [GamesController::class, 'search']);

// Export
Route::get('export/users/pdf',   [UserController::class, 'PDF']);
Route::get('export/users/excel', [UserController::class, 'excel']);
Route::get('export/games/pdf',   [GamesController::class, 'PDF']);
Route::get('export/games/excel', [GamesController::class, 'excel']);

// Import
Route::post('import/users', [UserController::class, 'import']);

require __DIR__ . '/auth.php';
