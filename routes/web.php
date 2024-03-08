<?php

use App\Http\Controllers\adminController;
use App\Models\events;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/Admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:Admin'])->name('Admin');

// Route::get('/Organisateur', function () {
//     return view('organisateur.index');
// })->middleware(['auth', 'role:Organisateur'])->name('Organisateur');

Route::get('/User', function () {
    return view('user.index');
})->middleware(['auth', 'role:User'])->name('User');



Route::middleware('auth', 'role:Admin')->group(function () {
    Route::get('/Categories', [CategoriesController::class, 'index'])->name('Categories');
    Route::post('/AddCategory', [CategoriesController::class, 'store'])->name('AddCategory');
    Route::get('/all-categories', [CategoriesController::class, 'AllCategorys'])->name('all-categories');
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::get('/users', [adminController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [adminController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}', [adminController::class, 'restore']);
    Route::get('/admin/gestionOfEvents', [AdminController::class, 'getAllEvents'])->name('gestionOfEvents');
    Route::post('/admin/events/{eventId}/accept', [AdminController::class, 'acceptEvent'])->name('admin.events.accept');
    Route::get('/Admin', [EventsController::class, 'countAllEvents'])->name('Admin');

});

Route::middleware('auth', 'role:Organisateur')->group(function () {
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::get('/form', [EventsController::class, 'index'])->name('events.form');
    Route::post('/events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/organizer/events', [EventsController::class, 'organizerEvents'])->name('organizer.events');
    Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::post('/events_update/{event}', [EventsController::class, 'update'])->name('update_events');
    Route::post('/events/{event}', [EventsController::class, 'destroy'])->name('events.destroy');
    Route::post('/confirm-ticket/{id}', [ReservationController::class, 'confirmTicket'])->name('confirm.ticket');
    Route::get('/user-reservations', [ReservationController::class, 'userReservations'])->name('user.reservations');
    Route::get('/Organisateur', [EventsController::class, 'countUserEvents'])->name('Organisateur');
});

Route::middleware('auth', 'role:User')->group(function () {
    Route::get('/tickets', [ReservationController::class, 'tickets'])->name('tickets');

});

Route::get('/events', [EventsController::class, 'events'])->name('events.index');
Route::get('/events/search', [EventsController::class, 'search'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    // Route::get('/tickets', [ReservationController::class, 'tickets'])->name('tickets');
    Route::post('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');



});

require __DIR__.'/auth.php';
