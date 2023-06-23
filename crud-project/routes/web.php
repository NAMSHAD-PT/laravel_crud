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

// use App\models\User;

// Route::get('/', function () {
//     $student=User::all();
//     return view('welcome',compact('student'));
// });
// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\abcController;

// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/','abcController@home')->name('home');
Route::get('new-user/','abcController@create')->name('new.user');
Route::post('save-user/','abcController@save')->name('save.user');
Route::get('edit-user/{id}','abcController@edit')->name('edit.user');
Route::post('update-user','abcController@update')->name('update.user');
Route::get('delete-user/{id}','abcController@delete')->name('delete.user');