<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeoColumnChannelCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('channel_categories', function (Blueprint $table) {
            $table->string('seo_title')->nullable();
            $table->string('seo_keyword')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('channel_categories', function (Blueprint $table) {
            //
        });
    }
}
