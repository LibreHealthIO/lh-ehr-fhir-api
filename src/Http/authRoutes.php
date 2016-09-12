<?php

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/recover-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('/recover-username', 'Auth\ForgotPasswordController@recoverUsernameByPhone');
Route::post('signup', 'Auth\RegisterController@signup');



