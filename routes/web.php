<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'Frontend\FrontendController@index')->name('index');

Route::group(['as'=>'frontend.'], function (){
});

Auth::routes();

Route::get('/backend-dashboard', 'HomeController@index')->name('home');

Route::group(['prefix'=>'backend-resume','as'=>'resume.'], function (){
    Route::get('/resume', 'Backend\ResumeController@index')->name('index');
    Route::post('/all-resume', 'Backend\ResumeController@store')->name('store');
    Route::post('/delete', 'Backend\ResumeController@destroy')->name('delete');
});
Route::group(['prefix'=>'backend-personal_info','as'=>'info.'], function (){
    Route::get('/personal_info', 'Backend\PersonalInformationController@index')->name('index');
    Route::post('/all-personal_info', 'Backend\PersonalInformationController@store')->name('store');
    Route::post('/delete', 'Backend\PersonalInformationController@destroy')->name('delete');
});
