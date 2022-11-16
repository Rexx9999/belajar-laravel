<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//dalam File AkunController
route::get('/akun', [AkunController::class, 'index'])->name('index-akun');
route::get('/akun/create', [AkunController::class, 'form'])->name('akun-create');

//dalam File AccountController
route::get('/account',        [AccountController::class, 'index']);
route::get('/account/create', [AccountController::class, 'create']);
route::get('/account/show',   [AccountController::class, 'show']);

//dalam File TemplateController
route::get('/template/blank', [TemplateController::class, 'master']);

//dalam File TableController
route::get('/table', [TableController::class, 'table'])->name('createAkun');
route::get('/data', [TableController::class, 'data'])->name('data');

//dalam File SiswaController
// route::get('/student', [SiswaController::class, 'index'])->name('StudentIndex');
// route::get('/student/create', [SiswaController::class, 'create'])->name('StudentCreate');
// route::post('/student', [SiswaController::class, 'store'])->name('StudentStore');
// route::get('/student/{id}', [SiswaController::class, 'show'])->name('StudentShow');
// route::get('/student/{id}/edit', [SiswaController::class, 'edit'])->name('StudentEdit');
// route::put('/student/{id}', [SiswaController::class, 'update'])->name('StudentUpdate');
// route::delete('/student/{id}', [SiswaController::class, 'destroy'])->name('StudentDestroy');

// route::controller(SiswaController::class)->group(function () {
//     route::get('/student', 'index')->name('StudentIndex');
//     route::get('/student/create', 'create')->name('StudentCreate');
//     route::post('/student', 'store')->name('StudentStore');
//     route::get('/student/{id}', 'show')->name('StudentShow');
//     route::get('/student/{id}/edit', 'edit')->name('StudentEdit');
//     route::put('/student/{id}', 'update')->name('StudentUpdate');
//     route::delete('/student/{id}', 'destroy')->name('StudentDestroy');
// });

//file SiswaController 
route::resource('student', SiswaController::class);

//file SiswaController 
route::resource('kelas', KelasController::class);
