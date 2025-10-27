<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DriverApplicationController;
use App\Http\Controllers\Admin\PartnerApplicationController;
use App\Http\Controllers\Admin\ContactSubmissionController;
use App\Http\Controllers\Auth\DriverAuthController;
use App\Http\Controllers\Auth\PartnerAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Driver\DashboardController as DriverDashboardController;
use App\Http\Controllers\Partner\DashboardController as PartnerDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Join/Rejoindre
Route::get('/rejoindre/conducteur', [JoinController::class, 'driver'])->name('join.driver');
Route::post('/rejoindre/conducteur', [JoinController::class, 'storeDriver'])->name('join.driver.store');
Route::get('/rejoindre/partenaire', [JoinController::class, 'partner'])->name('join.partner');
Route::post('/rejoindre/partenaire', [JoinController::class, 'storePartner'])->name('join.partner.store');

// About
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// User Authentication & Dashboard
Route::prefix('utilisateur')->name('user.')->group(function () {
    Route::get('/inscription', [UserAuthController::class, 'showRegister'])->name('register');
    Route::post('/inscription', [UserAuthController::class, 'register'])->name('register.post');
    Route::get('/connexion', [UserAuthController::class, 'showLogin'])->name('login');
    Route::post('/connexion', [UserAuthController::class, 'login'])->name('login.post');
    Route::get('/deconnexion', [UserAuthController::class, 'logout'])->name('logout');
    
    Route::middleware(\App\Http\Middleware\UserMiddleware::class)->group(function () {
        Route::get('/tableau-de-bord', [UserDashboardController::class, 'index'])->name('dashboard');
        Route::get('/profil', [UserDashboardController::class, 'profile'])->name('profile');
        Route::post('/profil', [UserDashboardController::class, 'updateProfile'])->name('profile.update');
        Route::post('/changer-mot-de-passe', [UserDashboardController::class, 'updatePassword'])->name('password.update');
        Route::get('/notifications', [UserDashboardController::class, 'notifications'])->name('notifications');
        Route::get('/porte-monnaie', [UserDashboardController::class, 'wallet'])->name('wallet');
        Route::get('/mes-commandes', [UserDashboardController::class, 'orders'])->name('orders');
        Route::get('/promo', [UserDashboardController::class, 'promos'])->name('promos');
        Route::get('/reglages', [UserDashboardController::class, 'settings'])->name('settings');
        Route::get('/commentaires', [UserDashboardController::class, 'feedback'])->name('feedback');
        Route::post('/commentaires', [UserDashboardController::class, 'storeFeedback'])->name('feedback.store');
    });
});

// Driver Authentication & Dashboard
Route::prefix('conducteur')->name('driver.')->group(function () {
    Route::get('/connexion', [DriverAuthController::class, 'showLogin'])->name('login');
    Route::post('/connexion', [DriverAuthController::class, 'login'])->name('login.post');
    Route::get('/deconnexion', [DriverAuthController::class, 'logout'])->name('logout');
    
    Route::middleware(\App\Http\Middleware\DriverMiddleware::class)->group(function () {
        Route::get('/tableau-de-bord', [DriverDashboardController::class, 'index'])->name('dashboard');
        Route::get('/profil', [DriverDashboardController::class, 'profile'])->name('profile');
        Route::post('/profil', [DriverDashboardController::class, 'updateProfile'])->name('profile.update');
        Route::get('/reglages', [DriverDashboardController::class, 'settings'])->name('settings');
        Route::post('/changer-mot-de-passe', [DriverDashboardController::class, 'updatePassword'])->name('password.update');
    });
});

// Partner Authentication & Dashboard
Route::prefix('partenaire')->name('partner.')->group(function () {
    Route::get('/connexion', [PartnerAuthController::class, 'showLogin'])->name('login');
    Route::post('/connexion', [PartnerAuthController::class, 'login'])->name('login.post');
    Route::get('/deconnexion', [PartnerAuthController::class, 'logout'])->name('logout');
    
    Route::middleware(\App\Http\Middleware\PartnerMiddleware::class)->group(function () {
        Route::get('/tableau-de-bord', [PartnerDashboardController::class, 'index'])->name('dashboard');
        Route::get('/profil', [PartnerDashboardController::class, 'profile'])->name('profile');
        Route::post('/profil', [PartnerDashboardController::class, 'updateProfile'])->name('profile.update');
        Route::get('/reglages', [PartnerDashboardController::class, 'settings'])->name('settings');
        Route::post('/changer-mot-de-passe', [PartnerDashboardController::class, 'updatePassword'])->name('password.update');
    });
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Login
    Route::get('/login', [DashboardController::class, 'showLogin'])->name('login');
    Route::post('/login', [DashboardController::class, 'login'])->name('login.post');
    
    // Protected Routes
    Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Driver Applications
        Route::get('/drivers', [DriverApplicationController::class, 'index'])->name('drivers.index');
        Route::get('/drivers/{id}', [DriverApplicationController::class, 'show'])->name('drivers.show');
        Route::post('/drivers/{id}/status', [DriverApplicationController::class, 'updateStatus'])->name('drivers.status');
        Route::post('/drivers/{id}/regenerate-password', [DriverApplicationController::class, 'regeneratePassword'])->name('drivers.regenerate-password');
        Route::delete('/drivers/{id}', [DriverApplicationController::class, 'destroy'])->name('drivers.destroy');
        
        // Partner Applications
        Route::get('/partners', [PartnerApplicationController::class, 'index'])->name('partners.index');
        Route::get('/partners/{id}', [PartnerApplicationController::class, 'show'])->name('partners.show');
        Route::post('/partners/{id}/status', [PartnerApplicationController::class, 'updateStatus'])->name('partners.status');
        Route::post('/partners/{id}/regenerate-password', [PartnerApplicationController::class, 'regeneratePassword'])->name('partners.regenerate-password');
        Route::delete('/partners/{id}', [PartnerApplicationController::class, 'destroy'])->name('partners.destroy');
        
        // Contact Submissions
        Route::get('/contacts', [ContactSubmissionController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/{id}', [ContactSubmissionController::class, 'show'])->name('contacts.show');
        Route::post('/contacts/{id}/status', [ContactSubmissionController::class, 'updateStatus'])->name('contacts.status');
        Route::delete('/contacts/{id}', [ContactSubmissionController::class, 'destroy'])->name('contacts.destroy');
        
        // User Management
        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
        Route::get('/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
        Route::put('/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
        Route::post('/users/{id}/toggle-status', [\App\Http\Controllers\Admin\UserController::class, 'toggleStatus'])->name('users.toggle-status');
        Route::post('/users/{id}/reset-password', [\App\Http\Controllers\Admin\UserController::class, 'resetPassword'])->name('users.reset-password');
        Route::delete('/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
        
        // User Feedback
        Route::get('/feedback', [\App\Http\Controllers\Admin\FeedbackController::class, 'index'])->name('feedback.index');
        Route::get('/feedback/{id}', [\App\Http\Controllers\Admin\FeedbackController::class, 'show'])->name('feedback.show');
        Route::post('/feedback/{id}/respond', [\App\Http\Controllers\Admin\FeedbackController::class, 'respond'])->name('feedback.respond');
        Route::delete('/feedback/{id}', [\App\Http\Controllers\Admin\FeedbackController::class, 'destroy'])->name('feedback.destroy');
    });
});
