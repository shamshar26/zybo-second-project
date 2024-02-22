<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolioImages = Portfolio::all();
        return view('portfolio.index', compact('portfolioImages'));
    }

   

    public function create()
    {
        return view('portfolio.create');
    }


    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        // Upload image
        $imagePath = $request->file('image')->store('banners');

        // Create banner image
        Portfolio::create([
            'title' => $request->title,
            'image' => $imagePath,
            
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Banner image created successfully.');
    }

   // show method
    public function show($id)
    {
        $portfolioImage = Portfolio::findOrFail($id);
        return view('portfolio.show', compact('portfolioImage'));
    }


     // Edit method
     public function edit($id)
     {
         $portfolioImage = Portfolio::findOrFail($id);
         return view('portfolio.edit', compact('portfolioImage'));
     }


    // Update method
    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
           
        ]);

        // Find the banner image
        $portfolioImage = Portfolio::findOrFail($id);

        // Update banner image
        $portfolioImage->update([
            'title' => $request->title,
            'image' => $request->image,
            
        ]);

        return redirect()->route('portfolio.index')->with('success', 'portfolio image updated successfully.');
    }

    // Destroy method
    public function destroy($id)
    {
        $bannerImage = Portfolio::findOrFail($id);
        $bannerImage->delete();
        return redirect()->route('portfolio.index')->with('success', 'portfolio image deleted successfully.');
    }

    

}
