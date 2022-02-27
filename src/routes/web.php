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
    return view('welcome');
});
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompaniesController::class, 'create'])->name('companies.create');

Route::post('/companies/store', [CompaniesController::class, 'store'])->name('companies.store');
