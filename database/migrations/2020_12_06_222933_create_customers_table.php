<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->increments('id');

            

            $table->string('name', 128);

            $table->string('city', 128);

            $table->string('telephone', 128);

            $table->string('email', 128);

            $table->integer('birthday')->unsigned();

            $table->string('birthmonth', 128);

            $table->text('message');

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
        Schema::dropIfExists('customers');
    }
}
