<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');     // اسم الدورة
            $table->string('course_teacher');  // اسم المعلم
            $table->decimal('course_price', 8, 2); // ثمن الدورة
            $table->string('course_photo')->nullable();
            $table->string('course_desc')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

