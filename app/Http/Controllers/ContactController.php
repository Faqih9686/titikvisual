<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'namept' => 'required|string|max:100',
            'layanan' => 'required|string|max:100',
            'timeline' => 'required|string|max:20',
            'budget'  => 'required|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan berhasil dikirim. Kami akan segera menghubungi Anda!');
    }
}
