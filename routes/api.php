<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeckController;

Route::apiResource('/', DeckController::class);
