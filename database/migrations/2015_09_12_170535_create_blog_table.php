<?php

/**
 * Blog migration.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->string('excerpt');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('blog');
    }
}
