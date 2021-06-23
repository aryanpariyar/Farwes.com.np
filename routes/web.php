<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return ('welcome');
// });
Route::get('/','HomeController@checkNavbar')->name('home');

// Route::get('/','DashboardController@showAllCarouselData');

// Route::get('/newonew','DashboardController@showAllCarouselDat');

Route::get('test','HomeController@demo');
Route::get('login','HomeController@showLogin')->name('login');
Route::post('login','HomeController@authenticate');
Route::post('register','HomeController@addAllDataToFrom');
Route::get('register','HomeController@showRegister');
Route::get('forget_password','HomeController@showForgetPassword');
Route::get('varification','HomeController@showVarification');
Route::get('new_password','HomeController@showNewPassword');
Route::get('change_password','HomeController@showChangePassword');
Route::get('privacy_policy','HomeController@showPrivacyPolicy');
Route::get('email_varification','HomeController@showEmailVarification');


Route::get('courses','HomeController@accessCourseData')->name('courses');


Route::get('terms_condition','HomeController@showTermsCondition');
Route::get('disclaimer','HomeController@showDisclaimer');
Route::get('contact','HomeController@showContact');
Route::get('course_details','HomeController@showCourseDetails');
Route::get('rating','HomeController@showRating');
Route::get('about','HomeController@showAbout');
Route::get('upload_course','HomeController@showUploadCourse');
Route::post('upload_course','HomeController@fetchDataFromCourseForm');

Route::get('search_items','HomeController@showSearch');
Route::get('logout','HomeController@proceedToLogout');
Route::get('my-profile','HomeController@showMyProfile');
Route::get('edit-profile','HomeController@showEditProfile');
Route::get('categories','HomeController@showCategories');
Route::get('my-courses','HomeController@myCourse');
Route::get('enroll-courses','HomeController@enrollCourse');
Route::get('my-Favourite','HomeController@favouriteCourse');


