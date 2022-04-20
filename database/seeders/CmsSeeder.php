<?php

namespace Database\Seeders;

use App\Models\Cms;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        if (Cms::exists()){
//            Cms::truncate();
//        }
        Cms::firstOrCreate( [
            'id'=>NULL,
            'name'=>'Home',
            'url'=>'/',
            'seo_title'=>'Watch Live Tv Online',
            'seo_description'=>'Watch Live Tv Online',
            'seo_keyword'=>'Watch Live Tv Online',
        ] );
    }
}
