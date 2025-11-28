<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('emails.contacts');
    }

    public function submit(Request $request)
    {
        // Validate the form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'project' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Check if mail is configured
        if (empty(config('mail.username')) || empty(config('mail.password'))) {
            return redirect()->back()
                ->with('error', 'Email service is currently being configured. Please try again later or call us directly.')
                ->withInput();
        }

        try {
            // Send email
            Mail::to('info@lendingnations.com')->send(new ContactFormMail($validated));

            return redirect()->back()
                ->with('success', 'Thank you for contacting us! We will get back to you soon.');
                
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again or contact us directly at (+256) 784 524705.')
                ->withInput();
        }
    }
}