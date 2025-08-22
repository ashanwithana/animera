<?php

use App\Http\Controllers\Frontend\FrontendAuthController;
use App\Http\Controllers\Frontend\FrontEndCustomerController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InquiryController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\CustomHelpers;
use App\Services\ApiClient\ApiClient;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register frontend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "frontend" middleware group. Now create something great!
|
*/


Route::get('/', [PageController::class, 'login'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('index');
  Route::post('/login', [PageController::class, 'loginuser'])->name('loginuser');
  Route::get('/logot', [PageController::class, 'logout'])->name('logout');
  Route::get('/staff', [PageController::class, 'staff'])->name('staff');
  Route::get('/pets', [PageController::class, 'pets'])->name('pets');
  Route::get('/pets/add', [PageController::class, 'addpet'])->name('addpet');
  Route::get('/dashboard', [PageController::class, 'animera'])->name('animera');
  Route::get('/vaccines', [PageController::class, 'vaccines'])->name('vaccines');
  Route::get('/vaccines/add', [PageController::class, 'addvaccine'])->name('addvaccine');
  Route::get('/users', [PageController::class, 'users'])->name('users');
  Route::get('/users/add', [PageController::class, 'adduser'])->name('adduser');
  Route::get('/records', [PageController::class, 'records'])->name('records');
  Route::get('/records/details', [PageController::class, 'details'])->name('details');
  Route::get('/crossing', [PageController::class, 'crossing'])->name('crossing');
  Route::get('/crossing/view', [PageController::class, 'view'])->name('view');
  Route::get('/crossing/view/owner-details', [PageController::class, 'owner'])->name('owner');
  Route::get('/my-pets', [PageController::class, 'mypets'])->name('mypets');
  // Route::get('/auction/{model}/{slug}', [PageController::class, 'auction'])->name('auction');
  // Route::get('/live-auction', [PageController::class, 'Live_auction'])->name('live.auction');
  // Route::get('/service', [PageController::class, 'service'])->name('service');
  // Route::get('/available-stock-in-sri-lanka', [PageController::class, 'available'])->name('available');
  // Route::get('/faq', [PageController::class, 'faq'])->name('faq');
  // Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
  // Route::get('/contact', [PageController::class, 'contact'])->name('contact');
  // Route::get('/user-login', [PageController::class, 'login'])->name('user.login');
  // Route::get('/register', [PageController::class, 'register'])->name('register');
  // Route::get('/view-details/{model}/{slug}', [PageController::class, 'product'])->name('product');
  // Route::get('/profile', [PageController::class, 'profile'])->name('profile');

  // Route::get('/forgot-password', [PageController::class, 'forgotpassword'])->name('forgotpassword');
  // Route::post('/register', [FrontendAuthController::class, 'makeRegister'])->name('front.end.customer.store');
  // Route::post('/login', [FrontendAuthController::class, 'makeLogin'])->name('front.end.customer.login');
  // Route::get('/logout', [FrontendAuthController::class, 'makeLogout'])->name('front.end.customer.logout');

  // Route::get('/getdata', [HomeController::class, 'getdata'])->name('index.getdata');

  // Route::post('/submit-inquiry', [InquiryController::class, 'submit'])->name('submit-inquiry');


  