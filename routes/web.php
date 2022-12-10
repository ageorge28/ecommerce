<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubSubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\AdminPasswordController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\MultiImageController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ShippingCityController;
use App\Http\Controllers\Backend\ShippingDistrictController;
use App\Http\Controllers\Backend\ShippingStateController;
use App\Http\Controllers\Backend\PendingOrderController;
use App\Http\Controllers\Backend\ConfirmedOrderController;
use App\Http\Controllers\Backend\ProcessingOrderController;
use App\Http\Controllers\Backend\PickedOrderController;
use App\Http\Controllers\Backend\ShippedOrderController;
use App\Http\Controllers\Backend\DeliveredOrderController;
use App\Http\Controllers\Backend\CancelledOrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SeoController;
use App\Http\Controllers\Backend\AdminReturnController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\UserReturnController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']] , function() {
    Route::get('/login', [AdminController::class, 'create']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


// Admin routes

Route::middleware(['auth:admin'])->group(function() {

    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/admin/password', [AdminPasswordController::class, 'edit'])->name('admin.password');
    Route::post('/admin/password/update', [AdminPasswordController::class, 'update'])->name('admin.password.update');

    Route::prefix('admin')->group(function() {

        Route::prefix('brands')->group(function() {
            Route::get('/', [BrandController::class, 'index'])->name('admin.brands');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.brands.store');
            Route::get('/edit/{brand}', [BrandController::class, 'edit'])->name('admin.brands.edit');
            Route::post('/update/{brand}', [BrandController::class, 'update'])->name('admin.brands.update');
            Route::get('/delete/{brand}', [BrandController::class, 'destroy'])->name('admin.brands.delete');
        });

        Route::prefix('categories')->group(function() {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::get('/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
        });
    
        Route::prefix('subcategories')->group(function() {
            Route::get('/', [SubCategoryController::class, 'index'])->name('admin.subcategories');
            Route::post('/store', [SubCategoryController::class, 'store'])->name('admin.subcategories.store');
            Route::get('/edit/{subCategory}', [SubCategoryController::class, 'edit'])->name('admin.subcategories.edit');
            Route::post('/update/{subCategory}', [SubCategoryController::class, 'update'])->name('admin.subcategories.update');
            Route::get('/delete/{subCategory}', [SubCategoryController::class, 'destroy'])->name('admin.subcategories.delete');
            Route::get('/ajax/{category_id}', [SubCategoryController::class, 'ajax'])->name('admin.subcategories.ajax');
        });
    
        Route::prefix('subsubcategories')->group(function() {
            Route::get('/', [SubSubCategoryController::class, 'index'])->name('admin.subsubcategories');
            Route::post('/store', [SubSubCategoryController::class, 'store'])->name('admin.subsubcategories.store');
            Route::get('/edit/{subSubCategory}', [SubSubCategoryController::class, 'edit'])->name('admin.subsubcategories.edit');
            Route::post('/update/{subSubCategory}', [SubSubCategoryController::class, 'update'])->name('admin.subsubcategories.update');
            Route::get('/delete/{subSubCategory}', [SubSubCategoryController::class, 'destroy'])->name('admin.subsubcategories.delete');
            Route::get('/ajax/{subcategory_id}', [SubSubCategoryController::class, 'ajax'])->name('admin.subsubcategories.ajax');
        });
    
        Route::prefix('products')->group(function() {
            Route::get('/', [ProductController::class, 'index'])->name('admin.products');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/show/{product}', [ProductController::class, 'show'])->name('admin.products.show');
            Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::put('/update/{product}', [ProductController::class, 'update'])->name('admin.products.update');
            Route::post('/update/images', [ProductController::class, 'updateImages'])->name('admin.products.images.update');
            Route::get('/delete/images/{image}', [ProductController::class, 'deleteImage'])->name('admin.products.images.delete');
            Route::post('/update/thumbnail/{product}', [ProductController::class, 'updateThumbnail'])->name('admin.products.thumbnail.update');
            Route::get('/delete/{product}', [ProductController::class, 'destroy'])->name('admin.products.delete');
            Route::get('/activate/{product}', [ProductController::class, 'activate'])->name('admin.products.activate');
            Route::get('/deactivate/{product}', [ProductController::class, 'deactivate'])->name('admin.products.deactivate');
        });
        
        Route::prefix('sliders')->group(function() {
            Route::get('/', [SliderController::class, 'index'])->name('admin.sliders');
            Route::post('/store', [SliderController::class, 'store'])->name('admin.sliders.store');
            Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('admin.sliders.edit');
            Route::post('/update/{slider}', [SliderController::class, 'update'])->name('admin.sliders.update');
            Route::get('/delete/{slider}', [SliderController::class, 'destroy'])->name('admin.sliders.delete');
            Route::get('/activate/{slider}', [SliderController::class, 'activate'])->name('admin.sliders.activate');
            Route::get('/deactivate/{slider}', [SliderController::class, 'deactivate'])->name('admin.sliders.deactivate');
        });

        Route::prefix('coupons')->group(function() {
            Route::get('/', [CouponController::class, 'index'])->name('admin.coupons');
            Route::post('/store', [CouponController::class, 'store'])->name('admin.coupons.store');
            Route::get('/edit/{coupon}', [CouponController::class, 'edit'])->name('admin.coupons.edit');
            Route::post('/update/{coupon}', [CouponController::class, 'update'])->name('admin.coupons.update');
            Route::get('/delete/{coupon}', [CouponController::class, 'destroy'])->name('admin.coupons.delete');
        });
    
        Route::prefix('shipping')->group(function() {
            
            // Shipping Cities
            Route::get('/cities', [ShippingCityController::class, 'index'])->name('admin.shipping.cities');
            Route::post('/cities/store', [ShippingCityController::class, 'store'])->name('admin.shipping.cities.store');
            Route::get('/cities/edit/{shippingCity}', [ShippingCityController::class, 'edit'])->name('admin.shipping.cities.edit');
            Route::post('/cities/update/{shippingCity}', [ShippingCityController::class, 'update'])->name('admin.shipping.cities.update');
            Route::get('/cities/delete/{shippingCity}', [ShippingCityController::class, 'destroy'])->name('admin.shipping.cities.delete');

            // Shipping Districts
            Route::get('/districts', [ShippingDistrictController::class, 'index'])->name('admin.shipping.districts');
            Route::post('/districts/store', [ShippingDistrictController::class, 'store'])->name('admin.shipping.districts.store');
            Route::get('/districts/edit/{shippingDistrict}', [ShippingDistrictController::class, 'edit'])->name('admin.shipping.districts.edit');
            Route::post('/districts/update/{shippingDistrict}', [ShippingDistrictController::class, 'update'])->name('admin.shipping.districts.update');
            Route::get('/districts/delete/{shippingDistrict}', [ShippingDistrictController::class, 'destroy'])->name('admin.shipping.districts.delete');

            // Shipping States
            Route::get('/states', [ShippingStateController::class, 'index'])->name('admin.shipping.states');
            Route::post('/states/store', [ShippingStateController::class, 'store'])->name('admin.shipping.states.store');
            Route::get('/states/edit/{shippingState}', [ShippingStateController::class, 'edit'])->name('admin.shipping.states.edit');
            Route::post('/states/update/{shippingState}', [ShippingStateController::class, 'update'])->name('admin.shipping.states.update');
            Route::get('/states/delete/{shippingState}', [ShippingStateController::class, 'destroy'])->name('admin.shipping.states.delete');

        });

        Route::prefix('orders')->group(function() {
                     
            Route::get('/pending', [PendingOrderController::class, 'index'])->name('admin.orders.pending');
            Route::get('/pending/{order}/show', [PendingOrderController::class, 'show'])->name('admin.orders.pending.show');
            Route::get('/pending/{order}/delete', [PendingOrderController::class, 'destroy'])->name('admin.orders.pending.delete');
            Route::get('/pending/{order}/update', [PendingOrderController::class, 'update'])->name('admin.orders.pending.update');
           
            Route::get('/confirmed', [ConfirmedOrderController::class, 'index'])->name('admin.orders.confirmed');
            Route::get('/confirmed/{order}/show', [ConfirmedOrderController::class, 'show'])->name('admin.orders.confirmed.show');
            Route::get('/confirmed/{order}/delete', [ConfirmedOrderController::class, 'destroy'])->name('admin.orders.confirmed.delete');
            Route::get('/confirmed/{order}/update', [ConfirmedOrderController::class, 'update'])->name('admin.orders.confirmed.update');
            Route::get('/confirmed/{order}/download', [ConfirmedOrderController::class, 'download'])->name('admin.orders.confirmed.download');
           
            Route::get('/processing', [ProcessingOrderController::class, 'index'])->name('admin.orders.processing');
            Route::get('/processing/{order}/show', [ProcessingOrderController::class, 'show'])->name('admin.orders.processing.show');
            Route::get('/processing/{order}/delete', [ProcessingOrderController::class, 'destroy'])->name('admin.orders.processing.delete');
            Route::get('/processing/{order}/update', [ProcessingOrderController::class, 'update'])->name('admin.orders.processing.update');
           
            Route::get('/picked', [PickedOrderController::class, 'index'])->name('admin.orders.picked');
            Route::get('/picked/{order}/show', [PickedOrderController::class, 'show'])->name('admin.orders.picked.show');
            Route::get('/picked/{order}/delete', [PickedOrderController::class, 'destroy'])->name('admin.orders.picked.delete');
            Route::get('/picked/{order}/update', [PickedOrderController::class, 'update'])->name('admin.orders.picked.update');
           
            Route::get('/shipped', [ShippedOrderController::class, 'index'])->name('admin.orders.shipped');
            Route::get('/shipped/{order}/show', [ShippedOrderController::class, 'show'])->name('admin.orders.shipped.show');
            Route::get('/shipped/{order}/delete', [ShippedOrderController::class, 'destroy'])->name('admin.orders.shipped.delete');
            Route::get('/shipped/{order}/update', [ShippedOrderController::class, 'update'])->name('admin.orders.shipped.update');

            Route::get('/delivered', [DeliveredOrderController::class, 'index'])->name('admin.orders.delivered');
            Route::get('/delivered/{order}/show', [DeliveredOrderController::class, 'show'])->name('admin.orders.delivered.show');
            Route::get('/delivered/{order}/delete', [DeliveredOrderController::class, 'destroy'])->name('admin.orders.delivered.delete');
            Route::get('/delivered/{order}/update', [DeliveredOrderController::class, 'update'])->name('admin.orders.delivered.update');

            Route::get('/cancelled', [CancelledOrderController::class, 'index'])->name('admin.orders.cancelled');
            Route::get('/cancelled/{order}/show', [CancelledOrderController::class, 'show'])->name('admin.orders.cancelled.show');
            Route::get('/cancelled/{order}/delete', [CancelledOrderController::class, 'destroy'])->name('admin.orders.cancelled.delete');

        });

        Route::prefix('reports')->group(function() {
            Route::get('/', [ReportController::class, 'index'])->name('admin.reports');
            Route::post('/date', [ReportController::class, 'date'])->name('admin.reports.date');
            Route::post('/month', [ReportController::class, 'month'])->name('admin.reports.month');
            Route::post('/year', [ReportController::class, 'year'])->name('admin.reports.year');
        });

        Route::prefix('users')->group(function() {
            Route::get('/', [UserController::class, 'index'])->name('admin.users');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
            Route::post('/{user}/update', [UserController::class, 'update'])->name('admin.users.update');
            Route::get('/{user}/delete', [UserController::class, 'destroy'])->name('admin.users.delete');
        });

        Route::prefix('blog')->group(function() {

            Route::get('/category', [BlogCategoryController::class, 'index'])->name('admin.blog.category');
            Route::post('/category/store', [BlogCategoryController::class, 'store'])->name('admin.blog.category.store');
            Route::get('/category/{blogCategory}/edit', [BlogCategoryController::class, 'edit'])->name('admin.blog.category.edit');
            Route::put('/category/{blogCategory}/update', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
            Route::get('/category/{blogCategory}/delete', [BlogCategoryController::class, 'destroy'])->name('admin.blog.category.delete');

            Route::get('/', [BlogController::class, 'index'])->name('admin.blog');
            Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
            Route::post('/store', [BlogController::class, 'store'])->name('admin.blog.store');
            Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
            Route::post('/{blog}/update', [BlogController::class, 'update'])->name('admin.blog.update');
            Route::get('/{blog}/delete', [BlogController::class, 'destroy'])->name('admin.blog.delete');

        });

        // Site Settings Routes
        Route::prefix('settings')->group(function() {
            Route::get('/edit', [SettingController::class, 'edit'])->name('admin.settings.edit');
            Route::post('/update', [SettingController::class, 'update'])->name('admin.settings.update');
        });

        Route::prefix('seo')->group(function() {
            Route::get('/edit', [SeoController::class, 'edit'])->name('admin.seo.edit');
            Route::post('/update', [SeoController::class, 'update'])->name('admin.seo.update');
        });

        Route::prefix('returns')->group(function() {
            Route::get('/request', [AdminReturnController::class, 'request'])->name('admin.returns.request');
            Route::get('/{order}/approve', [AdminReturnController::class, 'approve'])->name('admin.returns.approve');
            Route::get('/', [AdminReturnController::class, 'index'])->name('admin.returns');
        });

        Route::prefix('reviews')->group(function() {
            Route::get('/pending', [ReviewController::class, 'pending'])->name('admin.reviews.pending');
            Route::get('/published', [ReviewController::class, 'published'])->name('admin.reviews.published');
            Route::get('/{review}/approve', [ReviewController::class, 'approve'])->name('admin.reviews.approve');
            Route::get('/{review}/delete', [ReviewController::class, 'destroy'])->name('admin.reviews.delete');
        });

        Route::prefix('stock')->group(function() {
            Route::get('/', [ProductController::class, 'stock'])->name('admin.stock');
        });

        Route::prefix('adminuserrole')->group(function() {
            Route::get('/', [AdminUserController::class, 'index'])->name('admin.adminuserrole');
            Route::get('/create', [AdminUserController::class, 'create'])->name('admin.adminuserrole.create');
            Route::post('/store', [AdminUserController::class, 'store'])->name('admin.adminuserrole.store');
            Route::get('/{admin}/edit', [AdminUserController::class, 'edit'])->name('admin.adminuserrole.edit');
            Route::post('/{admin}/update', [AdminUserController::class, 'update'])->name('admin.adminuserrole.update');
            Route::get('/{admin}/delete', [AdminUserController::class, 'destroy'])->name('admin.adminuserrole.delete');
        });

        Route::prefix('comments')->group(function() {
            Route::get('/pending', [CommentController::class, 'pending'])->name('admin.comments.pending');
            Route::get('/published', [CommentController::class, 'published'])->name('admin.comments.published');
            Route::get('/{comment}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
            Route::get('/{comment}/delete', [CommentController::class, 'destroy'])->name('admin.comments.delete');
        });
        
    });

});

Route::get('/language/english', [LanguageController::class, 'english'])->name('language.english');
Route::get('/language/hindi', [LanguageController::class, 'hindi'])->name('language.hindi');


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard')->middleware('auth:admin');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/web/dashboard', function () {
    return redirect()->route('dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'destroy'])->name('user.logout');
Route::get('/user/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::post('/user/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
Route::get('/user/password/edit', [UserPasswordController::class, 'edit'])->name('password.edit');
Route::post('/user/password/update', [UserPasswordController::class, 'update'])->name('password.update');

Route::get('/products/{slug}', [HomeController::class, 'product'])->name('products.show');

Route::get('/products/tag/{tag}', [HomeController::class, 'tag'])->name('products.tag');

Route::get('/products/subcategory/{subcategory_slug}', [HomeController::class, 'subcategory'])->name('products.subcategory');

Route::get('/products/subsubcategory/{subsubcategory_slug}', [HomeController::class, 'subsubcategory'])->name('products.subsubcategory');

Route::get('/products/ajax/show/{product}', [HomeController::class, 'ajaxShow'])->name('products.ajax.show');

Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store');

Route::get('/cart/mini', [CartController::class, 'miniCart'])->name('cart.mini');

Route::get('/cart/mini/delete/{rowId}', [CartController::class, 'miniCartRemove'])->name('cart.mini.delete');

Route::post('/user/wishlist/store/{id}', [WishlistController::class, 'store'])->name('wishlist.store');

// User must log in
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function() {
   
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/wishlist/show', [WishlistController::class, 'show'])->name('wishlist.show');
    Route::get('/wishlist/delete/{wishlist}', [WishlistController::class, 'destroy'])->name('wishlist.delete');

    Route::post('/stripe/order', [StripeController::class, 'order'])->name('stripe.order');

    Route::post('/cash/order', [CashController::class, 'order'])->name('cash.order');

    Route::get('/orders', [UserOrderController::class, 'index'])->name('user.orders');
    Route::get('/orders/{order}/show', [UserOrderController::class, 'show'])->name('user.orders.show');
    Route::get('/orders/invoice/{order}', [UserOrderController::class, 'invoice'])->name('user.orders.invoice');
    Route::post('/orders/return/{order}', [UserOrderController::class, 'return'])->name('user.orders.return');

    Route::get('/orders/returns', [UserReturnController::class, 'index'])->name('user.orders.returns');
    Route::get('/orders/cancelled', [UserOrderController::class, 'cancelled'])->name('user.orders.cancelled');

    Route::prefix('reviews')->group(function() {
        Route::get('/', [ReviewController::class, 'index'])->name('reviews');
        Route::post('/store/{product}', [ReviewController::class, 'store'])->name('reviews.store');
    });

    Route::post('/orders/track', [UserOrderController::class, 'track'])->name('user.orders.track');

    Route::prefix('comments')->group(function() {
        Route::post('/{blog}/store', [CommentController::class, 'store'])->name('comments.store');
        Route::post('/{blog}/show', [CommentController::class, 'show'])->name('comments.show');
    });

});

Route::get('/user/cart', [CartController::class, 'index'])->name('cart');
Route::get('/user/cart/show', [CartController::class, 'show'])->name('cart.show');
Route::get('/user/cart/delete/{rowId}', [CartController::class, 'destroy'])->name('cart.delete');
Route::get('/user/cart/increment/{rowId}', [CartController::class, 'increment'])->name('cart.increment');
Route::get('/user/cart/decrement/{rowId}', [CartController::class, 'decrement'])->name('cart.decrement');

Route::post('/user/cart/coupon/apply', [CartController::class, 'applyCoupon'])->name('cart.coupon.apply');
Route::get('/user/cart/total/calculate', [CartController::class, 'calculateTotal'])->name('cart.total.calculate');
Route::get('/user/cart/coupon/remove', [CartController::class, 'removeCoupon'])->name('cart.coupon.remove');

Route::get('/user/checkout', [CheckoutController::class, 'create'])->name('checkout');
Route::post('/user/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/shipping/districts/ajax/{city_id}', [ShippingDistrictController::class, 'ajax'])->name('shipping.districts.ajax');
Route::get('/shipping/states/ajax/{district_id}', [ShippingStateController::class, 'ajax'])->name('shipping.districts.ajax');

Route::get('/blog', [HomeBlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}/show', [HomeBlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{blogCategory}/category', [HomeBlogController::class, 'category'])->name('blog.category');

Route::get('/search', [HomeController::class, 'search'])->name('search');
// Advanced Search
Route::post('/search/advanced', [HomeController::class, 'advancedSearch'])->name('search.advanced');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::post('/shop/filter', [ShopController::class, 'filter'])->name('shop.filter');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [HomeController::class, 'sendContact'])->name('contact.send');
