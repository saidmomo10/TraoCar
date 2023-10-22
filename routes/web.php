<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;

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
    return view('Cars.welcomeView');
});

// Route::get('/cars', function () {
//     return view('Cars.carsListView');
// });

Route::controller(CategoryController::class)->group(function(){
    Route::get('/add-category', 'addcategory')->name('addCategory');
    Route::post('/create-category-car', 'createcategory')->name('createCategory');
    Route:: get('/category-show/{id}',"showcategory")->name("showCategory");

});

Route::controller(CarController::class)->group(function(){

    Route::get('/car-lists', 'showcarlists')->name('showCarLists');
    Route::get('/add-car', 'addcar')->name('addCar');
    Route::post('/send-car-add', 'sendcaradd')->name('sendCarAdd');
    Route::get('/car/{id}', "show") ->name("indexWithID");

    // Route::get('/show-car/{id}', 'showcar')->name('showCar');
    // Route::get('/car-charateristics', 'carcharateristicslist')->name('CarCharacteristicsList');
});