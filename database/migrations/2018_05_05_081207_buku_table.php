<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BukuTable extends Migration
{
    public $tablename = 'buku';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablename, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->uuid('id');
            $table->string('id_buku')->unique();
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_buku');
            $table->string('pengarang_buku');
            $table->string('penerbit_buku');
            $table->integer('stok_buku');

            $table->timestamps();

            // $table->foreign('id_kategori')->references('id')->on('kategori_buku');

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
