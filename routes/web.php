<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('sellers')->group(function () {
    Route::get('dashboard',  function(){  
        return view('seller.dashboard', ['title' => 'Seller Dashboard', 'view_type' => 'sellers', 'page' => 'dashboard']);  
    });
    Route::get('analytics',  function(){  
        return view('seller.analytics', ['title' => 'Analytics', 'view_type' => 'sellers', 'page' => 'analytics']);  
    });
    Route::get('profile',  function(){  
        return view('seller.profile', ['title' => 'Profile', 'view_type' => 'sellers', 'page' => 'profile']);  
    });
    Route::get('security',  function(){  
        return view('seller.security', ['title' => 'Security', 'view_type' => 'sellers', 'page' => 'security']);  
    });
    Route::get('password',  function(){  
        return view('seller.password', ['title' => 'Change Password', 'view_type' => 'sellers', 'page' => 'password']);  
    });
    Route::get('add-new-product',  function(){  
        return view('seller.add-new-product', ['title' => 'Add New Product', 'view_type' => 'sellers', 'page' => 'add-new-product']);  
    });
    Route::get('view-all-products',  function(){  
        return view('seller.view-all-products', ['title' => 'View All Products', 'view_type' => 'sellers', 'page' => 'view-all-products']);  
    });
    Route::get('manage-product-groups',  function(){  
        return view('seller.manage-product-groups', ['title' => 'Manage Product Groups', 'view_type' => 'sellers', 'page' => 'manage-product-groups']);  
    });
    Route::get('product-embed-generator',  function(){  
        return view('seller.product-embed-generator', ['title' => 'Product Embed Generator', 'view_type' => 'sellers', 'page' => 'product-embed-generator']);  
    });
    Route::get('orders',  function(){  
        return view('seller.orders', ['title' => 'Orders', 'view_type' => 'sellers', 'page' => 'orders']);  
    });
    Route::get('add-new-coupon',  function(){  
        return view('seller.add-new-coupon', ['title' => 'Add New Coupon', 'view_type' => 'sellers', 'page' => 'add-new-coupon']);  
    });
    Route::get('view-all-coupons',  function(){  
        return view('seller.view-all-coupons', ['title' => 'View All Coupons', 'view_type' => 'sellers', 'page' => 'view-all-coupons']);  
    });
    Route::get('edit-coupon',  function(){  
        return view('seller.edit-coupon', ['title' => 'Edit Coupon', 'view_type' => 'sellers', 'page' => 'view-all-coupons']);  
    });
    Route::get('feedback',  function(){  
        return view('seller.feedback', ['title' => 'Feedback', 'view_type' => 'sellers', 'page' => 'feedback']);  
    });
    Route::get('new-email',  function(){  
        return view('seller.new-email', ['title' => 'New Email', 'view_type' => 'sellers', 'page' => 'new-email']);  
    });
    Route::get('view-sent-emails',  function(){  
        return view('seller.view-sent-emails', ['title' => 'View Sent Emails', 'view_type' => 'sellers', 'page' => 'view-sent-emails']);  
    });
    Route::get('affiliate-payouts',  function(){  
        return view('seller.affiliate-payouts', ['title' => 'Affiliate Payouts', 'view_type' => 'sellers', 'page' => 'affiliate-payouts']);  
    });
    Route::get('view-all-affiliates',  function(){  
        return view('seller.view-all-affiliates', ['title' => 'View All Affiliates', 'view_type' => 'sellers', 'page' => 'view-all-affiliates']);  
    });
    Route::get('payment-settings',  function(){  
        return view('seller.payment-settings', ['title' => 'Payment Settings', 'view_type' => 'sellers', 'page' => 'payment-settings']);  
    });

    
}); 


Route::prefix('merchants')->group(function () {
    Route::get('dashboard',  function(){  
        return view('merchant.dashboard', ['title' => 'merchant Dashboard', 'view_type' => 'merchants', 'page' => 'dashboard']);  
    });
    Route::get('profile',  function(){  
        return view('merchant.profile', ['title' => 'Profile', 'view_type' => 'merchants', 'page' => 'profile']);  
    });
    Route::get('security',  function(){  
        return view('merchant.security', ['title' => 'Security', 'view_type' => 'merchants', 'page' => 'security']);  
    });
    Route::get('password',  function(){  
        return view('merchant.password', ['title' => 'Change Password', 'view_type' => 'merchants', 'page' => 'password']);  
    });
    Route::get('payments',  function(){  
        return view('merchant.payments', ['title' => 'Payments', 'view_type' => 'merchants', 'page' => 'payments']);  
    });
    Route::get('payment-buttons',  function(){  
        return view('merchant.payment-buttons', ['title' => 'Payment Buttons', 'view_type' => 'merchants', 'page' => 'payment-buttons']);  
    });
    Route::get('api',  function(){  
        return view('merchant.api', ['title' => 'API', 'view_type' => 'merchants', 'page' => 'api']);  
    });
    Route::get('settings',  function(){  
        return view('merchant.settings', ['title' => 'Merchant Settings', 'view_type' => 'merchants', 'page' => 'settings']);  
    });
    Route::get('payment-settings',  function(){  
        return view('merchant.payment-settings', ['title' => 'Merchant Payment Settings', 'view_type' => 'merchants', 'page' => 'payment-settings']);  
    });
    
}); 




Route::get('/forgot-password', function () {
    return view( 'auth.forgot-password', [ 'title' => 'Forgot Password' ] );
});

Route::get('/register', function () {
    return view( 'auth.register', [ 'title' => 'Register' ] );
});

Route::get('/', function () {
    return view( 'auth.login', [ 'title' => 'Login' ] );
});

