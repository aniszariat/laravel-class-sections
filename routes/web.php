<?php

use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/section')->name('section.')->controller(SectionController::class)->group(
    function () {
        Route::get('/', 'index')->name('all');
    }
);

Route::get('/section', [SectionController::class, 'index']);
