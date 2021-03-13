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

    route::get('get-main-categories','categoriesConcategoriesCon@index');  //get all data from table categories

    route::post('get-name-byId','categoriesConcategoriesCon@nameByID');  //get data from table api by id

    route::post('shangStatus','categoriesConcategoriesCon@shangStatus');  //get data from table api by id

    route::group(['prefix'=>'admin','namespace' => 'Admin'],function() {
        route::post('login', 'authCon@login');
    });
});



route::group(['middleware' => ['api','checkpassword','ChangeLanguage','CheckAdminToken:admin-api'] ,'namespace' => 'Api'],function() {

    route::get('caregories','categoriesConcategoriesCon@caregories');  //get all data from table categories

});
