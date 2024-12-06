<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            [
                'nama_role' => 'Super Admin',
                'kode_role' => 'SAD'
            ],
            [
                'nama_role' => 'Admin',
                'kode_role' => 'ADM'
            ],
            [
                'nama_role' => 'Customer',
                'kode_role' => 'CST'
            ]
        ];

        foreach ($roles as $role) {
            Role::create([
                'nama_role' => $role['nama_role'],
                'kode_role' => $role['kode_role']
            ]);
        }
    }
}
