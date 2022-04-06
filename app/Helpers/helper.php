<?php

function channelTypeDropdown($selected = []){
    $categories = \App\Models\ChannelCategory::where('status','Active')->get();
    $row = "";
    if ($categories->isNotEmpty()){
        foreach ($categories as $key => $value){
            $row .= "<option value='$value->id'>$value->name</option>";
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
