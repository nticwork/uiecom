<?php

use App\Http\Controllers\Api\ApiProductController;
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



Route::apiResource('produits', ApiProductController::class);
/*

Route::get('produits', [ApiProductController::class, 'index']);
Route::post('produits', [ApiProductController::class, 'store']);
Route::get('produits/{produit}', [ApiProductController::class, 'show']);
Route::put('produits/{produit}', [ApiProductController::class, 'update']);
Route::patch('produits/{produit}', [ApiProductController::class, 'update']);
Route::delete('produits/{produit}', [ApiProductController::class, 'destroy']);



PUT → mise à jour complète (tout l’objet)

PATCH → mise à jour partielle (un ou quelques champs)

👉 En Laravel : même méthode update(), seule la requête envoyée change.




*/

Route::get('/filter', [\App\Http\Controllers\Api\ApiProductController::class,'filtrer']);

