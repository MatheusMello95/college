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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/college')->group(function(){
    Route::get('/','StudentController@list')->name('student.list'); //Students List

    Route::get('student/add', 'StudentController@add')->name('student.add'); //Add Student
    Route::post('student/add', 'StudentController@addAction'); //Action Add

    Route::get('course/add', 'CourseController@add')->name('course.add'); //Add Course
    Route::post('course/add', 'CourseController@addAction'); //Action add

    Route::get('student/edit/{id}', 'StudentController@edit')->name('student.edit'); //Edit Student
    Route::post('student/edit/{id}', 'StudentController@editAction'); //Action Edit

    Route::get('couse/edit/{id}', 'CourseController@edit')->name('couser.edit'); //Edit Course
    Route::post('course/edit/{id}', 'CourseController@editAction'); //Action Edit

    Route::get('student/delete/{id}', 'StudentController@delete')->name('student.delete'); //Action Delete

    Route::get('course/delete/{id}', 'CourseController@delete')->name('course.delete'); //Action Delete
});

Route::get('/address/{cep}', 'AddressController@getAddress');
