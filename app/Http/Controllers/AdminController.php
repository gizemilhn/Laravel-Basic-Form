<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);

        try {

            Admin::create($validated);
            return redirect()->route('pages/form')->with('success', 'Admin added successfully');
        } catch (\Exception $exception) {
            return redirect()->route('form')->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }
}

