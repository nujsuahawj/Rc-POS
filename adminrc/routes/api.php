<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers\API\Byjack;

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
Route::get('/getallproducts',[App\Http\Controllers\API\Byjack\GetAllProducts::class, 'index']);
Route::get('/getsanas',[App\Http\Controllers\API\Byjack\GetAllProducts::class, 'sanas']);
Route::get('/getnoghog',[App\Http\Controllers\API\Byjack\GetAllProducts::class, 'noghog']);
Route::get('/getauthor',[App\Http\Controllers\API\Byjack\GetAllProducts::class, 'author']);


