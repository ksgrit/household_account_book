<?php

use App\Http\Controllers\Membercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;


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
});


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//一覧画面の表示
Route::get('/', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
//収支の登録画面の表示
Route::get('/create', [App\Http\Controllers\PaymentController::class, 'create'])->name('payment.create');
//収支の登録処置
Route::post('/store', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
//収支の編集画面
Route::get('/edit/{id}', [App\Http\Controllers\PaymentController::class, 'edit'])->name('payment.edit');
// 収支の更新処理
Route::post('/update/{id}', [App\Http\Controllers\PaymentController::class, 'update'])->name('payment.update');
//収支の削除処置
Route::post('/destroy{id}', [App\Http\Controllers\PaymentController::class, 'destroy'])->name('payment.destroy');



Route::get('/tarukame_totalling', [App\Http\Controllers\kakeiboController::class,'kakeibo_list']);

Route::get('/tarukame_home', [App\Http\Controllers\kakeiboController::class,'kakeibo_home']);

Route::get('/tukibetu/{now_tuki}/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'add_month']);

Route::get('/tukibetu_return/{now_tuki}/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'return_month']);

Route::post('/data_search', [App\Http\Controllers\kakeiboController::class,'data_search']);




Route::get('/targetamote',[Membercontroller::class,'targetamote'])->name('targetamote');
Route::get('/targetamotesetting',[Membercontroller::class,'targetamotesetting'])->name('targetamotesetting');



//一覧画面の表示
Route::get('/', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
//収支の登録画面の表示
Route::get('/create', [App\Http\Controllers\PaymentController::class, 'create'])->name('payment.create');
//収支の登録処置
Route::post('/store', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
//収支の編集画面
Route::get('/edit/{id}', [App\Http\Controllers\PaymentController::class, 'edit'])->name('payment.edit');
// 収支の更新処理
Route::post('/update/{id}', [App\Http\Controllers\PaymentController::class, 'update'])->name('payment.update');
//収支の削除処置
Route::post('/destroy{id}', [App\Http\Controllers\PaymentController::class, 'destroy'])->name('payment.destroy');
