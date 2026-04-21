<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileupload extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', 
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            
            return "File uploaded successfully! Stored at: " . $path;
        }

        return "No file selected.";
    }
}
