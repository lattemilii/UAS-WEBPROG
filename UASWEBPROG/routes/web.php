<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukCtr;
use App\Http\Controllers\UserCtr;
use App\Http\Controllers\LoginCtr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('LandingJualanMommy');
});

Route::get('/FullKatalogJualanMommy', function () {
    return view('FullKatalogJualanMommy');
});
Route::get("/KategoriProduk", [ProdukCtr::class, 'index']);

Route::get('/login', function () {
    return view('Login');
})->middleware('guest')->name('login');

Route::post('/login', [UserCtr::class, 'login'])->middleware('guest');

Route::post('/produk', [ProdukCtr::class, 'store'])->name('produk.store');

Route::get('/DashboardAdmin', [ProdukCtr::class, 'index'])->name('DashboardAdmin');

Route::get('/EditProduk/{id}', [ProdukCtr::class, 'edit'])->name('edit.produk');
Route::put('/produk/{id}', [ProdukCtr::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukCtr::class, 'destroy'])->name('produk.destroy');

Route::get('/admin', function () {
    return view('DashboardAdmin');
})->name('admin.dashboard');

Route::post('/admin/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('admin.logout');

use Illuminate\Support\Facades\Artisan;


