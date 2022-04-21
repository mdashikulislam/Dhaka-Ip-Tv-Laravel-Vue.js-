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
        if (Cms::exists()){
            Cms::truncate();
        }
        Cms::firstOrCreate( [
            'name'=>'Home',
            'url'=>'/',
            'seo_title'=>'Watch Live Tv Online',
            'seo_description'=>'Watch Live Tv Online',
            'seo_keyword'=>'Watch Live Tv Online',
        ]);

        Cms::firstOrCreate( [
            'name'=>'Live Tv',
            'url'=>'live-tv',
            'seo_title'=>'All Live Tv Channel',
            'seo_description'=>'All Live Tv Channel',
            'seo_keyword'=>'All Live Tv Channel',
        ]);
        Cms::firstOrCreate( [
            'name'=>'Contact Us',
            'url'=>'contact-us',
            'seo_title'=>'Contact Us',
            'seo_description'=>'Contact Us',
            'seo_keyword'=>'Contact Us',
        ]);
        Cms::firstOrCreate( [
            'name'=>'About Us',
            'url'=>'about-us',
            'seo_title'=>'About Us',
            'seo_description'=>'About Us',
            'seo_keyword'=>'About Us',
        ]);
    }
}
