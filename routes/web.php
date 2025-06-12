<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TicketsController;

Route::get('/', function () {
    return Inertia::render('tickets/Login');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('productos', ProductsController::class);

});
Route::resource('tickets', TicketsController::class);


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
// });
