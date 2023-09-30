<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function Template()
    {
        return view('template');
    }
}
