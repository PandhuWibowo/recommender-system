<?php
header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

// auth
//Administrator Routing
Route::get("/","LandingPage\MainController@index");
Route::get("/direct","Login\LoginController@index");

Route::prefix('backend/pages')->group(function () {

    //Login Page
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

    //KeteranganNilai Page
    Route::resource("scoredescriptions","Dashboard\KeteranganNilaiController", ["only" =>
      ["index"]
    ]);
    Route::post("scoredescriptions/store","Dashboard\KeteranganNilaiController@store");
    Route::delete("scoredescriptions/delete","Dashboard\KeteranganNilaiController@destroy");
    Route::put("scoredescriptions/update","Dashboard\KeteranganNilaiController@update");

    //Log Test
    Route::resource("histories","Dashboard\HistoriesController", ["only" =>
      ["index","show"]
    ]);

    //User Assesments
    Route::get("userassessments","Dashboard\UserAssessmentController@index");
    Route::put("userassessments/status/update/enable","Dashboard\UserAssessmentController@updateStatusEnable");
    Route::put("userassessments/status/update/disable","Dashboard\UserAssessmentController@updateStatusDisable");
    Route::post("userassessments/store","Dashboard\UserAssessmentController@store");
    Route::put("userassessments/update","Dashboard\UserAssessmentController@update");
    Route::delete("userassessments/delete","Dashboard\UserAssessmentController@destroy");

    //Configurations
    Route::resource("configurations","Dashboard\ConfigurationController");

    //Competencies Result
    // Route::get("competenciesresults","Dashboard\CompetenciesResultController@index");

    //Description Results
    Route::resource("descriptionresults","Dashboard\CompetenciesResultController");

    //Log Test
    Route::resource("partnerships","Dashboard\LandingPageController", ["only" =>
      ["index","show"]
    ]);
});

Route::prefix('user/pages')->group(function () {
    //Registration
    Route::get("register","Dashboard\User\Register\RegisterController@index");
    Route::post("register/store","Dashboard\User\Register\RegisterController@store");
    Route::get('register/verify/{id}', 'Dashboard\User\Register\RegisterController@confirm');

    //Home
    Route::get("home","Dashboard\User\DashboardUser\HomeController@index");

    //Profile Page
    // Route::get("users/add","Dashboard\UserController@add");
    Route::resource("profiles","Dashboard\User\DashboardUser\UserController", ["only" =>
        ["show"]
    ]);
    Route::match(array('PUT', 'PATCH'), 'profiles/update',"Dashboard\User\DashboardUser\UserController@update");
    Route::delete('profiles/delete',"Dashboard\User\DashboardUser\UserController@destroy");

    //Assesments Page
    Route::get("assesments","Dashboard\User\DashboardUser\AssesmentController@index");
    Route::post("assesments/store","Dashboard\User\DashboardUser\AssesmentController@store");
    Route::get("assesments/{id}/{assId}","Dashboard\User\DashboardUser\AssesmentController@show");

    Route::post("questions/store","Dashboard\User\DashboardUser\QuestionController@store");

    Route::get("results/final/{assId}","Dashboard\User\DashboardUser\ResultController@show");

    Route::get("forgot/password/sendemail","Dashboard\User\ForgotPassword\ForgotPasswordController@index");
    Route::post("forgot/password/sent","Dashboard\User\ForgotPassword\ForgotPasswordController@sendEmail");
    Route::get("changepassword/{id}","Dashboard\User\ForgotPassword\ForgotPasswordController@reset");
    Route::put("forgot/password/resets","Dashboard\User\ForgotPassword\ForgotPasswordController@update");

    Route::resource("histories","Dashboard\User\DashboardUser\HistoriesController", ["only" =>
      ["index","show"]
    ]);
});

Route::prefix("main")->group(function() {
  Route::post("process/sent","LandingPage\MainController@store");
});

//Grouping error Page
Route::prefix('error/page')->group(function () {
  Route::get('404', ['as' => '404', 'uses' => 'ErrorPage\ErrorController@notfound']);
  Route::get('500', ['as' => '500', 'uses' => 'ErrorPage\ErrorController@fatal']);
});

//URL for Logs
Route::prefix("logs")->group(function(){

});

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
