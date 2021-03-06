<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

// auth
//Administrator Routing
Route::get("/","Login\LoginController@index");

Route::prefix('backend/pages')->group(function () {

    //Login Page
    Route::get("signin","Login\LoginController@auth");
    Route::post("auth/process","Login\LoginController@auth_process");
    Route::get("signout","Login\LoginController@mm_logout");
    // Route::post("email/checks","Login\LoginController@mmCheckEmail");

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
    Route::post('import', 'Dashboard\UserController@importUsersData')->name('import');
    Route::get("export/{type}", "Dashboard\UserController@exportUsersData");

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
    Route::post("questions/filter","Dashboard\PertanyaanController@search"); //Filter by assessment_id
    Route::post("questions/filter2","Dashboard\PertanyaanController@search2"); //Filter by kompetensi_id
    Route::get("questions/filter3/{assessment_id}/{kompetensi_id}/{rawscore_id}","Dashboard\PertanyaanController@search3"); //Filter by third key


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
    Route::post('userassessments/import',array('as'=>'import-csv-excel','uses'=>'Dashboard\UserAssessmentController@importUserDanJenis'));
    //Configurations
    Route::resource("configurations","Dashboard\ConfigurationController");

    // TODO: Configurations2
    Route::resource("configurations/session/two","Dashboard\ConfigurationTwoController");
    //Competencies Result
    // Route::get("competenciesresults","Dashboard\CompetenciesResultController@index");

    //Description Results
    Route::resource("descriptionresults","Dashboard\CompetenciesResultController");

    //Log Test
    Route::resource("partnerships","Dashboard\LandingPageController", ["only" =>
      ["index","show"]
    ]);

    //TODO: Partnerships
    Route::put("partnerships/update","Dashboard\LandingPageController@update");

    //TODO: Testimonial
    Route::get("testimonial","Dashboard\TestimoniController@index");
    Route::post("testimonial/store","Dashboard\TestimoniController@store");
    Route::delete("testimonial/delete","Dashboard\TestimoniController@destroy");
    Route::put("testimonial/update","Dashboard\TestimoniController@update");

    //TODO: Features
    Route::get("features","Dashboard\FiturController@index");
    Route::post("features/store","Dashboard\FiturController@store");
    Route::delete("features/delete","Dashboard\FiturController@destroy");
    Route::put("features/update","Dashboard\FiturController@update");

    //TODO: Personalities
    Route::resource("personalities","Dashboard\PersonalityController");

    //TODO: Pertanyaan kepribadian
    Route::get("selfhood/questions","Dashboard\SelfhoodQuestionController@index");
    Route::get("selfhood/questions/add","Dashboard\SelfhoodQuestionController@add");
    Route::get("selfhood/questions/{assessmentId}/{pertanyaanKepribadianId}/edit","Dashboard\SelfhoodQuestionController@edit");
    Route::post("selfhood/questions/filter","Dashboard\SelfhoodQuestionController@filterKepribadian");
    Route::post("selfhood/questions/store","Dashboard\SelfhoodQuestionController@store");
    // Route::post("selfhood/questions/validations","Dashboard\SelfhoodQuestionController@validation");
    Route::match(array('PUT', 'PATCH'), 'selfhood/questions/update',"Dashboard\SelfhoodQuestionController@update");
    Route::delete("selfhood/questions/answers/delete","Dashboard\SelfhoodQuestionController@destroyAnswer");
    Route::delete("selfhood/questions/delete","Dashboard\SelfhoodQuestionController@destroy");

    // TODO: Tipe bagian pertanyaan ke 2
    Route::resource("types","Dashboard\TipeController");

    // TODO: Penjelasan tipe bagian pertanyaan ke 2
    Route::resource("model/types","Dashboard\PenjelasanTipeController");
});

Route::prefix('user/pages')->group(function () {
    //Registration
    Route::get("register","Dashboard\User\Register\RegisterController@index");
    Route::post("register/store","Dashboard\User\Register\RegisterController@store");
    Route::get('register/verify/{id}', 'Dashboard\User\Register\RegisterController@confirm');

    //Lanjut Registration
    Route::get("continues","Dashboard\User\Register\RegisterController@continueIndex");


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

    Route::put("questions/update","Dashboard\User\DashboardUser\QuestionController@update");
    Route::post("questions/store","Dashboard\User\DashboardUser\QuestionController@store");

    Route::post("selfhood/questions/store","Dashboard\User\DashboardUser\QuestionController@storeJawaban");
    Route::match(array("PUT","PATCH"), "selfhood/questions/update/cache/info", "Dashboard\User\DashboardUser\QuestionController@updateCacheInfo");
    Route::get("results/final/{id}","Dashboard\User\DashboardUser\ResultController@show");
    Route::get("results/final/model/second/{id}","Dashboard\User\DashboardUser\ResultController@soalKedua");

    Route::get("forgot/password/sendemail","Dashboard\User\ForgotPassword\ForgotPasswordController@index");
    Route::post("forgot/password/sent","Dashboard\User\ForgotPassword\ForgotPasswordController@sendEmail");
    Route::get("changepassword/{id}","Dashboard\User\ForgotPassword\ForgotPasswordController@reset");
    Route::put("forgot/password/resets","Dashboard\User\ForgotPassword\ForgotPasswordController@update");

    Route::resource("histories","Dashboard\User\DashboardUser\HistoriesController", ["only" =>
      ["index","show"]
    ]);

    //TODO: Cetak PDF
    Route::get("prints/{id}/pdf","Dashboard\User\DashboardUser\HistoriesController@printPdf");
});

// TODO: Store for helping people problem
Route::prefix("main")->group(function() {
  Route::post("process/sent","LandingPage\MainController@store");
});

//TODO: Grouping error Page
Route::prefix('error/page')->group(function () {
  Route::get('404', ['as' => '404', 'uses' => 'ErrorPage\ErrorController@notfound']);
  Route::get('500', ['as' => '500', 'uses' => 'ErrorPage\ErrorController@fatal']);
});

//TODO: Call Execute clear cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
