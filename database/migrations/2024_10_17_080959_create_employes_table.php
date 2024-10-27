<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('employes_name');
            $table->string('employes_email')->unique();
            $table->string('employes_telephone');
            $table->string('employes_adresse');
            $table->date('employes_date_de_naissance');
            $table->enum('employes_sexe', ['Male', 'Female']);
            $table->string('employes_photo')->nullable();
            $table->text('employes_discription')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
}
