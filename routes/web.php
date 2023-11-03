<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

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



// Route::get('/', [MailController::class, 'sendMail']);

Route::get('/about', function () {
    return view('about');
});



Route::get('/services', [ServiceController::class, 'getservices']);
Route::get('/', [IndexController::class, 'getdata']);

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/faqs', [FaqsController::class, 'store']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/services', function () {
    return view('admin.services');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'getservices']);
Route::post('/contactadd', [ContactController::class, 'create']);

Auth::routes();

Route::middleware('auth')->group(function () {
   Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
   });

   Route::get('/admin/services');

  Route::get('/admin/services');
  Route::get('/admin/services', [ServiceController::class, 'getadminservices']);
  Route::get('/admin/servicesadd', [ServiceController::class, 'save']);
  Route::post('/admin/servicesupdate/{id}', [ServiceController::class, 'update']);
  Route::get('/admin/servicesdelete/{id}', [ServiceController::class, 'delete']);

  Route::get('/admin/faqs');
  Route::post('/admin/faqsadd', [FaqsController::class, 'create']);
  Route::get('/admin/faqs', [FaqsController::class, 'adminstore']);
  Route::post('/admin/faqsupdate/{id}', [FaqsController::class, 'update']);
  Route::post('/admin/faqsdelete/{id}', [FaqsController::class, 'delete']);


  Route::get('/admin/contact', [ContactController::class, 'getadminservices']);
  Route::post('/admin/contactdelete/{id}', [ContactController::class, 'delete']);

  Route::get('/admin/profile', [ProfileController::class, 'index']);

  Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
  Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');

  Route::post('/admin/profileadd',[App\Http\Controllers\HomeController::class, 'profileUpdate']);
  Route::post('/admin/profilepassupdate',[App\Http\Controllers\HomeController::class, 'update_password']);
});

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::post('logout', [UserController::class, 'logout'])->name('logout');



