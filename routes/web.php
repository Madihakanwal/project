<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WishlistController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/cart', [CartController::class,'index']);
Route::post('/cart/store', [CartController::class,'store']);
Route::put('/cart/update', [CartController::class,'update']);
Route::delete('/cart/delete', [CartController::class,'destroy']);
Route::get('/cart/create', [CartController::class,'create']);
Route::get('/cart/edit', [CartController::class,'edit']);

Route::get('/cartItem', [CartItemController::class,'index']);
Route::post('/cartItem/store', [CartItemController::class,'store']);
Route::put('/cartItem/update', [CartItemController::class,'update']);
Route::delete('/cartItem/delete', [CartItemController::class,'destroy']);
Route::get('/cartItem/create', [CartItemController::class,'create']);
Route::get('/cartItem/edit', [CartItemController::class,'edit']);

Route::get('/category', [CategoryController::class,'index']);
Route::post('/category/store', [CategoryController::class,'store']);
Route::put('/category/update', [CategoryController::class,'update']);
Route::delete('/category/delete', [CategoryController::class,'destroy']);
Route::get('/category/create', [CategoryController::class,'create']);
Route::get('/category/edit', [CategoryController::class,'edit']);

Route::get('/coupon', [CouponController::class,'index']);
Route::post('/coupon/store', [CouponController::class,'store']);
Route::put('/coupon/update', [CouponController::class,'update']);
Route::delete('/coupon/delete', [CouponController::class,'destroy']);
Route::get('/coupon/create', [CouponController::class,'create']);
Route::get('/coupon/edit', [CouponController::class,'edit']);

Route::get('/Order', [OrderController::class,'index']);
Route::post('/Order/store', [OrderController::class,'store']);
Route::put('/Order/update', [OrderController::class,'update']);
Route::delete('/Order/delete', [OrderController::class,'destroy']);
Route::get('/Order/create', [OrderController::class,'create']);
Route::get('/Order/edit', [OrderController::class,'edit']);

Route::get('/OrderItem', [OrderItemController::class,'index']);
Route::post('/OrderItem/store', [OrderItemController::class,'store']);
Route::put('/OrderItem/update', [OrderItemController::class,'update']);
Route::delete('/OrderItem/delete', [OrderItemController::class,'destroy']);
Route::get('/OrderItem/create', [OrderItemController::class,'create']);
Route::get('/OrderItem/edit', [OrderItemController::class,'edit']);

Route::get('/payment', [PaymentController::class,'index']);
Route::post('/payment/store', [PaymentController::class,'store']);
Route::put('/payment/update', [PaymentController::class,'update']);
Route::delete('/payment/delete', [PaymentController::class,'destroy']);
Route::get('/payment/create', [PaymentController::class,'create']);
Route::get('/payment/edit', [PaymentController::class,'edit']);

Route::get('/product', [ProductController::class, 'index'])->name('getallproducts');
Route::post('/product/store', [ProductController::class,'store']);
Route::put('/product/update', [ProductController::class,'update']);
Route::delete('/product/delete', [ProductController::class,'destroy']);
Route::get('/product/create', [ProductController::class,'create']);
Route::get('/product/edit', [productController::class,'edit']);

Route::get('/productImage', [ProductImageController::class, 'index']);
Route::post('/productImage/store', [ProductImageController::class,'store']);
Route::put('/productImage/update', [ProductImageController::class,'update']);
Route::delete('/productImage/delete', [ProductImageController::class,'destroy']);
Route::get('/productImage/create', [ProductImageController::class,'create']);
Route::get('/productImage/edit', [ProductImageController::class,'edit']);

Route::get('/productvariant', [ProductVariantController::class, 'index']);
Route::post('/productvariant/store', [ProductVariantController::class,'store']);
Route::put('/productvariant/update', [ProductVariantController::class,'update']);
Route::delete('/productvariant/delete', [ProductVariantController::class,'destroy']);
Route::get('/productvariant/create', [ProductVariantController::class,'create']);
Route::get('/productvariant/edit', [ProductVariantController::class,'edit']);

Route::get('/Review', [ReviewController::class, 'index']);
Route::post('/Review/store', [ReviewController::class,'store']);
Route::put('/Review/update', [ReviewController::class,'update']);
Route::delete('/Review/delete', [ReviewController::class,'destroy']);
Route::get('/Review/create', [ReviewController::class,'create']);
Route::get('/Review/edit', [ReviewController::class,'edit']);

Route::get('/setting', [SettingController::class, 'index']);
Route::post('/setting/store', [SettingController::class,'store']);
Route::put('/setting/update', [SettingController::class,'update']);
Route::delete('/setting/delete', [SettingController::class,'destroy']);
Route::get('/setting/create', [SettingController::class,'create']);
Route::get('/setting/edit', [SettingController::class,'edit']);

Route::get('/Subcategory', [SubcategoryController::class, 'index']);
Route::post('/Subcategory/store', [SubcategoryController::class,'store']);
Route::put('/Subcategory/update', [SubcategoryController::class,'update']);
Route::delete('/Subcategory/delete', [SubcategoryController::class,'destroy']);
Route::get('/Subcategory/create', [SubcategoryController::class,'create']);
Route::get('/Subcategory/edit', [SubcategoryController::class,'edit']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class,'store']);
Route::put('/user/update', [UserController::class,'update']);
Route::delete('/user/delete', [UserController::class,'destroy']);
Route::get('/user/create', [UserController::class,'create']);
Route::get('/user/edit', [UserController::class,'edit']);

Route::get('/wishlist', [WishListController::class, 'index']);
Route::post('/wishlist/store', [WishListController::class,'store']);
Route::put('/wishlist/update', [WishListController::class,'update']);
Route::delete('/wishlist/delete', [WishListController::class,'destroy']);
Route::get('/wishlist/create', [WishListController::class,'create']);
Route::get('/wishlist/edit', [WishListController::class,'edit']);

Route::get('/shippingaddress', [ShippingAddressController::class, 'index']);
Route::post('/shippingaddress/store', [ShippingAddressController::class,'store']);
Route::put('/shippingaddress/update', [ShippingAddressController::class,'update']);
Route::delete('/shippingaddress/delete', [ShippingAddressController::class,'destroy']);
Route::get('/shippingaddress/create', [ShippingAddressController::class,'create']);
Route::get('/shippingaddress/edit', [ShippingAddressController::class,'edit']);
