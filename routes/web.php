<?php
header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

// auth
//Administrator Routing
Route::prefix('backend/pages')->group(function () {

    //Login Page
    Route::get("routing/signin","Login\LoginController@index");
    Route::get("signin","Login\LoginController@auth");
    Route::post("auth/process","Login\LoginController@auth_process");
    Route::get("signout","Login\LoginController@mm_logout");

    //Dashboard Page
    Route::resource('home', "Dashboard\HomeController", ["only" =>
        ["index"]
    ]);

    //Administrators Page
    Route::resource('administrator',"Dashboard\AdministratorController", ["only" =>
        ["index","show"]
    ]);

    // Route::resource('administrator/{id}/edit',"Dashboard\AdministratorController")
});


// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
