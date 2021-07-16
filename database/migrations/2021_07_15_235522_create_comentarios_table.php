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
            $table->string('surname', 128);
            $table->string('email', 128);
            $table->mediumText('body');
            
            //sería la respuesta
            $table->mediumText('respuesta')->nullable();

            

            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');

            $table->enum('sender',['SENDED','NO_SENDED'])->default('NO_SENDED');


            $table->timestamps();
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
