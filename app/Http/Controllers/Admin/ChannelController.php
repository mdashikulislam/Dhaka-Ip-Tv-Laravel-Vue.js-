<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BesicCRUD;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ChannelController extends Controller implements BesicCRUD
{
    public function index()
    {
        if (\request()->ajax()){
            $channels = Channel::with('channelCategories');
            return DataTables::of($channels)
                ->addColumn('action', function($data){
                    $html = '<div class="btn-group" role="group" aria-label="Basic example">';
                    $html .='<a href="'.route('channel.edit',['id'=>$data->id]).'" class="btn btn-info edit"><i class="fa fa-edit"></i></a>';
                    $html .='<a href="#" class="btn btn-danger delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div>';
                    return $html;
                })
                ->addColumn('image',function ($data){
                    $html = '';
                    if ($data->logo_type == 'Url'){
                        $html .= "<img class='small-image' src='$data->preview_url'>";
                    }else{
                        $html .= "<img class='small-image' src='".Storage::disk('local')->url($data->preview_file)."'>";
                    }
                    return $html;
                })
                ->rawColumns(['action','image'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.channel.index');
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
        toast('Channel create successfully','success');
        return redirect()->route('channel.index');
    }
    private function extracted(Request $request,Channel $channel){
        $channel->title = $request->title;
        $channel->slug = $request->slug;
        $channel->logo_type = $request->logo_type;
        if ($request->logo_type == 'Choose File'){
            if ($request->hasFile('preview_file')){
                $channel->preview_file= uploadSingleImage($request->preview_file,'channel','ch');
            }elseif ($channel->preview_file){

            }else{
                $channel->preview_file = null;
            }
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
        $channel = Channel::with('channelCategories')->where('id',$id)->first();
        if (empty($channel)){
            toast('Channel Not found','error');
            return  redirect()->route('channel.index');
        }
        return view('admin.channel.edit')
            ->with([
                'channel'=>$channel
            ]);
    }

    public function update($id, Request $request)
    {
        $channel = Channel::with('channelCategories')->where('id',$id)->first();
        if (empty($channel)){
            return  redirect()->route('channel.index');
        }
        $this->extracted($request,$channel);
        if ($channel->save()){
            $channel->channelCategories()->sync(!empty($request->channel_type) ? $request->channel_type :[]);
        }
        toast('Category update successfully','success');
        return redirect()->route('channel.index');
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
