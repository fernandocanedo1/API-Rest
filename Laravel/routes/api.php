<?php
use App\Http\Controllers\ApiREST\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('produtos', [HomeController::class, 'index']);
Route::post('produtos', [HomeController::class, 'createProduct']);
Route::get('produtos/{id}',[HomeController::class, 'getProduct']);
Route::put('produtos/update/{id}',[HomeController::class, 'updateProduct']);
Route::delete('produtos/delete/{id}',[HomeController::class, 'deleteProduct']);