<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;

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

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}',[HomeController:: class,'test']);

Route::get('beranda',[HomeController:: class,'showBeranda']);
Route::get('beranda/{status}',[HomeController:: class,'showBeranda']);
Route::get('kategory',[HomeController:: class,'showKategory']);
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);

Route::get('login',[AuthController:: class,'showLogin']);
Route::post('login',[AuthController:: class,'loginProcess'])->name('login');
Route::get('logout',[AuthController:: class,'logout']);


Route::get('register',[AuthController:: class,'showRegister']);
Route::get('create',[HomeController:: class,'showCreate']);
Route::get('template.base',[HomeController:: class,'showTemplate']);

Route::prefix('admin')->middleware('auth')->group(function(){

		Route::post('produk/filter', [ProdukController:: class, 'filter']);
		Route::get('produk',[ProdukController:: class,'index']);
		Route::get('produk/create',[ProdukController:: class,'create']);
		Route::post('produk',[ProdukController:: class,'store']);
		Route::get('produk/{produk}',[ProdukController:: class, 'show']);
		Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
		Route::put('produk/{produk}',[ProdukController:: class, 'update']);
		Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);

		Route::get('user',[UserController:: class,'index']);
		Route::get('user/create',[UserController:: class,'create']);
		Route::post('user',[UserController:: class,'store']);
		Route::get('user/{user}',[UserController:: class, 'show']);
		Route::get('user/{user}/edit',[UserController:: class, 'edit']);
		Route::put('user/{user}',[UserController:: class, 'update']);
		Route::delete('user/{user}',[UserController:: class, 'destroy']);
	});

Route::get('/', [ClientController:: class, 'home']);
Route::post('home/filter', [ClientController:: class, 'filter']);
Route::get('produk/{produk}', [ClientController:: class, 'show']);


Route::get('kategory',[KategoryController:: class,'index']);
Route::get('kategory/create',[KategoryController:: class,'create']);
Route::post('kategory',[KategoryController:: class,'store']);
Route::get('kategory/{kategory}',[KategoryController:: class, 'show']);
Route::get('kategory/{kategory}/edit',[KategoryController:: class, 'edit']);
Route::put('kategory/{kategory}',[KategoryController:: class, 'update']);
Route::delete('kategory/{kategory}',[KategoryController:: class, 'destroy']);

Route::get('supplier',[SupplierController:: class,'index']);
Route::get('supplier/create',[SupplierController:: class,'create']);
Route::post('supplier',[SupplierController:: class,'store']);
Route::get('supplier/{supplier}',[SupplierController:: class, 'show']);
Route::get('supplier/{supplier}/edit',[SupplierController:: class, 'edit']);
Route::put('supplier/{supplier}',[SupplierController:: class, 'update']);
Route::delete('supplier/{supplier}',[SupplierController:: class, 'destroy']);

Route::get('pelanggan',[PelangganController:: class,'index']);
Route::get('pelanggan/create',[PelangganController:: class,'create']);
Route::post('pelanggan',[PelangganController:: class,'store']);
Route::get('pelanggan/{pelanggan}',[PelangganController:: class, 'show']);
Route::get('pelanggan/{pelanggan}/edit',[PelangganController:: class, 'edit']);
Route::put('pelanggan/{pelanggan}',[PelangganController:: class, 'update']);
Route::delete('pelanggan/{pelanggan}',[PelangganController:: class, 'destroy']);

Route::get('promo',[PromoController:: class,'index']);
Route::get('promo/create',[PromoController:: class,'create']);
Route::post('promo',[PromoController:: class,'store']);
Route::get('promo/{promo}',[PromoController:: class, 'show']);
Route::get('promo/{promo}/edit',[PromoController:: class, 'edit']);
Route::put('promo/{promo}',[PromoController:: class, 'update']);
Route::delete('promo/{promo}',[PromoController:: class, 'destroy']);


Route::get('daftar',[DaftarController:: class,'index']);
Route::get('daftar/create',[DaftarController:: class,'create']);
Route::post('daftar',[DaftarController:: class,'store']);
Route::get('daftar/{daftar}',[DaftarController:: class, 'show']);
Route::get('daftar/{daftar}/edit',[DaftarController:: class, 'edit']);
Route::put('daftar/{daftar}',[DaftarController:: class, 'update']);
Route::delete('daftar/{daftar}',[DaftarController:: class, 'destroy']);

Route::get('test-collection', [HomeController:: class, 'testCollection']);
Route::get('home', [HomeController:: class, 'home']);
Route::get('card', [HomeController:: class, 'showCard']);

Route::get('card', [HomeController:: class, 'cardPembelian']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);