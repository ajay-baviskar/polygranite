<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store', 'createFeature', 'storeFeature']);
    }

    public function index()
    {
        $services = Service::all();
        $features = Feature::all();
        return view('services', compact('services', 'features'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Service::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('success', 'Service added successfully!');
    }

    public function createFeature()
    {
        return view('feature.create');
    }

    public function storeFeature(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = $request->file('image') ? $request->file('image')->store('features', 'public') : null;

        Feature::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Feature added successfully!');
    }
}
