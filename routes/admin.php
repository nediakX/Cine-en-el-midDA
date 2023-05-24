<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/indexAdmin', [AdminController::class, 'indexAdmin'])->name('admin.indexAdmin');
});

Route::get('/CarteleraCine', function () {return view('CarteleraCine');});

route::post('Logout', [SessionsController::class, 'destroy'])->middleware('auth');
