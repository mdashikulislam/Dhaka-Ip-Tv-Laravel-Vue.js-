<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    public function channelCategories()
    {
        return $this->belongsToMany(ChannelCategory::class,'channel_categories_channels');
    }

    public function ratings()
    {
        return $this->hasMany(Review::class,'post_id','id');
    }

}
