<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChannelCategoryFeild extends Migration
{
    public function up()
    {
        Schema::table('channel_categories', function (Blueprint $table) {
            $table->enum('homepage',['Yes','No'])->default('Yes');
        });
    }

    public function down()
    {
        Schema::table('channel_categories', function (Blueprint $table) {
            //
        });
    }
}
