<?php

use App\Http\Controllers\FgvservizioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Les routes principales du site FGVSERVIZIO
|
*/

// 🔹 Redirection par défaut selon la langue en session
Route::get('/', function () {
    $lang = Session::get('locale', 'en'); // Langue par défaut
    return redirect($lang);
});

// 🔹 Groupe de routes multilingue
Route::group([
    'prefix' => '{locale}',
    'where' => [
        // Liste complète des langues supportées
        'locale' => 'en|fr|es|de|it|pt|nl|lt|sl|sk|fi|sv|el|et|cs|lv|no'
    ],
    'middleware' => ['web', \App\Http\Middleware\DetectUserLanguage::class],
], function () {

    // Pages principales
    Route::get('/', fn() => view('pages.home'))->name('home');
    Route::get('/services', fn() => view('pages.services'))->name('services');
    Route::get('/application', fn() => view('pages.application'))->name('application');
    Route::get('/contact', fn() => view('pages.contact'))->name('contact');
    Route::get('/privacy_policy', fn() => view('pages.privacy_policy'))->name('privacy_policy');

    // Envoi du formulaire de contact
    Route::post('/send-email', [FgvservizioController::class, 'sendEmail'])->name('send_email');

    // Envoi du formulaire de demande de prêt
    Route::post('/loan-request', [FgvservizioController::class, 'sendLoanRequest'])->name('loan.request');
});

// 🔹 Changement de langue
Route::get('/change-language/{lang}', function ($lang) {
    $supported = ['en', 'fr', 'es', 'de', 'it', 'pt', 'nl', 'lt', 'sl', 'sk', 'fi', 'sv', 'el', 'et', 'lv', "cs", 'no'];

    if (in_array($lang, $supported)) {
        Session::put('locale', $lang);
        App::setLocale($lang);
    }

    return redirect()->back();
})->name('change.language');
