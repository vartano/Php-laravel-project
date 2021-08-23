<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/contact',function(){
	return view('contact');
})->name('contact');

Route::get('/menu',function(){
	return view('menu');
})->name('menu');

Route::get('/about',function(){
	return view('about');
})->name('about');

Route::get('/settings',function(){
	return view('settings');
})->name('settings');

Route::get('/mail',function(){
	return view('mail');
})->name('mail');

Route::get('/add_employee',function(){
	return view('add_employee');
})->name('add_employee');

Route::get('/add_menu',function(){
	return view('add_menu');
})->name('add_menu');

Route::get('/delivery',function(){
	return view('delivery');
})->name('delivery');

// contact post

Route::post('/contact/submit', [ContactController::class,'submit'])->name('contact-form');

// add-employee post
Route::post('/add_employee/submit',[EmployeeController::class,'submit'])->name('employee-form');

Route::get('/add_employee',[EmployeeController::class,'all_emp'])->name('add_employee');
Route::get('/add_employee/all/{id}/delete',[EmployeeController::class,'del_emp'])->name('del-emp');

// menu post

Route::post('/add_menu/submit',[MenuController::class,'addItem'])->name('menu-form');
Route::get('/add_menu',[MenuController::class,'allItems'])->name('add_menu');
Route::get('/menu',[MenuController::class,'allItem'])->name('menu');

// mail post

Route::get('/mail', [ContactController::class,'all_data'])->name('mail');
Route::get('/menu/all/{id}/delete',[MenuController::class,'del_item'])->name('del-item');
Route::get('/mail/all/{id}/delete',[ContactController::class,'del_con'])->name('del-con');

// Route::get(
//     '/add_employee/all/{id}', 
//     [EmployeeController::class, 'del_one']
// ) -> name('del-one');

// Route::get(
//     '/add_employee/all/{id}',
//     [EmployeeController::class, 'update_emp']
// )->name('update_emp');

Route::post('/add_employee/all/{id}/update',[EmployeeController::class,'update_emp_submit'])->name('update-emp-submit');
// update post
Route::get(
    '/add_employee/all/{id}/update', 
    [EmployeeController::class, 'update_emp']
)->name('update-emp');

// Route::post(
//     '/add_employee/all/{id}/update',
//     [EmployeeController::class, 'update_emp_submit']
// )->name('update-emp-submit');

Route::get(
    '/add_menu/all/{id}/update', 
    [MenuController::class, 'update_menu']
)->name('update-menu');

Route::post('/add_menu/all/{id}/update',[MenuController::class,'update_menu_submit'])->name('update-menu-submit');
