<?php
use App\Http\Controllers\Guest\PokemonController as GuestPokemonController;
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
    return view('pages.home');
});


Route::get('/pokemons', [GuestPokemonController::class, 'index'])->name('guest.pokemons.index');
Route::post('/pokemons', [GuestPokemonController::class, 'store'])->name('guest.pokemons.store');
Route::get('/pokemons/create', [GuestPokemonController::class, 'create'])->name('guest.pokemons.create');
Route::get('/pokemons/{pokemon}', [GuestPokemonController::class, 'show'])->name('guest.pokemons.show');
Route::get('/pokemons/{pokemon}/edit', [GuestPokemonController::class, 'edit'])->name('guest.pokemons.edit');
Route::put('/pokemons/{pokemon}', [GuestPokemonController::class, 'update'])->name('guest.pokemons.update');

