<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\ReservationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


Route::get('/', function () {
    return view('pages.user.home');
})->name('accueil');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contactez-nous');

Route::get('/demandecontact', [ContactController::class, 'index']);
Route::post('/demandedecontact', [ContactController::class, 'create'])->name('contact');

Route::get('/addproduct', [AddProductController::class, 'index'])->name('afficherProduit');
Route::post('/createproduct', [AddProductController::class, 'create'])->name('ajouterProduit');
Route::get('/deleteproduct/{id}', [AddProductController::class, 'destroy'])->name('supprimerProduit');
Route::get('/editproduct/{id}', [AddProductController::class, 'edit'])->name('editProduit');
Route::post('/updateproduct/{id}', [AddProductController::class, 'update'])->name('updateProduit');

Route::get('/notrecarte', [ProductViewController::class, 'index'])->name('notrecarte');
Route::get('/produit/{id}', [ProductViewController::class, 'show'])->name('produit');


Route::get('/reserver', function () {
    return view('pages.user.reserver');
})->name('reserver');

Route::get('/nouvellereservation', [ReservationController::class, 'index'])->name('newresa');
Route::post('/reserver', [ReservationController::class, 'create'])->name('reserver');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
