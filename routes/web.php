<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Security\Catalogs\BranchController;
use App\Http\Controllers\Security\Catalogs\TypeUserController;
use App\Http\Controllers\Security\Catalogs\UserController;
use Illuminate\Support\Facades\Route;

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
#Login routes
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

#Test routes
Route::get('alta-empleado',function(){
    return view('empleados.catEmpleados');
});

##TypeUser
Route::get('/type_user/type_user', [TypeUserController::class, 'index'])->name('type_user.index');
Route::post('/type_user/type_user', [TypeUserController::class, 'index']);

Route::get('/type_user/type_user/create', [TypeUserController::class, 'create']);
Route::post('/type_user/type_user/create', [TypeUserController::class, 'store']);

Route::put('/type_user/type_user/edit', [TypeUserController::class, 'update']);
Route::get('/type_user/type_user/{id}/edit', [TypeUserController::class, 'edit'])->name('type_user.edit');
Route::put('/type_user/type_user/{id}', [TypeUserController::class, 'destroy']);

##Branch
Route::get('/branch/branch', [BranchController::class, 'index'])->name('branch.index');
Route::post('/branch/branch', [BranchController::class, 'index']);

Route::get('/branch/branch/create', [BranchController::class, 'create']);
Route::post('/branch/branch/create', [BranchController::class, 'store']);

Route::put('/branch/branch/edit', [BranchController::class, 'update']);
Route::get('/branch/branch/{id}/edit', [BranchController::class, 'edit'])->name('branch.edit');
Route::put('/branch/branch/{id}', [BranchController::class, 'destroy']);

##Branch
Route::get('/users/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users/users', [UserController::class, 'index']);

Route::get('/users/users/create', [UserController::class, 'create']);
Route::post('/users/users/create', [UserController::class, 'store']);

Route::put('/users/users/edit', [UserController::class, 'update']);
Route::get('/users/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/users/{id}', [UserController::class, 'destroy']);
