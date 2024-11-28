<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => '226',
                'nama_barang' => 'Botol minum',
                'tgl_masuk' => '11',
                'jml_masuk' => '495',
                'id_suplier' => '9992',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '111',
                'nama_barang' => 'Sendal jepit',
                'tgl_masuk' => '11',
                'jml_masuk' => '495',
                'id_suplier' => '3336',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
