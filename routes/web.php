<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects/{project}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');





Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::group(['prefix' => 'page'], function() {
    Route::get('/', App\Http\Controllers\Page\IndexController::class)->name('page.index');
    Route::get('/create', App\Http\Controllers\Page\CreateController::class)->name('page.create');
    Route::post('/', App\Http\Controllers\Page\StoreController::class)->name('page.store');
    Route::get('/{page}/edit', App\Http\Controllers\Page\EditController::class)->name('page.edit');
    Route::patch('/{page}', App\Http\Controllers\Page\UpdateController::class)->name('page.update');
    Route::delete('/{page}', App\Http\Controllers\Page\DeleteController::class)->name('page.delete');
});

Route::group(['prefix' => 'project'], function() {
    Route::get('/', App\Http\Controllers\Project\IndexController::class)->name('project.index');
    Route::get('/create', App\Http\Controllers\Project\CreateController::class)->name('project.create');
    Route::post('/', App\Http\Controllers\Project\StoreController::class)->name('project.store');
    Route::get('/{project}/edit', App\Http\Controllers\Project\EditController::class)->name('project.edit');
    Route::patch('/{project}', App\Http\Controllers\Project\UpdateController::class)->name('project.update');
    Route::delete('/{project}', App\Http\Controllers\Project\DeleteController::class)->name('project.delete');
});

Route::group(['prefix' => 'social'], function() {
    Route::get('/', App\Http\Controllers\Social\IndexController::class)->name('social.index');
    Route::get('/create', App\Http\Controllers\Social\CreateController::class)->name('social.create');
    Route::post('/', App\Http\Controllers\Social\StoreController::class)->name('social.store');
    Route::get('/{social}/edit', App\Http\Controllers\Social\EditController::class)->name('social.edit');
    Route::patch('/{social}', App\Http\Controllers\Social\UpdateController::class)->name('social.update');
    Route::delete('/{social}', App\Http\Controllers\Social\DeleteController::class)->name('social.delete');
});

Route::group(['prefix' => 'message'], function() {
    Route::get('/', App\Http\Controllers\Message\IndexController::class)->name('message.index');
    Route::post('/', App\Http\Controllers\Message\StoreController::class)->name('message.store');
    Route::delete('/{message}', App\Http\Controllers\Message\DeleteController::class)->name('message.delete');
});

// Route::middleware(['admin'])->prefix('admin')->group(function () {



// });
