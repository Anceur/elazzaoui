<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_name', 'teacher_email', 'teacher_telephone', 'teacher_adresse', 'teacher_date_de_naissance', 'teacher_sexe', 'teacher_photo', 'teacher_discription'];
}
