<?php

use App\Http\Controllers\ApiGeneral\AgenciaController;
use App\Http\Controllers\ApiGeneral\DepartamentoController;
use App\Http\Controllers\ApiGeneral\AreaController;
use App\Http\Controllers\ApiGeneral\EmpleadoController;
use App\Http\Controllers\ApiGeneral\CategoriaController;
use App\Http\Controllers\ApiGeneral\MarcaController;
use App\Http\Controllers\ApiGeneral\ModeloController;
use App\Http\Controllers\ApiGeneral\MonitorController;
use App\Http\Controllers\ApiGeneral\SOController;
use App\Http\Controllers\ApiGeneral\LicSOController;
use App\Http\Controllers\ApiGeneral\ProcesadorController;
use App\Http\Controllers\ApiGeneral\DiscoDuroController;
use App\Http\Controllers\ApiGeneral\TipoDiscoDuroController;
use App\Http\Controllers\ApiGeneral\RamController;
use App\Http\Controllers\ApiGeneral\AntivirusController;
use App\Http\Controllers\ApiGeneral\OfficeController;
use App\Http\Controllers\ApiGeneral\LicOfficeController;
use App\Http\Controllers\ModuloComputadoraEquipo\ModuloComputadoraEquipoController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//-------------------- categoria
Route::resource('agencia', AgenciaController::class)->except(['create', 'edit']);
Route::resource('departamento', DepartamentoController::class)->except(['create', 'edit']);
Route::resource('categoria', CategoriaController::class)->except(['create', 'edit']);
Route::resource('area', AreaController::class)->except(['create', 'edit']);
Route::resource('empleado', EmpleadoController::class)->except(['create', 'edit']);
Route::resource('marca', MarcaController::class)->except(['create', 'edit']);
Route::resource('monitor', MonitorController::class)->except(['create', 'edit']);
Route::resource('modelo', ModeloController::class)->except(['create', 'edit']);
Route::resource('so', SOController::class)->except(['create', 'edit']);
Route::resource('licso', LicSOController::class)->except(['create', 'edit']);
Route::resource('procesador', ProcesadorController::class)->except(['create', 'edit']);
Route::resource('discoduro', DiscoDuroController::class)->except(['create', 'edit']);
Route::resource('tipodiscoduro', TipoDiscoDuroController::class)->except(['create', 'edit']);
Route::resource('ram', RamController::class)->except(['create', 'edit']);
Route::resource('antivirus', AntivirusController::class)->except(['create', 'edit']);
Route::resource('office', OfficeController::class)->except(['create', 'edit']);
Route::resource('licoffice', LicOfficeController::class)->except(['create', 'edit']);
Route::resource('modulocomputadoraequipo', ModuloComputadoraEquipoController::class)->except(['create', 'edit']);
