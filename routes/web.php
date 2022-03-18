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
})->name('welcome');





Route::get('Login',App\Http\Controllers\Pages\Login::class)->name('Login');
Route::get('Register',App\Http\Controllers\Pages\Register::class)->name('Register');


Route::get('Contact',App\Http\Controllers\Components\Contact::class)->name('Contact');



// this is the permission role the admin is allowed to access all permissions
Route::get('Permission',App\Http\Controllers\Admin\Permission\Index::class)->name('Permission');
Route::get('Permission/{user:username}/Edit',App\Http\Controllers\Admin\Permission\Edit::class)->name('Edit');







Route::get('Electronic',App\Http\Controllers\Electronic\View::class)->name('Electronic');
Route::get('Electronic/{id}',App\Http\Controllers\Electronic\Details::class)->name('detailsElectronic');

Route::get('NewElectronic',App\Http\Controllers\Electronic\Index::class)->name('ViewElc');



Route::get('Clothes',App\Http\Controllers\Clothes\View::class)->name('Clothes');
Route::get('Clothes/{id}',App\Http\Controllers\Clothes\Details::class)->name('detailsClothes');

Route::get('NewClothes',App\Http\Controllers\Clothes\Index::class)->name('ViewClo');


Route::get('Sales',App\Http\Controllers\Admin\Sales::class)->name('sales');



