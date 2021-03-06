<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Dokter',
            'email' => 'dokter@gmail.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('dokter');

        $user = User::create([
            'name' => 'pasien',
            'email' => 'pasien@gmail.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('pasien');
    }
}
