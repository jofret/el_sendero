<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('trailer_id')->unsigned()->nullable();

            $table->string('name', 128);
            $table->string('email', 128);
            $table->mediumText('body');
            
            //sería la respuesta
            $table->text('respuesta')->nullable();
            $table->string('fecha_respuesta', 128)->nullable();

            //publicación: post o trailer
            $table->string('publicacion', 128);
            

            $table->string('status')->default('DRAFT');

            $table->string('link')->nullable();


            $table->timestamps();

            //relations

            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('trailer_id')->references('id')->on('trailers')
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
        Schema::dropIfExists('comentarios');
    }
}
