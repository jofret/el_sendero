<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('precategory_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('file', 128)->nullable();
            $table->string('file2', 128)->nullable();

            $table->timestamps();

            //relations

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
        Schema::dropIfExists('images');
    }
}
