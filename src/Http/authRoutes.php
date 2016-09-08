<?php

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/recover-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');


