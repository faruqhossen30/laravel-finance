<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function singleBlog($slug){

        $blog = Blog::with('user', 'categories')->firstWhere('slug', $slug);

        // Check if the blog exists
        if (!$blog) {
            abort(404, 'Blog not found');
        }

        // Retrieve the first category related to the blog
        $category = $blog->categories->first();

        // Get related blogs if a category exists
        $relatedBlogs = [];
        if ($category) {
            $relatedBlogs = Blog::whereHas('categories', function ($query) use ($category) {
                $query->where('category_id', $category->id);
            })->where('id', '!=', $blog->id)->get(); // Exclude the current blog
        }

        // Return the view with the blog and related blogs

        // return  $relatedBlogs;
        return view('singleblog', compact('blog', 'relatedBlogs'));


    }
}
