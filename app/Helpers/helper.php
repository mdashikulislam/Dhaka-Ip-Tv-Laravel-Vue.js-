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
