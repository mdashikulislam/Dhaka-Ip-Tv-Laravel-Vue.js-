<?php

function channelTypeDropdown($selected = 0){
    $status = [
        '0' =>'Select One',
        'Bangla' =>'Bangla',
        'Indian Bangla' =>'Indian Bangla',
        'Documentary' =>'Documentary',
    ];
     $row = "";
    foreach ($status as $key => $value){
        $row .= '<option value="'.$key.'"';
        $row .=($selected === $key) ? 'selected' : '';
        $row .= '>'.$value.'</option>';
    }
    return $row;
}
