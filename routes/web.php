<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\StokController;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\PinjamBarang;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\User;

Route::get('/', function () {
   return view('home');
});
// Rute untuk menampilkan semua data suplier
Route::get('/suplier', [SupplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/suplier/create', [SupplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SupplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SupplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SupplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SupplierController::class, 'destroy'])->name('suplier.destroy');

// Rute untuk menampilkan semua data user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Rute untuk menampilkan form membuat user baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Rute untuk menambahkan data user baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route untuk menampilkan form edit
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
// Route untuk mengupdate data user
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
// Route untuk menghapus data user
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// Rute untuk menampilkan semua data barangmasuk
Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
// Rute untuk menampilkan form membuat barangmasuk baru
Route::get('/barangmasuk/create', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
// Rute untuk menambahkan data barangmasuk baru
Route::post('/barangmasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
// Route untuk menampilkan form edit
Route::get('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');
// Route untuk mengupdate data barangmasuk
Route::put('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
// Route untuk menghapus data baragnmasuk
Route::delete('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'destroy'])->name('barangmasuk.destroy');

// Rute untuk menampilkan semua data barangkeluar
Route::get('/barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
// Rute untuk menampilkan form membuat barangkeluar baru
Route::get('/barangkeluar/create', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');
// Rute untuk menambahkan data barangkeluar baru
Route::post('/barangkeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
// Route untuk menampilkan form edit
Route::get('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');
// Route untuk mengupdate data barangkeluar
Route::put('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');
// Route untuk menghapus data baragkeluar
Route::delete('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.destroy');

// Rute untuk menampilkan semua data pinjambarang
Route::get('/pinjambarang', [PinjamBarangController::class, 'index'])->name('pinjambarang.index');
// Rute untuk menampilkan form membuat pinjambarang baru
Route::get('/pinjambarang/create', [PinjamBarangController::class, 'create'])->name('pinjambarang.create');
// Rute untuk menambahkan data pinjambarang baru
Route::post('/pinjambarang', [PinjamBarangController::class, 'store'])->name('pinjambarang.store');
// Route untuk menampilkan form edit
Route::get('/pinjambarang/{pinjambarang}', [PinjamBarang::class, 'edit'])->name('pinjambarang.edit');
// Route untuk mengupdate data pinjambarang
Route::put('/pinjambarang/{pinjambarang}', [PinjamBarangController::class, 'update'])->name('pinjambarang.update');
// Route untuk menghapus data pinjambarang
Route::delete('/pinjambarang/{pinjambarang}', [PinjamBarangController::class, 'destroy'])->name('pinjambarang.destroy');

// Rute untuk menampilkan semua data stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
// Rute untuk menampilkan form membuat stok baru
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
// Rute untuk menambahkan data pinjambarang baru
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
// Route untuk menampilkan form edit
Route::get('/stok/{stok}', [StokController::class, 'edit'])->name('stok.edit');
// Route untuk mengupdate stok
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');
// Route untuk menghapus data stok
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');