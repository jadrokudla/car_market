<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exerController;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/signup", [SignupController::class, "create"])->name('signup');
Route::get("/login", [LoginController::class, "create"])->name('login');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
Route::resource('car', CarController::class);

Route::get('/dummy', function () {
    return view('dummy');
});

Route::get('/htmlcss', function () {
    return view('htmlcss');
});

Route::get('/htmlcss', [exerController::class, 'index']);














// Route::fallback(function () {
//     return 'fallback';
// });



// Route::get('/', function () {

//     $productUrl = route('product.view', ['lang' => 'en', 'id' => '1']);
//     dd($productUrl);
//     return view('welcome');
// });

// Route::view('/about-us', 'about')->name('about');

// Route::get('/{lang}/p/{id}product/32/', function (string $lang, string $id) {

// })->name('product.view');

// Route::get('/product/{id}', function (string $id) {
//     return ('product ID=' . $id);
// });

// Route::get('/{lang}/products', function (string $lang) {
//     return "It works! $lang";
// })->whereIn("lang", ["en", "svk", "cze"]);

// Route::get('/user/{username}', function (string $username) {

// });

// Route::get('/{lang}/product/{id}', function (string $lang, string $id) {

// });

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.+'); // any character, at least 1
