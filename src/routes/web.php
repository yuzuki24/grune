<?php
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\Backend\PostalCodeController;
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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompaniesController::class, 'create'])->name('companies.create');
Route::get('/companies/layout', [CompaniesController::class, 'layout'])->name('companies.layout');

Route::post('/companies/store', [CompaniesController::class, 'store'])->name('companies.store');

Route::get('/companies/edit/{company_id}', [CompaniesController::class, 'edit'])->name('companies.edit');
Route::post('/companies/edit/{company_id}', [CompaniesController::class, 'update'])->name('companies.update');
Route::delete('/companies/destroy/{company_id}', [CompaniesController::class, 'destroy'])->name('companies.destroy');

//住所自動入力//
Route::get('postal_code', 'HomeController@postal_code');
Route::get('/Backend/postal_search', [PostalCodeController::class, 'search'])->name('postalcode.search');

//画像//
Route::get('imgs/first', 'ImgsController@first')->name('first');
Route::resource('imgs', 'ImgsController', ['only' => ['create', 'store', 'destroy']]);
