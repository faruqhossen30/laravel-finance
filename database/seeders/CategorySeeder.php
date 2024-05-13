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
            array('id' => '5','name' => 'CD rates','slug' => 'cd-rates','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:45:19','updated_at' => '2024-05-12 11:45:19'),
            array('id' => '6','name' => 'High-yield savings','slug' => 'high-yield-savings','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:46:00','updated_at' => '2024-05-12 11:46:00'),
            array('id' => '7','name' => 'Home Purchase','slug' => 'home-purchase','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:47:43','updated_at' => '2024-05-12 11:47:43'),
            array('id' => '8','name' => 'Credit Cards','slug' => 'credit-cards','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:47:57','updated_at' => '2024-05-12 11:47:57'),
            array('id' => '9','name' => 'Home equity','slug' => 'home-equity','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:48:15','updated_at' => '2024-05-12 11:48:15'),
            array('id' => '10','name' => 'Home refiniance','slug' => 'home-refiniance','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:49:55','updated_at' => '2024-05-12 11:49:55'),
            array('id' => '11','name' => 'Investing','slug' => 'investing','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:50:11','updated_at' => '2024-05-12 11:50:11'),
            array('id' => '12','name' => 'Personal Loans','slug' => 'personal-loans','thumbnail' => NULL,'author_id' => '1','status' => '1','created_at' => '2024-05-12 11:50:24','updated_at' => '2024-05-12 11:50:24')
          );

        Category::insert($categories);


    }
}
