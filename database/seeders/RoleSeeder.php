<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => '1',
            'nama_role' => 'Admin'
        ]);
        Role::create([
            'id' => '2',
            'nama_role' => 'Alumni'
        ]);
    }
}
