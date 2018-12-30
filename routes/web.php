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
    Route::get("questions/add","Dashboard\PertanyaanController@add");
    Route::resource("questions","Dashboard\PertanyaanController", ["only" =>
      ["index","show"]
    ]);
    Route::post("questions/store","Dashboard\PertanyaanController@store");
    Route::delete("questions/delete","Dashboard\PertanyaanController@destroy");
    Route::delete("answers/delete","Dashboard\PertanyaanController@destroyAnswer");
    Route::put("questions/update","Dashboard\PertanyaanController@update");

    //Pertanyaan Page
    // Route::resource("answers","Dashboard\JawabanController", ["only" =>
    //   ["index","show"]
    // ]);
    // Route::post("answers/store","Dashboard\JawabanController@store");
    // Route::delete("answers/delete","Dashboard\JawabanController@destroy");
    // Route::put("answers/update","Dashboard\JawabanController@update");
});

Route::prefix('user/pages')->group(function () {
    //Registration
    Route::get("register","Dashboard\User\Register\RegisterController@index");
    Route::post("register/store","Dashboard\User\Register\RegisterController@store");
    Route::get('register/verify/{id}', 'Dashboard\User\Register\RegisterController@confirm');

    //Sign In
    // Route::get("signin","Dashboard\User\Login\LoginController@index");
});

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
