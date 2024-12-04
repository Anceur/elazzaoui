<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name', 255);
            $table->string('course_teacher', 255);
            $table->decimal('course_price', 8, 2);
            $table->text('course_details')->nullable();
            $table->text('course_desc')->nullable();
            $table->string('course_photo')->nullable();
            $table->string('course_video')->nullable();
            $table->json('playlist_videos')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
