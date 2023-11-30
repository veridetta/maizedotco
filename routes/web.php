<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenyakitController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/index',[HomeController::class,'index']);
Route::get('/index2',[HomeController::class,'index2']);
Route::get('/loginpage',[AuthController::class,'loginpage']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/signpage',[AuthController::class,'signpage']);
Route::post('/signup',[AuthController::class,'signup']);
Route::get('/tminder',[HomeController::class,'alarm']);
Route::get('/jagung',[HomeController::class,'jagung']);
Route::get('/jekit',[HomeController::class,'jekit']);
Route::get('/taskminder',[HomeController::class,'taskminder']);
Route::get('/dentcorn',[HomeController::class,'dentcorn']);
Route::get('/dentcorn',[HomeController::class,'dentcorn']);
Route::get('/flintcorn',[HomeController::class,'flintcorn']);
Route::get('/podcorn',[HomeController::class,'podcorn']);
Route::get('/popcorn',[HomeController::class,'popcorn']);
Route::get('/sweetcorn',[HomeController::class,'sweetcorn']);
Route::get('/waxycorn',[HomeController::class,'waxycorn']);
Route::get('/diagnosa',[HomeController::class,'diagnosa']);
Route::get('/info',[HomeController::class,'info']);
Route::get('/bercak_daun',[HomeController::class,'bercak_daun']);
Route::get('/bulai_jagung',[HomeController::class,'bulai_jagung']);
Route::get('/busuk_batang',[HomeController::class,'busuk_batang']);
Route::get('/busuk_pelepah',[HomeController::class,'busuk_pelepah']);
Route::get('/gosong',[HomeController::class,'gosong']);
Route::get('/hawar_daun',[HomeController::class,'hawar_daun']);
Route::get('/karat_daun',[HomeController::class,'karat_daun']);
Route::get('/mosaik_jagung',[HomeController::class,'mosaik_jagung']);
Route::get('/artikel',[HomeController::class,'artikel']);
Route::get('/artikel1',[HomeController::class,'artikel1']);
Route::get('/artikel2',[HomeController::class,'artikel2']);
Route::get('/artikel3',[HomeController::class,'artikel3']);


Route::get('/index3',[HomeController::class,'index3']);
Route::get('/index4',[HomeController::class,'index4']);
Route::get('/loginpageadmin',[AuthController::class,'loginpageadmin']);
Route::post('/loginadmin',[AuthController::class,'loginadmin']);
Route::get('/signpageadmin',[AuthController::class,'signpagea']);
Route::post('/signupadmin',[AuthController::class,'signupadmin']);
Route::get('/taskminder_admin',[HomeController::class,'taskminder_admin']);
Route::get('/jagung_admin',[HomeController::class,'jagung_admin']);
Route::get('/jekit_admin',[HomeController::class,'jekit_admin']);
Route::get('/dentcorn_admin',[HomeController::class,'dentcorn_admin']);
Route::get('/dentcorn_admin',[HomeController::class,'dentcorn_admin']);
Route::get('/flintcorn_admin',[HomeController::class,'flintcorn_admin']);
Route::get('/podcorn_admin',[HomeController::class,'podcorn_admin']);
Route::get('/popcorn_admin',[HomeController::class,'popcorn_admin']);
Route::get('/sweetcorn_admin',[HomeController::class,'sweetcorn_admin']);
Route::get('/diagnosa_admin',[HomeController::class,'diagnosa_admin']);
Route::get('/info_admin',[HomeController::class,'info_admin']);
Route::get('/bercak_daun_admin',[HomeController::class,'bercak_daun_admin']);
Route::get('/bulai_jagung_admin',[HomeController::class,'bulai_jagung_admin']);
Route::get('/busuk_batang_admin',[HomeController::class,'busuk_batang_admin']);
Route::get('/busuk_pelepah_admin',[HomeController::class,'busuk_pelepah_admin']);
Route::get('/gosong_admin',[HomeController::class,'gosong_admin']);
Route::get('/hawar_daun_admin',[HomeController::class,'hawar_daun_admin']);
Route::get('/karat_daun_admin',[HomeController::class,'karat_daun_admin']);
Route::get('/mosaik_jagung_admin',[HomeController::class,'mosaik_jagung_admin']);
Route::get('/jenis_penyakit_admin/index', [PenyakitController::class, 'index']);
Route::get('/jenis_penyakit_admin/getAllPenyakit', [PenyakitController::class, 'getAllPenyakit']);
Route::get('/artikel_admin',[HomeController::class,'artikel_admin']);
Route::get('/artikel1_admin',[HomeController::class,'artikel1_admin']);
Route::get('/artikel2_admin',[HomeController::class,'artikel2_admin']);
Route::get('/artikel3_admin',[HomeController::class,'artikel3_admin']);
