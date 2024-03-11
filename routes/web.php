<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/emplois_du_temps', function () {
  return view('Programme.Emplois_du_temps');  
});
 Route::get('/tronc_commun', function () {
    return view('Module.Tronc_Commun');  
});
   Route::get('/spécialité', function () {
    return view('Module.Spécialité');  
});

Route::get('/acceuil', function () {
    return view('Acceuil.Acceuil');  
});

Route::get('/notes', function () {
    return view('Notes.Notes');  
});

Route::get('/cursus', function () {
    return view('Cursus.Cursus');  
});

Route::get('/information', function () {
    return view('Données_Personnelles.Information');  
});  
 Route::get('/photo', function () {
    return view('Données_Personnelles.Photo');  
});