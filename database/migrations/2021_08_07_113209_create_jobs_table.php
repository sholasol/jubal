<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('service_category');
            $table->string('gender')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->unsignedInteger('male')->nullable();
            $table->unsignedInteger('female')->nullable();
            $table->unsignedInteger('no_singer')->nullable();
            $table->unsignedInteger('no_song')->nullable();
            $table->string('timeline')->nullable();
            $table->text('demo')->nullable();
            $table->string('proposed_title')->nullable();
            $table->string('writing_nature')->nullable();
            $table->string('language')->nullable();
            $table->string('genre')->nullable();
            $table->string('need_instrumentalist_engineer')->nullable();
            $table->unsignedInteger('no_instrumentalist')->nullable();
            $table->text('location')->nullable();
            $table->string('instrumentalist_available')->nullable();
            $table->unsignedInteger('no_session')->nullable();
            $table->string('work_proxy')->nullable();
            $table->string('instrumentalist_category')->nullable();
            $table->unsignedInteger('no_location')->nullable();
            $table->string('nature_performance')->nullable();
            $table->string('song_type')->nullable();
            $table->string('nature_musician')->nullable();
            $table->string('duration')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('presentation_date')->nullable();
            $table->string('song_title')->nullable();
            $table->string('nature_event')->nullable();
            $table->string('event_type')->nullable();
            $table->unsignedInteger('no_guest')->nullable();
            $table->string('event_date')->nullable();
            $table->string('equipment_available')->nullable();
            $table->text('preferred_song')->nullable();
            $table->text('preferred_location')->nullable();
            $table->string('recording_type')->nullable();
            $table->string('audio_recording')->nullable();
            $table->string('have_studio_engr')->nullable();
            $table->string('need_instrumentalist')->nullable();
            $table->string('additional_instrumentalist')->nullable();
            $table->string('proposed_date')->nullable();
            $table->string('production_stage')->nullable();
            $table->string('timeline_delivery')->nullable();
            $table->string('producer_caliber')->nullable();
            $table->string('music_style')->nullable();
            $table->string('fresh_beat')->nullable();
            $table->unsignedInteger('no_beat')->nullable();
            $table->string('beat_maker_caliber')->nullable();
            $table->string('reference')->nullable();
            $table->string('learning_area')->nullable();
            $table->string('instrument')->nullable();
            $table->string('learning_scope')->nullable();
            $table->string('trainee_age')->nullable();
            $table->string('prior_knowledge')->nullable();
            $table->string('proficiency')->nullable();
            $table->string('director_caliber')->nullable();
            $table->string('nature_album')->nullable();
            $table->string('artist_name')->nullable();
            $table->text('additional_information')->nullable();
            $table->bigInteger('taken_by')->unsigned()->nullable();
            $table->string('date_taken')->nullable();
            $table->string('status')->default('available');
            //$table->enum('status', ['available', 'taken', 'canceled', 'done'])->default('available');
            $table->string('date_completed')->nullable();
            $table->decimal('amount')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
