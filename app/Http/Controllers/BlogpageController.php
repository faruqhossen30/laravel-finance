<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function categoryBlogPage($slug)
    {

        $category = Category::firstWhere('slug', $slug);
        // return $category;
        $blogs = Blog::whereHas('categories', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->get();
        // return $blogs;
        return view('blogpagecategory', compact('blogs'));
    }



    public function blogPage()
    {

        $per_page = null;
        if (isset($_GET['per_page']) && $_GET['per_page']) {
            $per_page = $_GET['per_page'];
        }

        $orderby = null;
        if (isset($_GET['orderby']) && $_GET['orderby']) {
            $orderby = $_GET['orderby'];
        }
        $category = null;
        if (isset($_GET['category']) && $_GET['category']) {
            $category = $_GET['category'];
        }

        // return   $per_page;

        $blogs = Blog::when($orderby, function ($query, $orderby) {
            return $query->orderBy('id', $orderby);
        })
        ->when($category, function ($query, $category) {
            $query->whereHas('categories', function ($query) use ($category) {
                return $query->where('category_id', $category);
            });
        })
        ->paginate($per_page ?? 4);
        // return $blogs;
        $categories  =  Category::get();
        return  view('blogpage', compact('blogs', 'categories'));
    }
}
