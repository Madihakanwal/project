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



Route::get('/cart', [CartController::class, 'index'])->name('getallcarts');
Route::post('/cart/store', [CartController::class, 'store'])->name('storecart');
Route::put('/cart/update', [CartController::class, 'update'])->name('updatecart');
Route::delete('/cart/delete', [CartController::class, 'destroy'])->name('deletecart');
Route::get('/cart/create', [CartController::class, 'create'])->name('createcart');
Route::get('/cart/edit', [CartController::class, 'edit'])->name('editcart');

Route::get('/cartItem', [CartItemController::class, 'index'])->name('getallcartitems');
Route::post('/cartItem/store', [CartItemController::class, 'store'])->name('storecartitem');
Route::put('/cartItem/update', [CartItemController::class, 'update'])->name('updatecartitem');
Route::delete('/cartItem/delete', [CartItemController::class, 'destroy'])->name('deletecartitem');
Route::get('/cartItem/create', [CartItemController::class, 'create'])->name('createcartitem');
Route::get('/cartItem/edit', [CartItemController::class, 'edit'])->name('editcartitem');

Route::get('/category', [CategoryController::class, 'index'])->name('getallcategories');
Route::post('/category/store', [CategoryController::class, 'store'])->name('storecategory');
Route::put('/category/update', [CategoryController::class, 'update'])->name('updatecategory');
Route::delete('/category/delete', [CategoryController::class, 'destroy'])->name('deletecategory');
Route::get('/category/create', [CategoryController::class, 'create'])->name('createcategory');
Route::get('/category/edit', [CategoryController::class, 'edit'])->name('editcategory');

Route::get('/coupon', [CouponController::class, 'index'])->name('getallcoupons');
Route::post('/coupon/store', [CouponController::class, 'store'])->name('storecoupon');
Route::put('/coupon/update', [CouponController::class, 'update'])->name('updatecoupon');
Route::delete('/coupon/delete', [CouponController::class, 'destroy'])->name('deletecoupon');
Route::get('/coupon/create', [CouponController::class, 'create'])->name('createcoupon');
Route::get('/coupon/edit', [CouponController::class, 'edit'])->name('editcoupon');

Route::get('/Order', [OrderController::class, 'index'])->name('getallorders');
Route::post('/Order/store', [OrderController::class, 'store'])->name('storeorder');
Route::put('/Order/update', [OrderController::class, 'update'])->name('updateorder');
Route::delete('/Order/delete', [OrderController::class, 'destroy'])->name('deleteorder');
Route::get('/Order/create', [OrderController::class, 'create'])->name('createorder');
Route::get('/Order/edit', [OrderController::class, 'edit'])->name('editorder');

Route::get('/OrderItem', [OrderItemController::class, 'index'])->name('getallorderitems');
Route::post('/OrderItem/store', [OrderItemController::class, 'store'])->name('storeorderitem');
Route::put('/OrderItem/update', [OrderItemController::class, 'update'])->name('updateorderitem');
Route::delete('/OrderItem/delete', [OrderItemController::class, 'destroy'])->name('deleteorderitem');
Route::get('/OrderItem/create', [OrderItemController::class, 'create'])->name('createorderitem');
Route::get('/OrderItem/edit', [OrderItemController::class, 'edit'])->name('editorderitem');

Route::get('/payment', [PaymentController::class, 'index'])->name('getallpayments');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('storepayment');
Route::put('/payment/update', [PaymentController::class, 'update'])->name('updatepayment');
Route::delete('/payment/delete', [PaymentController::class, 'destroy'])->name('deletepayment');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('createpayment');
Route::get('/payment/edit', [PaymentController::class, 'edit'])->name('editpayment');

Route::get('/product', [ProductController::class, 'index'])->name('getallproducts');
Route::post('/product/store', [ProductController::class, 'store'])->name('storeproduct');
Route::put('/product/update', [ProductController::class, 'update'])->name('updateproduct');
Route::delete('/product/delete', [ProductController::class, 'destroy'])->name('deleteproduct');
Route::get('/product/create', [ProductController::class, 'create'])->name('createproduct');
Route::get('/product/edit', [ProductController::class, 'edit'])->name('editproduct');

Route::get('/productImage', [ProductImageController::class, 'index'])->name('getallproductimages');
Route::post('/productImage/store', [ProductImageController::class, 'store'])->name('storeproductimage');
Route::put('/productImage/update', [ProductImageController::class, 'update'])->name('updateproductimage');
Route::delete('/productImage/delete', [ProductImageController::class, 'destroy'])->name('deleteproductimage');
Route::get('/productImage/create', [ProductImageController::class, 'create'])->name('createproductimage');
Route::get('/productImage/edit', [ProductImageController::class, 'edit'])->name('editproductimage');

Route::get('/productvariant', [ProductVariantController::class, 'index'])->name('getallproductvariants');
Route::post('/productvariant/store', [ProductVariantController::class, 'store'])->name('storeproductvariant');
Route::put('/productvariant/update', [ProductVariantController::class, 'update'])->name('updateproductvariant');
Route::delete('/productvariant/delete', [ProductVariantController::class, 'destroy'])->name('deleteproductvariant');
Route::get('/productvariant/create', [ProductVariantController::class, 'create'])->name('createproductvariant');
Route::get('/productvariant/edit', [ProductVariantController::class, 'edit'])->name('editproductvariant');

Route::get('/Review', [ReviewController::class, 'index'])->name('getallreviews');
Route::post('/Review/store', [ReviewController::class, 'store'])->name('storereview');
Route::put('/Review/update', [ReviewController::class, 'update'])->name('updatereview');
Route::delete('/Review/delete', [ReviewController::class, 'destroy'])->name('deletereview');
Route::get('/Review/create', [ReviewController::class, 'create'])->name('createreview');
Route::get('/Review/edit', [ReviewController::class, 'edit'])->name('editreview');

Route::get('/setting', [SettingController::class, 'index'])->name('getallsettings');
Route::post('/setting/store', [SettingController::class, 'store'])->name('storesetting');
Route::put('/setting/update', [SettingController::class, 'update'])->name('updatesetting');
Route::delete('/setting/delete', [SettingController::class, 'destroy'])->name('deletesetting');
Route::get('/setting/create', [SettingController::class, 'create'])->name('createsetting');
Route::get('/setting/edit', [SettingController::class, 'edit'])->name('editsetting');

Route::get('/Subcategory', [SubCategoryController::class, 'index'])->name('getallsubcategories');
Route::post('/Subcategory/store', [SubCategoryController::class, 'store'])->name('storesubcategory');
Route::put('/Subcategory/update', [SubCategoryController::class, 'update'])->name('updatesubcategory');
Route::delete('/Subcategory/delete', [SubCategoryController::class, 'destroy'])->name('deletesubcategory');
Route::get('/Subcategory/create', [SubCategoryController::class, 'create'])->name('createsubcategory');
Route::get('/Subcategory/edit', [SubCategoryController::class, 'edit'])->name('editsubcategory');

Route::get('/user', [UserController::class, 'index'])->name('getallusers');
Route::post('/user/store', [UserController::class, 'store'])->name('storeuser');
Route::put('/user/update', [UserController::class, 'update'])->name('updateuser');
Route::delete('/user/delete', [UserController::class, 'destroy'])->name('deleteuser');
Route::get('/user/create', [UserController::class, 'create'])->name('createuser');
Route::get('/user/edit', [UserController::class, 'edit'])->name('edituser');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('getallwishlists');
Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('storewishlist');
Route::put('/wishlist/update', [WishlistController::class, 'update'])->name('updatewishlist');
Route::delete('/wishlist/delete', [WishlistController::class, 'destroy'])->name('deletewishlist');
Route::get('/wishlist/create', [WishlistController::class, 'create'])->name('createwishlist');
Route::get('/wishlist/edit', [WishlistController::class, 'edit'])->name('editwishlist');

Route::get('/shippingaddress', [ShippingAddressController::class, 'index'])->name('getallshippingaddresses');
Route::post('/shippingaddress/store', [ShippingAddressController::class, 'store'])->name('storeshippingaddress');
Route::put('/shippingaddress/update', [ShippingAddressController::class, 'update'])->name('updateshippingaddress');
Route::delete('/shippingaddress/delete', [ShippingAddressController::class, 'destroy'])->name('deleteshippingaddress');
Route::get('/shippingaddress/create', [ShippingAddressController::class, 'create'])->name('createshippingaddress');
Route::get('/shippingaddress/edit', [ShippingAddressController::class, 'edit'])->name('editshippingaddress');
