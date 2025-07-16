<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.konsultasi');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'namept' => 'required|string|max:100',
            'layanan' => 'required|string',
            'timeline' => 'required|string',
            'budget'  => 'nullable|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim. Kami akan segera menghubungi Anda!');
    }
}

