<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Admin\App\Http\Controllers\Category\CategoryAllController;
use Modules\Admin\App\Http\Controllers\Category\CategoryAddController;
use Modules\Admin\App\Http\Controllers\Home\HomeController;
use Modules\Admin\App\Http\Controllers\Auth\LoginController;
use Modules\Admin\App\Http\Controllers\Setting\SettingAddController;
use Modules\Admin\App\Http\Controllers\Setting\SettingAllController;
use Modules\Admin\App\Http\Controllers\Setting\SettingEditController;
use Modules\Admin\App\Http\Controllers\UserControl\RoleController;
use Modules\Admin\App\Http\Controllers\UserControl\PermissionController;

Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'action']);
Route::post('admin/register', [LoginController::class, 'register']);

Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //Categories
    Route::get('/category-list', [CategoryAllController::class, 'all'])->name('category.list');
    Route::get('/category-add', [CategoryAddController::class, 'add'])->name('category.add');
    Route::post('/category-add', [CategoryAddController::class, 'action']);
    //Roles
    Route::get('/add-role',[RoleController::class,'addIndex'])->name('role.add');
    Route::post('/add-role',[RoleController::class,'add']);
    Route::get('/{id}/update-role', [RoleController::class, 'updateIndex'])->name('role.update');
    Route::post('/{id}/update-role',[RoleController::class,'update']);
//    Route::delete('/{id}/delete-role',[RoleController::class,'delete'])->name('role.delete');
    Route::get('/{id}/delete-role',[RoleController::class,'delete'])->name('role.delete');
    Route::get('/all-roles',[RoleController::class,'all'])->name('role.all');
    Route::get('/roles',[RoleController::class,'index'])->name('role.index');
    Route::get('/{id}/roles-assign-permission',[RoleController::class,'assignPermissionIndex'])->name('permission.assign.index');
    Route::post('/{id}/roles-assign-permission',[RoleController::class,'assignPermissions']);
    //Permissions
    Route::get('/add-permission',[PermissionController::class,'addIndex'])->name('permission.add');
    Route::post('/add-permission',[PermissionController::class,'add']);
    Route::get('/permissions',[PermissionController::class,'all'])->name('permission.all');
    Route::get('/{id}/update-permission', [PermissionController::class, 'updateIndex'])->name('permission.update');
    Route::post('/{id}/update-permission',[PermissionController::class,'update']);
//    Route::delete('/{id}/delete-role',[RoleController::class,'delete'])->name('role.delete');
    Route::get('/{id}/delete-permission',[PermissionController::class,'delete'])->name('permission.delete');
    //Settings
    Route::get('/settings',[SettingAllController::class,'all'])->name('setting.all');
    Route::get('/settings/add',[SettingAddController::class,'addIndex'])->name('setting.add');
    Route::post('/settings/add',[SettingAddController::class,'add']);
    Route::get('/{id}/settings/edit',[SettingEditController::class,'edit'])->name('setting.update');
    Route::post('/{id}/settings/edit',[SettingEditController::class,'editAction']);
    Route::post('/settings/add',[SettingAddController::class,'add']);

    Route::get('/{id}/settings/delete',[SettingEditController::class,'delete'])->name('setting.delete');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
