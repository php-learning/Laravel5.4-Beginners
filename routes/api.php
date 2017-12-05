<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('papa', function (){
    return response()->json(["OK"=>true]);
});

Route::get('down', function (){
    return response()->download('css/app.css');
});
Route::get('file', function (){
    return response()->file('css/app.css');
});