<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use Illuminate\Container\Attributes\Auth;

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

require __DIR__ . '/auth.php';

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/', [RoutingController::class, 'index'])->name('root');

//     // Rute untuk level kedua dan ketiga harus diletakkan lebih spesifik
//     Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');

//     // Rute wildcard terakhir untuk memastikan tidak bertabrakan
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');
// });


Route::group([
    'middleware' => ['auth', 'role:SuperAdmin|Admin', 'permission:AdminPanel access'],
    'prefix'     => 'admin',
    'as'         => 'admin.'
], function () {
    Route::resource('dashboard', HomeController::class)->except(['edit', 'create']);


    Route::resource('profile', ProfileController::class)->except(['edit', 'create']);
    Route::patch('admin/profile/{user}/passUpdate', [ProfileController::class, 'passUpdate'])->name('profile.passUpdate');
    Route::patch('admin/profile/{user}/othersUpdate', [ProfileController::class, 'othersUpdate'])->name('profile.othersUpdate');

    Route::resource('roles', RoleController::class);
    Route::get('admin/roles/data', [RoleController::class, 'getRolesData'])->name('roles.data');
    Route::get('admin/roles/index', [RoleController::class, 'index'])->name('roles.index');

    Route::post('admin/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::resource('permissions', PermissionController::class);
});

