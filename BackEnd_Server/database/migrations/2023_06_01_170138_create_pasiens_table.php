<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nomor_bpjs')->unique();
            $table->bigInteger('nik')->unique();
            $table->date('tanggal_lahir');
            $table->string('umur');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->enum('agama',['Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha']);
            $table->text('alamat');
            $table->string('telepon');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
