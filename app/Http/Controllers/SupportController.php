<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use Illuminate\Http\Request;

// app/Http/Controllers/SupportController.php
class SupportController extends Controller
{
    public function index()
    {
        return view('support');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'subject'  => 'required|string|max:255',
            'category' => 'required|in:connexion,appels,compte,rapports,autre',
            'priority' => 'required|in:basse,moyenne,haute,critique',
            'message'  => 'required|string|min:10',
        ]);

        SupportTicket::create($validated);

        return back()->with('success', 'Votre ticket a été envoyé avec succès !');
    }
}
