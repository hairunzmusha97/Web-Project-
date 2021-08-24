<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\MailController;

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

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get("/about", [AboutController::class, "about"]);

Route::get("/service", [ServiceController::class, "service"]);

Route::get("/team", [TeamController::class, "team"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/users", [AdminController::class, "user"]);

Route::get("/messages", [AdminController::class, "message"]);

Route::get("/", [HomeController::class, "index"]);

Route::get("/home", [HomeController::class, "redirects"]);

Route::get("/dashboard", [HomeController::class, "home"]);

Route::get("/redirects", [HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/send-email',[MailController::class,'sendEmail']);