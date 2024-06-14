<?php

use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/section')->name('section.')->controller(SectionController::class)->group(
    function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{section:slug}', 'show')->name('show');
        // Route::get('/{section:slug}/edit', 'form')->name('form');
        // Route::get('/create', 'form')->name('form');
    }
);
Route::prefix('/student')->name('student.')->controller(StudentController::class)->group(
    function () {
        Route::get('/new', 'form')->name('create');
        Route::get('/{student:id}', 'show')->name('show');
        Route::get('/{student:id}/edit', 'form')->name('edit');
    }
);




// Route::get('/section', [SectionController::class, 'index']);
