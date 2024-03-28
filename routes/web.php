<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProducerDetailController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestTypeController;
use App\Http\Controllers\AssessmentController;


 Route::get('/', function () {
        return view('welcome2');
    })->name('welcome2'); 

Route::get('/dashboard',[ProductController::class,'all_products'])->name('all-products');
  
Route::get('/all-products',[ProductController::class,'all_products'])->name('all-products');

Route::post('/search-products',[ProducerDetailController::class,'search'])->name('search-products');

// Rutas Para Usuarios Registrados

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

  Route::resource('/products', ProductController::class);

  Route::get('/comments_product/{id_pdetail}/{id_user}',[AssessmentController::class,'comments_product'])->name('comments_product');

  Route::get('/producer_info/{id_user}/{id_pdetail}',[ProducerDetailController::class,'producer_info'])->name('producer_info');

  Route::get('/products-options',[ProductController::class,'products_options'])->name('products-options');

  Route::resource('/producer_detail', ProducerDetailController::class);

  Route::get('/control_producto/{producer_detail}/', [ProducerDetailController::class,'show2'])->name('show2');

  Route::resource('/users',UserController::class);

  Route::resource('/orders',OrderController::class);

  Route::post('/order/details',[OrderController::class,'order_details'])->name('order_details');

  Route::resource('/order_details',OrderDetailController::class);

  Route::get('/orders_done',[OrderController::class,'order_done'])->name('orders_done');

  Route::post('/orders/store',[OrderController::class,'store_sesion'])->name('store_sesion');

  Route::post('/sesion/edit', [OrderController::class,'edit_sesion'])->name('edit_sesion');

  Route::post('/sesion',[OrderController::class,'update_sesion'])->name('update_sesion');

  Route::post('/sesion/destroy/{id}',[OrderController::class,'destroy_sesion'])->name('destroy_sesion');

  Route::get('/sesion/destroy/',[OrderController::class,'destroy_sesion_all'])->name('destroy_sesion_all');

  Route::resource('/applications', ApplicationController::class);

  Route::get('/coments/{id}',[AssessmentController::class,'index'])->name('coments.index');

  Route::post('/coment/create',[AssessmentController::class,'store'])->name('coments.store');

  Route::get('/coments_done/{id_user}/{id_product}',[AssessmentController::class,'comments_done'])->name('comments_done');

  Route::post('/comment/{id}/edit',[AssessmentController::class,'edit'])->name('comment.edit');

  Route::put('/comment/{id}',[AssessmentController::class,'update'])->name('comment.update');

  Route::delete('/comment/{id}',[AssessmentController::class,'destroy'])->name('comment.destroy');

  Route::get('/applications_all',[ApplicationController::class,'applications_all'])->name('applications_all');

  Route::resource('/request_type', RequestTypeController::class);
           
});







