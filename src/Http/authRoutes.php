<?php

// Create a new user and signup data
Route::post('/signup', 'Auth\RegisterController@register');

// Sign in with email and password and get a token
Route::post('/signin', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

// Recover password via link
Route::post('/recover-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Recover username using phone
Route::post('/recover-username', 'Auth\ForgotPasswordController@recoverUsernameByPhone');

// Password Reset Routes...
Route::get('password/reset', 'LibreEHR\FHIR\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'LibreEHR\FHIR\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'LibreEHR\FHIR\Http\Controllers\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'LibreEHR\FHIR\Http\Controllers\Auth\ResetPasswordController@reset');

Route::get('/login', function () {
    return json_encode([ 'error' => 'Unauthorised.', 'code' => 401], true);
});

// Create the initial Patient Resource by POSTing a Patient Resource to /register
Route::post('/register', '\LibreEHR\FHIR\Http\Controllers\RegisterController@post')->middleware('auth:api');

// Get user signin data, status and endpoint
Route::get('/user', 'Auth\UserController@index', ['only' => [ 'index' ]])->middleware('auth:api');

Route::put('/user/update', 'Auth\RegisterController@signupUpdate')->middleware('auth:api');

