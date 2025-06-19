<?php

use Illuminate\Support\Facades\Route;
use Benedict\OnboardingWizard\Http\Controllers\OnboardingController;

Route::middleware(['web'])->prefix('onboarding')->group(function () {
    Route::get('/step/{step}', [OnboardingController::class, 'show'])->name('onboarding.step');
    Route::post('/step/{step}', [OnboardingController::class, 'submit'])->name('onboarding.step.submit');
});
