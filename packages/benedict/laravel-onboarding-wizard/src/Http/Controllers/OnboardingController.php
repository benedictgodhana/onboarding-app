<?php

namespace Benedict\OnboardingWizard\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OnboardingController extends Controller
{
    public function show($step)
    {
        return Inertia::render("Onboarding/Step{$step}");
    }

    public function submit(Request $request, $step)
    {
        // You can store submitted data here
        return redirect()->route('onboarding.step', ['step' => $step + 1]);
    }
}
