<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = array(
            array(
                'kode_jurusan'=>'111',
                'nama_jurusan'=>'Teknik Electro',
                'kode_nama'=>'EL'
            ),
            array(
                'kode_jurusan'=>'112',
                'nama_jurusan'=>'Teknik Mesin & Otomotif',
                'kode_nama'=>'M'
            ),
            array(
                'kode_jurusan'=>'113',
                'nama_jurusan'=>'Teknik Industri',
                'kode_nama'=>'TI'
            ),
            array(
                'kode_jurusan'=>'114',
                'nama_jurusan'=>'Teknik Kimia',
                'kode_nama'=>'TK'
            ),
            array(
                'kode_jurusan'=>'115',
                'nama_jurusan'=>'Informatika',
                'kode_nama'=>'IF',
                'kaprodi'=>5
            ),
            array(
                'kode_jurusan'=>'121',
                'nama_jurusan'=>'Teknik Sipil',
                'kode_nama'=>'SP'
            ),
            array(
                'kode_jurusan'=>'122',
                'nama_jurusan'=>'Teknik Arsitektur',
                'kode_nama'=>'ARS'
            ),
            array(
                'kode_jurusan'=>'123',
                'nama_jurusan'=>'Teknik Perancangan Wilayah Kota',
                'kode_nama'=>'PWK'
            ),
            array(
                'kode_jurusan'=>'131',
                'nama_jurusan'=>'Teknik Industri Pertanian',
                'kode_nama'=>'TIP'
            ),
            array(
                'kode_jurusan'=>'141',
                'nama_jurusan'=>'Teknik Management',
                'kode_nama'=>'MGN'
            ),
        );

        foreach ($prodi as $item)
        {
            Prodi::create([
                'kode_prodi' => $item['kode_jurusan'],
                'nama_prodi' => $item['nama_jurusan'],
                'kode_nama'=> $item['kode_nama']
            ]);
        }
    }
}
