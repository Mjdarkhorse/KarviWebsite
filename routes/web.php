<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//----------------------Login And Logout----------------//
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('check', [AdminController::class, 'check'])->name('check');
Route::middleware(['auth'])->get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('admin/signout', [AdminController::class, 'signout'])->name('signout');
//--------------------Routing for Textarea(CK-Editor)----------------//
Route::post('ckeditor/upload', [AdminController::class, 'upload'])->name('upload.upload');

//----------------------Routing for Blogs Details--------------//
Route::middleware(['auth'])->get('admin/includeAdmin/blogdetails', [AdminController::class, 'blogdetails'])->name('blogdetails');
Route::middleware(['auth'])->post('admin/blogdetailssave', [AdminController::class, 'blogdetailssave'])->name('blogdetailssave');
Route::middleware(['auth'])->get('blog-details-edit/{id}', [AdminController::class, 'blog_details_edit'])->name('admin.blog_details_edit');
Route::middleware(['auth'])->post('update-blog-details', [AdminController::class, 'blogdetailupdate'])->name('blogdetailupdate');
//----------------------Routing for Package Details--------------//
Route::middleware(['auth'])->get('admin/includeAdmin/packageDetails', [AdminController::class, 'packageDetails'])->name('packageDetails');
Route::middleware(['auth'])->post('admin/includeAdmin/packageDetailsave', [AdminController::class, 'packageDetailsave'])->name('packageDetailsave');





//-------------------------------------------------------FRONTEND CONTROLLER-----------------------------------------------------------------//
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug_name}', [FrontendController::class, 'blog_details'])->name('blog-details');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about_us');
Route::get('/destination-tour', [FrontendController::class, 'destination_tour'])->name('destination_tour');
Route::get('/packages-tour', [FrontendController::class, 'packages_tour'])->name('packages_tour');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
