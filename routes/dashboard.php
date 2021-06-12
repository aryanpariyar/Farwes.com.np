<?php

Route::get('carouselData','DashboardController@carousel');
Route::get('dashboard','DashboardController@showDashboard')->name('dashboard');
Route::post('carouselData','DashboardController@fetchDataFromCarouselForm');
