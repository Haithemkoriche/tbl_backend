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
<<<<<<< HEAD
Route::middleware(['checkBearerToken'])->group(function () {
    Route::controller(MedecinsController::class,)->prefix('medecins')->group(function () {
        Route::get('/', 'get');
        Route::get('/{id}', 'getById');
        Route::delete('/{id}', 'delete');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
    });
    Route::controller(PatientsController::class,)->prefix('patients')->group(function () {
        Route::get('/', 'get');
        Route::get('/{id}', 'getById');
        Route::delete('/{id}', 'delete');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
    });
});
=======

Route::controller(MedecinsController::class,)->prefix('medecins')->group(function(){
    Route::get('/', 'get');
    Route::get('/{id}', 'getById');
    Route::delete('/{id}', 'delete');
    Route::post('/', 'create');
    Route::put('/{id}', 'update');

})
 ;

Route::controller(PatientsController::class,)->prefix('patients')->group(function(){
    Route::get('/', 'get');
    Route::get('/{id}', 'getById');
    Route::delete('/{id}', 'delete');
    Route::post('/', 'create');
    Route::put('/{id}', 'update');

})
 ;
>>>>>>> 959bf555d3840ed936fa41419ab902742a83cb8d
