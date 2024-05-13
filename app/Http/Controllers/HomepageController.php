<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){


        $categories = Category::all();
        $blogs = Blog::get();
        return view('homepage',compact('categories','blogs'));
    }
}
