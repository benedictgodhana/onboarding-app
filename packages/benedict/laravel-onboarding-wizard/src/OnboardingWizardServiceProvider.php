<?php

namespace Benedict\OnboardingWizard;

use Illuminate\Support\ServiceProvider;

class OnboardingWizardServiceProvider extends ServiceProvider
{
    public function boot()
    {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
        //
    }
}
