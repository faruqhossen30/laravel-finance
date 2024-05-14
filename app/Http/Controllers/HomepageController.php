<?php

namespace App\Http\Controllers;

use App\Models\Appraoch;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){


        $categories = Category::all();
        $blogs = Blog::get();
        $clients = Client::all();
        $approches = Appraoch::all();
        return view('homepage',compact('categories','blogs','clients','approches'));
    }
}
