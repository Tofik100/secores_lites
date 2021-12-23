<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginControllers;
use App\Http\Controllers\Admin\RollControllers;
use App\Http\Controllers\Admin\PermissionControllers;
use App\Http\Controllers\Admin\PostController;
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
    // Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('permission-page',[AdminController::class,'permission'])->name('permission');
    Route::post('custom-login', [LoginControllers::class, 'customLogin'])->name('customLogin'); 
    Route::get('roles-page',[AdminController::class,'role'])->name('role');
    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    Route::get('topbar',[AdminController::class,'topbar'])->name('topbar');
    Route::get('sidebar',[AdminController::class,'sidebar'])->name('sidebar');

    //********************* */ Roll Route  //*********************************** */

    Route::post('dashboard',[RollControllers::class,'createRole'])->name('dashboard');
    Route::get('role-edit/{id}',[RollControllers::class,'editRole'])->name('editRole');
    Route::post('role-update/{id}',[RollControllers::class,'updateRole'])->name('updateRole');
    Route::get('deleterole/{id}',[RollControllers::class,'destroyRole'])->name('deleteRole');
    
    //********************* */ Roll Route End //*********************************** */


    //********************* */ Permission Route //*********************************** */

    Route::post('dashboard',[PermissionControllers::class,'createPermission'])->name('dashboard');
    Route::get('permission-edit/{id}',[PermissionControllers::class,'edit'])->name('edit');
    Route::post('update/{id}',[PermissionControllers::class,'update'])->name('update');
    Route::get('delete/{id}',[PermissionControllers::class,'destroy'])->name('delete');

    //********************* */ Permission Route End //*********************************** */

    //********************* */ Post Route//*********************************** */

    // Route::get('create-post',[PostController::class,'showPost'])->name('post');
    // Route::post('create-post',[PostController::class,'createPost'])->name('createPost');
    // Route::get('edit-post/{id}',[PostController::class,'editPost'])->name('editPost');
    // Route::post('update-post/{id}',[PostController::class,'updatePost'])->name('updatePost');
    // Route::get('delete-post/{id}',[PostController::class,'deletePost'])->name('deletePost');

    //********************* */ Post Route end//*********************************** */
    
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

Route::group(['prefix' => 'admin','middleware' => ['role:writer']], function () {
    //
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('assign-role/{id}',[RollControllers::class,'assignRole'])->name('assign.role');
     Route::get('remove-permission/{id}',[RollControllers::class,'assignPermission'])->name('assign.permission');
     Route::post('add-role',[RollControllers::class,'createRole'])->name('add.role');
    Route::get('create-post',[PostController::class,'showPost'])->name('post');
    Route::post('create-post',[PostController::class,'createPost'])->name('createPost');
    Route::get('edit-post/{id}',[PostController::class,'editPost'])->name('editPostss');
    Route::post('update-post/{id}',[PostController::class,'updatePost'])->name('updatePost');
    Route::get('delete-post/{id}',[PostController::class,'deletePost'])->name('deletePost');
});


Route::group(['prefix' => 'subresellers','middleware' => ['role:writer|admin']], function () {
    //
    Route::get('dashboard',[AdminController::class,'subReseller'])->name('subresellers/dashboard');
     Route::get('create-post',[PostController::class,'showPost'])->name('subPost');
});


Route::group(['prefix' => 'resellser','middleware' => ['role:editor']], function () {
    //
    Route::get('dashboard',[AdminController::class,'resellser'])->name('resellser/dashboard');
    Route::get('edit-post/{id}',[PostController::class,'editPost'])->name('editPost');
    Route::post('update-post/{id}',[PostController::class,'updatePost'])->name('updatePost');
});

//  Route::group(['prefix' => 'resellser','middleware'=> 'reseller'],function(){
//      Route::get('dashboard',[AdminController::class,'resellser'])->name('resellser/dashboard');
//      Route::get('add-resellers',[AdminController::class,'addResellser'])->name('addResellser');
//     //  Route::get('create-post',[AdminController::class,'resellser'])->name('create-post');
   
//  });

// Sub Reseller Middleware 

//  Route::group(['prefix' => 'subresellers','middleware'=> 'subresellers'],function(){
//      Route::get('dashboard',[AdminController::class,'subReseller'])->name('subresellers/dashboard');
//      Route::get('add-subresellers',[AdminController::class,'addsubResellser'])->name('addsubResellser');
//     //  Route::get('create-post',[AdminController::class,'subresellers'])->name('create-post');
//  });




