<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ToolApiController;

Route::get('/tools', [ToolApiController::class, 'index']);
