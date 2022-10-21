<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Inertia\Inertia;

class PasswordController extends Controller
{
    public function generate()
    {
        return Inertia::render('Welcome', [
            'rand_password' => Str::random(16),
        ]);
    }
}
