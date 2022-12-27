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

    public function index()
    {
        $about = About::first();
        $banner = Banner::first();
        $small_text = explode(' ', $banner->small_text);
        $socials = Social::all()->keyBy('platform')->toArray();

        $banner->small_text = implode(' ', array_map(function ($word) {
            return '<span>' . $word . '</span>';
        }, $small_text));


        $projects = Project::with('category')->get();
        $categories = Category::all();
    
        return view('index', compact('about', 'banner', 'categories', 'projects', 'socials'));
    }
}
