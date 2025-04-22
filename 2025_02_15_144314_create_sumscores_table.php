<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sumscores', function (Blueprint $table) {
            $table->string('degree_id');
            $table->string('degree_name');
            $table->string('edu_year');
            $table->string('edu_term');
            $table->string('major_id');
            $table->string('major_name');
            $table->string('subject_id');
            $table->string('subject_name');
            $table->string('section');
            $table->string('rubric_id');
            $table->string('rubric_topic');
            $table->string('rubric_subtopic_id');
            $table->string('rubric_subtopic');
            $table->string('num_level1');
            $table->string('num_level2');
            $table->string('num_level3');
            $table->string('percent_level1');
            $table->string('percent_level2');
            $table->string('percent_level3');
            $table->string('percent_summary');
            $table->string('num_observation');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumscores');
    }
};
