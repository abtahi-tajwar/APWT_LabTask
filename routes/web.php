<?php

use App\Http\Controllers\EcommerceStoreController;
use App\Http\Controllers\PhysicalStoreController;
use App\Http\Controllers\SocialMediaStoreController;
use App\Http\Controllers\UserController;
use App\Models\EcommerceStore;
use Illuminate\Support\Facades\Route;

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


// Route::view('/login', 'login.index');
// Route::view('/register', 'registration.index');
// Route::view('/profile/edit', 'profile.edit')->name('view-edit-profile');
// Route::view('/profile/view', 'profile.view')->name('view-view-profile');
// Route::view('/post/view', 'posts.single')->name('view-single-post');

// Route::view('/admin/dashboard', 'admin.dashboard.dashboard')->name('view-admin-dashboard');
// Route::view('/admin/posts/all', 'admin.dashboard.posts.all')->name('view-admin-all-posts');
// Route::view('/admin/posts/create', 'admin.dashboard.posts.create')->name('view-admin-create-post');
// Route::view('/admin/website-info', 'admin.dashboard.websiteinfo')->name('view-admin-website-info');
// Route::view('/admin/login', 'admin.auth.login')->name('view-admin-login');
// Route::view('/admin/register', 'admin.auth.register')->name('view-admin-register');
// Route::view('/admin/categories/all', 'admin.dashboard.categories.all')->name('view-admin-all-categories');
// Route::view('/admin/categories/create', 'admin.dashboard.categories.create')->name('view-admin-create-category');
// Route::view('/admin/roles', 'admin.dashboard.roles')->name('view-admin-roles');
// Route::view('/admin/users/all', 'admin.dashboard.users.all')->name('view-admin-all-users');
// Route::view('/admin/privacy-policy', 'admin.dashboard.privacy-policy')->name('view-admin-privacy-policy');

// Login Route
Route::get('/login', [UserController::class, 'viewLogin'])->name('view-login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Register Routes
Route::get('/register', [UserController::class, 'viewRegister'])->name('view-register');
Route::post('/register', [UserController::class, 'register'])->name('register');


Route::group(['middleware' => ['AuthUser']], function() {
    Route::get('system/sales', function () {
        return view('system.channels');
    })->name('index');
    Route::get('/system/sales/physical_store', [PhysicalStoreController::class, 'viewPhysicalStore'])->name('view-physical-store');
    Route::get('/system/sales/social_media_store', [SocialMediaStoreController::class, 'viewSocialMediaStore'])->name('view-social-media-store');
    Route::get('/system/sales/ecommerce_store', [EcommerceStoreController::class, 'viewEcommerceStore'])->name('view-ecommerce-store');
});

