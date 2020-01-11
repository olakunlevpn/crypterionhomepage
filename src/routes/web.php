<?php

Route::group(['namespace' => 'Olakunlevpn\Crypterionhomepage\Http\Controllers', 'middleware' => ['web']], function () {

	Route::get('/', 'HomepageController@index')->name('Crypterionhomepage');
	Route::get('/page', 'HomepageController@page')->name('Crypterionhomepage');
	Route::get('/become-vendor', 'HomepageController@vendor')->name('Crypterionhomepage');

	Route::get('/page/terms', 'HomepageController@terms')->name('Crypterionhomepage');
	Route::get('/page/privacy', 'HomepageController@privacy')->name('Crypterionhomepage');
	Route::get('/page/cookies', 'HomepageController@cookies')->name('Crypterionhomepage');
	Route::get('/page/aboutus', 'HomepageController@about')->name('Crypterionhomepage');

});
