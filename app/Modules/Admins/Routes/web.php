<?php


Route::group(['prefix' => config('cms.uri')], function() {

    Route::resource('admins', 'Admin\IndexController');

});
