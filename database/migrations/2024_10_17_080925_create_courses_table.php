<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // العمود الأساسي
            $table->string('course_name', 255);  // اسم الدورة
            $table->string('course_teacher', 255);  // اسم المعلم
            $table->decimal('course_price', 8, 2);  // سعر الدورة
            $table->text('course_photo')->nullable();  // صورة الدورة
            $table->text('course_video')->nullable();  // فيديو الدورة
            $table->text('course_desc')->nullable();  // وصف الدورة
            $table->json('playlist_videos')->nullable();  // قائمة الفيديوهات
            $table->integer('enrollment_count')->default(0);  // عدد المسجلين
            $table->decimal('rating', 3, 2)->nullable()->check('rating >= 0 and rating <= 5');  // تقييم الدورة (بين 0 و 5)
            $table->timestamps();  // الأعمدة الخاصة بالوقت (إنشاء وتحديث)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');  // حذف الجدول إذا لزم الأمر
    }
};
