<?php

use Illuminate\Support\Facades\Route;

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
