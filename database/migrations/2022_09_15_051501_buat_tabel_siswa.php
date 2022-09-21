<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string("nisn");
            $table->string("nis");
            $table->string("nama");
            $table->string("alamat");
            $table->string("no_telp");
            $table->timestamps(); 

            $table->bigInteger('id_kelas'); 
            $table->bigInteger('id_spp'); 
            $table->bigInteger('id_absen'); 
        });
    }       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas'); 
    }
};
