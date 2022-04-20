<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCmsTableColumn extends Migration
{
    public function up()
    {
        Schema::table('cms', function (Blueprint $table) {
            $table->string('name',255)->nullable();
            $table->string('url',255)->nullable();
            $table->string('seo_title',255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
        });
    }

    public function down()
    {
        Schema::table('cms', function (Blueprint $table) {
            //
        });
    }
}
