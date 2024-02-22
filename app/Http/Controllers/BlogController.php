<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $services = Blog::all();
        return view('blogs.index', compact('services'));
    }

   

    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Description'=>'required',
            
        ]);

        // Upload image
        $imagePath = $request->file('image')->store('banners');

        // Create banner image
        Blog::create([
            'title' => $request->title,
            'image' => $imagePath,
            'Description' => $request->Description,
            
        ]);

        return redirect()->route('blogs.index')->with('success', 'Banner image created successfully.');
    }

   // show method
    public function show($id)
    {
        $services = Blog::findOrFail($id);
        return view('blogs.show', compact('services'));
    }


     // Edit method
     public function edit($id)
     {
         $services = Blog::findOrFail($id);
         return view('blogs.edit', compact('services'));
     }


    // Update method
    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
           
        ]);

        // Find the banner image
        $services = Service::findOrFail($id);

        // Update banner image
        $services->update([
            'title' => $request->title,
            'Description' => $request->Description,
            
        ]);

        return redirect()->route('blogs.index')->with('success', 'Service updated successfully.');

    }

    // Destroy method
    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect()->route('blogs.index')->with('success', 'Banner image deleted successfully.');
    }

    


}
