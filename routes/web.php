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

use App\Mail\TestEmail;


Route::get('/plantilla', function () {
    return view('plantillas/plantillaDEFAULT');
});

Route::get('/', function () {
    return redirect('/my-programs');
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/referral', function () {
    return view('referral');
});


Route::get('/pay-method', function () {
    return view('pay-method');
});

Route::get('/pay-method/edit-paymethod', function () {
    return view('edit-paymethod');
});

Route::get('/upgrade-account', function () {
    return view('upgrade-account');
});

Route::get('/edit-account', function () {
    return view('edit-account');
});

Route::get('/edit-password', function () {
    return view('edit-password');
});



Route::get('/set_language/{lang}', 'Controller@setLanguage')->name( 'set_language');

Route::get('/my-programs', function () {
    return view('my-programs');
});


Route::get('/action-plan', function () {
    return view('action-plan');
});


Route::get('/my-progress', function () {
    return view('my-progress');
});


Route::get('/email-preferences', function () {
    return view('email-preferences');
});

Route::get('/logout', function () {
    return redirect('/login');
});



Route::get('/tasks', function () {
    return view('view-course-tasks');
});

Route::get('/view-course', function () {
    return view('view-course');
});


Route::get('/view-course/{Modulo}/{class}', 'CourseController@show')->name("ShowClass")->where(['Modulo' => '[0-9]+', 'class' =>'[0-9]+']);;

Route::get('/view-course/{Modulo}', function ($Modulo ) {
    return redirect()->route('ShowClass', ['Modulo' => $Modulo, "class"=>1]);
})->name("ShowModule");

