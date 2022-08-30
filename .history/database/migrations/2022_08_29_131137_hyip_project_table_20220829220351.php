<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HyipProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hyips', function (Blueprint $table) {
            $table->id();
            $table->string('link', 1000);
            $table->float('amount', 8, 5);
            $table->float('fee',  8, 5);
            $table->float('rcb_first', 8, 5);
            $table->float('rcb_second', 8, 5)->nullable();
            $table->float('daily', 8, 5);
            $table->float('withdraw_1_time', 8, 5);
            $table->float('working_day', 8, 5);
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
        Schema::dropIfExists('hyips');
    }
}
