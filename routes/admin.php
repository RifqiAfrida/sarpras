<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToController;

use App\Http\Controllers\AklController;
use App\Http\Controllers\AphController;
use App\Http\Controllers\DkvController;
use App\Http\Controllers\PplgController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RentsController;

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
/*Bagian Routes yang digunakan untuk menghubungkan atau menjadi alamat website.
disini menggunakan Route::resource agar lebih mudah memanggil function yang di controller.
*/

Route::middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/pplg', PplgController::class)->name('pplg');
    Route::get('/dkv', DkvController::class)->name('dkv');
    Route::get('/akl', AklController::class)->name('akl');
    Route::get('/aph', AphController::class)->name('aph');
    Route::get('/to', ToController::class)->name('to');
    Route::resource('users', UserController::class);
    Route::resource('rents', RentsController::class);
    Route::resource('adminusers', AdminController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('inventories', InventoryController::class);
    Route::delete('inventories/hapus/{inventories}', [InventoryController::class, 'destroy'])->name('delete');
});

require __DIR__ . './auth.php';
