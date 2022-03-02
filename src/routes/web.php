<?php
use App\Http\Controllers\CompaniesController;
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
//Route::get('/', [CompaniesController::class, 'index']);



Route::get('/', function () {
    return view('layouts.app');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompaniesController::class, 'create'])->name('companies.create');
Route::get('/companies/layout', [CompaniesController::class, 'layout'])->name('companies.layout');

Route::post('/companies/store', [CompaniesController::class, 'store'])->name('companies.store');

Route::get('/companies/edit/{company_id}', 'CompaniesController@edit')->name('companies_edit');
Route::post('/companies/edit/{company_id}', 'CompaniesController@update')->name('companies_update');





