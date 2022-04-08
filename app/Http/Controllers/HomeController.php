<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\ChannelCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $channelCategory = ChannelCategory::where('status','Active')->where('homepage','Yes')->orderByDesc('created_at')->get();
        return view('frontend.home')
            ->with([
                'channelCategory'=>$channelCategory
            ]);
    }
}
