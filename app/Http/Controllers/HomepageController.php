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

        $categories = Category::with('blogs')->get();
        // return  $categories ;
        $blogs = Blog::take(4)->latest()->get();

        $clients = Client::all();
        $approches = Appraoch::all();
        return view('homepage', compact('categories','blogs','clients','approches'));
    }
}
