<?php

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

Auth::routes();

/**
 * Everything only accessible if logged in
 */
Route::middleware(['auth'])->group(function() {
    Route::resource('umzug', 'UmzugController');
    Route::post('/umzug/switch', 'UmzugController@switch');
    Route::post('/umzug/calculate', 'UmzugController@calculate');
});

Route::get("/", function (){
    return redirect("/umzug");
});

//Route::get("/download", "UmzugExportController@export")->name("export");


