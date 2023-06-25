<?php

use App\Http\Controllers\EmailController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Seeder;

Route::get('/seeder/{id}', [ProductController::class,'make_seeder']);

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

Route::get('/osama2', function () {
    return response('<h1> Hello World </h1>');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// });

// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });

// All Listings
// Route::get('/listings', [ListingController::class,'index']);

// Single listing
// Route::get('/listings/{id}', [ListingController::class, 'show']);

// Route::get('/carousel/show/{id}', [HomeController::class, 'show']);

// Route::post('/', [HomeController::class, 'store']);






// Route::get('/carousel/index', [HomeController::class, 'carouselTables']);

// Route::get('/carousel/create', [HomeController::class, 'create']);

// Route::post('/carousel/edit', [HomeController::class, 'edit']);

// Route::delete('/carousel/delete/{id}', [HomeController::class, 'delete']);
// // Store data after the post
// Route::post('/carousel/create', [HomeController::class, 'store']);


// Route::get('product/index', [ProductController::class, 'productTables']);

// Route::get('product/create', [ProductController::class, 'create']);

// Route::post('product/create', [ProductController::class, 'store']);

// Route::post('product/edit/{id}', [ProductController::class, 'edit']);

// Route::delete('product/delete/{id}', [ProductController::class, 'delete']);


//! My routes
// HYABE main page
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/osama', [HomeController::class, 'osama'])->name('osama');
// Single Product detail page
Route::get('/detail/{id}', [HomeController::class, 'detail']);


Route::get('register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Create an admin user
Route::post('/admin', [UserController::class, 'store_admin'])->name('admin');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login', [UserController::class, 'show'])->name('login');

Route::get('/blog', [UserController::class, 'show_blog'])->name('blog');

Route::get('/login/admin', [UserController::class, 'show_admin'])->name('login_admin');

Route::post('users/authenticate', [UserController::class, 'authenticate'])->middleware('guest')->name('authenticate');

Route::post('admins/authenticate', [UserController::class, 'authenticate_admin'])->name('authenticate_admin');



Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/carousel/index', [HomeController::class, 'carouselTables']);

    Route::get('/carousel/create', [HomeController::class, 'create']);

    Route::post('/carousel/edit', [HomeController::class, 'edit']);

    Route::get('/carousel/delete/{id}', [HomeController::class, 'delete']);
    
    Route::get('/carousel/deleteAll', [HomeController::class, 'deleteAll'])->name('carouselDeleteAll');
    // Store data after the post
    Route::post('/carousel/create', [HomeController::class, 'store']);



    Route::get('product/index', [ProductController::class, 'productTables']);

    Route::get('product/create', [ProductController::class, 'create']);

    Route::post('product/create', [ProductController::class, 'store']);

    Route::post('product/edit', [ProductController::class, 'edit']);

    Route::delete('product/delete/{id}', [ProductController::class, 'delete']);
});

// Route::get('email-test', function () {

//     $details['email'] = 'your_email@gmail.com';

//     dispatch(new App\Jobs\SendEmailJob($details));

//     dd('done');
// });

// Route::get('/sendmail', [EmailController::class, 'sendEmail']);

Route::post('/email', [MailController::class, 'sendEmail']);
