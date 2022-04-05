<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BesicCRUD;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller implements BesicCRUD
{
    public function index()
    {
        $channels = Channel::with('channelCategories')->get();
        return view('admin.channel.index')
            ->with([
                'channels'=>$channels
            ]);
    }
    public function create()
    {
       return view('admin.channel.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>['required','max:255'],
           'slug'=>['required','max:255','unique:channels'],
           'media_url'=>['required','max:255'],
           'description'=>['required','max:255'],
           'logo_type'=>['required']
        ]);
        $channel = new Channel();
        $this->extracted($request,$channel);
        if ($channel->save()){
            $channel->channelCategories()->sync(!empty($request->channel_type) ? $request->channel_type :[]);
        }
        return $request->all();
    }
    private function extracted(Request $request,Channel $channel){
        $channel->title = $request->title;
        $channel->slug = $request->slug;
        $channel->logo_type = $request->logo_type;
        if ($request->logo_type == 'Choose File'){

        }else{
            $channel->preview_url = $request->preview_url;
        }
        $channel->media_url = $request->media_url;
        $channel->description = $request->description;
        $channel->status = $request->status;
        $channel->created_by = \Auth::id();
        $channel->seo_title = $request->seo_title;
        $channel->seo_keyword = $request->seo_keyword;
        $channel->seo_description = $request->seo_description;
    }
    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id, Request $request)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
