<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {

// Auth
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

// Password Forgot
Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');
Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');
});



Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    //====================={{Admin}}======================

    Route::middleware(['admin'])->group(function () {

        // Product routes
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/Admin/Dash_Product', [ProductController::class, 'addProduct'])->name('Admin.Dash_Product');
        Route::get('/Dash_Product', [ProductController::class, 'showProductsAdmin']);
        Route::delete('/products/{id}', [ProductController::class, 'softDelete'])->name('products.softDelete');
        Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

        Route::get('/Dash_Contact', [ContactController::class, 'index']);

//        Route::get('/Dash_Contact', function () {
//            return view('Admin.Dash_Contact');
//        });


        Route::delete('/dashboard/{user}', [DashboardController::class, 'banUser'])->name('ban.user');
        Route::patch('/Admin/dashboard/recover/{user}', [DashboardController::class, 'recoverUser'])->name('recover.user');

        // Category routes
        Route::post('/categories', [CategoryController::class, 'store'])->name('add.category');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('delete.category');

        Route::get('/Dash_Blog', [BlogsController::class, 'showBlogs'])->name('dash.blogs.show');
        Route::delete('blogs/{id}', [BlogsController::class, 'deleteBlog'])->name('deleteBlog');
        Route::post('Blogs/{id}', [BlogsController::class, 'updateBlog']);
        Route::post('/blogs', [BlogsController::class, 'addBlog'])->name('blogs.add');

    });

    //====================={{User}}======================

    Route::middleware(['user'])->group(function () {

        // Cart routes
        Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::post('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
        Route::get('/Cart', [CartController::class, 'showCart']);
        Route::post('/submit-comment', [ReviewsController::class, 'submitComment'])->name('submit.comment');

    });

});



Route::get('/All_products', [ProductController::class, 'showProducts']);
Route::get('/Description/{id}', [ProductController::class, 'showProductDescription'])->name('Description');
Route::get('/', [ProductController::class, 'showLast4Products'])->name('last-4-products');
Route::get('/search', [ProductController::class, 'search']);


Route::delete('/cart/delete/{id}', 'CartController@deleteFromCart')->name('cart.delete');


Route::get('/unsubscribe', function () {
    return view('unsubscribe');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});


Route::get('/About', function () {
    return view('About');
});

Route::get('/Blog', function () {
    return view('Blog');
});
Route::get('/blog1', function () {
    return view('BLOG.blog1');
});
Route::get('/blog2', function () {
    return view('BLOG.blog2');
});
Route::get('/blog3', function () {
    return view('BLOG.blog3');
});
Route::get('/blog4', function () {
    return view('BLOG.blog4');
});
Route::get('/blog5', function () {
    return view('BLOG.blog5');
});


// Contact routes
Route::get('/Contact', function () {
    return view('Contact');
});

Route::post('/Contact', [ContactController::class, 'store'])->name('contact.store');

// Subscriber routes
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);
Route::get('/unsubscribe/{email}', [NewsletterController::class, 'unsubscribe']);
Route::get('/unsubscribe', [NewsletterController::class, 'showUnsubscribeForm'])->name('Admin.Dashboard');

// Review routes
Route::get('/reviews', [ReviewsController::class, 'showReviews'])->name('reviews');

// Blogs routes
Route::get('/Blog', [BlogsController::class, 'showBlog'])->name('blogs.show');
Route::get('/Blog_Description/{id}', [BlogsController::class, 'showBlogDescription'])->name('Blog_Description');

