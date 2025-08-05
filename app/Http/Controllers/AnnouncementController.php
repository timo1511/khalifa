<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        return Announcement::where('is_active', true)->get();
    }

    // Add methods for admin CRUD if needed
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
            'icon' => 'required|string|max:10',
            'link' => 'required|string|max:255',
            'cta' => 'required|string|max:50',
            'is_active' => 'boolean',
        ]);

        return Announcement::create($validated);
    }
}
