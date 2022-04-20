<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChannelIdReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('post_id')->after('user_id')->default(0);
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
}
