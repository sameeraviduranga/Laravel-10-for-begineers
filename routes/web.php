<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use SebastianBergmann\CodeUnit\FunctionUnit;

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
Route::view('/','INDEX');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/exe',function(){
    return "exe ";
});

Route::get('User/{id}',function($id){
    return "id - " . $id;
});

Route::get('Item/{id}',function($id){
    return "Item id - " . $id;
});


Route::get('ID/{id}',function($id){
    echo 'ID : ' . $id;
})->where('id','[0-9]+');

Route::get('user/{name?}',function($name ='Tutorial'){
    return $name;
})->where('name','[a-zA-Z]+');

Route::get('user/{id}/{name?}',function($name ='Tutorial'){
    return $name;
})->where('name','[a-zA-Z]+');

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
 ]);

 Route::match(['POST','GET'],'/getpost',function(){
    return "get and post";
 });

Route::any("/dir",function(){
    return redirect("/redirected");
});
 

 