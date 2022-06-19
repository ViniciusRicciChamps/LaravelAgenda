<?php

use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ShowController;
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


//rota para exibir a lista de contatos
Route::get('/exibirlista', [ControllerPost::class, 'index']);

//guarda um novo registro
Route::post('/salvarcontato', [ControllerPost::class, 'store']);

//exibe um contato especifico atraves do id
Route::get('/exibirregistro/{id}', [ControllerPost::class, 'show']);

//atualiza um registro em especifico atraves do ID
Route::put('/updateregistro/{id}', [ControllerPost::class, 'update']);

//apaga um registro especifico atraves do ID
Route::delete('/apagarregistro/{id}', [ControllerPost::class, 'destroy']);

//Route::get('/', [ShowController::class, 'show']);