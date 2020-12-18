<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = array(
            array(
                'prodi_id'=>'5',
                'name'=>'Agama Islam IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Agama Islam IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Agama Katholik'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Agama Kristen Protestan'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Bahasa Indonesia'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Bahasa Inggris IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Bahasa Inggris IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Basis Data I IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Basis Data I IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Dasar Sistem Digital IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Dasar Sistem Digital IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Etika Profesi'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Grafik Komputer IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Grafik Komputer IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kalkulus I IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kalkulus I IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kalkulus I Mengulang'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Keamanan Informasi IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Keamanan Informasi IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kecakapan Antar Personal IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kecakapan Antar Personal IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Kerja Praktek'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Konsep Pemrograman IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Konsep Pemrograman IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Machine Learning IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Machine Learning IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Matematika Diskrit I IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Matematika Diskrit I IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemodelan dan Simulasi IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemodelan dan Simulasi IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemrog. Berorientasi Objek IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemrog. Berorientasi Objek IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemrograman Berbasis WEB IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pemrograman Berbasis WEB IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pendidikan Kewarganegaraan IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Pendidikan Kewarganegaraan IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Peng. Teknologi Informasi IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Peng. Teknologi Informasi IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Peranc dan Analisa Algoritma I IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Peranc dan Analisa Algoritma I IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Rekayasa Perangkat Lunak IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Rekayasa Perangkat Lunak IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Sistem Operasi IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Sistem Operasi IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Statistik I IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Statistik I IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Teknik Kompilasi'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Teknik Riset Operasional IF-A'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Teknik Riset Operasional IF-B'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Tugas Akhir'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Tugas Akhir I'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Jaringan Komputer Lanjut'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Mobile Computing'
            ),
            array(
                'prodi_id'=>'5',
                'name'=>'Aplikasi Berbasis Mobile'
            ),
            
        );
        foreach ($matakuliah as $item)
        {
            Matakuliah::create([
                'prodi_id' => $item['prodi_id'],
                'name' => $item['name'],
            ]);
        }
    }
}
