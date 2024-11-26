<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'guest.'],function(){
    Route::get('/',[HomeController::class,'index'])->name('home.index');
});

Route::group(['as' => 'auth.'],function() {
    Route::get('/login',[LoginController::class,'index']);
});

Route::get('/homeowner',function(){

    return view('homeowner.dashboard.index');

});