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
    Route::get("administrator/add","Dashboard\AdministratorController@add");
    Route::resource('administrator',"Dashboard\AdministratorController", ["only" =>
        ["index","show"]
    ]);
    Route::match(array('PUT', 'PATCH'), 'administrator/update',"Dashboard\AdministratorController@update");
    Route::delete('administrator/delete',"Dashboard\AdministratorController@destroy");
    Route::post("administrator/store","Dashboard\AdministratorController@store");

    //Users Page
    Route::get("users/add","Dashboard\UserController@add");
    Route::resource("users","Dashboard\UserController", ["only" =>
        ["index","show"]
    ]);
    Route::match(array('PUT', 'PATCH'), 'users/update',"Dashboard\UserController@update");
    Route::delete('users/delete',"Dashboard\UserController@destroy");
    Route::post("users/store","Dashboard\UserController@store");

    //Assesments Page
    // Route::get("assesments/add","Dashboard\JenisAssesmentController@add");
    Route::resource("assesments","Dashboard\JenisAssesmentController", ["only" =>
      ["index","show"]
    ]);
    Route::post("assesments/store","Dashboard\JenisAssesmentController@store");
    Route::delete("assesments/delete","Dashboard\JenisAssesmentController@destroy");
    Route::put("assesments/update","Dashboard\JenisAssesmentController@update");

    //Competencies Page
    Route::resource("competencies","Dashboard\KompetensiController", ["only" =>
      ["index","show"]
    ]);
    Route::post("competencies/store","Dashboard\KompetensiController@store");
    Route::delete("competencies/delete","Dashboard\KompetensiController@destroy");
    Route::put("competencies/update","Dashboard\KompetensiController@update");

    //Row Score Page
    Route::resource("rowscores","Dashboard\RowScoreController", ["only" =>
      ["index","show"]
    ]);
    Route::post("rowscores/store","Dashboard\RowScoreController@store");
    Route::delete("rowscores/delete","Dashboard\RowScoreController@destroy");
    Route::put("rowscores/update","Dashboard\RowScoreController@update");

    //Pertanyaan Page
    Route::resource("questions","Dashboard\PertanyaanController", ["only" =>
      ["index","show"]
    ]);
    Route::post("questions/store","Dashboard\PertanyaanController@store");
    Route::delete("questions/delete","Dashboard\PertanyaanController@destroy");
    Route::put("questions/update","Dashboard\PertanyaanController@update");
});


// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
