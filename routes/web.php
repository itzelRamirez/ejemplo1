<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeProductController;

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

Route::get('/', function () {
                              return view('welcome');  
                            }
           );
                      
$uri='/ruta1';
$action=function(){return 'cadena de la ruta1';};
Route::get($uri, $action);

Route::get('/usuarios',[UserController::class,'index']);

$uri_2='/usuarios/detalles';
$action_2=function(){return 'Mostrando el detalle del 	 usario: ' . $_GET['id'];};
Route::get($uri_2, $action_2);


Route::get('/usuarios/{id}',[UserController::class,'show'])->where('id','\d+');


Route::get('/usuarios/nuevo',[UserController::class,'create'] );


Route::get('productos/{sku}/{nombre?}',[WelcomeProductController::class,'index'] );

//Route::get('productos/{sku}/{nombre}', function($sku,$nombre){return "SKU: {$sku} nombre: {$nombre}";});
