<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('welcome');
//    return redirect('welcome');
//  });
Route::get('welcome', function () {
    return view('welcome');
});

Route::get('say/{name?}', ['as'=> 'linjingbo',function ($name='everybody') {
    return 'hello ,'.$name ;
}]);

Route::get('deshboard',function (){
    return 'deshboard';
});

Route::group(['prefix'=>'admin'],function (){
    Route::get('deshboard',function (){
        return 'admin deshboard';
    });
});

    Route::get('/',['as'=>'home.index','uses'=>
        'HomeController@index']);

