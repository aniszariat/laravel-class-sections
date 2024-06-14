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
        Route::get('/new', 'form')->name('new');
        Route::post('/new', 'create')->name('create');
        Route::get('/{student:id}', 'show')->name('show');
        Route::get('/{student:id}/update', 'form')->name('edit');
        Route::patch('/{student:id}/update', 'update')->name('update');
        Route::get('/{student:id}/delete', 'delete')->name('delete');
    }
);




// Route::get('/section', [SectionController::class, 'index']);
