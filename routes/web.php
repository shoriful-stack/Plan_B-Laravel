<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/{num1}/{num2}", [HomeController::class, "page"]);
