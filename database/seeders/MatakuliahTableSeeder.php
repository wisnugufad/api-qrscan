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
                'prodi_id'=>5,
                'name'=>'Pemograman Berbasis Web',
            ),
        );

        foreach ($matakuliah as $item)
        {
            Matakuliah::create([
                'prodi_id' => $item['prodi_id'],
                'name' => $item['name']
            ]);
        }
    }
}
