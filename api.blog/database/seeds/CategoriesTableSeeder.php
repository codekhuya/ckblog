<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class, 5)->create();
        $category = App\Category::create(['title' => 'Tình Cảm', 'slug' => 'tinh-cam','thumbnail'=>'https://placeimg.com/640/480/animals/11']);
        $category = App\Category::create(['title' => 'Tiền Tài', 'slug' => 'tien-tai','thumbnail'=>'https://placeimg.com/640/480/animals/11']);
        $category = App\Category::create(['title' => 'Danh Vọng', 'slug' => 'danh-vong','thumbnail'=>'https://placeimg.com/640/480/animals/11']);
        $category = App\Category::create(['title' => 'Sức Khoẻ', 'slug' => 'suc-khoe','thumbnail'=>'https://placeimg.com/640/480/animals/11']);
        $category = App\Category::create(['title' => 'Hạnh Phúc', 'slug' => 'hanh-phuc','thumbnail'=>'https://placeimg.com/640/480/animals/11']);        
    }
}
