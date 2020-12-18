<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// models
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            array(
            'nrp' => '1151400074',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'role_id' => 1,
            ),
            array(
            'nrp' => '1151400001',
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mahasiswa'),
            'role_id' => 3,
            ),
            array(
            'nrp' => '0000000002',
            'name' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dosen'),
            'role_id' => 2,
            ),
             array(
            'nrp' => '1151400002',
            'name' => 'testmhs',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('testmhs'),
            'role_id' => 3,
            ),
            array(
            'nrp' => '1151400999',
            'name' => 'dummy',
            'email' => 'dummy@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummy'),
            'role_id' => 2,
            ),
        );
        
        foreach ($user as $item)
        {
            User::create([
                'nrp' => $item['nrp'],
                'name' => $item['name'],
                'email' => $item['email'],
                'email_verified_at' => $item['email_verified_at'],
                'password' => $item['password'],
                'role_id' => $item['role_id'],
            ]);
        }
    }
}
