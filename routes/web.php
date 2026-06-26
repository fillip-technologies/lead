<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsitedesignController;
use App\Http\Controllers\DigitalmarketingController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\GmbController;
use App\Http\Controllers\EmbedFormController;
use App\Http\Controllers\LeadFormController;


// Guest-only routes (redirect to home if already logged in)
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'login'])->name('login');
    Route::get('registration', [HomeController::class, 'registration'])->name('registration');
});

// Auth actions (no middleware — they handle their own state transitions)
Route::post('/users/registration', [UserController::class, 'store'])->name('users.registration');
Route::post('/users/login', [UserController::class, 'login'])->name('users.login');
Route::post('/users/logout', [UserController::class, 'logout'])->name('users.logout');

// Public embed/campaign viewer routes
Route::get('/websitedesign/{id}', [HomeController::class, 'showWebsiteCampaign'])->name('websitedesign.show');
Route::get('/digitalmarketing/{id}', [HomeController::class, 'showDigitalMarketingCampaign'])->name('digitalmarketing.show');
Route::get('/socialmedia/{id}', [HomeController::class, 'showSocialMediaCampaign'])->name('socialmedia.show');
Route::get('/gmb/{id}', [HomeController::class, 'showGmbCampaign'])->name('gmb.show');

Route::get('/embed/forms/{slug}', [EmbedFormController::class, 'show']);
Route::post('/forms/submit', [EmbedFormController::class, 'submit']);
Route::get('/embed/form.js', [EmbedFormController::class, 'embedJs']);

Route::get('/thank-you', [HomeController::class, 'thankyou'])->name('thankyou');

// Protected routes (must be logged in)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'homePage'])->name('home');
    Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit');
    Route::put('/leads/{id}', [HomeController::class, 'update'])->name('leads.update');
    Route::get('user', [HomeController::class, 'user'])->name('user');
    Route::get('websitecampaign', [HomeController::class, 'websitecampaign'])->name('websitecampaign');
    Route::get('digitalmarketing', [HomeController::class, 'digitalmarketing'])->name('digitalmarketing');
    Route::get('gmb', [HomeController::class, 'gmb'])->name('gmb');
    Route::get('soicalmediamarketingandmanagement', [HomeController::class, 'soicalmediamarketingandmanagement'])->name('soicalmediamarketingandmanagement');
    Route::get('training', [HomeController::class, 'training'])->name('training');

    Route::post('/leads/store', [ClientController::class, 'store'])->name('leads.store');
    Route::post('/leads/bulk-upload', [ClientController::class, 'bulkUpload'])->name('leads.bulk-upload');
    Route::get('/leads/sample-csv', [ClientController::class, 'downloadSampleCsv'])->name('leads.sample-csv');

    Route::post('/websitedesign/store', [WebsitedesignController::class, 'store'])->name('websitedesign.store');
    Route::post('/digitalmarketing/store', [DigitalmarketingController::class, 'store'])->name('digitalmarketing.store');
    Route::post('/socialmedia/store', [SocialmediaController::class, 'store'])->name('socialmedia.store');
    Route::post('/gmb/store', [GmbController::class, 'store'])->name('gmb.store');

    // Lead Form CRUD
    Route::post('/lead-form/industry',        [LeadFormController::class, 'storeIndustry'])->name('lead.industry.store');
    Route::put('/lead-form/industry/{id}',    [LeadFormController::class, 'updateIndustry'])->name('lead.industry.update');
    Route::delete('/lead-form/industry/{id}', [LeadFormController::class, 'destroyIndustry'])->name('lead.industry.destroy');

    Route::post('/lead-form/rating',          [LeadFormController::class, 'storeRating'])->name('lead.rating.store');
    Route::put('/lead-form/rating/{id}',      [LeadFormController::class, 'updateRating'])->name('lead.rating.update');
    Route::delete('/lead-form/rating/{id}',   [LeadFormController::class, 'destroyRating'])->name('lead.rating.destroy');

    Route::post('/lead-form/source',          [LeadFormController::class, 'storeSource'])->name('lead.source.store');
    Route::put('/lead-form/source/{id}',      [LeadFormController::class, 'updateSource'])->name('lead.source.update');
    Route::delete('/lead-form/source/{id}',   [LeadFormController::class, 'destroySource'])->name('lead.source.destroy');

    Route::post('/lead-form/address',         [LeadFormController::class, 'storeAddress'])->name('lead.address.store');
    Route::put('/lead-form/address/{id}',     [LeadFormController::class, 'updateAddress'])->name('lead.address.update');
    Route::delete('/lead-form/address/{id}',  [LeadFormController::class, 'destroyAddress'])->name('lead.address.destroy');
});
