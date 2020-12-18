<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = array(
            array(
            'user_id' => '2',
            'nrp' => '1151400001',
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'prodi_id' => '5',
            'telp' => '198189198',
            'alamat' => 'jauh'
            ),
            array(
            'user_id' => '4',
            'nrp' => '1151400002',
            'name' => 'testmhs',
            'email' => 'test@gmail.com',
            'prodi_id' => '5',
            'telp' => '1981891928',
            'alamat' => 'jauhg'
            ),
        );

        foreach ($mahasiswa as $item)
        {
            Mahasiswa::create([
                'user_id' => $item['user_id'],
                'nrp' => $item['nrp'],
                'name' => $item['name'],
                'email' => $item['email'],
                'prodi_id' => $item['prodi_id'],
                'telp' => $item['telp'],
                'alamat' => $item['alamat'],
            ]);
        }
    }
}