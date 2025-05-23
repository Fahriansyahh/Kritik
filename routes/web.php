<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Filament\Pages\Dashboard;

Route::get('/', function () {
    return view('about');
});
Route::get('/saran-kritik', [FormController::class, 'showForm'])->name('form.show');
// Menangani pengiriman form dengan metode POST di route yang sama
Route::post('/saran-kritik', [FormController::class, 'submitAll'])->name('submit.all');
