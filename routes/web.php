<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;


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

// Route::get('/', [HomeController::class, 'index'])->name('home');
// route::post('contact', [HomeController::class, 'contact'])->name('contact');


route::prefix('admin')->name('admin.')->group(function () {
    route::middleware(['auth'])->group(function () {

        route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        route::get('contact', [DashboardController::class, 'contact'])->name('contact');
        route::post('contact', [DashboardController::class, 'UpdateEmail']);
        route::delete('contact/{id}', [DashboardController::class, 'deleteContact'])->name('contact.destroy');

        route::prefix('configuration')->controller('App\Http\Controllers\Backend\Config\ConfigurationController')->name('configuration.')->group(function () {
            route::get('/', 'configuration');
            route::post('/', 'save');

            route::get("session/{value}", 'configSession')->name("session");

            route::post("session/{value}", 'postSession')->name("postSession");

            route::post('upload/image/{session}', 'uploadImage')->name('uploadImage');
        });
    });

    route::middleware('guest')->group(function () {
        route::get('/login', [AuthController::class, 'login'])->name('login');
        route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    });
});
