<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

// app/Http/Controllers/FaqController.php
class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order')->get();

        return view('faq', compact('faqs'));
    }
}
