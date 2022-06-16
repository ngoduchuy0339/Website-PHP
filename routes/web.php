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

Auth::routes();

Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout')->name('logout');

// search
Route::get('/search', 'TourController@find');
Route::post('/search', 'TourController@findTour')->name('find_tour');

// tour-info
Route::group(['prefix' => 'tour-info'], function () {
    Route::get('/{tour}','TourController@tourInfo')->name('tour_info');

    Route::patch('/{tour}','TourController@tourBooking')->name('tour_booking.update');

    Route::post('/{tour}/add','TourController@paymentAdd')->name('tour_booking_add');
});











// user-profile
Route::group(['prefix' => 'user'], function () {
    Route::get('/{user}','ProfileController@profileUser')->name('profile_user');

    Route::get('/{user}/edit','ProfileController@edit')->name('user.edit');
    Route::patch('/{user}','ProfileController@update')->name('user.update');
});

// admin-login
Route::group(['prefix' => 'login'], function () {
    Route::get('admin','AdminController@getLogin')->name('login_admin');
    Route::post('admin','AdminController@postLogin')->name('login_admin_check');
});

// admin-stuff
Route::group(['prefix' => 'admin'], function () {
    // Route::get('/home', 'AdminController@viewIndex')->name('adminIndex');
    Route::get('/','AdminController@index')->name('admin_index');
    Route::get('/logout','AdminController@logout')->name('admin_logout');
    
    Route::get('/table/user','AdminController@tableUser')->name('admin_table_user');
    Route::get('/table/tour','AdminController@tableTour')->name('admin_table_tour');
    Route::get('/table/payment','AdminController@tablePayment')->name('admin_table_payment');

    Route::get('/table/tour/add','AdminController@tableTourAdd')->name('admin_tour_add');
    Route::post('/table/tour/add','AdminController@tableTourAddPost')->name('admin_tour_add_post');

    Route::get('/table/tour/{tour}/edit','AdminController@tableTourEdit')->name('admin.edit');
    Route::patch('/table/tour/{tour}','AdminController@tableTourEditPost')->name('admin.update');

    // Route::post('/admin/act','AdminController@store');
    // Route::get('/admin/act/addTour','AdminController@create');
});