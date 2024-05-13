<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = array(
            array(
            'id' => '1',
            'title' => 'Front accounts - let work together',
            'slug' => 'front-accounts-let-work-together','short_description' => 'Are you an accountant? Are you a company formation advisor?','project_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','description' => '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','thumbnail' => 'thumbnail/blog/ZL6kRwjqBOtMVLc8W7ktken7SGBimGKH6mBdnELc.png','user_id' => '1','meta_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','meta_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry','meta_keyword' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry','color' => '#a22525','status' => '1','created_at' => '2024-05-12 11:16:59','updated_at' => '2024-05-12 11:27:40')
          );


          Blog::insert($blogs);
    }
}
