<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list', 'create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $portfolioItems = PortfolioItem::all();
        $services = Service::all();
        return view('index', compact('portfolioItems', 'services'));
    }

    public function index2()
    {
        $portfolioItems = PortfolioItem::all();
        $services = Service::all();
        return view('portfolio', compact('portfolioItems', 'services'));
    }

    public function list(Request $request)
    {
        $sort = $request->query('sort', 'created_at');
        $dir = $request->query('dir', 'desc');
        $portfolioItems = PortfolioItem::orderBy($sort, $dir)->paginate(10);
        return view('portfolio-list', compact('portfolioItems'));
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filter' => 'required|in:filter-app,filter-web,filter-card',
            'category' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'project_date' => 'nullable|date',
            'project_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = $request->file('image')->store('portfolio', 'public');

        PortfolioItem::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'filter' => $request->filter,
            'category' => $request->category,
            'client' => $request->client,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('success', 'Portfolio item added successfully!');
    }

    public function show($id)
    {
        $item = PortfolioItem::findOrFail($id);
        return view('portfolio-details', compact('item'));
    }

    public function edit($id)
    {
        $item = PortfolioItem::findOrFail($id);
        return view('portfolio.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = PortfolioItem::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'filter' => 'required|in:filter-app,filter-web,filter-card',
            'category' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'project_date' => 'nullable|date',
            'project_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only([
            'title',
            'filter',
            'category',
            'client',
            'project_date',
            'project_url',
            'description',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
                Storage::disk('public')->delete($item->image_path);
            }
            $data['image_path'] = $request->file('image')->store('portfolio', 'public');
        }

        $item->update($data);

        return redirect()->route('portfolio.list')->with('success', 'Portfolio item updated successfully!');
    }

    public function destroy($id)
    {
        $item = PortfolioItem::findOrFail($id);
        if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
            Storage::disk('public')->delete($item->image_path);
        }
        $item->delete();
        return redirect()->route('portfolio.list')->with('success', 'Portfolio item deleted successfully!');
    }
}
