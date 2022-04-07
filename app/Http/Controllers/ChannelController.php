<?php

namespace App\Http\Controllers;

use App\Models\Channel;

class ChannelController extends Controller
{
    public function index()
    {
        //
    }

    public function channelCategory($slug)
    {
        $channels = Channel::whereHas('channelCategories',function ($q) use ($slug){
            $q->where('slug',$slug);
            $q->where('status','Active');
        })->where('status','Active')->paginate(1);
        return view('frontend.channel_category')
            ->with([
                'channels'=>$channels
            ]);
    }
}
