<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BannerController;
use Illuminate\Http\Request;
use App\Models\Banner;

class ZyboController extends Controller
{
    public function index()
    {
        
        $bannerImages = Banner::all();

      
        return view('zybo', compact('bannerImages'));
    }
}
