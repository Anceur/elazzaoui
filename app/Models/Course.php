<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_teacher',
        'course_price',
        'course_details',
        'course_desc',
        'course_photo',
        'course_video',
        'playlist_videos',
    ];

    protected $casts = [
        'playlist_videos' => 'array',
    ];
}
