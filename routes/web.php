<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;


 
Route::get('/', [HomeController::class, 'home']);







/*Route::get('/', function () {
    return view('welcome');
});
*/