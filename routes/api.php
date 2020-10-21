<?php

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

/*
/ -------------------------------------------------------------------------
/ Egy blog post CRUD formátuma.
/--------------------------------------------------------------------------
/
/ 1. get all (GET) api/posts
/ 2. create a post (POST) api/posts
/ 3. get a single (GET) api/posts/{id}
/ 4. update a single (PUT/PATCH) api/posts/{id}
/ 5. delete a single (DELTE) api/posts/{id}
*/

//Útvonal megadása. Param1 az útvonal, param2 a hozzá kapcsolt metódus.
Route::get('/test', function () {
    return ["msg" => "JSON uzenet"];//JSON formátumban get metódussal küldi át a tömböt a HTTP szerver.
    
});

/*
/ -------------------------------------------------------------------------
/ Egy blog oldal posztjaihoz erőforrás elkészítése.
/--------------------------------------------------------------------------
/
/ 1. create database and migration
/ 2. create a model
/ 2.1 Eloquent ORM db service
/ 3. create a controller get info from db
/ 4. return a JSON format with the info
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
