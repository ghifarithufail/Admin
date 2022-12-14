<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\KoordDesaController;
use App\Http\Controllers\KoordKecamatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RaihanSuaraController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\ReportController;
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

// ------------------------------ PDF  ---------------------------------- //
//PDF KORCAM
Route::get('/pdf-koordinator-kecamatan', [PdfController::class, 'korcam'])->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;
Route::post('/pdf-korcam-detail', [PdfController::class, 'viewPDF'])->name('viewPDF');

//PDF KORDES
Route::get('/pdf-koordinator-desa', [PdfController::class, 'kordes'])->middleware('auth','hakakses:admin');;
Route::post('/pdf-kordes-detail', [PdfController::class, 'PDFDesa'])->name('viewPDF');

//PDF Kelurahan
Route::get('/pdf-kelurahan', [PdfController::class, 'kelurahan'])->middleware('auth','hakakses:admin');;
Route::post('/pdf-kelurahan-detail', [PdfController::class, 'PDFkelurahan'])->name('viewPDF');

//PDF User
Route::get('/pdf-user', [PdfController::class, 'user'])->middleware('auth','hakakses:admin');;
Route::post('/pdf-user-detail', [PdfController::class, 'PDFUser']);

//PDF User
Route::get('/pdf-relawan', [PdfController::class, 'relawan'])->middleware('auth','hakakses:admin');;
Route::post('/pdf-relawan-detail', [PdfController::class, 'PDFRelawan']);

// ------------------------------ REPORT DATA RELAWAN  ---------------------------------- //

//PDF
Route::post('/pdf-data-relawan', [ReportController::class, 'viewPDF'])->name('viewPDF');

//GET
Route::get('/data-relawan', [ReportController::class, 'dataRelawan'])->middleware('auth','hakakses:admin');;
Route::get('/data-relawans', [ReportController::class, 'dataRelawans'])->middleware('auth','hakakses:admin');;

// //UPDATE
Route::get('/relawan-data-update/{id}',[ReportController::class, 'getDataRelawan'])->name('getDataRelawan')->name('getDataRelawan')->middleware('auth','hakakses:admin');;
Route::post('/udpateDR/{id}',[ReportController::class, 'udpateDR'] )->name('udpateDR')->name('udpateDR')->middleware('auth','hakakses:admin');;


// ------------------------------ REPORT DASHBOARD  ---------------------------------- //
Route::get('/', [ReportController::class, 'allData'])->middleware('auth','hakakses:admin');;
Route::get('/data-desa', [ReportController::class, 'dataDesa'])->middleware('auth');;


// ------------------------------ REPORT KELURAHAN  ---------------------------------- //
//GET
Route::get('/report-kelurahan', [ReportController::class, 'datakelurahan'])->middleware('auth','hakakses:admin');;
//PDF
Route::post('/pdf-data-kelurahan', [ReportController::class, 'viewPDFKelurahan'])->name('viewPDFKelurahan');


// ------------------------------ REPORT KECAMATAN  ---------------------------------- //
Route::get('/report-kecamatan', [ReportController::class, 'datakecamatan'])->middleware('auth','hakakses:admin');;
Route::get('/report-kecamatan-nama', [ReportController::class, 'kecamatan'])->middleware('auth','hakakses:admin');;

//PDF
Route::post('/pdf-data-kecamatan', [ReportController::class, 'viewPDFKecamatan'])->name('viewPDFDesa');


// ------------------------------ REPORT DESA  ---------------------------------- //
Route::get('/report-desa', [ReportController::class, 'reportDesa'])->middleware('auth','hakakses:admin');;
Route::get('/report-desa-nama', [ReportController::class, 'Desa'])->middleware('auth','hakakses:admin');;

//PDF
Route::post('/pdf-data-Desa', [ReportController::class, 'viewPDFDesa'])->name('viewPDFDesa');


// ------------------------------ REPORT USER  ---------------------------------- //
Route::get('/report-user', [ReportController::class, 'datauser'])->middleware('auth','hakakses:admin');;

// Route::get('/desa', [ReportController::class, 'findDesa'])->middleware('auth');;


// ------------------------------ LOGIN & REGISTER ---------------------------------- //
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser',[LoginController::class, 'registeruser'] )->name('registeruser');
Route::post('/loginuser',[LoginController::class, 'loginuser'] )->name('loginuser');

Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');

Route::get('/contoh', [ContohController::class, 'contoh'])->name('contoh')->middleware('auth','hakakses:admin');;;

Route::post('/pdf-user', [LoginController::class, 'viewPDF'])->name('viewPDF');



// ------------------------------ RAIHAN SUARA ---------------------------------- //
Route::get('/raihan-suara', [RaihanSuaraController::class, 'raihan_suara'])->name('raihan_suara')->middleware('auth','hakakses:admin');;

//create
Route::get('/raihan-suara-create', [RaihanSuaraController::class, 'postRH'])->name('postRH')->middleware('auth','hakakses:admin');;
Route::post('/RHStore', [RaihanSuaraController::class, 'RHStore'])->name('RHStore')->middleware('auth','hakakses:admin');;

//PDF
Route::post('/pdf-raihan-suara', [RaihanSuaraController::class, 'viewPDF'])->name('viewPDF');

// ------------------------------ USER ---------------------------------- //
Route::get('/user', [LoginController::class, 'user'])->name('user')->middleware('auth','hakakses:admin');;;

//UPDATE
Route::get('/user-update/{id}',[LoginController::class, 'getUser'])->name('getUser')->middleware('auth','hakakses:admin');;
Route::post('/udpateU/{id}',[LoginController::class, 'udpateU'] )->name('udpateU')->middleware('auth','hakakses:admin');;

//DELETE
Route::get('/deleteU/{id}',[LoginController::class, 'deleteU'] )->name('deleteU')->middleware('auth','hakakses:admin');;


// ------------------------------ Koordinator Kecamatan ---------------------------------- //

//GET
Route::get('/koordinator-kecamatan', [KoordKecamatanController::class, 'koord_kecamatan'])->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;
Route::get('/koordinator-kecamatan-cari', [KoordKecamatanController::class, 'cari'])->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;

//CREATE
Route::get('/koordinator-kecamatan-create', [KoordKecamatanController::class, 'postKK'])->name('postKC')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;
Route::post('/kkStore', [KoordKecamatanController::class, 'kkStore'])->name('kkStore')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan');;

//UPDATE
Route::get('/koordinator-kecamatan-update/{id}',[KoordKecamatanController::class, 'getKoord_kecamatan'])->name('getKoord_kecamatan')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;
Route::post('/updateKK/{id}',[KoordKecamatanController::class, 'udpateKK'] )->name('udpateKK')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;

//DELETE
Route::get('/deleteKK/{id}',[KoordKecamatanController::class, 'deleteKK'] )->name('deleteKK')->name('koord_kecamatan')->middleware('auth','hakakses:admin');;

//PDF
Route::post('/pdf-korcam', [KoordKecamatanController::class, 'viewPDF'])->name('viewPDF');

// ------------------------------  RELAWAN ---------------------------------- //

//GET
Route::get('/relawan', [RelawanController::class, 'relawan'])->name('relawan')->name('koord_kecamatan')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;

//Find Pemilih
Route::get('/findRelawan',[RelawanController::class, 'findRelawan'])->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa,relawan');;

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
Route::get('/koordinator-desa-cari', [KoordDesaController::class, 'cari'])->name('koord_desa')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;

// //CREATE
Route::get('/koordinator-desa-create', [KoordDesaController::class, 'postKD'])->name('postKD')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;
Route::post('/kDStore', [KoordDesaController::class, 'kDStore'])->name('kDStore')->middleware('auth','hakakses:admin,koordinator_kecamatan,koordinator_desa');;

// //UPDATE
Route::get('/koordinator-desa-update/{id}',[KoordDesaController::class, 'getKoord_desa'])->name('getKoord_desa')->middleware('auth','hakakses:admin');;
Route::post('/updateKD/{id}',[KoordDesaController::class, 'updateKD'] )->name('updateKD')->middleware('auth','hakakses:admin');;

// //DELETE
Route::get('/deleteKD/{id}',[KoordDesaController::class, 'deleteKD'] )->name('deleteKD')->middleware('auth','hakakses:admin');;

//PDF
Route::post('/pdf-kordes', [KoordDesaController::class, 'viewPDF'])->name('viewPDF');