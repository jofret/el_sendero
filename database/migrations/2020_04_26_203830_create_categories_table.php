<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('precategory_id')->unsigned();
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('file', 128)->nullable();
            $table->mediumText('body')->nullable();

            $table->timestamps();

            //relations


            $table->foreign('precategory_id')->references('id')->on('precategories')
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
        Schema::dropIfExists('categories');
    }
}
