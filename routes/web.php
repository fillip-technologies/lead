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



Route::post('/websitedesign/store', [WebsitedesignController::class, 'store'])->name('websitedesign.store');
Route::get('/websitedesign/{id}', [HomeController::class, 'showWebsiteCampaign'])->name('websitedesign.show');

Route::post('/digitalmarketing/store', [DigitalmarketingController::class, 'store'])->name('digitalmarketing.store');
Route::get('/digitalmarketing/{id}', [HomeController::class, 'showDigitalMarketingCampaign'])->name('digitalmarketing.show');

Route::post('/socialmedia/store', [SocialmediaController::class, 'store'])->name('socialmedia.store');
Route::get('/socialmedia/{id}', [HomeController::class, 'showSocialMediaCampaign'])->name('socialmedia.show');

Route::post('/gmb/store', [GmbController::class, 'store'])->name('gmb.store');
Route::get('/gmb/{id}', [HomeController::class, 'showGmbCampaign'])->name('gmb.show');

Route::get('/embed/forms/{slug}', [EmbedFormController::class, 'show']);
Route::post('/forms/submit', [EmbedFormController::class, 'submit']);
Route::get('/embed/form.js', [EmbedFormController::class, 'embedJs']);



// Route::get('/leads/fetch', [ClientController::class, 'fetch'])->name('leads.fetch');
Route::post('/leads/store', [ClientController::class, 'store'])->name('leads.store');
Route::post('/leads/bulk-upload', [ClientController::class, 'bulkUpload'])->name('leads.bulk-upload');
Route::get('/leads/sample-csv', [ClientController::class, 'downloadSampleCsv'])->name('leads.sample-csv');
Route::put('/leads/{id}', [HomeController::class, 'update'])->name('leads.update');
Route::post('/users/registration', [UserController::class, 'store'])->name('users.registration');
Route::post('/users/login', [UserController::class, 'login'])->name('users.login');



Route::get('/home', [HomeController::class, 'homePage'])->name('home');

Route::get('/', [HomeController::class, 'login'])->name('login');

Route::get('registration', [HomeController::class, 'registration'])->name('registration');

Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit');

Route::get('user', [HomeController::class, 'user'])->name('user');

Route::get('websitecampaign', [HomeController::class, 'websitecampaign'])->name('websitecampaign');

Route::get('digitalmarketing', [HomeController::class, 'digitalmarketing'])->name('digitalmarketing');

// Route::get('socialmediamarketing', [HomeController::class, 'socialmediamarketing'])->name('socialmediamarketing');

// Route::get('management', [HomeController::class, 'management'])->name('management');

Route::get('gmb', [HomeController::class, 'gmb'])->name('gmb');

Route::get('soicalmediamarketingandmanagement', [HomeController::class, 'soicalmediamarketingandmanagement'])->name('soicalmediamarketingandmanagement');

Route::get('training', [HomeController::class, 'training'])->name('training');


Route::get('/thank-you', [HomeController::class, 'thankyou'])->name('thankyou');



// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Route::get('/registration', function () {
//     return view('pages.registration');
// });

// Route::get('/edit', function () {
//     return view('pages.edit-lead');
// });

// Route::get('/user', function () {
//     return view('pages.user');
// });