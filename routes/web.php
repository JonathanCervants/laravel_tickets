<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return Inertia::render('tickets/Login');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('productos', ProductsController::class);
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/tickets.php';
// });
