<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $mainMenu = App\Menu::create(['title' => 'MAIN MENU']);
        $sidebarMenu = App\Menu::create(['title' => 'SIDEBAR MENU']);
        $footerMenu = App\Menu::create(['title' => 'FOOTER MENU']);
        
        $mainMenu->children()->create(['title' => 'Trang Chủ', 'url' => '/']);
        $mainMenu->children()->create(['title' => 'Tin Tức', 'url' => '/posts']);
        $mainMenu->children()->create(['title' => 'Giới thiệu']);

        $footerMenu->children()->create(['title' => 'Trang Chủ', 'url' => '/']);
        $footerMenu->children()->create(['title' => 'Giới thiệu']);

        // $mainMenu->parents()->create(['title' => 'Who']);   
        
        // factory(App\Menu::class, 10)->create(); //Tao them de test phan menu
    }
}
