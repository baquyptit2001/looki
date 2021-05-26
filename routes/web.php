<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopListController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\MyAccountController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\ColorController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\AdminController\CategoryController;
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
    return view('front-end.layout.master');
});

Route::group(['prefix'=>'backend', 'middleware'=>'role'],function(){
    Route::get('/', [DashBoardController::class, 'index']);
    Route::get('/category',[CategoryController::class,'index'])->name('listCategory');
    Route::get('/addCategory',[CategoryController::class,'create'])->name('addCategory');
    Route::post('/addCategory',[CategoryController::class,'store'])->name('storeCategory');
    Route::get('/deleteCategory/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
    Route::get('/editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/editCategory/{id}', [CategoryController::class, 'update'])->name('editCategory');
    Route::get('/product',[ProductController::class,'index'])->name('listProduct');
    Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct');
    Route::post('/addProduct', [ProductController::class, 'store'])->name('storeProduct');
    Route::get('/deleteProduct/{id}', [ProductController::class, 'delete'])->name('deleteProduct');
    Route::get('/deleteImg/{id}', [ProductController::class, 'deleteImg'])->name('deleteImg');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
    Route::post('/editProduct/{id}', [ProductController::class, 'update'])->name('editProduct');
    Route::get('/editSize/{id}', [ProductController::class, 'editSize'])->name('editSize');
    Route::post('/editSize/{id}', [ProductController::class, 'updateSize'])->name('updateSize');
    Route::get('/deleteSize/{id}', [ProductController::class, 'deleteSize'])->name('deleteSize');
    Route::get('/listSize/{id}', [ProductController::class, 'listSize'])->name('listSize');
    Route::post('/listSize/{id}', [ProductController::class, 'addSize'])->name('addSize');
    Route::post('/upload', [ProductController::class, 'upload'])->name('upload');
    Route::get('/account',[AccountController::class,'index'])->name('listAccount');
    Route::get('/banAccount/{id}', [AccountController::class, 'ban'])->name('banAccount');
    Route::get('/roleAccount/{id}', [AccountController::class, 'role'])->name('roleUp');
    Route::get('/brand',[BrandController::class,'index'])->name('listBrand');
    Route::get('/addBrand',[BrandController::class,'create'])->name('createBrand');
    Route::post('/addBrand',[BrandController::class,'store'])->name('addBrand');
    Route::get('/editBrand/{id}',[BrandController::class,'edit'])->name('editBrand');
    Route::post('/editBrand/{id}',[BrandController::class,'update'])->name('updateBrand');
    Route::get('/deleteBrand/{id}',[BrandController::class,'destroy'])->name('deleteBrand');
    Route::get('/order',[CartController::class,'listCart'])->name('listOrder');
    Route::get('/cancelOrder/{id}',[CartController::class,'cancelOrder'])->name('cancelOrder');
    Route::get('/statusOrder/{id}',[CartController::class,'status'])->name('statusOrder');
    Route::get('/detailOrder/{id}',[CartController::class,'detail'])->name('detailOrder');
    Route::post('/detailOrder/{id}',[CartController::class,'updateOrder'])->name('updateOrder');
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/cart',[CartController::class, 'index'])->name('cart');
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout')->middleware('auth');
Route::get('/compare',[CompareController::class, 'index'])->name('compare');
Route::get('/addCompare/{id}',[CompareController::class, 'add'])->name('addCompare');
Route::get('/removeCompare/{id}',[CompareController::class, 'delete'])->name('removeCompare');
Route::get('/account',[MyAccountController::class, 'index'])->name('account');
Route::get('/wishlist',[WishListController::class, 'index'])->name('wishlist')->middleware('auth');
Route::get('/addWishlist/{id}',[WishListController::class, 'add'])->name('addWishlist')->middleware('auth');
Route::get('/removeWishlist/{id}',[WishListController::class, 'remove'])->name('removeWishlist')->middleware('auth');
Route::get('/removeWishlistSwitch/{id}',[WishListController::class, 'removeSwitch'])->name('removeSwitchWishlist')->middleware('auth');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/login&register',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/updateAccount',[AccountController::class, 'infoUpdate'])->name('updateAccount');
Route::post('/changePassword',[AccountController::class, 'changePassword'])->name('changePassword');
Route::post('/register',[AccountController::class,'store'])->name('storeAccount')->middleware('guest');
Route::get('/logout',[AccountController::class,'logOut'])->name('logOut');
Route::get('/forgot',[AccountController::class,'forgot'])->middleware('guest')->name('forgot');
Route::post('/forgot',[AccountController::class,'checkForgot'])->middleware('guest')->name('checkForgot');
Route::get('/reset/{token}', [AccountController::class, 'passReset'])->middleware('guest')->name('password.reset');
Route::post('/reset', [AccountController::class, 'passUpdate'])->middleware('guest')->name('password.update');
Route::post('/login',[AccountController::class,'check_login'])->name('checkLogin');
Route::get('/blog-grid',[BlogController::class, 'grid'])->name('blog-grid');
Route::get('/blog-list',[BlogController::class, 'list'])->name('blog-list');
Route::get('/blog-single',[BlogController::class, 'single'])->name('blog-single');
Route::get('/shop-list',[ShopListController::class,'index'])->name('shop-list');
Route::get('/product/{id}',[HomeController::class,'detail'])->name('product');
Route::post('/product/{id}',[HomeController::class,'rate'])->name('rate');
Route::get('/add-cart/{id}',[CartController::class,'add'])->name('add-cart');
Route::post('/update',[CartController::class,'update'])->name('cart-update');
Route::get('/delete/{id}', [CartController::class, 'delete'])->name('delete-cart');
Route::post('/checkout',[CartController::class, 'cartCheckout'])->name('cartCheckout');
Route::get('/brand/{id}', [ShopListController::class, 'brand'])->name('brand');
Route::get('/category/{id}', [ShopListController::class, 'category'])->name('category');
//Route::get('/shop-list',[ShopListController::class,'list'])->name('list-view');
//Route::get('/shop-list',[ShopListController::class,'menu'])->name('menu-view');