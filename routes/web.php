<?php
Auth::routes();

Route::group([ "middleware" => "guest" ], function () {
    Route::get('/', 'Redirect@render')->name('index');
});

Route::group([ "middleware" => "user" ], function () {

    Route::group([ "namespace" => "Home" ], function () {
        Route::get('me', 'Me@render')->name('me');
        Route::get('client', 'Client@render')->name('client');
        Route::get('logout', 'Logout@render')->name('logout');
    });

    Route::group([ "namespace" => "Articles" ], function () {
        Route::get('news', 'News@render')->name('News');
    });

});


