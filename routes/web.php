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

Route::get('/', function () {  return view('index');;})->name('index');

Route::get('archimomi-dessin-3D', function () { return view('boite-dessin3D');})->name('boite-dessin3D');

Route::get('archimomi-dessin-d-architecture', function () { return view('dessin-d-architecture');})->name('dessin-d-architecture');

Route::get('archimomi-modelisation-3D', function () { return view('modelisation3D');})->name('modelisation3D');

Route::get('archimomi-suivi-chantier', function () { return view('chantier');})->name('chantier');

Route::get('archimomi-decoration-conseil', function () { return view('decoration');})->name('decoration');

Route::get('archimomi-projet-batiment', function () { return view('batiment');})->name('batiment');

Route::get('archimomi-contactez_nous', function () { return view('contact');})->name('contact');

Route::post('archimomi-SendMail', 'MailController@SendMailcontact')->name('contact.SendMailcontact');