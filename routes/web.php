<?php
// Main Route
Route::get('/', function () {
    return view('index');
});
// login Route
Route::get('/login' , "SharedController@login");
Route::post('/login' , "SharedController@login");
// Sign Up Route
Route::get('/sign_up' , "SharedController@signUp");
Route::post('/sign_up' , "SharedController@signUp");
// Logout
Route::get('/logout' , "AdminController@logout");
Route::post('/logout' , "AdminController@logout");

// get Mobile Products
Route::get('/mobile_prod_view' , "SharedController@getMobileProducts");

// get Electronic Products
Route::get('/electronic_prod_view' , "SharedController@getElectronicProducts");

// get Computer Products
Route::get('/computer_prod_view' , "SharedController@getComputerProducts");

// Admin Routes
Route::get('/main_view' , "AdminController@addNewProduct");
Route::post('/main_view' , "AdminController@addNewProduct");

// Admin Settings
Route::get('/settings' , "AdminController@getSettings");
Route::post('/settings' , "AdminController@getSettings");

// Admin Profile
Route::get('/profile' , "AdminController@getProfile");

// User Routes
Route::get('/user_view' , "UserController@show_mob_prods");
Route::post('/user_view' , "UserController@show_mob_prods");

// electronic products
Route::get('/user_elect_view' , "UserController@show_elect_prods");
Route::post('/user_elect_view' , "UserController@show_elect_prods");

// computer products
Route::get('/user_comp_view' , "UserController@show_computer_prods");
Route::post('/user_comp_view' , "UserController@show_computer_prods");

// get More info about products
Route::get('/getMore/{id}' , "UserController@getInfo");
Route::post('/getMore/{id}' , "UserController@getInfo");

// Adding To Card
Route::get('/add_to_card/{id}' , "UserController@AddToCard");
Route::post('/add_to_card/{id}' , "UserController@AddToCard");

// get My Card View
Route::get('/my_card' , "UserController@getMyCard");
Route::post('/my_card' , "UserController@getMyCard");

// send quantity to update view
Route::get('/update/{id}' , "UserController@sendDataToUpdateView");
Route::post('/update/{id}' , "UserController@sendDataToUpdateView");

// update function
Route::get('/update_quan' , "UserController@quantityUpdate");
Route::post('/update_quan' , "UserController@quantityUpdate");

// delete function
Route::get('/delete_prod/{id}' , "UserController@deleteProd");
Route::post('/delete_prod/{id}' , "UserController@deleteProd");
