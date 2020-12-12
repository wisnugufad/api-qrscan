<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = array(
            'admin',
            'dosen',
            'mahasiswa'
        );

        foreach ($role as $item)
        {
            Role::create([
                'name' => $item,
            ]);
        }
    }
}
