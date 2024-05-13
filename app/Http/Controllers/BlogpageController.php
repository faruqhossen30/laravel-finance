<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
   public function blogPage() {

    $blogs = Blog::all();
    return view('blogpage',compact('blogs'));
   }
}
