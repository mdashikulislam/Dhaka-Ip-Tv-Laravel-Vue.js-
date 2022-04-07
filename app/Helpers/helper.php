<?php

function channelTypeDropdown($selected = []){
    $categories = \App\Models\ChannelCategory::where('status','Active')->get();
    $row = "";
    if ($categories->isNotEmpty()){
        foreach ($categories as $key => $value){
            $row .= "<option value='$value->id' ";
            if (!empty($selected)){
                foreach ($selected as $st){
                    if ($st == $value->id){
                        $row .= ' selected ';
                    }
                }
            }
            $row .=' >'.$value->name.'</option>';
        }
    }
    return $row;
}
function uploadSingleImage($request = null, $path = '', $prefix = ''): string
{
    $file = $request;
    $fileName = $prefix.'_'.time().rand(0000,9999).'.'.$file->getClientOriginalExtension();
    $destination = $path;
    $file->storeAs($destination,$fileName,'public');
    $fileNameWithDestination = $destination . '/'.$fileName;
    return $fileNameWithDestination;
}
function channelListByCategoryID($categoryId = 0,$limit = 0){
    $data =  \App\Models\Channel::with('channelCategories')->whereHas('channelCategories',function ($query) use ($categoryId){
        $query->where('channel_category_id',$categoryId);
    })->where('status','Active');
    if ($limit > 0){
        $data = $data->limit($limit);
    }
    $data =  $data->orderByDesc('created_at','DESC')->get();
    return $data;
}
function getChannelCard($data = []){
    if (empty((object)$data)){
        return ;
    }
    $html = '<div class="card"><div class="card__cover">';
    if ($data->logo_type == 'Url'){
        $html.='<img class="lazy" src="'.asset('frontend/img/demo.png').'" data-src="'.$data->preview_url.'" alt="'.$data->title.'">';
    }else{
        $html.='<img class="lazy" src="'.asset('frontend/img/demo.png').'" data-src="'.\Illuminate\Support\Facades\Storage::disk('local')->url($data->preview_file).'" alt="'.$data->title.'">';
    }
    $html.='<a href="'.route('channel.details',['slug'=>$data->slug]).'" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                            <!--<span class="card__rate card__rate--green">8.4</span>-->
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="'.route('channel.details',['slug'=>$data->slug]).'">'.$data->title.'</a></h3>
                        </div>
                    </div>';
    return $html;
}
