<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = array(
            array('id' => '1','name' => 'CD rates','slug' => 'cd-rates','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:45:19','updated_at' => '2024-05-12 11:45:19'),
            array('id' => '2','name' => 'High-yield savings','slug' => 'high-yield-savings','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:46:00','updated_at' => '2024-05-12 11:46:00'),
            array('id' => '3','name' => 'Home Purchase','slug' => 'home-purchase','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:47:43','updated_at' => '2024-05-12 11:47:43'),
          );

        Category::insert($categories);


    }
}
