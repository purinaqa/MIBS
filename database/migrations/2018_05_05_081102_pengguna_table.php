<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenggunaTable extends Migration
{
     public $tablename = 'pengguna';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create($this->tablename, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('username_pengguna')->unique();
            $table->string('nama_pengguna');
            $table->string('alamat_pengguna');
            $table->string('nohp_pengguna')->unique();
            $table->string('email_pengguna')->unique();
            $table->string('password_pengguna');

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
        Schema::dropIfExists($this->tablename);
    }
}
