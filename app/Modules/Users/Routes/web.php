<?php
Route::localizedGroup(function () {

    Route::group(['prefix' => config('cms.uri')], function () {

        Route::resource('users', 'Admin\IndexController');

    });

    /*Auth route*/
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('user.logout');

    /*Personal cabinet*/

    Route::get('personal','IndexController@personal')->name('user.personal')->middleware('page');
});
