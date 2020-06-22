<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questionnaire_id');
            $table->string('gender')->nullable();
            $table->string('residential_area')->nullable();
            $table->string('family_status')->nullable();
            $table->string('household_size')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('work_status')->nullable();
            $table->string('health')->nullable();
            $table->string('age')->nullable();
            $table->string('accepting_own_mistakes')->nullable();
            $table->string('controlling_desire')->nullable();
            $table->string('likening_same_for_other')->nullable();
            $table->string('completing_task_work_wisely')->nullable();
            $table->string('standing_on_principles')->nullable();
            $table->string('monthly_basic_income')->nullable();
            $table->string('monthly_part_time_income')->nullable();
            $table->string('annual_incom_from_other_sources')->nullable();
            $table->string('suggestion')->nullable();
            $table->string('wellbeing_total_question_score')->nullable();
            $table->string('wellbeing_obtain_score')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('surveys');
    }
}
