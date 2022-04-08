<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\ChannelCategory;

class ChannelController extends Controller
{
    public function index($slug)
    {
        $channel = Channel::where('slug',$slug)->where('status','Active')->first();
        if (empty($channel)){
            abort(404);
        }
        return view('frontend.channel-details')
            ->with([
                'channel'=>$channel
            ]);
    }

    public function channelCategory($slug)
    {
        $channels = Channel::whereHas('channelCategories',function ($q) use ($slug){
            $q->where('slug',$slug);
            $q->where('status','Active');
        })->where('status','Active')->paginate(18);
        return view('frontend.channel_category')
            ->with([
                'channels'=>$channels
            ]);
    }

    public function liveTv()
    {
        $channelCategory = ChannelCategory::where('status','Active')->orderByDesc('created_at')->get();
        return view('frontend.live-tv')
            ->with([
                'channelCategory'=>$channelCategory
            ]);
    }
}
