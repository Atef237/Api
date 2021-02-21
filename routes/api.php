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


route::group(['middleware' => ['api','checkpassword','ChangeLanguage'] ,'namespace' => 'Api'],function(){

    route::post('get-main-categories','categoriesConcategoriesCon@index');  //get all data from table categories

});
