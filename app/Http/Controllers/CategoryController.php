<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories')); // Sesuaikan dengan nama view
    }

    public function create()
    {
        return view('create'); // Sesuaikan dengan nama view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'categories' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('categories', 'public');
        }

        Category::create($validated);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('edit', compact('category')); // Sesuaikan dengan nama view
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'categories' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            if ($category->photo) {
                Storage::delete('public/' . $category->photo);
            }
            $validated['photo'] = $request->file('photo')->store('categories', 'public');
        }

        $category->update($validated);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if ($category->photo) {
            Storage::delete('public/' . $category->photo);
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
    public function generatePdf()
    {
        $categories = Category::all(); // Ambil semua data kategori
    
        // Load view khusus untuk PDF
        $pdf = PDF::loadView('pdf', compact('categories'));
    
        // Stream atau download file PDF
        return $pdf->stream('categories.pdf'); // Atau gunakan ->download('categories.pdf') untuk unduhan langsung
    }
}