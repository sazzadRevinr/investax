<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormInfoController;
use App\Http\Controllers\UserFormController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('individual-information-checklist',function () {
    return view('IndividualInformationChecklist');
});
Route::get('/dashboard', function () {
    return view('admindashboard');
})->middleware(['auth', 'verified','isAdmin'])->name('dashboard');
Route::middleware(['auth', 'verified','isAdmin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
    Route::get('forms',[FormInfoController::class,'index'])->name('forms');
    Route::resource('user-forms',UserFormController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('dashboard');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
