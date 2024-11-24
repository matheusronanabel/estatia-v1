<?php

use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'guest.'],function(){
    Route::get('/',[HomeController::class,'index'])->name('home.index');
});