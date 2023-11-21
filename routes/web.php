<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\HabitacionesController;
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
});

Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('user.shows');
Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/rol', [RolesController::class, 'index'])->name('role.index');
Route::get('/rol/create', [RolesController::class, 'create'])->name('role.create');
Route::post('/rol/store', [RolesController::class, 'store'])->name('role.store');
Route::get('/rol/{role}', [RolesController::class, 'show'])->name('role.shows');
Route::get('/rol/{role}/editar', [RolesController::class, 'edit'])->name('role.edit');
Route::put('/rol/{role}', [RolesController::class, 'update'])->name('role.update');
Route::delete('/rol/{role}', [RolesController::class, 'destroy'])->name('role.destroy');


Route::get('/cliente', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/cliente/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/cliente/{clientes}', [ClientesController::class, 'show'])->name('clientes.shows');
Route::get('/cliente/{clientes}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/cliente/{clientes}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/cliente/{clientes}', [ClientesController::class, 'destroy'])->name('clientes.destroy');


Route::get('/reservas', [ReservasController::class, 'index'])->name('reserva.index');
Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reserva.create');
Route::post('/reservas/store', [ReservasController::class, 'store'])->name('reserva.store');
Route::get('/reservas/{reservas}', [ReservasController::class, 'show'])->name('reserva.shows');
Route::get('/reservas/{reservas}/editar', [ReservasController::class, 'edit'])->name('reserva.edit');
Route::put('/reservas/{reservas}', [ReservasController::class, 'update'])->name('reserva.update');
Route::delete('/reservas/{reservas}', [ReservasController::class, 'destroy'])->name('reserva.destroy');



Route::get('/habitaciones', [HabitacionesController::class, 'index'])->name('room.index');
Route::get('/habitaciones/create', [HabitacionesController::class, 'create'])->name('room.create');
Route::post('/habitaciones/store', [HabitacionesController::class, 'store'])->name('room.store');
Route::get('/habiatciones/{habitacion}', [HabitacionesController::class, 'show'])->name('room.shows');
Route::get('/habitaciones/{habitacion}/editar', [HabitacionesController::class, 'edit'])->name('room.edit');
Route::put('/habitaciones/{habitacion}', [HabitacionesController::class, 'update'])->name('room.update');
Route::delete('/habitaciones/{habitacion}', [HabitacionesController::class, 'destroy'])->name('room.destroy');

