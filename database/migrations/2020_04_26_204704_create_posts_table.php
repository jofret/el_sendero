<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('precategory_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128)->unique();

            $table->text('excerpt')->nullable();
            $table->mediumText('body');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');

            $table->string('file', 128)->nullable();
            $table->string('file2', 128)->nullable();
            $table->string('file3', 128)->nullable();
            $table->string('file4', 128)->nullable();
            $table->string('file5', 128)->nullable();


            $table->string('youtube', 255)->nullable();

            $table->timestamps();


            //relations

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('precategory_id')->references('id')->on('precategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
