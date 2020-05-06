<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollOptionVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_option_votes', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('poll_option_id');
            // $table->string('ip');
            $table->timestamps();
            // $table->foreign('poll_option_id')->references('id')->on('poll_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_option_votes');
    }
}
