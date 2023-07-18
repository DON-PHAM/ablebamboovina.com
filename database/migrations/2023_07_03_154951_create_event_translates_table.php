<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_translates', function (Blueprint $table) {
            $table->id();
            $table->integer('eventid');
            $table->string('languageid');
            $table->string('name');
            $table->text('description');
            $table->text('content');
            $table->string('metakeyword');
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
        Schema::dropIfExists('event_translates');
    }
};
