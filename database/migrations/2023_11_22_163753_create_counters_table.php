<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('clients_title');
            $table->string('clients_number');
            $table->string('product_title');
            $table->string('product_number');
            $table->string('project_title');
            $table->string('project_number');
            $table->string('student_title');
            $table->string('student_number');
            $table->string('bg_image');
            $table->tinyInteger('counter_status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
