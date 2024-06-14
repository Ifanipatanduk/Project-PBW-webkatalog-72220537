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

Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login'); 
    Route::POST("/login", "AuthController@ceklogin");
});
 
Route::group(['middleware' => ['auth']], function () {
    Route::get("/beranda", "pageController@beranda"); 
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/user", "pageController@edituser"); 
    Route::post("/updateuser", "pageController@updateuser");
    Route::get("/produk", "PageController@produk"); 
    Route::get("/produk/form-add", "PageController@addproduk");
    Route::post("/save", "PageController@saveproduk"); 
    Route::get("/produk/edit-produk/{id}", "pageController@editproduk");    
    Route::put("/update/{id}", "pageController@updateproduk"); 
    Route::get("/delete/{id}", "pageController@deleteproduk");
});

// Route::group(['middleware' => ['guest']], function () {
//     Route::get("/", "PageController@login")->name('login');
//     Route::post("/login", "AuthController@ceklogin");
// });

// Route::group(['middleware' => ['auth']], function () {
//     Route::get("/beranda", "PageController@beranda");
//     Route::get("/logout", "AuthController@ceklogout");
//     Route::get("/user", "PageController@edituser");
//     Route::post("/updateuser", "PageController@updateuser");
//     Route::get("/produk", "PageController@produk");
//     Route::get("/produk/form-add", "PageController@addproduk");
//     Route::post("/save", "PageController@saveproduk");
//     Route::get("/produk/edit-produk/{id}", "PageController@editproduk");
//     Route::put("/update/{id}", "PageController@updateproduk");
//     Route::get("/delete/{id}", "PageController@deleteproduk");
// });