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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->integer('student_id');
            $table->string('batch_no');
            $table->string('exam_name')->nullable();
            $table->string('examiner_name');
            $table->string('question_title');
            $table->text('question_body');
            $table->text('point');
            $table->longText('answer');
            $table->string('mark')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
