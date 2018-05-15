<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KategoriBukuTable extends Migration
{
    public $tablename = 'kategori_buku';
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
        $table->string('id_kategori')->unique();
        $table->string('nama_kategori');

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
