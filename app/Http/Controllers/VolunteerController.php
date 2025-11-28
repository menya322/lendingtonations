<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'interest' => 'required',
        'message' => 'nullable'
    ]);

    // Save to database or send via email
    Volunteer::create($validated);

    return back()->with('success', 'Thank you for signing up to volunteer! We will contact you soon.');
}

}
