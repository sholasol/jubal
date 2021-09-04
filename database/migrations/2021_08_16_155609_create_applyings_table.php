<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('pro_name')->nullable();
            $table->string('status')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('applyings');
    }
}
