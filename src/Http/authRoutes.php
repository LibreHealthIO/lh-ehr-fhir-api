<?php

Route::post('/signup', 'Auth\RegisterController@register');
Route::post('/signin', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
Route::post('/recover-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('/recover-username', 'Auth\ForgotPasswordController@recoverUsernameByPhone');
