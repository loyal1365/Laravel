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
//});
//
//Route::get('about',function(){
//    $people = ['A','B','C','D'];
////   return view('about',['people' => $people]);
//   return view('about',compact('people'));
////   return view('about')->with('people',$people);
////   return view('about')->withPeople($people);
//});
//


Route::get('/','PagesController@home');
Route::get('about','PagesController@about');