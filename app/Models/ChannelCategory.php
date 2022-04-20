<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelCategory extends Model
{
    use HasFactory;
    public function channel()
    {
        return $this->belongsToMany(Channel::class,'channel_categories_channels');
    }
}
