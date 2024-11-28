<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pinjam_barang')->insert([
            [
                'id_pinjam' => '511',
                'peminjam' => 'Angel',
                'tgl_pinjam' => '30',
                'id_barang' => '223',
                'nama_barang' => 'Hoodie',
                'jml_barang' => '90',
                'tgl_kembali' => '15',
                'kondisi' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pinjam' => '699',
                'peminjam' => 'Gaby',
                'tgl_pinjam' => '22',
                'id_barang' => '223',
                'nama_barang' => 'Lipstik',
                'jml_barang' => '188',
                'tgl_kembali' => '4',
                'kondisi' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
