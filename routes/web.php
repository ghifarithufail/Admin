<?php

use App\Http\Controllers\KoordDesaController;
use App\Http\Controllers\KoordKecamatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RaihanSuaraController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\ReportController;
use App\Models\Koord_desa;
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
    return view('home');
})->middleware('auth');;

// ------------------------------ REPORT  ---------------------------------- //
Route::get('/', [ReportController::class, 'allData'])->middleware('auth','hakakses:admin');;
Route::get('/data-relawan', [ReportController::class, 'dataRelawan'])->middleware('auth','hakakses:admin');;
Route::get('/data-desa', [ReportController::class, 'dataDesa'])->middleware('auth');;

// //UPDATE
Route::get('/relawan-data-update/{id}',[ReportController::class, 'getDataRelawan'])->name('getDataRelawan')->name('getDataRelawan')->middleware('auth','hakakses:admin');;
Route::post('/udpateDR/{id}',[ReportController::class, 'udpateDR'] )->name('udpateDR')->name('udpateDR')->middleware('auth','hakakses:admin');;

//GET
Route::get('/report-kelurahan', [ReportController::class, 'datakelurahan'])->middleware('auth','hakakses:admin');;

Route::get('/report-kecamatan', [ReportController::class, 'datakecamatan'])->middleware('auth','hakakses:admin');;
Route::get('/report-kecamatan-nama', [ReportController::class, 'kecamatan'])->middleware('auth','hakakses:admin');;

Route::get('/report-desa', [ReportController::class, 'reportDesa'])->middleware('auth','hakakses:admin');;
Route::get('/report-desa-nama', [ReportController::class, 'Desa'])->middleware('auth','hakakses:admin');;

Route::get('/report-user', [ReportController::class, 'datauser'])->middleware('auth','hakakses:admin');;

// Route::get('/desa', [ReportController::class, 'findDesa'])->middleware('auth');;


// ------------------------------ LOGIN & REGISTER ---------------------------------- //
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser',[LoginController::class, 'registeruser'] )->name('registeruser');
Route::post('/loginuser',[LoginController::class, 'loginuser'] )->name('loginuser');

Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');


// ------------------------------ RAIHAN SUARA ---------------------------------- //
Route::get('/raihan-suara', [RaihanSuaraController::class, 'raihan_suara'])->name('raihan_suara')->middleware('auth','hakakses:admin');;

//create
Route::get('/raihan-suara-create', [RaihanSuaraController::class, 'postRH'])->name('postRH')->middleware('auth','hakakses:admin');;
Route::post('/RHStore', [RaihanSuaraController::class, 'RHStore'])->name('RHStore')->middleware('auth','hakakses:admin');;


// ------------------------------ USER ---------------------------------- //
Route::get('/user', [LoginController::class, 'user'])->name('user')->middleware('auth','hakakses:admin');;;

Route::get('/user-update/{id}',[LoginController::class, 'getUser'])->name('getUser')->middleware('auth','hakakses:admin');;
Route::post('/udpateU/{id}',[LoginController::class, 'udpateU'] )->name('udpateU')->middleware('auth','hakakses:admin');;

Route::get('/deleteU/{id}',[LoginController::class, 'deleteU'] )->name('deleteU')->middleware('auth','hakakses:admin');;
// ------------------------------ Koordinator Kecamatan ---------------------------------- //

//GET
Route::get('/koordinator-kecamatan', [KoordKecamatanController::class, 'koord_kecamatan'])->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;

//CREATE
Route::get('/koordinator-kecamatan-create', [KoordKecamatanController::class, 'postKK'])->name('postKC')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;
Route::post('/kkStore', [KoordKecamatanController::class, 'kkStore'])->name('kkStore')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;

//UPDATE
Route::get('/koordinator-kecamatan-update/{id}',[KoordKecamatanController::class, 'getKoord_kecamatan'])->name('getKoord_kecamatan')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;
Route::post('/updateKK/{id}',[KoordKecamatanController::class, 'udpateKK'] )->name('udpateKK')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;

//DELETE
Route::get('/deleteKK/{id}',[KoordKecamatanController::class, 'deleteKK'] )->name('deleteKK')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;

// ------------------------------  RELAWAN ---------------------------------- //

//GET
Route::get('/relawan', [RelawanController::class, 'relawan'])->name('relawan')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;

//Find Pemilih
Route::get('/findRelawan',[RelawanController::class, 'findRelawan'])->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;

//CREATE
Route::get('/relawan-create', [RelawanController::class, 'postR'])->name('postR')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;
Route::post('/rStore', [RelawanController::class, 'rStore'])->name('rStore')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;

// //UPDATE
Route::get('/relawan-update/{id}',[RelawanController::class, 'getRelawan'])->name('getRelawan')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;
Route::post('/updateR/{id}',[RelawanController::class, 'udpateR'] )->name('udpateR')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;

// //DELETE
Route::get('/deleteR/{id}',[RelawanController::class, 'deleteR'] )->name('deleteR')->middleware('auth','hakakses:admin');;


// ------------------------------  KOORDINATOR DESA ---------------------------------- //

//GET
Route::get('/koordinator-desa', [KoordDesaController::class, 'koord_desa'])->name('koord_desa')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;

// //CREATE
Route::get('/koordinator-desa-create', [KoordDesaController::class, 'postKD'])->name('postKD')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;
Route::post('/kDStore', [KoordDesaController::class, 'kDStore'])->name('kDStore')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;

// //UPDATE
Route::get('/koordinator-desa-update/{id}',[KoordDesaController::class, 'getKoord_desa'])->name('getKoord_desa')->middleware('auth','hakakses:admin');;
Route::post('/updateKD/{id}',[KoordDesaController::class, 'updateKD'] )->name('updateKD')->middleware('auth','hakakses:admin');;

// //DELETE
Route::get('/deleteKD/{id}',[KoordDesaController::class, 'deleteKD'] )->name('deleteKD')->middleware('auth','hakakses:admin');;



