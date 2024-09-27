<?php

use App\Http\Controllers\Admin\WasteController;
use App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['preventMiddleware'])->group(function () {
    Route::get('/', [Controllers\TentangKamiController::class, 'index'])->name('TentangKami');
    Route::get('/Layanan', [Controllers\LayananController::class, 'index'])->name('Layanan');
    Route::get('/Blog', [Controllers\BlogController::class, 'index'])->name('Blogg');
    Route::get('/KontakKami', [Controllers\KontakKamiController::class, 'index'])->name('KontakKami');
Route::get('/DaurUlang', [Controllers\PusatDaurUlangController::class, 'index'])->name('DaurUlang');
Route::get('/DaurUlang/{center}', [Controllers\PusatDaurUlangController::class, 'show'])->name('DaurUlang.detail');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//user routes
Route::middleware(['auth', 'usersMiddleware'])->group(function(){

    // Route::get('dashboard',[UsersController::class, 'index'])->name('dashboard');
 
});

//admin routes
Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    
    Route::get('/admin/dashboard',[Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    // Route::resource('/admin/PusatDaurUlang', AdminPusatDaurUlangController::class);
    Route::get('/admin/PusatDaurUlang/{center}/edit', [Controllers\Admin\PusatDaurUlangController::class, 'edit'])->name('PusatDaurUlang.edit'); 
    Route::put('/admin/PusatDaurUlang/{center}', [Controllers\Admin\PusatDaurUlangController::class, 'update'])->name('PusatDaurUlang.update'); 
    Route::get('/admin/PusatDaurUlang', [Controllers\Admin\PusatDaurUlangController::class, 'index'])->name('PusatDaurUlang.index');
    Route::get('/admin/PusatDaurUlang/create', [Controllers\Admin\PusatDaurUlangController::class, 'create'])->name('PusatDaurUlang.create'); 
    Route::post('/admin/PusatDaurUlang', [Controllers\Admin\PusatDaurUlangController::class, 'store'])->name('PusatDaurUlang.store'); 
    Route::delete('admin/PusatDaurUlang/{center}', [Controllers\Admin\PusatDaurUlangController::class, 'destroy'])->name('PusatDaurUlang.hapus');

    Route::get('/admin/blog',[Controllers\Admin\BlogController::class, 'index'])->name('admin.blog.index');

    

    Route::get('/admin/waste', [WasteController::class, 'index'])->name('admin.waste.index');
    Route::get('/admin/waste/create', [WasteController::class, 'create'])->name('admin.waste.create'); 
    Route::post('/admin/waste', [WasteController::class, 'store'])->name('admin.waste.store'); 
    Route::get('/admin/waste/{id}', [WasteController::class, 'show'])->name('admin.waste.show'); 
    Route::get('/admin/waste/{id}/edit', [WasteController::class, 'edit'])->name('admin.waste.edit'); 
    Route::put('/admin/waste/{id}', [WasteController::class, 'update'])->name('admin.waste.update'); 
    Route::delete('/admin/waste/{id}', [WasteController::class, 'destroy'])->name('admin.waste.destroy'); 
    // Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    // ->name('logout');
});
