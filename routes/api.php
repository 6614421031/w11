<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;

Route::apiResource('trees', TreeController::class)
    ->names('api.trees');