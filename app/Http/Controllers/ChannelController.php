<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\ChannelCategory;
use App\Models\Review;

class ChannelController extends Controller
{
    public function index($slug)
    {
        $channel = Channel::where('slug',$slug)->where('status','Active')->first();
        if (empty($channel)){
            abort(404);
        }
        setCms($channel);
//        $reviews = Review::where('post_id',$channel->id)->orderByDesc('created_at')->get();
        $otherChannel = Channel::where('id','!=',$channel->id)->limit(24)->inRandomOrder()->get();
        return view('frontend.channel-details')
            ->with([
                'channel'=>$channel,
                'otherChannel'=>$otherChannel,
//                'reviews'=>$reviews
            ]);
    }

    public function channelCategory($slug)
    {
        $channelCategory = ChannelCategory::where('slug',$slug)->first();
        if (empty($channelCategory)){
            return redirect()->back();
        }
        $channels = Channel::whereHas('channelCategories',function ($q) use ($slug){
            $q->where('slug',$slug);
            $q->where('status','Active');
        })->where('status','Active')->paginate(18);
        if (request()->page){
            $seo = [
                'seo_title'=>$channelCategory->seo_title.' - page '.request()->page,
                'seo_description'=>$channelCategory->seo_description.' - page '.request()->page,
                'seo_keyword'=>$channelCategory->seo_keyword,
            ];
            setCms(json_decode(json_encode($seo)));
        }else{
            setCms($channelCategory);
        }
        return view('frontend.channel_category')
            ->with([
                'channels'=>$channels,
                'channelCategory'=>$channelCategory
            ]);
    }

    public function liveTv()
    {
        $cms = getCms(request()->segment(1));
        setCms($cms);
        $channelCategory = ChannelCategory::where('status','Active')->orderByDesc('created_at')->get();
        return view('frontend.live-tv')
            ->with([
                'channelCategory'=>$channelCategory
            ]);
    }
}
