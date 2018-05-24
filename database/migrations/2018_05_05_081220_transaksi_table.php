<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiTable extends Migration
{
    public $tablename = 'transaksi';
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
            $table->string('id_transaksi')->unique();
            $table->integer('id_pengguna')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->string('waktu_transaksi');
            $table->string('buku_satu');
            $table->string('qty_satu');
            $table->string('harga_satu');
            $table->string('buku_dua')->nullable();
            $table->string('qty_dua')->nullable();
            $table->string('harga_dua')->nullable();
            $table->string('ongkir');
            $table->string('total_bayar');

            $table->timestamps();

            // $table->foreign('id_pengguna')->references('id')->on('pengguna');
            // $table->foreign('id_buku')->references('id')->on('buku');
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
