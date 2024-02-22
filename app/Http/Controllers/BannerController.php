<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index()
    {
        $bannerImages = Banner::all();
        return view('banner_images.index', compact('bannerImages'));
    }

   

    public function create()
    {
        return view('banner_images.create');
    }


    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        // Upload image
        $imagePath = $request->file('image')->store('banners','public');

        // Create banner image
        Banner::create([
            'title' => $request->title,
            'image' => $imagePath,
            
        ]);

        return redirect()->route('banner-images.index')->with('success', 'Banner image created successfully.');
    }

   // show method
    public function show($id)
    {
        $bannerImage = Banner::findOrFail($id);
        return view('banner_images.show', compact('bannerImage'));
    }


     // Edit method
     public function edit($id)
     {
         $bannerImage = Banner::findOrFail($id);
         return view('banner_images.edit', compact('bannerImage'));
     }


    // Update method
    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
           
        ]);

        // Find the banner image
        $bannerImage = Banner::findOrFail($id);

        // Update banner image
        $bannerImage->update([
            'title' => $request->title,
            'description' => $request->description,
            'enabled' => $request->enabled,
        ]);

        return redirect()->route('banner-images.index')->with('success', 'Banner image updated successfully.');
    }

    // Destroy method
    public function destroy($id)
    {
        $bannerImage = Banner::findOrFail($id);
        $bannerImage->delete();
        return redirect()->route('banner-images.index')->with('success', 'Banner image deleted successfully.');
    }

    



}
