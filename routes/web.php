<?php

use Illuminate\Support\Facades\Route;
use App\Httpt\Controllers\PagesController;

/*use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;*/

Route::get('/',[PagesController::class,'fnIndex'])-> name('xInicio');
Route::get('/galeria/{numero}',[PagesController::class,'fnGaleria']) -> where('numero','[0-9]+') -> name('xGaleria');
Route::get('/lista',[PagesController::class,'fnLista'])-> name('xLista');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function (){
    route::get('/Dashboard', function () {
        return view('dashboard');

    })->name('dashboard');
}) ;   



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    /*return view('welcome'); */

Route::get('/',function() {
    return view('welcome');
}) -> name('xInicio');

Route:: get('/saludo',function() {
    return "Hola mundo desde laravel...";

});

Route:: get('/galeria/{numero}',function($numero) {
    return "Este es el codigo de la foto: ".$numero;
}) -> where('numero','[0-9]+');

Route::view('/galeria','pagGaleria',['valor' =>15])-> name('xGaleria');

Route:: get('/lista',function() {
    return view('pagLista');
}) ->name('xLista');