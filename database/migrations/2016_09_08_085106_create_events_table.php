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
            $table->string('title');
            $table->string('describtion')->unique();
            $table->string('keywords');
            $table->string('image')->unique();
            $table->string('alias')->unique();
            $table->longText('content');
            $table->timestamp('date');
            $table->string('venue');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
            $table->unique('title', 'date');
            $table->engine = 'MyISAM';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
