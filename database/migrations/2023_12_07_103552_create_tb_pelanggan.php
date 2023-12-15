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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->tinyInteger('pel_id_gol');
            $table->string('pel_no');
            $table->string('pel_nama');
            $table->text('pel_alamat');
            $table->string('pel_hp');
            $table->string('pel_ktp');
            $table->string('pel_seri');
            $table->integer('pel_meteran');
            $table->enum('pel_aktif',['Y','N']);
            $table->integer('pel_id_user')->unsigned();
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('cascade');
            $table->foreign('pel_id_user')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
   
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
