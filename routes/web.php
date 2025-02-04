<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartementController;

Route::get('/', [DepartementController::class, 'index']);

Route::get('/department/{id}', [DepartementController::class, 'show']);

Route::get('/about', [DepartementController::class, 'aboutMember']);

Route::get('/technoscope', function () {
    return view('technoscope');
});
