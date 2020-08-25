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
Auth::routes([
    'register' => false,
    'update' => false,
    'reset' => false,
    'request' => false,
    'email' => false,
    'confirm' => false,
]);

Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function() {
    Route::namespace('Panel')->prefix('panel')->group(function() {
        Route::resource('profile', 'ProfileController')->except(['show', 'create', 'store', 'destroy']);
        Route::resource('skills', 'SkillController')->except(['show']);
        Route::resource('softskills', 'SoftskillController')->except(['show']);
        Route::resource('projects', 'ProjectController')->except(['show']);
        Route::resource('employment', 'EmploymentController')->except(['show']);
        Route::resource('education', 'EducationController')->except(['show']);
    });
});

