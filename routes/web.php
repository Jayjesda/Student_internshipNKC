<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoblogController;
use App\Http\Controllers\ProfileController;
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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


//joblogcontroller

Route::get('joblog','JoblogController@show_joblog');  //โชว์หน้าเพิ่มข้อมูลการฝึก
Route::post('joblog-insert','JoblogController@insert_joblog'); //เพิ่มข้อมูลการฝึกงาน
Route::get('joblog-history','JoblogController@history_joblogs'); //แสดงประวัติการบันทึกและแก้ไข


//profilecontroller

Route::get('profile','ProfileController@show_profile');
Route::post('Profile-insert','ProfileController@insert_profile');
Route::put('Profile-update/{id}','ProfileController@update_profile');











