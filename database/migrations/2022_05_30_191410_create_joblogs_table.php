<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblogs', function (Blueprint $table) {
            $table->id();
            $table->Date('Date');
            $table->string('Title');
            $table->string('Details');
            $table->time('Time_start');
            $table->time('Time_end');
            $table->string('approved_status');
            $table->string('image');
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
        Schema::dropIfExists('joblogs');
    }
}
