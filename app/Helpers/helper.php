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
