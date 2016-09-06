<?php

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', function () {
    return redirect('oauth/token');
});

