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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('NIK')->unique();
            $table->string('alamat');
            $table->string('darah');
            $table->string('gender');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('no_hp');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('riwaya_penyakit')->nullable();
            $table->string('riwaya_keluarga')->nullable();
            $table->string('rokok')->default('no');
            $table->string('miras')->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
};
