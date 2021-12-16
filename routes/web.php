<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginControllers;
use App\Http\Controllers\Admin\RollControllers;
use App\Http\Controllers\Admin\PermissionControllers;
use App\Http\Livewire\PlanList;
use App\Http\Livewire\UserList;
use App\Http\Livewire\Pages\Product;
use App\Http\Livewire\Pages\ProductOld;


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



Route::get('login',[AdminController::class,'index'])->name('login');
 Route::get('register',[Register::Class,'registerStore'])->name('register');


Route::group(['prefix' => 'admin','middleware'=> 'web'],function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::post('dashboard',[RollControllers::class,'createRole'])->name('dashboard');
    Route::post('dashboard',[PermissionControllers::class,'createPermission'])->name('dashboard');
    Route::post('custom-login', [LoginControllers::class, 'customLogin'])->name('customLogin'); 
    Route::get('roles-page',[AdminController::class,'role'])->name('role');
    Route::get('role-edit/{id}',[RollControllers::class,'editRole'])->name('editRole');
    Route::post('role-update/{id}',[RollControllers::class,'updateRole'])->name('updateRole');
    Route::get('deleterole/{id}',[RollControllers::class,'destroyRole'])->name('deleteRole');
    Route::get('permission-page',[AdminController::class,'permission'])->name('permission');
    Route::get('permission-edit/{id}',[PermissionControllers::class,'edit'])->name('edit');
    Route::post('update/{id}',[PermissionControllers::class,'update'])->name('update');
    Route::get('delete/{id}',[PermissionControllers::class,'destroy'])->name('delete');
    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    Route::get('topbar',[AdminController::class,'topbar'])->name('topbar');
    Route::get('sidebar',[AdminController::class,'sidebar'])->name('sidebar');
    
    // Livewire Route
    Route::get('user-list',UserList::class)->name('userList');
    Route::get('plan-list',PlanList::class)->name('planList');

    Route::get('add-product',Product::class)->name('add-product');
    Route::get('old-product',ProductOld::class)->name('old-product');
});







// Route::group(['middleware'=> 'admin'],function(){
//     Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
//     Route::get('topbar',[AdminController::class,'topbar'])->name('topbar');
//     Route::get('sidebar',[AdminController::class,'sidebar'])->name('sidebar');
// });


// Reseller Middleware 


 Route::group(['prefix' => 'resellser','middleware'=> 'reseller'],function(){
     Route::get('dashboard',[AdminController::class,'resellser'])->name('resellser/dashboard');
     Route::get('add-resellers',[AdminController::class,'addResellser'])->name('addResellser');
   
 });

// Sub Reseller Middleware 

 Route::group(['prefix' => 'subresellers','middleware'=> 'subresellers'],function(){
     Route::get('dashboard',[AdminController::class,'subReseller'])->name('subresellers/dashboard');
     Route::get('add-subresellers',[AdminController::class,'addsubResellser'])->name('addsubResellser');
  
 });




