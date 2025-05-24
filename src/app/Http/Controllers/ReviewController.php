<?php

// app/Http/Controllers/ReviewController.php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::paginate(10);
        return view('index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        $data = $request->only(['name', 'rating', 'comment']);
        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('reviews', 'public');
        }

        Review::create($data);
        return redirect()->route('reviews.index')->with('success', 'Review added!');
    }
}
