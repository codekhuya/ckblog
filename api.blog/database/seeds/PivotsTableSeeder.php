<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class PivotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dữ liệu mẫu cho bảng Taggable
        for($i = 0; $i < 29; $i++){
            $taggable = [
                'tag_id' => Tag::inRandomOrder()->first()->id,
                'taggable_id' => Post::inRandomOrder()->first()->id,
                'taggable_type' => 'post',
            ];
            DB::table('taggables')->insert($taggable);
        }

        //Du lieu cho bang Category_Post
        for($i = 0; $i < 25; $i++){
            $data = [
                'post_id' => App\Post::inRandomOrder()->first()->id,
                'category_id' => App\Category::inRandomOrder()->first()->id,
            ];
            DB::table('category_post')->insert($data);
        }
    }
}
