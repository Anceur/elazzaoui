<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['employes_name', 'employes_email', 'employes_telephone', 'employes_adresse', 'employes_date_de_naissance', 'employes_sexe', 'employes_photo', 'employes_discription'];
}


