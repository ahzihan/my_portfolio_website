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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('bnr_title')->nullable();
            $table->string('bnr_person_name');
            $table->string('bnr_person_designation')->nullable();;
            $table->text('bnr_description')->nullable();;
            $table->string('bnr_photo');
            $table->string('bnr_btn_text')->nullable();;
            $table->string('bnr_btn_url')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
