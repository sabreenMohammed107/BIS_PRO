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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('department_id')->references('id')->on('departments');
        });


        Schema::table('paid_services', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters');

        });


         Schema::table('exam_results', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->foreign('exam_type_id')->references('id')->on('exam_types');

        });

        Schema::table('student_services', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paid_service_id')->references('id')->on('paid_services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
