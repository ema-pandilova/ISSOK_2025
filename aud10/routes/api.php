<?php

use App\Http\Controllers\AiAgentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ask-ai-agent', [AiAgentController::class, 'ask']);
