<?php

namespace App\Models;

use App\Models\Blog\Software;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'project_description',
        'short_description',
        'description',
        'thumbnail',
        'user_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'color',
        'status'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }



}
