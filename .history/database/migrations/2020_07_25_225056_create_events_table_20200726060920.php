<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();   
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('content');
            $table->string('status', 255);
            $table->string('image', 255);

            // $table->unsignedBigInteger('user_id');
            $table->integer('user_id')->unsigned();

            $table->timestamps();
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
