<?php namespace Issac\Features\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('issac_features_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('issac_features_posts');
    }
}
