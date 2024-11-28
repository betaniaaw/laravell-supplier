<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id_barang' => '245',
                'nama_barang' => 'Celana panjang',
                'spesifikasi' => 'Bahan nyaman dipakai, berkualitas tinggi',
                'lokasi' => 'Jl Durian beranak',
                'kondisi' => 'Baik',
                'jumlah_barang' => '180',
                'sumber_dana' => 'Pembeli',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '200',
                'nama_barang' => 'Kaos kaki',
                'spesifikasi' => 'Berbagai ukuran, bahan yang lembut, warna bervariasi',
                'lokasi' => 'Rusun siti',
                'kondisi' => 'Baik',
                'jumlah_barang' => '160',
                'sumber_dana' => 'pembeli',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
