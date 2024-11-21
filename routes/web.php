<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'guest.'],function(){
    Route::get('/');
});