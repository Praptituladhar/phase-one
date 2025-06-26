<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Livewire\store;

Route::get('/', function () {
    return response()->json([
        "message" => "Puupuu I Love You"
    ]);
});

Route::get('/pupuli', function () {
    return response()->json([
        "name" => "prasis",
        "job" => "pupuli se pyaaar",
        "message" => "love you yeti dherai mero  pupuli"
    ]);
});

// user routes
Route::get('/users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'create']);
