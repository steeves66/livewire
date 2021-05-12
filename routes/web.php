<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', App\Http\Livewire\Registration::class)
    ->name('register');

Route::get('/login', App\Http\Livewire\Login::class)
    ->name('login');

//Route::resource('companies', CompanyCRUDController::class);

// Route::get('/companies/index', [CompanyCRUDController::class, 'index'])->name('index');
// Route::get('/companies/create', [CompanyCRUDController::class, 'create'])->name('create');
// Route::post('/companies/store', [CompanyCRUDController::class, 'store'])->name('store');
// Route::get('/companies/edit/{id}', [CompanyCRUDController::class, 'edit'])->name('edit');
// Route::post('/companies/update/{id}', [CompanyCRUDController::class, 'update'])->name('update');
// Route::get('/companies/destroy/{id}', [CompanyCRUDController::class, 'destroy'])->name('destroy');
// Route::get('/companies/show/{id}', [CompanyCRUDController::class, 'show'])->name('show');

Route::prefix('companies')->group(function() {
    Route::get('/index', [CompanyCRUDController::class, 'index'])->name('index');
    Route::get('/create', [CompanyCRUDController::class, 'create'])->name('create');
    Route::post('/store', [CompanyCRUDController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CompanyCRUDController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CompanyCRUDController::class, 'update'])->name('update');
    Route::get('/destroy/{id}', [CompanyCRUDController::class, 'destroy'])->name('destroy');
    Route::get('/show/{id}', [CompanyCRUDController::class, 'show'])->name('show');
});


// Route::get('/posts/index', [PostController::class, 'index'])->name('postIndex');
// Route::get('/posts/create', [PostController::class, 'create'])->name('postCreate');
// Route::post('/posts/store', [PostController::class, 'store'])->name('postStore');

Route::prefix('posts')->group(function() {
    Route::get('/index', [PostController::class, 'index'])->name('postIndex');
    Route::get('/create', [PostController::class, 'create'])->name('postCreate');
    Route::post('/store', [PostController::class, 'store'])->name('postStore');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('postEdit');
    Route::post('/update/{id}', [PostController::class, 'update'])->name('postUpdate');
    Route::post('/delete/{id}', [PostController::class, 'delete'])->name('postDelete');
});


