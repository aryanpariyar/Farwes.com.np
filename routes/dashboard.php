<?php

Route::get('carouselData','DashboardController@carousel');
Route::get('/','DashboardController@showDashboard')->name('dashboard');
Route::post('carouselData','DashboardController@fetchDataFromCarouselForm')->name('carouselData');
Route::get('admin-login','DashboardController@adminLogin')->name('adminLogin');
Route::post('admin-login','DashboardController@loginAdmin');
Route::get('admin-register','DashboardController@adminRegister')->name('adminRegister');
Route::post('admin-register','DashboardController@registerAdmin');
