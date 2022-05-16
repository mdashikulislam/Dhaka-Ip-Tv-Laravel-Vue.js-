<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\ChannelCategory;

class SitemapController extends Controller
{
    public function index()
    {
        $channels = Channel::select('slug','updated_at')->where('status','Active')->get();
        $channelCategories = ChannelCategory::select('slug','updated_at')->where('status','Active')->get();
        return \response()->view('sitemap.index',compact('channels','channelCategories'))->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
