<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps('');
            $table->integer('user_id');
            $table->string('event_title');
            $table->date('starts_at');
            $table->date('ends_at');
            $table->string('location');
            $table->text('event_description');
            $table->string('event_type');
            $table->string('event_topic');
            $table->string('organisers_name');
            $table->string('event_image');
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
