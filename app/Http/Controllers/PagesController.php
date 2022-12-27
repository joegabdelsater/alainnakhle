<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Category;
use App\Models\Social;

class PagesController extends Controller
{
    
    public function index() {
        $about = About::first();
        $banner = Banner::first();
        $projects = Project::all();
        $categories = Category::all();

        return view('index', compact('about', 'banner', 'categories'));
    }
}
