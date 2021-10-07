<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama');
            $table->char('npm',8)->unique();
            $table->string('email')->unique();
            $table->String('jenis_kelamin');
            $table->String('agama');
            $table->String('no_hp');
            $table->String('status');
            $table->string('gambar');
            $table->Text('alamat');
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
        Schema::dropIfExists('asisten');
    }
}
