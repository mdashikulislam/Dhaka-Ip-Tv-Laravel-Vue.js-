<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChannelCategoriesChannels extends Migration
{
    public function up()
    {
        Schema::create('channel_categories_channels', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('channel_category_id');
            $table->unsignedInteger('channel_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('channel_categories_channels');
    }
}
