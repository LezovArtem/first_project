<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

final class AboutController extends Controller
{
    public function About(): View
    {
        return view('about');
    }
}
