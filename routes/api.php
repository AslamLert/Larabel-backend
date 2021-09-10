<?php

use App\Http\Controllers\AccountController;
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

//Get all accounts //http://127.0.0.1:8000/api/accounts
Route::get('accounts',[AccountController::class,'getAccount']);

//Get Specific account detail //http://127.0.0.1:8000/api/account/2
Route::get('account/{id}',[AccountController::class,'getAccountById']);

//Add account //
Route::post('addAccount', [AccountController::class,'addAccount']);

//Update account
Route::put('updateAccount/{id}', [AccountController::class,'updateAccount']);

//Delete account
Route::delete('deleteAccount/{id}',[AccountController::class,'deleteAccount']);
