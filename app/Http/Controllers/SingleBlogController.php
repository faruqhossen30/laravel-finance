<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function singleBlog($slug){

        $blog = Blog::firstwhere('slug',$slug);

        // return $blog;
        return view('singleblog',compact('blog'));

    }
}
