<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        
        $data = $request->only('name', 'email', 'phone', 'message');

        try {
            
            Mail::to('romellolasn2@gmail.com')->send(new ContactFormMail($data));
            \Log::info('Email sent successfully.');

            
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            
            \Log::error('Email failed to send: ' . $e->getMessage());
            return back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}