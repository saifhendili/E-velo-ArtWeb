<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\AssociationController;

use App\Http\Controllers\LocalController;
use App\Http\Controllers\CyclicteController;



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

Route::get('/', [\App\Http\Controllers\MainController::class , 'index'] );
//CRUD operations velo

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::resource('velos',VeloController::class);
    Route::resource('bloc',BlocController::class);
    Route::post("AddVelo", [VeloController::class,'AddVelo']);
Route::put("EditVelo/{id}", [VeloController::class,'EditVelo']);
Route::get("AllVelo", [VeloController::class,'getAllVelos']);
Route::delete("destroyVelo/{id}",[VeloController::class,'destroyVelo']);
//CRUD Event
//Route::post("AddEvent", [EventController::class,'AddEvent']);
//Route::put("EditEvent/{id}", [EventController::class,'EditEvent']);
//Route::get("getAllEvents", [EventController::class,'getAllEvents']);
//Route::delete("destroyEvent/{id}",[EventController::class,'destroyEvent']);
Route::resource('/admin/event',EventController::class);

Route::resource('/admin/Cyclicte',CyclicteController::class);

Route::resource("/admin/association",AssociationController::class);
Route::resource("/admin/locale",LocalController::class);

<<<<<<< HEAD
Route::get('/locale/{association_id}/getLocals', [\App\Http\Controllers\AssociationController::class , 'getLocals'] );
Route::get('/admin/Cyclicte/{event_id}/getCyclicte', [\App\Http\Controllers\EventController::class , 'getCyclicte'] );
=======

Route::get('/admin/locale/{association_id}/getLocals', [\App\Http\Controllers\AssociationController::class , 'getLocals'] );
Route::get('Cyclicte/{event_id}/getCyclicte', [\App\Http\Controllers\EventController::class , 'getCyclicte'] );
>>>>>>> 980a128329976b52b9af88a8369694a0df871af8

});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
