<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ContractController;
use App\Http\Controllers\SalonController;

Route::apiResource('contracts', ContractController::class);
Route::apiResource('salons', SalonController::class);



