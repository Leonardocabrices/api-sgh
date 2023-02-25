<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrador',
            'last_name' => 'administrador',
            'password' => bcrypt('Temp*123'),
            'email' => 'administrador@test.com',
            'email_verified_at' => new DateTime(),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Analista',
            'last_name' => 'Analista',
            'password' => bcrypt('Temp*123'),
            'email' => 'analista@test.com',
            'email_verified_at' => new DateTime(),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'Analista2',
            'last_name' => 'Analista2',
            'password' => bcrypt('Temp*123'),
            'email' => 'analista2@test.com',
            'email_verified_at' => new DateTime(),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'Analista',
            'last_name' => 'Analista',
            'password' => bcrypt('Temp*123'),
            'email' => 'analista3@test.com',
            'email_verified_at' => new DateTime(),
            'role_id' => 2
        ]);
    }
}
