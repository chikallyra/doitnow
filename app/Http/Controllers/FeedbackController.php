<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Log request data for debugging
        Log::info('Feedback Request Data:', $request->all());

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'comment' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Create new feedback entry
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->comment = $request->comment;
        $feedback->rating = $request->rating;

        // Handle photo upload if exists
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('public/photos');
            $feedback->photo = $filePath;
        }

        // Save feedback to database
        $feedback->save();

        // Return success response
        return redirect('/');
    }
}

