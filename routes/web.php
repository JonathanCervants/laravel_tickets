<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TicketsController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::controller(TicketsController::class)->group(function(){
    Route::get('/ticket','create');
    Route::post('/ticket','store');
    Route::get('/tickets','index');
    Route::get('/ticket/{slug}','show')->name('ticket.show');
    Route::get('/ticket/{slug}/editar','edit')->name('ticket.edit');
    Route::get('/ticket/{slug}/eliminar','delete')->name('ticket.delete');
    Route::post('/ticket/{slug}/editar','update');
});


// <?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TicketsController;
// use Illuminate\Support\Facades\Mail;
// /*
// |routes are loaded by the RouteServiceProvider and all of them will  be assigned to the "web" middleware group. 
// |Curso::all()
// |php artisan migrate:fresh --seed
// */

// Route::get('/', function () {
//   return redirect('/tickets');
// });

// Route::get('/tickets', 'TicketsController@create');


// });

// Route::get('sendemail', function () {
//   $data = array(
//     'nombre' => 'Kurax'
//   );

//   Mail::send('emails.welcome', $data, function ($message) {

//     $message->from('jesus.cervantes@kurax.dev', 'Learning Laravel');

//     $message->to('jonathancervants@gmail.com')->subject('Learning Laravel test email');

// });
// });
