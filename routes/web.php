<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;



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

Route::get('/', HomeController::class);
/*
Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}/', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');*/

Route::resource('cursos', CursoController::class);

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function (){
    return "Has accedido correctamente a esta ruta";
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function (){
    return "Usted no es mayor de edad";
});