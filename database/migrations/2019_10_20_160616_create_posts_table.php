<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('post_name', 100);
            $table->string('detail', 800)->nullable();
            $table->string('image_src', 100)->nullable();
            $table->Integer('view_count')->default(0);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('post_comment_id')->unsigned();

            $table->foreign('post_comment_id')
                ->references('id')
                ->on('post_comments')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
