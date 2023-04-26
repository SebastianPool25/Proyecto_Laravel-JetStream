<?php
use App\Http\Livewire\BuscardorUsers;
use App\Http\Livewire\Users;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/users', Users::class)->name('users');
    Route::get('/buscador', BuscardorUsers::class)->name('buscador');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
