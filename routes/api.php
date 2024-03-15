<?php

use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\PatientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(MedecinsController::class,[
    Route::get('medecins', 'get'),
    Route::get('medecins/{id}', 'getById'),
    Route::delete('medecins/{id}', 'delete'),
    Route::post('medecins', 'create'),
    Route::put('medecins/{id}', 'update'),
])  ;

Route::controller(PatientsController::class,[
    Route::get('patients', 'get'),
    Route::get('patients/{id}', 'getById'),
    Route::delete('patients/{id}', 'delete'),
    Route::post('patients', 'create'),
    Route::put('patients/{id}', 'update'),
])  ;
