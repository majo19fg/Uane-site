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

Route::get('/programas', function (){
    $data = App\Programa::all();
    return $data;
});

Route::get('/programas/{campus}', function (App\Campus $campus){
    $campusName = $campus->name;
    $data = App\Programa::whereHas('campus', function ($q) use ($campusName){
        $q->where('name', $campusName);
    })->where('modalidadPrograma_id', '1')->orderBy('tipoPrograma_id')->get();

    return $data;
});


