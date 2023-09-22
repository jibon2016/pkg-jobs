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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('company_name');
            $table->string('job_title');
            $table->text('job_description');
            $table->string('requirement');
            $table->string('location');
            $table->string('role');
            $table->string('min_experience');
            $table->string('max_experience');
            $table->string('industry_type');
            $table->string('employment_type');
            $table->string('company_image');
            $table->string('salary_min');
            $table->string('salary_max');
            $table->string('key_skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
