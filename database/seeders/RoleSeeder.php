<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Role1 = Role::create(['name' => "Admin"]);
        $Role2 = Role::create(['name' => "users"]);

        Permission::create(['name' => 'admin.indexAdmin']);
        Permission::create(['name' => 'admin.indexAdmin']);
        Permission::create(['name' => 'admin.indexAdmin']);
        Permission::create(['name' => 'admin.indexAdmin']);
    }
}
