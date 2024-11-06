<?php

namespace App\Models;
use App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'course_teacher', 'course_price', 'course_photo', 'course_desc'];
}
