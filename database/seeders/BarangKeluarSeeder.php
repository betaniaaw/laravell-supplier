<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => '565',
                'nama_barang' => 'Sepatu',
                'tgl_keluar' => '21',
                'jml_keluar' => '333',
                'lokasi' => 'Jl Kapuk Muara',
                'penerima' => 'Siti Salwa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '688',
                'nama_barang' => 'Handphone',
                'tgl_keluar' => '12',
                'jml_keluar' => '400',
                'lokasi' => 'Jl Mangga dua',
                'penerima' => 'Betania',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
