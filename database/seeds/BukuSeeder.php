<?php

use Illuminate\Database\Seeder;
use\App\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->id = Uuid::generate();
        $buku->id_buku = 'b01';
        $buku->id_kategori = 'k01';
        $buku->nama_buku = 'Dalam Dekapan Ukhuwah';
        $buku->pengarang_buku = 'Salim A. Fillah';
        $buku->penerbit_buku = '2012';
        $buku->stok_buku = 10;
        $buku->save();

    }
}